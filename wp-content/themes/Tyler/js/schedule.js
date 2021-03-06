/**
* stick date titles to top
* @param stickies
*/
function stickyTitles(stickies) {
    var self = this,
    isLoaded = false;

    this.load = function () {
        stickies.each(function () {
            var thisSticky = jQuery(this);
            if (!self.isLoaded) {
                thisSticky.wrap('<div class="followWrap" />');
                thisSticky.parent().height(thisSticky.outerHeight());
            }

            jQuery.data(thisSticky[0], 'pos', thisSticky.offset().top);
        });

        self.isLoaded = true;
    }

    this.scroll = function () {
        var offsetTop = (parseInt(jQuery(document.body).css('padding-top')) || 0) + 33, // 33px allocated by nav-tabs
        isFloating = false;

        stickies.each(function (i) {

            var thisSticky = jQuery(this),
            pos = thisSticky.hasClass('fixed')
            ? jQuery.data(thisSticky[0], 'pos')
            : thisSticky.offset().top;

            jQuery.data(thisSticky[0], 'pos', pos);
            pos -= offsetTop;

            if (pos <= jQuery(window).scrollTop()) {
                if (!thisSticky.hasClass('fixed')) {
                    thisSticky.prepend(jQuery('.schedule > .nav-tabs').clone(true));
                }
                thisSticky.addClass("fixed container");
            } else {
                if (thisSticky.hasClass('fixed')) {
                    thisSticky.find('.nav-tabs').remove();
                }
                thisSticky.removeClass("fixed container");
            }
        });

        if (isFloating) {
            jQuery('.schedule').addClass('floating');
        }
        else {
            jQuery('.schedule').removeClass('floating');
        }
    }
}

// expand menu on click
jQuery('.schedule > ul li a').click(function (event) {
    event.preventDefault();
    jQuery(this).toggleClass('expand');
});


function updateSchedule(timestamp, location, track) {

    jQuery.ajax({
        type: "POST",
        dataType: "json",
        url: ajaxurl,
        data: {
            'action': 'get_schedule',
            'data-timestamp': timestamp,
            'data-location': location,
            'data-track': track
        },
        success: function (data) {
            //$(".schedule ul li ul").hide();
            //for filter by days
            if (timestamp) {
                window.location.hash = "timestamp/" + timestamp;
                jQuery("#nadlan-schedule-title").text(jQuery(".schedule a[data-timestamp=" + timestamp + "]").text());
            }
            if (track) {
                window.location.hash = "track/" + track;
                jQuery("#nadlan-schedule-title").text(jQuery(".schedule a[data-track=" + track + "]").text());
            }
            console.log(timestamp + " " + location + " " + track);
            // alert(0);
            if (data.sessions && data.sessions.length > 0) {
                var cur_time = 0;
                var cur_date = 0;
                var html = '';

                jQuery.each(data.sessions, function (index, session) {
                   // console.log(session);
                    var concurrent = '';
                    var speakers = '';
                    var color = (session.color != '' ? ' style="color:' + session.color + '"' : '');

                    if (cur_date != session.date) {
                        html += '<div class="day-floating"><span>' + session.date + '</span></div>';
                        cur_date = session.date;
                    }

                    if (cur_time != session.time) {
                        cur_time = session.time
                    } else {
                        concurrent = ' concurrent';
                    }

                    if (session.speakers)
                        jQuery.each(session.speakers, function (index, speaker) {
                            var featured = speaker.featured ? ' featured' : '';
                            speakers += '<a href=" ' + speaker.url + '" class="speaker' + featured + '"> \
                                                        ' + speaker.post_image + ' \
                                                        <span class="name"><span class="text-fit">' + speaker.post_title + '</span></span> \
                                                    </a>';
                        });

                    html += '<div class="session' + concurrent + '"> \
                                            <span class="time">' + session.time + ' - ' + session.end_time + '</span> \
                                            <div class="session-inner"> \
                                                <span class="location">' + session.track + '</span><br/>\
                                                <a href="' + session.url + '" class="title"' + color + '><span>' + session.post_title + '</span></a> \
                                                <span class="location">' + session.location + '</span><br/> \
                                                <span class="host">' + session.host + '</span><br/> \
                                                <span class="host">' + session.opening + '</span> \
                                                <span class="speakers-thumbs"> \
                                                ' + speakers + ' \
                                                </span> \
                                                <a href="' + session.url + '" class="more"> \
                                                    ' + data.strings['more_info'] + ' <i class="icon-angle-right"></i> \
                                                </a> \
                                            </div> \
                                        </div>';
                });
                jQuery('.schedule .sessions.list').html(html);
            }

            var newStickies = new stickyTitles(jQuery(".day-floating"));
            newStickies.load();

            jQuery(window).on("resize", newStickies.load);
            jQuery(window).on("scroll", newStickies.scroll);

        }
    });
}

jQuery(document).ready(function () {

    var newStickies = new stickyTitles(jQuery(".day-floating"));
    newStickies.load();

    jQuery(window).on("resize", newStickies.load);
    jQuery(window).on("scroll", newStickies.scroll);

    //jQuery(document).on('click', '.schedule a[data-timestamp], .schedule a[data-location], .schedule a[data-track]', function (e) {
    //    e.preventDefault();
    //    updateSchedule(jQuery(this).attr('data-timestamp'), jQuery(this).attr('data-location'), jQuery(this).attr('data-track'));

    //    if ($('.schedule li').children('ul').hasClass('hover')) {
    //        $('.schedule li').children('ul').removeClass('hover');
    //    }
    //});

    $('body').on('click', '.schedule li', function (e) {
        e.stopPropagation();
        if ($('.schedule li').children('ul').hasClass('hover')) {
            $('.schedule li').children('ul').removeClass('hover');
        }
        $(this).children('ul').addClass("hover");
    });

    $('body').on('click', '.schedule li ul li a', function (e) {
        e.stopPropagation();
        e.preventDefault();
        updateSchedule(jQuery(this).attr('data-timestamp'), jQuery(this).attr('data-location'), jQuery(this).attr('data-track'));
        if ($('.schedule li').children('ul').hasClass('hover')) {
            $('.schedule li').children('ul').removeClass('hover');
        }
    });

    $('body').on('click', function (e) {
        if ($('.schedule li').children('ul').hasClass('hover')) {
            $('.schedule li').children('ul').removeClass('hover');
        }
    })
    //$('.schedule li').hover(
    //	function () {
    //	    $(this).children('ul').addClass("hover");
    //	}, function () {
    //	    $(this).children('ul').removeClass("hover");
    //	}
    //);



    //for filter by days
    if (window.location.hash && window.location.hash != 0) {
        var hash = window.location.hash.split("/");
        if (hash[0] == "#timestamp") {
            updateSchedule(hash[1], null, null);
        }
        else if (hash[0] == "#track") {
            updateSchedule(null, null, hash[1]);
        }
        else {
            updateSchedule(null, null, null);
        }

    }
    else {
        updateSchedule(null, null, null);
    }
});
