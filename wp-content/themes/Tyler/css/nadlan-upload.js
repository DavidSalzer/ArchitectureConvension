var uploadImag1 = "";

$(document).ready(function () {
    $("#send-button").on("click", sendImage);
    $(".upload-imag-icon").on("change", "input", uploaduserImage);
});



function sendImage() {
    //client & first participant
    var Phone_Mobile = isNumeric($("#Phone_Mobile1"));
    var Email = isValidEmail($("#Email1"));

    var id = isNumeric($("#id1"));

    //check if client details is valid
    if (Phone_Mobile && Email && id) {
        //create bamby object
        dataObj = [Phone_Mobile, Email, id, uploadImag1];
        showLoader();
        //if valid save post in db
        $.post('wp-admin/admin-ajax.php', {
            //data: encodeURI(JSON.stringify(dataObj)),
            data: (JSON.stringify(dataObj)),
            action: 'addImageToUser'
        },
            function (data) {
                hideLoader();
                if (data) {
                    if (data[data.length - 1] == 0) {
                        data = data.slice(0, -1);
                    }
                    if (data == true) {
                        alert("תמונתך הועלתה בהצלחה")
                    }
                    else {
                        alert("הפעולה לא הצליחה. אחד מהנתונים שהזנת לא תקין. אנא נסה שנית")
                    }
                    console.log(data);
                }
            });
    }
    else {
        alert("אחד מהפרטים שהזנת לא תקינים")
    }

    return false;



}

//*************************validate input************************

function isValid(input) {
    if (input.val() != "") {
        if (input.attr("placeholder") != input.val()) {
            if (input.hasClass("alert")) {
                input.removeClass("alert");
            }
            return input.val();
        }
        else {
            input.addClass("alert");
            return null;
        }
    }
    else {
        input.addClass("alert");
        return null;
    }
}

function isValidEmail(input) {
    var email = input.val();
    if (email != "") {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(email)) {
            input.addClass("alert");
            return null;
        }
        else {
            input.removeClass("alert");
            return input.val();
        }
    }
    input.addClass("alert");
    return null;
}

function isNumeric(input) {
    var obj = input.val();
    if (obj != "") {
        var result = !jQuery.isArray(obj) && (obj - parseFloat(obj) + 1) >= 0;
        if (result) {
            input.removeClass("alert");
            return obj;
        }
    }
    input.addClass("alert");
    return null;
}

function showLoader() {
    $("#nadlan-mask").show();
}

function hideLoader() {
    $("#nadlan-mask").hide();
}
//*************************upload image************************

function uploaduserImage() {
    $this = $(this);
    var i = $this.attr("id").slice(-1);

    $this.upload(domain + 'wp-content/themes/Tyler/uploadImage.php', function (url) {
        //if this image was upload
        if (url.indexOf("upload") > -1) {
            if (i == "1") {
                uploadImag1 = domain + 'wp-content/themes/Tyler/' + url;
            }

            console.log(url);

            $this.parents(".upload-imag-icon").css("background-image", "url(" + domain + 'wp-content/themes/Tyler/' + url + ")");
        }
    });
}
