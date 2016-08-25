var priceArr, startDay, endDay, roomType, bedType, daysCount, sum;
var dataObj = {
    //client: [Fname1, Lname1, Phone_Mobile1, Email1, title1,id1,companyName1,companyJob1,uploadImag1]
    //arrRooms:[HouseType,BedType,RoomType],
    //arrPayment:[nvoiceN1,RegistrationNo1,Charge1,Reference,PriceIncVat,Price],
    Participant: [
    //    [Fname1, Lname1, Phone_Mobile1, Email1, title1,id1,companyName1,companyJob1,uploadImag1];
    //    [Fname1, Lname1, Phone_Mobile1, Email1, title1,id1,companyName1,companyJob1,uploadImag1];
    ]
};


$(document).ready(function () {
    //without staying to night | single(1 night,2 nights,3 nights) | double (1 night,2 nights,3 nights)| triple (1 night,2 nights,3 nights)
    priceArr = [[3540], [4720, 6490, 8850], [6608, 8496, 10620], [7080, 9912, 12390]];

    //init general parameters
    startDay = $("#register-start-day");
    endDay = $("#register-end-day");
    roomType = $("#register-room-type");
    bedType = $("#register-bed-type");
    paymentType = $("#split-payment");
    sum = $("#register-sum");

    uploadImag1 = "";
    uploadImag2 = "";
    uploadImag3 = "";
    daysNum = 0;

    //attach events
    window.onhashchange = changeHash;

    $("#nadlan-register-form").on("change", "#register-room-type", updateRoom);
    $("#nadlan-register-form").on("change", "#split-payment", updatepaymentDetails);

    $(".upload-imag-icon").on("change", "input", uploaduserImage);


    $("#next-to-step-2").on("click", goToStep2);
    $("#next-to-step-3").on("click", goToStep3);

    $("#siugnUp").on("click", saveUser);
    $("#siugnUpWithPay").on("click", saveUser);


    init();

});

function init() {
    if (window.location.hash == "#step-1") {
        changeHash();
    }
    else {
        registerNavigation("#step-1");
    }
    //sort select elements
    sortSelect(document.getElementById('registrationAddressCity1'));
    //sortSelect(document.getElementById('registrationAddressCity2'));
    //sortSelect(document.getElementById('registrationAddressCity3'));

}

//sort selects element
function sortSelect(selElem) {
    var tmpAry = new Array();
    for (var i = 0; i < selElem.options.length; i++) {
        tmpAry[i] = new Array();
        tmpAry[i][0] = selElem.options[i].text;
        tmpAry[i][1] = selElem.options[i].value;
    }
    tmpAry.sort();
    while (selElem.options.length > 0) {
        selElem.options[0] = null;
    }
    for (var i = 0; i < tmpAry.length; i++) {
        var op = new Option(tmpAry[i][0], tmpAry[i][1]);
        selElem.options[i] = op;
    }
    return;
}

//*************************navigation and validation************************
function registerNavigation(step) {
    window.location.hash = step;

}

function changeHash() {
    $(".register-step").hide();
    $(window.location.hash).show();
}

function goToStep1() {
    registerNavigation("#step-1");
}


function goToStep2() {
    //validate : if there are enter date and exit date
    if ((isValid(startDay)) && (isValid(endDay))) {
        daysNum = endDay.val() - startDay.val();
        //check if user enter valid dates
        if (checkIfDateIsValid()) {
            updateRoom(); //save room array
            registerNavigation("#step-2");
        }
    }
    return false;
}

function goToStep3() {
    var valid = true;

    //client & first participant
    var Fname1 = isValid($("#Fname1"));
    var Lname1 = isValid($("#Lname1"));
    var Phone_Mobile1 = isNumeric($("#Phone_Mobile1"));
    var Email1 = isValidEmail($("#Email1"));
    var title1 = isValid($("#title1"));
    var id1 = isNumeric($("#id1"));
    var companyName1 = isValid($("#companyName1"));
    var companyJob1 = isValid($("#companyJob1"));

    //check if client details is valid
    if (Fname1 && Lname1 && Phone_Mobile1 && Email1 && title1 && id1 && companyName1 && companyJob1) {
        //create bamby object
        dataObj.client = [Fname1, Lname1, Phone_Mobile1, Email1, title1, id1, companyName1, companyJob1, uploadImag1];
    }
    else {
        valid = false;
    }

    //check if there is another participent
    roomTypeVal = roomType.val();
    if (roomTypeVal >= "2") {
        var Fname2 = isValid($("#Fname2"));
        var Lname2 = isValid($("#Lname2"));
        var address2 = isNumeric($("#address2"));
        var Email2 = isValidEmail($("#Email2"));
        var title2 = isValid($("#title2"));
        var id2 = isNumeric($("#id2"));
        var companyName2 = isValid($("#companyName2"));
        var companyJob2 = isValid($("#companyJob2"));

        if (Fname2 && Lname2 && address2 && Email2 && title2 && id2 && companyName2 && companyJob2) {
            //create bamby object           
            dataObj.Participant[0] = [Fname2, Lname2, address2, Email2, title2, id2, companyName2, companyJob2, uploadImag2];
        }
        else {
            valid = false;
        }
    }

    if (roomTypeVal >= "3") {
        var Fname3 = isValid($("#Fname3"));
        var Lname3 = isValid($("#Lname3"));
        var address3 = isNumeric($("#address3"));
        var Email3 = isValidEmail($("#Email3"));
        var title3 = isValid($("#title3"));
        var id3 = isNumeric($("#id3"));
        var companyName3 = isValid($("#companyName3"));
        var companyJob3 = isValid($("#companyJob3"));

        if (Fname3 && Lname3 && address3 && Email3 && title3 && id3 && companyName3 && companyJob3) {
            //create bamby object
            dataObj.Participant[1] = [Fname3, Lname3, address3, Email3, title3, id3, companyName3, companyJob3, uploadImag3];
        }
        else {
            valid = false;
        }
    }

    if (valid) {
        updatePrice();
        registerNavigation("#step-3");
    }
    return false;

}


//*************************update details************************
//update how many participate 
function updateRoom() {
    dataObj.arrRooms = [];
    bedTypeVal = bedType.val();
    roomTypeVal = roomType.val();

    for (var i = 0; i < daysNum; i++) {
        dataObj.arrRooms[i] = [];
        //HouseType
        //if without night
        if (roomTypeVal == "0") {
            dataObj.arrRooms[i][0] = "Z" + (parseInt(startDay.val(), 10) + i);
        }
        else {
            dataObj.arrRooms[i][0] = "A" + (parseInt(startDay.val(), 10) + i);
        }
        //BedType
        dataObj.arrRooms[i][1] = bedTypeVal;
        //RoomType
        dataObj.arrRooms[i][2] = roomTypeVal;
    }


    //show and hide details
    if (roomTypeVal == "2") {
        $("#details2").show();
        $("#details3").hide();
        $("#split-payment").show();
        $("#split-payment-label").show();
        $("#split-payment-3").hide();
    }
    else if (roomTypeVal == "3") {
        $("#details2").show();
        $("#details3").show();
        $("#split-payment").show();
        $("#split-payment-label").show();
        //$("#split-payment-3").show();
    }
    else {// 0/1
        $("#details2").hide();
        $("#details3").hide();
        $("#split-payment-label").hide();
        $("#split-payment").hide();
    }
}

function updatepaymentDetails() {
    var paymentTypeVal = paymentType.val();
    //$("#siugnUpWithPay").css("visibility", "hidden");
    //$("#discount-text").css("visibility", "hidden");
    $("#amount1").show();
    //show and hide details
    if (paymentTypeVal == "2") {
        $("#payment2").show();
        $("#payment3").hide();
        $("#amount1,#amount2").val(sum.val() / 2);
    }
    else if (paymentTypeVal == "3") {
        $("#payment2").show();
        $("#payment3").show();
        $("#amount1,#amount2,#amount3").val(sum.val() / 3);
    }
    else {// 1
        $("#payment2").hide();
        $("#payment3").hide();
        $("#amount1").hide();
        //$("#siugnUpWithPay").css("visibility", "visible");
        //$("#discount-text").css("visibility", "visible");
    }

}

function updatePrice() {
    if ((endDay.val() != "") && (startDay.val() != "")) {
        daysNum = endDay.val() - startDay.val();
    } else {
        daysNum = null;
    }
    if (checkIfDateIsValid()) {
        roomTypeVal = roomType.val();

        //if without night -> no check how mach days
        if (roomTypeVal == "0") {
            sum.val(priceArr[roomTypeVal]);
        }
        else {
            sum.val(priceArr[roomTypeVal][daysNum - 1]);
        }

        return;
    }
    else {
        goToStep1();
        sum.val("0");
        return;
    }
}


//*************************save and pay************************
function saveUser() {
    // var toPay = false;
    dataObj.toPAy = false;
    if ($(this).attr("id") == "siugnUpWithPay") {
        dataObj.toPAy = true;
    }
    else {
        dataObj.toPAy = false;
    }
    if (sum.val() > 0) {
        //validate 
        var invoiceN1 = isValid($("#invoiceN1"));
        var registrationNo = isNumeric($("#registrationNo1"));
        var registrationAddressCity = isValid($("#registrationAddressCity1"));
        var registrationAddressStreet = isValid($("#registrationAddressStreet1"));
        var registrationAddressZip = isNumeric($("#registrationAddressZip1"));
        var registrationPhone = isNumeric($("#registrationPhone1"));

        //To do: add paypal and referance
        dataObj.arrPayment = [];
        dataObj.arrPayment[0] = [invoiceN1, registrationNo, charge1, registrationPhone, registrationAddressCity, registrationAddressStreet, registrationAddressZip];

        var paymentTypeVal = paymentType.val();
        if (paymentTypeVal == "2") {
            var invoiceN2 = isValid($("#invoiceN2"));
            var registrationNo2 = isNumeric($("#registrationNo2"));            
            var registrationAddress2 = isNumeric($("#registrationPhone"));

            //To do: add paypal and referance

            dataObj.arrPayment[1] = [invoiceN1, registrationNo, "", sum.val(), sum.val() / 1.18, registrationAddress];
        }

        if (paymentTypeVal == "3") {
            var invoiceN3 = isValid($("#invoiceN1"));
            var registrationNo3 = isNumeric($("#registrationNo"));            
            var registrationAddress3 = isNumeric($("#registrationPhone"));

            //To do: add paypal and referance

            dataObj.arrPayment[2] = [invoiceN1, registrationNo, "", sum.val(), sum.val() / 1.18, registrationPhone, registrationAddressCity, registrationAddressStreet, registrationAddressZip];
        }

        var terms = $("#terms-of-use").is(":checked");
        // var content=$("#content").is(":checked");
        $(".check-alert").removeClass("check-alert");

        if (terms) {
            //if valid save post in db
            $.post('wp-admin/admin-ajax.php', {
                data: encodeURI(JSON.stringify(dataObj)),
                action: 'addSystemUser'
            },
            function (data) {
                if ((data) && (data != "")) {
                    if (data.indexOf("client") > -1) {
                        goToStep2();
                        alert(" בדוק האם הזנת את כל הנתונים שלך כראוי ונסה שנית");
                    }
                    else if (data.indexOf("contract") > -1) {
                        goToStep2();
                        alert("בדוק האם הזנת את כל נתוני המבקרים הנוספים ופרטי התשלום כראוי ונסה שנית");

                    }
                    else {
                        if (dataObj.toPAy) {
                            $.post('wp-admin/admin-ajax.php', {
                                price: sum.val(),
                                contractId: data,
                                action: 'payInPelecard'
                            },
                        function (data) {
                            if ((data) && (data != "")) {
                                $("body").append(data);
                                $("#pelecard_payment_form").hide();
                                $("#submit_pelecard_payment_form").click();
                            }

                        });
                            alert("מספר החוזה שלך הוא: " + data);
                        }
                        else {
                            window.location = domain + "?page_id=" + signupNum;
                        }
                    }
                    console.log(data);
                }

            });
        }
        else {
            $("#terms-of-use").addClass("check-alert");
        }
    }
    else {
        alert("לא הזנת תאריכים")
        goToStep1();

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

//check if dates is valid
function checkIfDateIsValid() {
    if ((daysNum != null) && (daysNum >= 0)) {
        $("#register-start-day,#register-end-day").removeClass("alert");
        //if one day -> check user choose without night
        if ((daysNum == 0) && (roomType.val() != 0)) {
            roomType.addClass("alert");
            alert("בחרת להשתתף ביום אחד, אך לא סימנת שזה ללא שינה");
            return false;
        }
        //if one night in second day
        if ((endDay.val() == "2") && (startDay.val() == "3")) {
            alert("אי אפשר להגיע ללילה אחד בתאריכים אלו");
            return false;
        }
        return true;
    }

    $("#register-start-day,#register-end-day").addClass("alert");
    alert("לא הזנת את כל התאריכים");
    return false;
}

//*************************upload image************************

function uploaduserImage() {
    $this = $(this);
    var i = $this.attr("id").slice(-1);
    //uploadImage($this, function (url) {
    //    $this.parents(".upload-imag-icon").css("background-image", "url(" + url + ")");
    //});

    $this.upload(domain + 'wp-content/themes/Tyler/uploadImage.php', function (url) {
        //if this image was upload
        if (url.indexOf("upload") > -1) {
            if (i == "1") {
                uploadImag1 = domain + 'wp-content/themes/Tyler/' + url;
            }
            if (i == "2") {
                uploadImag2 = domain + 'wp-content/themes/Tyler/' + url;
            }
            if (i == "3") {
                uploadImag3 = domain + 'wp-content/themes/Tyler/' + url;
            }
            console.log(url);

            $this.parents(".upload-imag-icon").css("background-image", "url(" + domain + 'wp-content/themes/Tyler/' + url + ")");
        }
    });
}
