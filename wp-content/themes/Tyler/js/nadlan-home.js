jQuery(document).ready(function () {
    //get month from string and transition to english
    var date = jQuery("#event-calendar .title").text().split(" ");
    var month = date[1];

    switch (month) {
        case "ינואר":
            {
                month = "January";

                break;
            }
        case "פברואר":
            {
                month = "February";

                break;
            }
        case "מרץ":
            {
                month = "March";

                break;
            }
        case "אפריל":
            {
                month = "April";

                break;
            }
        case "מאי":
            {
                month = "May";

                break;
            }
        case "יוני":
            {
                month = "June";

                break;
            }
        case "יולי":
            {
                month = "July";

                break;
            }
        case "אוגוסט":
            {
                month = "August";
                break;
            }
        case "ספטמבר":
            {
                month = "September";

                break;
            }
        case "אוקטובר":
            {
                month = "October";

                break;
            }
        case "נובמבר":
            {
                month = "November";

                break;
            }
        case "דצמבר":
            {
                month = "December";

                break;
            }

    }

    date = date[0] + " " + month + " " + date[2];
    $("#send-to-calendar").icalendar({ start: new Date("1 december 2015"),end: new Date("3 december 2015"), target: '_blank', title: 'עיר הנדל"ן של ישראל', location: 'אילת',compact:true,iconSize:25,sites: ['google','outlook'],icons:"wp-content/themes/Tyler/images/outlook_calendar.png"});
     
});