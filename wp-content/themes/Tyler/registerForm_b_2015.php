<?php
    /*
          Template Name: Embedded Shiri-b Register Page 2015
      */
    
    
?>
<?php
    
    get_header('noMenu');
    wp_enqueue_script('nadlan-fileUpload', get_template_directory_uri() . '/js/nadlan-fileUpload.js', array('jquery'), false, true);   
    wp_enqueue_script('nadlan-register', get_template_directory_uri() . '/js/nadlan-register-a-15.js', array('jquery'), false, true);   
    wp_enqueue_script('tooltip', get_template_directory_uri() . '/js/tooltip.js', array('jquery'), false, true);   
    
    $signup="667";
    $signupWithPayment="663";
    $signupPaymentError="665";
    
    //check if qa
    if(strpos(home_url( '/' ),"cambium")>-1){
        $signup="639";
        $signupWithPayment="641";
        $signupPaymentError="643";
    }

//      1.      Facebook    MediaID=36433
//      2.      Google        MediaID=33703
//      3.      Gmail          MediaID=47906 
//      4.      Linkedin      MediaID=47905
//      5.      Calcalist      MediaID=32276
?>
<script>
    var domain = "<?php echo home_url( '/' ); ?>";
    var signupNum= "<?php echo $signup; ?>";
</script>
<?php while (have_posts()) : the_post(); ?>
<?php $categories = get_the_category(); ?>
<div class="heading">
    <div class="container">
        <h1><?php the_title() ?></h1>
    </div>
</div>
<div class="container" style="position: relative;">
    <!--<div>לעזרה בהרשמה 074-7290200</div><br>-->
    <?php
        
        //echo do_shortcode('[pelecard_pay_button value="2" item_name=" כניסה לועידה - עיר הנדלן " button_class="my-class" button_text="Pay Now"]'); 
    ?>
    <div id="contact-phone-btn">לעזרה בהרשמה<br>074-7290200</div>
    <div id="nadlan-mask"><div id="nadlan-loader"></div></div>
    <form id="nadlan-register-form">
        <div class="register-step" id="step-1">
            <?php the_content(); ?>
            <div class="row register-hotel">
                <div class="col-sm-11">
                    <label>מלון</label><br>
                    <select id="register-hotel">
						<option value="">בחר מלון</option>
                        <option value="1" text="רויאל ביץ">רויאל ביץ'</option>
                        <option value="2" text="רויאל גארדן">רויאל גארדן</option>
                        <option value="3" text="ספורט">ספורט</option>
                    </select>
                </div>
            </div>
            <div class="row register-day">
                <div class="col-sm-11">
                    <label>הרשמה לכנס ללא לינה</label><br>
                    <select id="register-day">
                        <option value="">בחר תאריך</option>
                        <option value="1" text="01">כניסה יומית 01/12/15</option>
                        <option value="2" text="02">כניסה יומית 02/12/15</option>
                        <option value="3" text="03">כניסה יומית 03/12/15</option>
                        <option value="4" text="כל הימים">כניסה יומית לכל הימים</option>
                    </select>
                </div>
            </div>
            <div class="row register-room-type">
                <div class="col-sm-11">
                    <label>סוג חדר</label>
                    <span class="remark">  (הודעה: לתשומת ליבך חדרי טריפל מכילים מטה זוגית אחת וספה נפתחת)</span><br>
                    <select id="register-room-type">
					<option value="">בחר סוג חדר</option>
                        <option value="1" text="יחיד">יחיד</option>
                        <option value="2" text="זוגי">זוגי</option>
                        <option value="3" text="טריפל">טריפל </option>
                        <!--<option value="0">מבקר יום ללא לינה</option>-->
                    </select>
                </div>
            </div>
            <div class="row register-bed-type">
                <div class="col-sm-11">
                    <label>סוג מיטה</label>
                    <span class="remark">  (* איננו מתחייבים כי נוכל לספק את בקשתך אך נשתדל לפעול עלפיה)</span><br>
                    <select id="register-bed-type">
                        <option value="2" text="זוגית">זוגית</option>
                        <option value="1" text="נפרדות">נפרדות</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-11">
                    <button id="next-to-step-2" class="btn btn-secondary">הבא</button>
                </div>
            </div>
        </div>

        <div class="register-step" id="step-2">
            <label>פרטי המבקרים</label><br>
            <div id="details1">
                <label>מבקר ראשון:</label><br>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="Fname1" type="text" value="" placeholder="שם פרטי">
                    </div>
                    <div class="col-sm-6">
                        <input id="Lname1" type="text" value="" placeholder="שם משפחה">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <select id="title1">
                            <option value="">תואר</option>
                            <option value="18554">אדריכל</option>
                            <option value="18555">מעצב פנים</option>
                            <option value="18556">מנהל מכירות</option>
                            <option value="18557">יועץ</option>
                            <option value="18558">מהנדס</option>
                            <option value="18559">מנהל אזור</option>
                            <option value="18560">מנהל לקוחות</option>
                            <option value="18561">מנהל פיתוח עסקי</option>
                            <option value="18562">מנהל פרויקטים</option>
                            <option value="18563">מנהל/ת תיקי לקוחות</option>
                            <option value="18564">מנהל/ת כספים</option>
                            <option value="18565">רו"ח</option>
                            <option value="18566">שמאי</option>
                            <option value="18567">בנקאי</option>
                            <option value="18568">משרד פירסום</option>
                            <option value="18569">קבלן ביצוע</option>
                            <option value="18570">תעשיין</option>
                            <option value="18571">יזם</option>
                            <option value="18575">עו"ד</option>
                            <option value="18573">דר'</option>
                            <option value="18574">פרופ'</option>
                            <option value="18572">אחר</option>
                        </select>



                    </div>
                    <div class="col-sm-6">
                        <input id="id1" type="text" value="" placeholder=" ת.ז">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="companyName1" type="text" value="" placeholder="שם חברה/עסק מטעמו הגעת">
                    </div>
                    <div class="col-sm-6">
                        <select id="companyJob1">
                            <option value="">תפקיד</option>
                            <option value="18543">יו"ר</option>
                            <option value="18544">מנכ"ל</option>
                            <option value="18545">סמנכ"ל מכירות</option>
                            <option value="18546">מנהל מכירות</option>
                            <option value="18547">מנהל/ת שיווק</option>
                            <option value="18548">סמנכ"ל שיווק</option>
                            <option value="18549">מנהל/ת רכש</option>
                            <option value="18550">משנה למנכ"ל</option>
                            <option value="18551">מנכ"ל משותף</option>
                            <option value="18552">מנהל כספים</option>
                            <option value="18855">בעלים</option> 
<option value="24163">מנהל חטיבה</option>
<option value="24162">מנהל ביצוע</option>
<option value="24161">מנהל</option>
<option value="19173">סמנכל</option>
<option value="24159">מתווך</option>
<option value="24158">מוניציפלי</option>
<option value="24157">סמנכל כספים</option>
<option value="24156">זכיין</option>							
                            <option value="18553">אחר</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="Phone_Mobile1" type="text" value="" placeholder="טל' נייד לעדכונים במהלך הוועידה:">
                    </div>
                    <div class="col-sm-6">
                        <input id="Email1" type="text" value="" placeholder="אימייל">
                    </div>
                </div>
                <div class="row">
                    <div class="upload-imag-icon">
                        <input id="upload-imag1" name="upload-imag1" type="file" value="">
                    </div>
                </div>
            </div>
            <div id="details2">
                <label>מבקר שני:</label><br>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="Fname2" type="text" value="" placeholder="שם פרטי">
                    </div>
                    <div class="col-sm-6">
                        <input id="Lname2" type="text" value="" placeholder="שם משפחה">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <select id="title2">
                             <option value="">תואר</option>
                            <option value="18554">אדריכל</option>
                            <option value="18555">מעצב פנים</option>
                            <option value="18556">מנהל מכירות</option>
                            <option value="18557">יועץ</option>
                            <option value="18558">מהנדס</option>
                            <option value="18559">מנהל אזור</option>
                            <option value="18560">מנהל לקוחות</option>
                            <option value="18561">מנהל פיתוח עסקי</option>
                            <option value="18562">מנהל פרויקטים</option>
                            <option value="18563">מנהל/ת תיקי לקוחות</option>
                            <option value="18564">מנהל/ת כספים</option>
                            <option value="18565">רו"ח</option>
                            <option value="18566">שמאי</option>
                            <option value="18567">בנקאי</option>
                            <option value="18568">משרד פירסום</option>
                            <option value="18569">קבלן ביצוע</option>
                            <option value="18570">תעשיין</option>
                            <option value="18571">יזם</option>
                            <option value="18575">עו"ד</option>
                            <option value="18573">דר'</option>
                            <option value="18574">פרופ'</option>
                            <option value="18572">אחר</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input id="id2" type="text" value="" placeholder=" ת.ז">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="companyName2" type="text" value="" placeholder="שם חברה/עסק מטעמו הגעת">
                    </div>
                    <div class="col-sm-6">
                        <select id="companyJob2">
                           <option value="">תפקיד</option>
                            <option value="18543">יו"ר</option>
                            <option value="18544">מנכ"ל</option>
                            <option value="18545">סמנכ"ל מכירות</option>
                            <option value="18546">מנהל מכירות</option>
                            <option value="18547">מנהל/ת שיווק</option>
                            <option value="18548">סמנכ"ל שיווק</option>
                            <option value="18549">מנהל/ת רכש</option>
                            <option value="18550">משנה למנכ"ל</option>
                            <option value="18551">מנכ"ל משותף</option>
                            <option value="18552">מנהל כספים</option>
                            <option value="18855">בעלים</option> 
							<option value="24163">מנהל חטיבה</option>
<option value="24162">מנהל ביצוע</option>
<option value="24161">מנהל</option>
<option value="19173">סמנכל</option>
<option value="24159">מתווך</option>
<option value="24158">מוניציפלי</option>
<option value="24157">סמנכל כספים</option>
<option value="24156">זכיין</option>
                            <option value="18553">אחר</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="Phone_Mobile2" type="text" value="" placeholder="טל' נייד לעדכונים במהלך הוועידה:">
                    </div>
                    <div class="col-sm-6">
                        <input id="Email2" type="text" value="" placeholder="אימייל">
                    </div>
                </div>
                <div class="row">
                    <div class="upload-imag-icon">
                        <input id="upload-imag2" type="file" value="">
                    </div>
                </div>
            </div>
            <div id="details3">
                <label>מבקר שלישי:</label><br>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="Fname3" type="text" value="" placeholder="שם פרטי">
                    </div>
                    <div class="col-sm-6">
                        <input id="Lname3" type="text" value="" placeholder="שם משפחה">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <select id="title3">
                             <option value="">תואר</option>
                            <option value="18554">אדריכל</option>
                            <option value="18555">מעצב פנים</option>
                            <option value="18556">מנהל מכירות</option>
                            <option value="18557">יועץ</option>
                            <option value="18558">מהנדס</option>
                            <option value="18559">מנהל אזור</option>
                            <option value="18560">מנהל לקוחות</option>
                            <option value="18561">מנהל פיתוח עסקי</option>
                            <option value="18562">מנהל פרויקטים</option>
                            <option value="18563">מנהל/ת תיקי לקוחות</option>
                            <option value="18564">מנהל/ת כספים</option>
                            <option value="18565">רו"ח</option>
                            <option value="18566">שמאי</option>
                            <option value="18567">בנקאי</option>
                            <option value="18568">משרד פירסום</option>
                            <option value="18569">קבלן ביצוע</option>
                            <option value="18570">תעשיין</option>
                            <option value="18571">יזם</option>
                            <option value="18575">עו"ד</option>
                            <option value="18573">דר'</option>
                            <option value="18574">פרופ'</option>
                            <option value="18572">אחר</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input id="id3" type="text" value="" placeholder=" ת.ז">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="companyName3" type="text" value="" placeholder="שם חברה/עסק מטעמו הגעת">
                    </div>
                    <div class="col-sm-6">
                        <select id="companyJob3">
                           <option value="">תפקיד</option>
                            <option value="18543">יו"ר</option>
                            <option value="18544">מנכ"ל</option>
                            <option value="18545">סמנכ"ל מכירות</option>
                            <option value="18546">מנהל מכירות</option>
                            <option value="18547">מנהל/ת שיווק</option>
                            <option value="18548">סמנכ"ל שיווק</option>
                            <option value="18548">סמנכ"ל שיווק</option>
                            <option value="18549">מנהל/ת רכש</option>
                            <option value="18550">משנה למנכ"ל</option>
                            <option value="18551">מנכ"ל משותף</option>
                            <option value="18552">מנהל כספים</option>
                            <option value="18855">בעלים</option> 
							<option value="24163">מנהל חטיבה</option>
<option value="24162">מנהל ביצוע</option>
<option value="24161">מנהל</option>
<option value="19173">סמנכל</option>
<option value="24159">מתווך</option>
<option value="24158">מוניציפלי</option>
<option value="24157">סמנכל כספים</option>
<option value="24156">זכיין</option>
                            <option value="18553">אחר</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="Phone_Mobile3" type="text" value="" placeholder="טל' נייד לעדכונים במהלך הוועידה:">
                    </div>
                    <div class="col-sm-6">
                        <input id="Email3" type="text" value="" placeholder="אימייל">
                    </div>
                </div>
                <div class="row">
                    <div class="upload-imag-icon">
                        <input id="upload-imag3" type="file" value="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-11">
                    <button id="next-to-step-3" class="btn btn-secondary">הבא</button>
                </div>
            </div>
        </div>

        <div class="register-step" id="step-3">
            <label id="split-payment-label">האם לפצל את החשבונית?</label><br>
            <div class="row">
                <div class="col-sm-11">
                    <select id="split-payment">
                        <option value="0">לא</option>
                        <option value="1">כן</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-11">
                    <label>סה"כ לתשלום (כולל מע"מ)</label><br>
                    <input id="register-sum" type="text" value="0" disabled>
                </div>
            </div>
            <div id="payment1">
                 <input id="payment-checkbox-1" type="checkbox" value="payment"><label>תשלום מס' 1</label><label id="payment-name-1"></label><abbr class="nadlan-tooltip" title="נא הסר את ה V במידה ואינך מעוניין כי תצא חשבונית על מבקר זה." rel="tooltip"> ? </abbr><br>
                <label>פרטי תשלום</label><br>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="invoiceN1" type="text" value="" placeholder="שם העסק להפקת חשבונית">
                    </div>
                    <div class="col-sm-6">
                        <input id="registrationNo1" type="text" value="" placeholder=" מס עוסק מורשה / ח.פ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="registrationPhone1" type="text" value="" placeholder="טל' לבירורים בענייני הפקת החשבונית">
                    </div>
                    <div class="col-sm-6">
                        <input id="amount1" type="text" value="" placeholder="סכום לתשלום">
                    </div>
                </div>
                <label>כתובת לשליחת חשבונית</label><br>
                <div class="row">
                    <div class="col-sm-6">
                        <select id="registrationAddressCity1">
                            <option value="61">צפת</option>
                            <option value="62">קרית
      שמונה</option>
                            <option value="395">כפר
      ורדים</option>
                            <option value="396">מטולה</option>
                            <option value="403">גן-נר</option>
                            <option value="405">חצור
      הגלילית</option>
                            <option value="406">כורזים</option>
                            <option value="409">כפר
      תבור</option>
                            <option value="411">מושב
      נטועה</option>
                            <option value="415">נופית</option>
                            <option value="417">קיבוץ
      בית זרע</option>
                            <option value="418">קיבוץ
      גינוסר</option>
                            <option value="419">קיבוץ
      דברת</option>
                            <option value="421">קיבוץ
      עין הנציב</option>
                            <option value="426">שמשית</option>
                            <option value="428">שדה
      יעקב</option>
                            <option value="430">רומי
      יוסף</option>
                            <option value="431">קיבוץ
      רבדים</option>
                            <option value="432">קיבוץ
      גונן</option>
                            <option value="433">קיבוץ
      בית אורן</option>
                            <option value="434">צובר</option>
                            <option value="439">מצפה
      הושעיה</option>
                            <option value="444">מושב
      ספאפה</option>
                            <option value="449">כינרת
      קבוצה</option>
                            <option value="450">יסוד
      המעלה</option>
                            <option value="451">יודפת</option>
                            <option value="453">גדרות</option>
                            <option value="455">אושרת</option>
                            <option value="602">אבירים</option>
                            <option value="603">אבן
      יצחק</option>
                            <option value="604">אבן
      מנחם</option>
                            <option value="607">אבני
      איתן</option>
                            <option value="626">אורנים</option>
                            <option value="631">אחיהוד</option>
                            <option value="636">איילת
      השחר</option>
                            <option value="639">אילניה</option>
                            <option value="646">אלון
      הגליל</option>
                            <option value="651">אלי עד</option>
                            <option value="654">אליפלט</option>
                            <option value="657">אלמגור</option>
                            <option value="658">אלקוש</option>
                            <option value="662">אמנון</option>
                            <option value="667">אפיקים</option>
                            <option value="678">אשבל</option>
                            <option value="682">אשרת</option>
                            <option value="684">אתגר</option>
                            <option value="691">בוסתן
      הגליל</option>
                            <option value="698">ביריה</option>
                            <option value="701">בית
      אלפא</option>
                            <option value="705">בית ג'ן</option>
                            <option value="708">בית
      הלל</option>
                            <option value="709">בית
      העמק</option>
                            <option value="710">בית
      השיטה</option>
                            <option value="711">בית
      זיד</option>
                            <option value="713">בית
      זרע</option>
                            <option value="720">בית
      יוסף</option>
                            <option value="731">בית
      צבי</option>
                            <option value="733">בית
      קשת</option>
                            <option value="735">בית
      רימון</option>
                            <option value="742">בן עמי</option>
                            <option value="752">בסמ"ה</option>
                            <option value="754">בענה</option>
                            <option value="758">בצת</option>
                            <option value="765">ברעם</option>
                            <option value="767">ברקאי</option>
                            <option value="788">גבעת
      עוז</option>
                            <option value="792">גבת</option>
                            <option value="794">ג'דיידה-מכר</option>
                            <option value="798">גונן</option>
                            <option value="799">גורן</option>
                            <option value="800">גורנות
      הגליל / גרנות
      הגליל</option>
                            <option value="801">גוש
      חלב</option>
                            <option value="807">גינוסר</option>
                            <option value="809">גיתה</option>
                            <option value="828">גניגר</option>
                            <option value="831">געתון</option>
                            <option value="832">גבע</option>
                            <option value="839">גשר</option>
                            <option value="842">דבורייה</option>
                            <option value="844">דברת</option>
                            <option value="846">דוב''ב</option>
                            <option value="847">דחי</option>
                            <option value="851">דישון</option>
                            <option value="852">דליה</option>
                            <option value="856">דן</option>
                            <option value="862">הודיות</option>
                            <option value="863">הושעיה</option>
                            <option value="865">הזורעים</option>
                            <option value="868">הילה</option>
                            <option value="875">הרדוף</option>
                            <option value="887">זרזיר</option>
                            <option value="899">חולתה</option>
                            <option value="900">חוסן</option>
                            <option value="907">חזון</option>
                            <option value="909">חלוץ</option>
                            <option value="912">חמאם</option>
                            <option value="913">חמדיה</option>
                            <option value="915">חניתה</option>
                            <option value="919">חפצי
      בה</option>
                            <option value="925">חצרות
      יוסף</option>
                            <option value="937">טירת
      צבי</option>
                            <option value="942">טפחות</option>
                            <option value="957">יובל</option>
                            <option value="960">יזרעאל</option>
                            <option value="961">יחיעם</option>
                            <option value="967">יסעור</option>
                            <option value="975">יפתח</option>
                            <option value="979">ירדנה</option>
                            <option value="984">ישובי
      הצפון</option>
                            <option value="989">כאבול</option>
                            <option value="991">כברי</option>
                            <option value="992">כדורי</option>
                            <option value="994">כחל</option>
                            <option value="996">כישור</option>
                            <option value="997">כליל</option>
                            <option value="998">כלנית</option>
                            <option value="999">כמאנה</option>
                            <option value="1004">כינרת
      מושבה</option>
                            <option value="1019">כפר
      ברוך</option>
                            <option value="1021">כפר
      גליקסון</option>
                            <option value="1024">כפר
      החורש</option>
                            <option value="1026">כפר
      הנוער הדתי</option>
                            <option value="1033">כפר
      זיתים</option>
                            <option value="1034">כפר
      זרעית</option>
                            <option value="1036">כפר
      חיטים</option>
                            <option value="1038">כפר
      חנניה</option>
                            <option value="1042">כפר
      יאסיף</option>
                            <option value="1052">כפר
      מסריק</option>
                            <option value="1053">כפר
      מצר</option>
                            <option value="1066">כפר
      רופין</option>
                            <option value="1068">כפר
      שמאי</option>
                            <option value="1073">כרי
      דשא</option>
                            <option value="1074">כרכום</option>
                            <option value="1082">לביא</option>
                            <option value="1083">לבנים</option>
                            <option value="1085">להבות
      הבשן</option>
                            <option value="1086">להבות
      חביבה</option>
                            <option value="1090">לימן</option>
                            <option value="1092">לפידות</option>
                            <option value="1095">מאיר
      שפיה</option>
                            <option value="1108">מגל</option>
                            <option value="1113">מולדת</option>
                            <option value="1122">מזרעה</option>
                            <option value="1124">מחנה
      יבור</option>
                            <option value="1125">מחנה
      יהודית</option>
                            <option value="1132">מייסר</option>
                            <option value="1134">מירב</option>
                            <option value="1141">מלכישוע</option>
                            <option value="1145">מנות</option>
                            <option value="1147">מנרה</option>
                            <option value="1150">מסדה</option>
                            <option value="1151">מסילות</option>
                            <option value="1154">מסעדה</option>
                            <option value="1159">מעוז
      חיים</option>
                            <option value="1160">מעונה</option>
                            <option value="1161">מעיין
      ברוך</option>
                            <option value="1164">מעלה
      גלבוע</option>
                            <option value="1167">מעלה
      עירון</option>
                            <option value="1169">מענית</option>
                            <option value="1173">מצובה</option>
                            <option value="1174">מירון</option>
                            <option value="1175">מצפה</option>
                            <option value="1178">מצר</option>
                            <option value="1179">מתת</option>
                            <option value="1187">משהד</option>
                            <option value="1191">משמר
      הירדן</option>
                            <option value="1202">נאות
      מרדכי</option>
                            <option value="1203">נאעורה</option>
                            <option value="1209">נווה
      אבות</option>
                            <option value="1210">נווה
      אור</option>
                            <option value="1212">נווה
      איתן</option>
                            <option value="1237">נח"ל
      נמרוד</option>
                            <option value="1244">נחף</option>
                            <option value="1247">נטועה</option>
                            <option value="1250">ניין</option>
                            <option value="1260">ניר
      דוד</option>
                            <option value="1273">נס
      עמים</option>
                            <option value="1279">נתיב
      השיירה</option>
                            <option value="1281">סאג'ור</option>
                            <option value="1284">סולם</option>
                            <option value="1287">סח'נין</option>
                            <option value="1288">סלמה</option>
                            <option value="1291">סער</option>
                            <option value="1293">ספסופה</option>
                            <option value="1295">עבדון</option>
                            <option value="1296">עברון</option>
                            <option value="1298">ע'ג'ר</option>
                            <option value="1299">עדי</option>
                            <option value="1301">עוזייר</option>
                            <option value="1313">עילוט</option>
                            <option value="1324">עין
      הנצי"ב</option>
                            <option value="1333">עין
      יעקב</option>
                            <option value="1336">עין
      מאהל</option>
                            <option value="1340">עין
      קנייא</option>
                            <option value="1342">עין
      שמר</option>
                            <option value="1347">עלמה</option>
                            <option value="1349">עמוקה</option>
                            <option value="1351">עמיעד</option>
                            <option value="1354">עמיר</option>
                            <option value="1357">עספיא</option>
                            <option value="1358">עספיה</option>
                            <option value="1361">עראמשה</option>
                            <option value="1363">ערערה</option>
                            <option value="1370">פוריידיס</option>
                            <option value="1375">פסוטה</option>
                            <option value="1377">פקיעין</option>
                            <option value="1380">פרוד</option>
                            <option value="1386">צביה</op