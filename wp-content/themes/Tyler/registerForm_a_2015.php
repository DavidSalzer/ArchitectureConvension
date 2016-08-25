<?php
    /*
          Template Name: Embedded Shiri Register Page 2015
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
            <div class="row" class="register-hotel">
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
            <div class="row">
                <div class="col-sm-11">
                    <label>הרשמה לכנס ללא לינה</label><br>
                    <select id="register-day">
                        <option value="">בחר תאריך</option>
                        <option value="1">01/12/2015 - יום ג'</option>
                        <option value="2">02/12/2015 - יום ד'</option>
                        <option value="3">03/12/2015 - יום ה'</option>
                        <option value="4">הרשמה לכל הימים</option>
                    </select>
                </div>
            </div>
            <div class="row" class="register-room-type">
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
            <div class="row" class="register-bed-type">
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
                            <option value="1386">צביה</option>
                            <option value="1387">צבעון</option>
                            <option value="1395">צוריאל</option>
                            <option value="1399">צנדלה</option>
                            <option value="1409">קדרים</option>
                            <option value="1415">קלע</option>
                            <option value="1424">ראמה</option>
                            <option value="1425">ראס
      אל-עין</option>
                            <option value="1426">ראס
      עלי</option>
                            <option value="1429">רביד</option>
                            <option value="1433">רוויה</option>
                            <option value="1435">רומנה</option>
                            <option value="1436">רומת
      הייב</option>
                            <option value="1440">רם-און</option>
                            <option value="1443">רמות
      מנשה</option>
                            <option value="1444">רמות
      נפתלי</option>
                            <option value="1447">רמת
      השופט</option>
                            <option value="1451">רמת
      צבי</option>
                            <option value="1456">רחוב</option>
                            <option value="1460">רשפים</option>
                            <option value="1465">שבלי</option>
                            <option value="1466">שגב</option>
                            <option value="1468">שדה
      אילן</option>
                            <option value="1469">שדה
      אליהו</option>
                            <option value="1470">שדה
      אליעזר</option>
                            <option value="1476">שדה
      נחום</option>
                            <option value="1485">שדי
      תרומות</option>
                            <option value="1487">שדמות
      דבורה</option>
                            <option value="1491">שומרה</option>
                            <option value="1495">שזור</option>
                            <option value="1504">שלוחות</option>
                            <option value="1505">שמיר</option>
                            <option value="1508">שניר</option>
                            <option value="1509">שעב</option>
                            <option value="1512">שער
      הגולן</option>
                            <option value="1513">שער
      העמקים</option>
                            <option value="1514">שער
      מנשה</option>
                            <option value="1518">שפר</option>
                            <option value="1519">שפרעם</option>
                            <option value="1522">שרונה</option>
                            <option value="1523">שריד</option>
                            <option value="1539">תל
      קציר</option>
                            <option value="1541">תל
      תאומים</option>
                            <option value="1954">אבטליון</option>
                            <option value="1955">שדה-
      נחום</option>
                            <option value="2062">פוריה
      כפר עבודה</option>
                            <option value="2914">נווה
      זיו</option>
                            <option value="2939">ראש
      הנקרה</option>
                            <option value="3365">עיילבון</option>
                            <option value="3369">ירכא</option>
                            <option value="3383">טמרה</option>
                            <option value="3392">דפנה</option>
                            <option value="3401">יפיע</option>
                            <option value="3467">ביכורה</option>
                            <option value="3468">אבו
      דיאב</option>
                            <option value="3469">כפר
      קרע</option>
                            <option value="3580">שמרת</option>
                            <option value="3583">מגאר</option>
                            <option value="3594">כפר
      כמא</option>
                            <option value="3596">עראבה</option>
                            <option value="3598">פקיעין
      חדשה</option>
                            <option value="3844">ג'וליס</option>
                            <option value="3847">ג'יש</option>
                            <option value="3851">כאוכב
      אבו אל היגא</option>
                            <option value="3852">כפר
      מנדא</option>
                            <option value="3858">מרכז
      כ''ח</option>
                            <option value="3860">עין אל
      אסד</option>
                            <option value="3866">מצפה
      אילן</option>
                            <option value="3872">גבעת
      חביבה</option>
                            <option value="3883">חורפיש</option>
                            <option value="3967">מרכז
      אזורי מרום
      הגליל</option>
                            <option value="3988">כעביה
      טבאש חג</option>
                            <option value="75">דימונה</option>
                            <option value="76">ערד</option>
                            <option value="77">קרית
      גת</option>
                            <option value="78">קרית
      מלאכי</option>
                            <option value="80">שדרות</option>
                            <option value="81">נתיבות</option>
                            <option value="82">אופקים</option>
                            <option value="105">חצרים</option>
                            <option value="599">אביגדור</option>
                            <option value="606">אבן
      שמואל</option>
                            <option value="608">אבשלום</option>
                            <option value="613">אוהד</option>
                            <option value="620">אור
      הנר</option>
                            <option value="623">אורות</option>
                            <option value="625">אורים</option>
                            <option value="629">אחוזם</option>
                            <option value="635">איבים</option>
                            <option value="637">אילות</option>
                            <option value="640">איתן</option>
                            <option value="644">אלומה</option>
                            <option value="653">אליפז</option>
                            <option value="660">אמונים</option>
                            <option value="663">אמציה</option>
                            <option value="673">אשלים</option>
                            <option value="675">ארז</option>
                            <option value="677">אשבול</option>
                            <option value="681">אשל
      הנשיא</option>
                            <option value="687">באר
      טוביה</option>
                            <option value="690">בארי</option>
                            <option value="696">ביטחה</option>
                            <option value="703">בית
      גוברין</option>
                            <option value="706">בית
      הגדי</option>
                            <option value="725">בית
      ניר</option>
                            <option value="729">בית
      עזרא</option>
                            <option value="732">בית
      קמה</option>
                            <option value="737">בית
      שקמה</option>
                            <option value="748">בני
      עצמון</option>
                            <option value="757">ביצרון</option>
                            <option value="762">ברור
      חיל</option>
                            <option value="763">ברוש</option>
                            <option value="764">ברכיה</option>
                            <option value="769">בת הדר</option>
                            <option value="770">בת
      חצור</option>
                            <option value="775">גבולות</option>
                            <option value="776">גבים</option>
                            <option value="778">גבעולים</option>
                            <option value="791">גברעם</option>
                            <option value="804">גיאה</option>
                            <option value="810">גל און</option>
                            <option value="811">גלאור</option>
                            <option value="834">גבעתי</option>
                            <option value="836">גת</option>
                            <option value="837">גרופית</option>
                            <option value="843">דבירה</option>
                            <option value="857">דקל</option>
                            <option value="872">הודיה</option>
                            <option value="873">הר
      עמשא</option>
                            <option value="877">ורדון</option>
                            <option value="878">זבדיאל</option>
                            <option value="879">זוהר</option>
                            <option value="880">זיקים</option>
                            <option value="884">זמרת</option>
                            <option value="886">זרועה</option>
                            <option value="888">זרחיה</option>
                            <option value="898">חולית</option>
                            <option value="904">חורה</option>
                            <option value="911">חלץ</option>
                            <option value="920">חצב</option>
                            <option value="921">חצבה</option>
                            <option value="922">חצור
      אשדוד</option>
                            <option value="939">טללים</option>
                            <option value="943">יבול</option>
                            <option value="951">יד
      מרדכי</option>
                            <option value="952">יד נתן</option>
                            <option value="956">יהל</option>
                            <option value="963">יכיני</option>
                            <option value="965">ינון</option>
                            <option value="976">יושיביה</option>
                            <option value="980">ירוחם</option>
                            <option value="985">ישע</option>
                            <option value="988">יתד</option>
                            <option value="993">כוכב
      מיכאל</option>
                            <option value="995">כיסופים</option>
                            <option value="1000">כמהין</option>
                            <option value="1002">כנות</option>
                            <option value="1005">כסיפה</option>
                            <option value="1029">כפר
      הרי''ף</option>
                            <option value="1031">כפר
      ורבורג</option>
                            <option value="1048">כפר
      מימון</option>
                            <option value="1051">כפר
      מנחם</option>
                            <option value="1057">כפר
      סילבר</option>
                            <option value="1060">כפר
      עזה</option>
                            <option value="1072">כרמים</option>
                            <option value="1078">כרם
      שלום</option>
                            <option value="1080">כרמיה</option>
                            <option value="1084">להב</option>
                            <option value="1091">לכיש</option>
                            <option value="1093">לקיה</option>
                            <option value="1099">מבועים</option>
                            <option value="1100">מבטחים</option>
                            <option value="1101">מבקיעים</option>
                            <option value="1109">מגן</option>
                            <option value="1123">מחנה
      בלדד</option>
                            <option value="1139">מלילות</option>
                            <option value="1142">מנוחה</option>
                            <option value="1153">מסלול</option>
                            <option value="1156">מעגלים</option>
                            <option value="1171">מפלסים</option>
                            <option value="1177">מצפה
      רמון</option>
                            <option value="1184">מרכז
      שפירא</option>
                            <option value="1185">משאבי
      שדה</option>
                            <option value="1188">משואות
      יצחק</option>
                            <option value="1192">משמר
      הנגב</option>
                            <option value="1198">משען</option>
                            <option value="1201">נאות
      הכיכר</option>
                            <option value="1204">נבטים</option>
                            <option value="1205">נגבה</option>
                            <option value="1206">נהורה</option>
                            <option value="1208">נוגה</option>
                            <option value="1216">נווה
      דקלים</option>
                            <option value="1217">נווה
      זוהר</option>
                            <option value="1218">נווה
      חריף</option>
                            <option value="1222">נווה
      מבטח</option>
                            <option value="1226">נועם</option>
                            <option value="1235">נח"ל
      יתיר</option>
                            <option value="1240">נחל
      עוז</option>
                            <option value="1241">נחלה</option>
                            <option value="1252">ניצן</option>
                            <option value="1253">ניצנה</option>
                            <option value="1254">ניצני
      סיני</option>
                            <option value="1256">ניצנים</option>
                            <option value="1258">ניר
      בנים</option>
                            <option value="1261">ניר
      ח''ן</option>
                            <option value="1263">ניר
      יצחק</option>
                            <option value="1264">ניר
      ישראל</option>
                            <option value="1265">ניר
      משה</option>
                            <option value="1266">ניר
      עוז</option>
                            <option value="1267">ניר עם</option>
                            <option value="1269">ניר
      עקיבא</option>
                            <option value="1270">נירים</option>
                            <option value="1278">נתיב
      העשרה</option>
                            <option value="1283">סגולה</option>
                            <option value="1286">סופה</option>
                            <option value="1289">סמר</option>
                            <option value="1290">סעד</option>
                            <option value="1292">ספיר</option>
                            <option value="1304">עוצם</option>
                            <option value="1305">עזוז</option>
                            <option value="1306">עזר</option>
                            <option value="1309">עזריקם</option>
                            <option value="1310">עידן</option>
                            <option value="1314">עילון</option>
                            <option value="1315">עין
      אובות</option>
                            <option value="1319">עין
      גדי</option>
                            <option value="1321">עין
      הבשור</option>
                            <option value="1327">עין
      השלושה</option>
                            <option value="1330">עין
      חצבה</option>
                            <option value="1332">עין
      יהב</option>
                            <option value="1339">עין
      צורים</option>
                            <option value="1344">עין
      תמר</option>
                            <option value="1346">עלומים</option>
                            <option value="1352">עמיעוז</option>
                            <option value="1359">עוזה</option>
                            <option value="1365">פארן</option>
                            <option value="1366">פדויים</option>
                            <option value="1372">פטיש</option>
                            <option value="1376">פעמי
      תש''ז</option>
                            <option value="1382">פרי גן</option>
                            <option value="1385">צאלים</option>
                            <option value="1389">צוחר</option>
                            <option value="1391">צופר</option>
                            <option value="1405">קדמה</option>
                            <option value="1410">קוממיות</option>
                            <option value="1412">קטורה</option>
                            <option value="1413">קלחים</option>
                            <option value="1427">רבדים</option>
                            <option value="1428">רביבים</option>
                            <option value="1432">רווחה</option>
                            <option value="1434">רוחמה</option>
                            <option value="1454">רנן</option>
                            <option value="1455">רעים</option>
                            <option value="1461">רתמים</option>
                            <option value="1467">שגב-שלום</option>
                            <option value="1471">שדה
      בוקר</option>
                            <option value="1472">שדה
      דוד</option>
                            <option value="1473">שדה
      יואב</option>
                            <option value="1475">שדה
      משה</option>
                            <option value="1478">שדה
      ניצן</option>
                            <option value="1479">שדה
      עוזיהו</option>
                            <option value="1480">שדה
      צבי</option>
                            <option value="1483">שדי
      אברהם</option>
                            <option value="1489">שובה</option>
                            <option value="1490">שובל</option>
                            <option value="1492">שוקדה</option>
                            <option value="1496">שחר</option>
                            <option value="1497">שחרות</option>
                            <option value="1498">שיבולים</option>
                            <option value="1499">שיזפון</option>
                            <option value="1500">שיטים</option>
                            <option value="1503">שלווה</option>
                            <option value="1507">שמרייה</option>
                            <option value="1517">שפיר</option>
                            <option value="1521">שקף</option>
                            <option value="1524">שרשרת</option>
                            <option value="1526">שתולים</option>
                            <option value="1528">תדהר</option>
                            <option value="1530">תושייה</option>
                            <option value="1531">תימורים</option>
                            <option value="1540">תל שבע</option>
                            <option value="1542">תלמי
      אליהו</option>
                            <option value="1544">תלמי
      ביל''ו</option>
                            <option value="1545">תלמי
      יוסף</option>
                            <option value="1546">תלמי
      יחיאל</option>
                            <option value="1547">תלמי
      יפה</option>
                            <option value="1548">תלמים</option>
                            <option value="1551">תפרח</option>
                            <option value="1552">תקומה</option>
                            <option value="1774">גילת</option>
                            <option value="3372">קדיתא</option>
                            <option value="3447">קרית
      חינוך שדות
      נגב</option>
                            <option value="3473">בית
      שיקמה</option>
                            <option value="3479">אורון</option>
                            <option value="3491">מדרשת
      בן גוריון</option>
                            <option value="3492">עד
      הלום</option>
                            <option value="3575">ניצן ב'</option>
                            <option value="3586">טל אור</option>
                            <option value="3587">אבו
      ג'ווייעד</option>
                            <option value="3864">באר
      גנים</option>
                            <option value="3865">בני
      דקלים</option>
                            <option value="3867">כרמית</option>
                            <option value="3868">נטע</option>
                            <option value="3869">שומריה</option>
                            <option value="3870">מרחב
      עם</option>
                            <option value="3871">דורות</option>
                            <option value="3993">פעמי
      תש'ז</option>
                            <option value="114">קרית
      קריניצי</option>
                            <option value="211">כפר
      יעבץ</option>
                            <option value="399">חצור</option>
                            <option value="422">שכניהו</option>
                            <option value="774">גאליה</option>
                            <option value="786">גבעת
      כ''ח</option>
                            <option value="803">גזר</option>
                            <option value="805">גיבתון</option>
                            <option value="817">גן
      חיים</option>
                            <option value="821">גן
      שורק</option>
                            <option value="822">גן
      שלמה</option>
                            <option value="823">גנות</option>
                            <option value="825">גני
      הדר</option>
                            <option value="826">גני
      יוחנן</option>
                            <option value="883">זמר</option>
                            <option value="897">חולדה</option>
                            <option value="906">חורשים</option>
                            <option value="918">חפץ
      חיים</option>
                            <option value="924">חצרות
      חולדה</option>
                            <option value="926">חצרות
      כ"ח</option>
                            <option value="934">טירה</option>
                            <option value="955">ידידיה</option>
                            <option value="966">יסודות</option>
                            <option value="970">יעף</option>
                            <option value="977">יציץ</option>
                            <option value="983">ישובי
      הסביבה</option>
                            <option value="1017">כפר
      ברא</option>
                            <option value="1059">כפר
      עבודה</option>
                            <option value="1076">כרם
      יבנה</option>
                            <option value="1097">מבוא
      מודיעים</option>
                            <option value="1098">מבואות
      ים</option>
                            <option value="1180">מקווה
      ישראל</option>
                            <option value="1214">נווה
      אפרים</option>
                            <option value="1227">נוף
      איילון</option>
                            <option value="1228">נופך</option>
                            <option value="1249">נטעים</option>
                            <option value="1259">ניר
      גלים</option>
                            <option value="1274">נעורים</option>
                            <option value="1276">נען</option>
                            <option value="1294">סתריה</option>
                            <option value="1312">עיינות</option>
                            <option value="1345">עינת</option>
                            <option value="1373">פלמחים</option>
                            <option value="1390">צופייה</option>
                            <option value="1400">צפריה</option>
                            <option value="1422">קרית
      שלמה</option>
                            <option value="1442">רמות
      מאיר</option>
                            <option value="1446">רמת
      הכובש</option>
                            <option value="1515">שערי
      אברהם</option>
                            <option value="1537">תל
      יצחק</option>
                            <option value="1777">חמד</option>
                            <option value="3489">נווה
      הרצוג</option>
                            <option value="84">תל
      מונד</option>
                            <option value="91">כוכב
      יאיר</option>
                            <option value="92">מתן</option>
                            <option value="93">נירית</option>
                            <option value="94">צור
      נתן</option>
                            <option value="96">יישובי
      השומרון</option>
                            <option value="144">חגור</option>
                            <option value="212">חרותים</option>
                            <option value="397">שדה
      חמד</option>
                            <option value="445">ירחיב</option>
                            <option value="676">ארסוף</option>
                            <option value="749">בני
      ציון</option>
                            <option value="756">בצרה</option>
                            <option value="824">גנות
      הדר</option>
                            <option value="830">געש</option>
                            <option value="978">יקום</option>
                            <option value="1055">כפר
      נטר</option>
                            <option value="1061">כפר
      פינס</option>
                            <option value="1255">ניצני
      עוז</option>
                            <option value="1343">עין
      שריד</option>
                            <option value="1371">פורת</option>
                            <option value="1474">שדה
      יצחק</option>
                            <option value="1516">שפיים</option>
                            <option value="2921">רמת
      הדר</option>
                            <option value="2924">נווה
      הדסה</option>
                            <option value="3108">צור
      יצחק</option>
                            <option value="3233">לא
      מצוייןשרון</option>
                            <option value="3380">חרוצים</option>
                            <option value="3483">צור
      יגאל</option>
                            <option value="3849">ג'לג'וליה</option>
                            <option value="3990">כוכב
      יאיר / צור
      יגאל</option>
                            <option value="18" selected>ירושלים</option>
                            <option value="601">אביעזר</option>
                            <option value="610">אדרת</option>
                            <option value="641">איתנים</option>
                            <option value="785">גבעת
      ישעיהו</option>
                            <option value="789">גבעת
      שמש</option>
                            <option value="850">דייר
      ראפאת</option>
                            <option value="874">הראל</option>
                            <option value="882">זכריה</option>
                            <option value="949">יד
      השמונה</option>
                            <option value="954">ידידה</option>
                            <option value="1032">כפר
      זוהרים</option>
                            <option value="1087">לוזית</option>
                            <option value="1089">שריגים</option>
                            <option value="1128">נחשון</option>
                            <option value="1152">מסילת
      ציון</option>
                            <option value="1224">נווה
      מיכאל</option>
                            <option value="1225">נווה
      שלום</option>
                            <option value="1239">נחושה</option>
                            <option value="1280">נתיב
      הל"ה</option>
                            <option value="1297">עגור</option>
                            <option value="1334">עין
      כרם</option>
                            <option value="1401">צפרירים</option>
                            <option value="1482">שדות
      מיכה</option>
                            <option value="1532">תירוש</option>
                            <option value="1550">תעוז</option>
                            <option value="1553">תרום</option>
                            <option value="97">אורנית</option>
                            <option value="213">אבני
      חפץ</option>
                            <option value="214">אדורה</option>
                            <option value="216">אור
      הגנוז</option>
                            <option value="218">אחיה</option>
                            <option value="219">איבי
      הנחל</option>
                            <option value="220">איתמר</option>
                            <option value="221">אלון</option>
                            <option value="222">אלון
      מורה</option>
                            <option value="224">אלי
      סיני</option>
                            <option value="228">אלקנה</option>
                            <option value="230">ארגמן</option>
                            <option value="231">אריאל</option>
                            <option value="232">אש
      קודש</option>
                            <option value="233">אשכולות</option>
                            <option value="234">בדולח</option>
                            <option value="235">בית-אל</option>
                            <option value="236">בית
      אריה</option>
                            <option value="238">בית
      חגי</option>
                            <option value="239">בית
      חורון</option>
                            <option value="240">בית
      יתיר</option>
                            <option value="241">ביתר
      עילית</option>
                            <option value="242">בקעות</option>
                            <option value="244">ברוכין</option>
                            <option value="245">ברכה</option>
                            <option value="246">ברקן</option>
                            <option value="248">גבעון
      החדשה</option>
                            <option value="250">גבעת
      אסף</option>
                            <option value="251">גבעת
      הראל</option>
                            <option value="252">גבעת
      זאב</option>
                            <option value="253">גדיד</option>
                            <option value="254">גיתית</option>
                            <option value="255">גלגל</option>
                            <option value="256">גן אור</option>
                            <option value="258">גנים</option>
                            <option value="259">דוגית</option>
                            <option value="260">דולב</option>
                            <option value="264">חוות
      שדה בר</option>
                            <option value="265">חומש</option>
                            <option value="266">חיננית</option>
                            <option value="267">חמדת</option>
                            <option value="268">חמרה</option>
                            <option value="270">חרמש</option>
                            <option value="271">חרשה</option>
                            <option value="273">טל
      מנשה</option>
                            <option value="274">טלמון</option>
                            <option value="275">טנא</option>
                            <option value="276">ייטב</option>
                            <option value="277">יפית</option>
                            <option value="278">יצהר</option>
                            <option value="279">יקיר</option>
                            <option value="280">כדים</option>
                            <option value="281">כוכב
      השחר</option>
                            <option value="282">כוכב
      יעקב</option>
                            <option value="285">כפר
      דרום</option>
                            <option value="286">כפר ים</option>
                            <option value="289">כרמל</option>
                            <option value="290">שני
      ליבנה</option>
                            <option value="291">מבוא
      דותן</option>
                            <option value="292">מבוא
      חורון</option>
                            <option value="293">מבואות
      יריחו</option>
                            <option value="295">מגדלים</option>
                            <option value="296">מגרון</option>
                            <option value="297">מורג</option>
                            <option value="299">מחולה</option>
                            <option value="300">מיצד -
      אספר</option>
                            <option value="301">מכורה</option>
                            <option value="302">מכמש</option>
                            <option value="303">מעון</option>
                            <option value="305">מעלה
      אפרים</option>
                            <option value="306">מעלה
      חבר</option>
                            <option value="307">מעלה
      לבונה</option>
                            <option value="310">מעלה
      שומרון</option>
                            <option value="311">מצפה
      אשתמוע</option>
                            <option value="312">מצפה
      דני</option>
                            <option value="313">מצפה
      חגית</option>
                            <option value="314">מצפה
      יאיר</option>
                            <option value="316">מצפה
      כרמים</option>
                            <option value="319">משואה</option>
                            <option value="320">משכיות</option>
                            <option value="321">נגוהות</option>
                            <option value="325">נוה
      דקלים</option>
                            <option value="326">נופי
      נחמיה</option>
                            <option value="327">נופי
      פרת</option>
                            <option value="328">נופים</option>
                            <option value="330">נחליאל</option>
                            <option value="332">ניסנית</option>
                            <option value="333">נעלה</option>
                            <option value="334">נערן</option>
                            <option value="335">נצר
      חזני</option>
                            <option value="336">נצרים</option>
                            <option value="337">נריה</option>
                            <option value="338">נתיב
      הגדוד</option>
                            <option value="339">סוסיא</option>
                            <option value="340">סלעית</option>
                            <option value="341">סנסנה</option>
                            <option value="342">עדי-עד</option>
                            <option value="344">עטרת</option>
                            <option value="345">עינב</option>
                            <option value="346">עלי</option>
                            <option value="347">עלי
      זהב</option>
                            <option value="348">עמנואל</option>
                            <option value="350">עפרה</option>
                            <option value="351">עץ
      אפרים</option>
                            <option value="352">עצמונה</option>
                            <option value="353">עשהאל</option>
                            <option value="354">עתניאל</option>
                            <option value="355">פאת
      שדה</option>
                            <option value="356">פדואל</option>
                            <option value="358">פסגות</option>
                            <option value="359">פצאל</option>
                            <option value="360">צופים</option>
                            <option value="361">קדומים</option>
                            <option value="362">קטיף</option>
                            <option value="363">קידה</option>
                            <option value="366">קרית
      ארבע</option>
                            <option value="367">קרית
      נטפים</option>
                            <option value="368">קרית
      ספר</option>
                            <option value="369">קרני
      שומרון</option>
                            <option value="371">רבבה</option>
                            <option value="372">רועי</option>
                            <option value="373">רותם</option>
                            <option value="374">רחלים</option>
                            <option value="375">ריחן</option>
                            <option value="376">רימונים</option>
                            <option value="377">רפיח
      ים</option>
                            <option value="378">שא-נור</option>
                            <option value="379">שבות
      רחל</option>
                            <option value="380">שבי
      שומרון</option>
                            <option value="381">שדמות
      מחולה</option>
                            <option value="382">שילה</option>
                            <option value="383">שימעה</option>
                            <option value="384">שירת
      הים</option>
                            <option value="385">שליו</option>
                            <option value="387">שקד</option>
                            <option value="388">תומר</option>
                            <option value="390">תל
      קטיפא</option>
                            <option value="391">תלם</option>
                            <option value="392">תפוח</option>
                            <option value="424">שערי
      תקווה</option>
                            <option value="665">אספר</option>
                            <option value="755">בית אל</option>
                            <option value="891">חגי</option>
                            <option value="910">חלמיש</option>
                            <option value="1070">כפר
      תפוח</option>
                            <option value="1166">מעלה
      מכמש</option>
                            <option value="1172">מצדות
      יהודה</option>
                            <option value="1199">מתתיהו</option>
                            <option value="1233">נח"ל
      אלישע</option>
                            <option value="1234">נח"ל
      חמדת</option>
                            <option value="1236">נח"ל
      משכיות</option>
                            <option value="1238">נח"ל
      רותם</option>
                            <option value="1251">ניל''י</option>
                            <option value="1271">נירן</option>
                            <option value="1275">נעמי</option>
                            <option value="1285">סוסיה</option>
                            <option value="1356">ענב</option>
                            <option value="1374">פני
      חבר</option>
                            <option value="1462">שא נור</option>
                            <option value="1506">שמעה</option>
                            <option value="1703">אלפי
      מנשה</option>
                            <option value="2919">נוה
      מנחם</option>
                            <option value="2945">צופין</option>
                            <option value="3394">באקה</option>
                            <option value="3472">תוקוע</option>
                            <option value="3484">בתיר</option>
                            <option value="3485">בית
      רחאל</option>
                            <option value="3848">מפעלי
      ברקן</option>
                            <option value="3855">אל מתן</option>
                            <option value="3856">חוות
      גלעד</option>
                            <option value="3857">חוות
      יאיר</option>
                            <option value="3863">סלפית</option>
                            <option value="3873">מטה
      בנימין</option>
                            <option value="3874">בית
      לחם</option>
                            <option value="3984">עופרים</option>
                            <option value="612">אודם</option>
                            <option value="648">אלוני
      הבשן</option>
                            <option value="659">אל רום</option>
                            <option value="664">אניעם</option>
                            <option value="671">אפיק</option>
                            <option value="783">גבעת
      יואב</option>
                            <option value="894">חד נס</option>
                            <option value="917">חספין</option>
                            <option value="959">יונתן</option>
                            <option value="1003">כנף</option>
                            <option value="1040">כפר
      חרוב</option>
                            <option value="1165">מעלה
      גמלא</option>
                            <option value="1182">מרום
      גולן</option>
                            <option value="1329">עין
      זיוון</option>
                            <option value="1417">קצרין</option>
                            <option value="1423">קשת</option>
                            <option value="1449">רמת
      מגשימים</option>
                            <option value="1510">שעל</option>
                            <option value="1579">בני
      יהודה</option>
                            <option value="1581">קדמת
      צבי</option>
                            <option value="1582">רמת
      הגולן</option>
                            <option value="1733">אורטל</option>
                            <option value="1735">גשור</option>
                            <option value="1736">מבוא
      חמה</option>
                            <option value="1737">מיצר</option>
                            <option value="1738">מצוק
      עורבים</option>
                            <option value="1739">נאות
      גולן</option>
                            <option value="1740">נוב</option>
                            <option value="1741">נווה
      אטי''ב</option>
                            <option value="1742">נטור</option>
                            <option value="1743">נמרוד</option>
                            <option value="1744">קלע
      אלון</option>
                            <option value="1745">רמות</option>
                            <option value="3854">מג'דל
      שמס</option>
                            <option value="65">ראש
      פינה</option>
                            <option value="243">בר
      יוחאי</option>
                            <option value="441">מלכיה</option>
                            <option value="598">אביבים</option>
                            <option value="661">אמירים</option>
                            <option value="793">גדות</option>
                            <option value="853">דלתון</option>
                            <option value="860">הגושרים</option>
                            <option value="1015">כפר
      בלום</option>
                            <option value="1022">כפר
      גלעדי</option>
                            <option value="1027">כפר
      הנשיא</option>
                            <option value="1056">כפר
      סאלד</option>
                            <option value="1075">כרם בן
      זמרה</option>
                            <option value="1126">מחניים</option>
                            <option value="1181">מרגליות</option>
                            <option value="1186">משגב
      עם</option>
                            <option value="1282">סאסא</option>
                            <option value="1463">שאר
      ישוב</option>
                            <option value="1477">שדה
      נחמיה</option>
                            <option value="1771">זרעית</option>
                            <option value="2895">יראון</option>
                            <option value="2927">אילון</option>
                            <option value="2929">גרנות
      הגליל</option>
                            <option value="3237">עין
      זיתים</option>
                            <option value="3393">ורד
      הגליל</option>
                            <option value="3402">אשדות
      יעקב מאוחד</option>
                            <option value="3456">תל חי</option>
                            <option value="3546">אבטין</option>
                            <option value="3846">ריחאנייה</option>
                            <option value="3879">טובא
      זנגריה</option>
                            <option value="3968">כדיתה</option>
                            <option value="23">נהריה</option>
                            <option value="52">עכו</option>
                            <option value="130">רגבה</option>
                            <option value="140">גשר
      הזיו</option>
                            <option value="401">גוש
      שגב</option>
                            <option value="427">שלומי</option>
                            <option value="609">אדמית</option>
                            <option value="672">אפק</option>
                            <option value="1065">כפר
      ראש הנקרה</option>
                            <option value="1088">לוחמי
      הגטאות</option>
                            <option value="1323">עין
      המפרץ</option>
                            <option value="1464">שבי
      ציון</option>
                            <option value="2916">מעלות
      תרשיחא</option>
                            <option value="3371">אבו
      סנאן</option>
                            <option value="3453">שלומית</option>
                            <option value="3590">מעיליא</option>
                            <option value="3845">מגדל
      תפן</option>
                            <option value="3875">אידמית</option>
                            <option value="3992">ג'דידה
      מכר</option>
                            <option value="63">נצרת
      עילית</option>
                            <option value="64">טבריה</option>
                            <option value="66">נצרת</option>
                            <option value="129">מגדל
      העמק</option>
                            <option value="317">מצפה
      נטופה</option>
                            <option value="400">גבעת
      אבני</option>
                            <option value="614">אוהלו</option>
                            <option value="645">אלומות</option>
                            <option value="674">ארבל</option>
                            <option value="679">אשדות
      יעקב איחוד</option>
                            <option value="736">בית
      שאן</option>
                            <option value="845">דגניה
      א'</option>
                            <option value="858">האון</option>
                            <option value="870">הסוללים</option>
                            <option value="903">חוקוק</option>
                            <option value="944">יבנאל</option>
                            <option value="1105">מגדל</option>
                            <option value="1157">מעגן</option>
                            <option value="1318">עין גב</option>
                            <option value="1369">פוריה
      עילית</option>
                            <option value="1397">ציפורי</option>
                            <option value="1768">מסד</option>
                            <option value="1956">סמדר</option>
                            <option value="1957">משמר
      השלושה</option>
                            <option value="1958">בית גן</option>
                            <option value="2892">אשדות
      איחוד</option>
                            <option value="3362">פוריה
      נווה עובד</option>
                            <option value="3420">איכסאל</option>
                            <option value="3421">ריינה</option>
                            <option value="3422">כפר
      כנא</option>
                            <option value="3423">טורעאן</option>
                            <option value="3424">בועיינה
      נוג'יידאת</option>
                            <option value="3451">מנחמיה</option>
                            <option value="3486">דגניה
      ב'</option>
                            <option value="17">יוקנעם
      עילית</option>
                            <option value="28">עפולה</option>
                            <option value="67">רמת
      ישי</option>
                            <option value="407">כפר
      גדעון</option>
                            <option value="425">תמרת</option>
                            <option value="438">נהלל</option>
                            <option value="588">בית
      שערים</option>
                            <option value="590">יוקנעם
      מושבה</option>
                            <option value="618">אומן</option>
                            <option value="630">אחוזת
      ברק</option>
                            <option value="647">אלוני
      אבא</option>
                            <option value="650">אלונים</option>
                            <option value="722">בית
      לחם הגלילית</option>
                            <option value="740">בלפוריה</option>
                            <option value="766">ברק</option>
                            <option value="779">גבעת
      אלה</option>
                            <option value="795">גדיש</option>
                            <option value="796">גדעונה</option>
                            <option value="802">גזית</option>
                            <option value="820">גן נר</option>
                            <option value="864">הזורע</option>
                            <option value="867">היוגב</option>
                            <option value="890">חבר</option>
                            <option value="916">חנתון</option>
                            <option value="930">קרית
      טבעון</option>
                            <option value="969">יעל</option>
                            <option value="974">יפעת</option>
                            <option value="1043">כפר
      יהושע</option>
                            <option value="1044">כפר
      יחזקאל</option>
                            <option value="1063">כפר
      קיש</option>
                            <option value="1107">מגידו</option>
                            <option value="1110">מגן
      שאול</option>
                            <option value="1111">מדרך
      עוז</option>
                            <option value="1121">מזרע</option>
                            <option value="1131">מיטב</option>
                            <option value="1138">מלאה</option>
                            <option value="1146">מרחביה
      מושב</option>
                            <option value="1193">משמר
      העמק</option>
                            <option value="1231">נורית</option>
                            <option value="1262">ניר
      יפה</option>
                            <option value="1320">עין
      דור</option>
                            <option value="1326">עין
      השופט</option>
                            <option value="1331">עין
      חרוד איחוד</option>
                            <option value="1381">פרזון</option>
                            <option value="1445">רמת
      דוד</option>
                            <option value="1536">תל
      יוסף</option>
                            <option value="1538">תל
      עדשים</option>
                            <option value="1786">קיבוץ
      דליה</option>
                            <option value="1788">אליקים</option>
                            <option value="1789">עין
      העמק</option>
                            <option value="1790">גלעד</option>
                            <option value="2910">דבורה</option>
                            <option value="2917">עמק
      יזרעאל</option>
                            <option value="3356">אדירים</option>
                            <option value="3368">אביטל</option>
                            <option value="3427">בסמת
      טבעון</option>
                            <option value="3439">נין</option>
                            <option value="3442">מרחביה
      קיבוץ</option>
                            <option value="3464">עין
      חרוד מאוחד</option>
                            <option value="3470">תלפית</option>
                            <option value="3476">מסיליה</option>
                            <option value="3481">גיניגר</option>
                            <option value="3490">מנשית
      זבדה</option>
                            <option value="15">חיפה</option>
                            <option value="25">נשר</option>
                            <option value="68">עתלית</option>
                            <option value="83">טירת
      כרמל</option>
                            <option value="436">עין
      הוד</option>
                            <option value="699">בית
      אורן</option>
                            <option value="771">בת
      שלמה</option>
                            <option value="833">גבע
      כרמל</option>
                            <option value="841">דאלית
      אל כרמל</option>
                            <option value="855">דור</option>
                            <option value="859">הבונים</option>
                            <option value="866">החותרים</option>
                            <option value="1020">כפר
      גלים</option>
                            <option value="1077">כרם
      מהר''ל</option>
                            <option value="1104">מגדים</option>
                            <option value="1245">נחשולים</option>
                            <option value="1268">ניר
      עציון</option>
                            <option value="1303">עופר</option>
                            <option value="1316">עין
      איילה</option>
                            <option value="1335">עין
      כרמל</option>
                            <option value="1402">צרופה</option>
                            <option value="3348">עוספיא</option>
                            <option value="3395">אום אל
      פחם</option>
                            <option value="3437">גבעת
      וולפסון</option>
                            <option value="3441">כעביה
      טבאש חג'אג'רה</option>
                            <option value="3480">נווה
      ים</option>
                            <option value="3584">מנשיה</option>
                            <option value="3591">אעבלין</option>
                            <option value="31">קרית
      אתא</option>
                            <option value="32">קרית
      ביאליק</option>
                            <option value="33">קרית
      מוצקין</option>
                            <option value="34">קרית
      ים</option>
                            <option value="429">רכסים</option>
                            <option value="627">אושה</option>
                            <option value="946">יגור</option>
                            <option value="1013">כפר
      ביאליק</option>
                            <option value="1025">כפר
      המכבי</option>
                            <option value="1039">כפר
      חסידים א'</option>
                            <option value="1418">קריות</option>
                            <option value="1448">רמת
      יוחנן</option>
                            <option value="1613">קרית
      בנימין</option>
                            <option value="3454">קרית
      חיים</option>
                            <option value="3455">קרית
      שמואל</option>
                            <option value="3471">כפר
      חסידים ב'</option>
                            <option value="13">חדרה</option>
                            <option value="404">גן
      שמואל</option>
                            <option value="652">אליכין</option>
                            <option value="1094">מאור</option>
                            <option value="1112">מדרשת
      רופין</option>
                            <option value="1652">חופים</option>
                            <option value="2923">פארק
      תעשיות עמק
      חפר</option>
                            <option value="3367">בית
      ליד</option>
                            <option value="26">נתניה</option>
                            <option value="85">פרדסיה</option>
                            <option value="87">אבן
      יהודה</option>
                            <option value="88">כפר
      יונה</option>
                            <option value="719">בית
      יהושע</option>
                            <option value="1511">שער
      אפרים</option>
                            <option value="1714">אודים</option>
                            <option value="2938">קדימה
      צורן</option>
                            <option value="3478">אילנות</option>
                            <option value="3582">מועצה
      אזורית לב
      השרון</option>
                            <option value="3589">טייבה</option>
                            <option value="3592">קלנסווה</option>
                            <option value="5">בנימינה
      גבעת עדה</option>
                            <option value="12">זכרון
      יעקב</option>
                            <option value="53">קיסריה</option>
                            <option value="454">גבעת
      עדה</option>
                            <option value="597">אביאל</option>
                            <option value="621">אור
      עקיבא</option>
                            <option value="649">אלוני
      יצחק</option>
                            <option value="716">בית
      חנניה</option>
                            <option value="787">גבעת
      ניל''י</option>
                            <option value="816">גן
      השומרון</option>
                            <option value="1130">מי עמי</option>
                            <option value="1158">מעגן
      מיכאל</option>
                            <option value="1162">מעיין
      צבי</option>
                            <option value="1196">משמרות</option>
                            <option value="1353">עמיקם</option>
                            <option value="1378">פרדס
      חנה כרכור</option>
                            <option value="1430">רגבים</option>
                            <option value="1481">שדות
      ים</option>
                            <option value="1543">תלמי
      אלעזר</option>
                            <option value="1651">קציר
      חריש</option>
                            <option value="2937">עין
      עירון</option>
                            <option value="10">הרצליה</option>
                            <option value="39">רמת
      השרון</option>
                            <option value="586">רשפון</option>
                            <option value="813">גליל
      ים</option>
                            <option value="3440">כפר
      שמריהו</option>
                            <option value="3547">הכפר
      הירוק</option>
                            <option value="19">כפר
      סבא</option>
                            <option value="40">רעננה</option>
                            <option value="207">צופית</option>
                            <option value="670">אייל</option>
                            <option value="702">בית
      ברל</option>
                            <option value="1049">כפר
      מל''ל</option>
                            <option value="1257">ניר
      אליהו</option>
                            <option value="1441">רמות
      השבים</option>
                            <option value="1772">גבעת
      ח''ן</option>
                            <option value="1780">נווה
      ימין</option>
                            <option value="1783">שדה
      ורבורג</option>
                            <option value="2920">כפר
      הדר</option>
                            <option value="42">תל
      אביב יפו</option>
                            <option value="27">סביון</option>
                            <option value="69">קרית
      אונו</option>
                            <option value="71">גבעת
      שמואל</option>
                            <option value="72">גני
      תקווה</option>
                            <option value="109">אור
      יהודה</option>
                            <option value="688">בארות
      יצחק</option>
                            <option value="1534">תל
      השומר</option>
                            <option value="1776">גת
      רימון</option>
                            <option value="1779">כפר
      נופך</option>
                            <option value="2936">יהוד
      מונוסון</option>
                            <option value="3986">כפר
      אז''ר</option>
                            <option value="3987">רמת
      פנקס</option>
                            <option value="6">בת ים</option>
                            <option value="14">חולון</option>
                            <option value="137">אזור</option>
                            <option value="30">פתח
      תקווה</option>
                            <option value="115">ראש
      העין</option>
                            <option value="131">אלעד</option>
                            <option value="781">גבעת
      השלושה</option>
                            <option value="1058">כפר
      סירקין</option>
                            <option value="1170">מעש</option>
                            <option value="1246">נחשונים</option>
                            <option value="3443">כפר
      קאסם</option>
                            <option value="35">ראשון
      לציון</option>
                            <option value="585">בית
      דגן</option>
                            <option value="1035">כפר
      חב"ד</option>
                            <option value="1194">משמר
      השבעה</option>
                            <option value="3370">צריפין</option>
                            <option value="7">גבעתיים</option>
                            <option value="38">רמת גן</option>
                            <option value="128">בני
      ברק</option>
                            <option value="22">מודיעין
      מכבים רעות</option>
                            <option value="41">שוהם</option>
                            <option value="101">לפיד</option>
                            <option value="103">כפר
      האורנים</option>
                            <option value="104">שילת</option>
                            <option value="272">חשמונאים</option>
                            <option value="583">מודיעין
      עילית</option>
                            <option value="1067">כפר
      רות</option>
                            <option value="21">לוד</option>
                            <option value="37">רמלה</option>
                            <option value="24">נס
      ציונה</option>
                            <option value="36">רחובות</option>
                            <option value="127">באר
      יעקב</option>
                            <option value="408">כפר
      הנגיד</option>
                            <option value="715">בית
      חנן</option>
                            <option value="727">בית
      עובד</option>
                            <option value="1120">מזכרת
      בתיה</option>
                            <option value="1277">נצר
      סירני</option>
                            <option value="3581">אירוס</option>
                            <option value="3981">קרית
      עקרון</option>
                            <option value="2">אשדוד</option>
                            <option value="79">אשקלון</option>
                            <option value="734">בית
      רבן</option>
                            <option value="744">בני
      דרום</option>
                            <option value="819">גן
      יבנה</option>
                            <option value="2934">גן
      דרום</option>
                            <option value="106">להבים</option>
                            <option value="107">עומר</option>
                            <option value="108">מיתר</option>
                            <option value="1527">תאשור</option>
                            <option value="1763">באר
      שבע</option>
                            <option value="1764">רהט</option>
                            <option value="3391">רמת
      חובב</option>
                            <option value="3405">גבעות
      בר</option>
                            <option value="1">אילת</option>
                            <option value="237">בית
      הערבה</option>
                            <option value="318">מצפה
      שלם</option>
                            <option value="686">באר
      אורה</option>
                            <option value="962">יטבתה</option>
                            <option value="1232">אבנת</option>
                            <option value="3418">צוקים</option>
                            <option value="3438">עבדה</option>
                            <option value="3576">עין
      בוקק</option>
                            <option value="44">כרמיאל</option>
                            <option value="402">גילון</option>
                            <option value="413">משגב</option>
                            <option value="1396">צורית</option>
                            <option value="1725">חרשים</option>
                            <option value="1726">יובלים</option>
                            <option value="1727">יעד</option>
                            <option value="1728">קורנית</option>
                            <option value="1729">עצמון
      שגב</option>
                            <option value="1730">לבון</option>
                            <option value="1731">מורשת</option>
                            <option value="1732">מנוף</option>
                            <option value="1748">אשחר</option>
                            <option value="1749">אבטליון</option>
                            <option value="1750">הר
      חלוץ</option>
                            <option value="1751">הררית</option>
                            <option value="1752">טל אל</option>
                            <option value="1753">כמון</option>
                            <option value="1754">לוטם</option>
                            <option value="1755">מורן</option>
                            <option value="1756">מכמנים</option>
                            <option value="1757">מצפה
      אבי''ב</option>
                            <option value="1758">שורשים</option>
                            <option value="1759">שכניה</option>
                            <option value="1760">רקפת</option>
                            <option value="1761">תובל</option>
                            <option value="1765">מעלה
      צביה</option>
                            <option value="3482">כיסרא
      סומיע</option>
                            <option value="3577">יחד</option>
                            <option value="3578">פלך</option>
                            <option value="3579">עמקה</option>
                            <option value="3588">מג'ד אל
      כרום</option>
                            <option value="3850">דייר
      חנא</option>
                            <option value="3989">עצמון</option>
                            <option value="3103">גפן</option>
                            <option value="3366">בית
      חנינא</option>
                            <option value="3466">בטחה</option>
                            <option value="3553">בית
      וזן</option>
                            <option value="3475">מצוקי
      דרגות</option>
                            <option value="3597">לוטן</option>
                            <option value="3448">איטליה</option>
                            <option value="3449">ארה"ב</option>
                            <option value="3450">גרמניה</option>
                            <option value="4">בית
      שמש</option>
                            <option value="683">אשתאול</option>
                            <option value="885">זנוח</option>
                            <option value="986">ישעי</option>
                            <option value="1127">מחסיה</option>
                            <option value="1243">נחם</option>
                            <option value="1403">צרעה</option>
                            <option value="3861">מפעלי
      נחם הר טוב</option>
                            <option value="49">מבשרת
      ציון</option>
                            <option value="116">אבו
      גוש</option>
                            <option value="118">מוצא
      עילית</option>
                            <option value="122">נווה
      אילן</option>
                            <option value="123">נטף</option>
                            <option value="125">שורש</option>
                            <option value="134">מעלה
      אדומים</option>
                            <option value="225">אלמוג</option>
                            <option value="261">הר אדר</option>
                            <option value="263">ורד
      יריחו</option>
                            <option value="283">כפר
      אדומים</option>
                            <option value="315">מצפה
      יריחו</option>
                            <option value="365">קליה</option>
                            <option value="412">מעלה
      החמישה</option>
                            <option value="605">אבן
      ספיר</option>
                            <option value="622">אורה</option>
                            <option value="669">אפרת</option>
                            <option value="712">בית
      זית</option>
                            <option value="723">בית
      מאיר</option>
                            <option value="726">בית
      נקופה</option>
                            <option value="761">בר
      גיורא</option>
                            <option value="777">גבע
      בנימין</option>
                            <option value="784">גבעת
      יערים</option>
                            <option value="1006">כסלון-ב</option>
                            <option value="1116">מושבי
      הסביבה</option>
                            <option value="1129">מטע</option>
                            <option value="1272">נס
      הרים</option>
                            <option value="1337">עין
      נקובא</option>
                            <option value="1341">עין
      ראפה</option>
                            <option value="1348">עלמון</option>
                            <option value="1350">עמינדב</option>
                            <option value="1388">צובה</option>
                            <option value="1393">צור
      הדסה</option>
                            <option value="1419">קרית
      יערים</option>
                            <option value="1420">קרית
      ענבים</option>
                            <option value="1452">רמת
      רזיאל</option>
                            <option value="1453">רמת
      רחל</option>
                            <option value="1488">שואבה</option>
                            <option value="1782">מוצא</option>
                            <option value="2988">מבוא
      ביתר</option>
                            <option value="3574">שלומציון</option>
                            <option value="3593">מושבים</option>
                            <option value="3595">בית
      חאנון</option>
                            <option value="8">גדרה</option>
                            <option value="54">יבנה</option>
                            <option value="592">בני
      עי''ש</option>
                            <option value="714">בית
      חלקיה</option>
                            <option value="948">יד
      בנימין</option>
                            <option value="1364">עשרת</option>
                            <option value="3551">מפעלי
      כנות</option>
                            <option value="3970">כפר
      אביב</option>
                            <option value="3971">כפר
      מרדכי</option>
                            <option value="3972">מישר</option>
                            <option value="3973">משגב
      דב</option>
                            <option value="3974">שדמה</option>
                            <option value="3975">ערוגות</option>
                            <option value="3976">כפר
      אחים</option>
                            <option value="3977">אחווה</option>
                            <option value="3978">בני
      ראם</option>
                            <option value="3979">גני טל</option>
                            <option value="3980">גן
      הדרום</option>
                            <option value="3991">מחנה
      תל נוף</option>
                            <option value="971">יערה</option>
                            <option value="1525">שתולה</option>
                            <option value="209">חרות</option>
                            <option value="745">בני
      דרור</option>
                            <option value="773">גאולים</option>
                            <option value="964">ינוב</option>
                            <option value="1028">כפר הס</option>
                            <option value="1197">משמרת</option>
                            <option value="1307">עזריאל</option>
                            <option value="1328">עין
      ורד</option>
                            <option value="1394">צור
      משה</option>
                            <option value="1549">תנובות</option>
                            <option value="1781">נורדיה</option>
                            <option value="112">מגשימים</option>
                            <option value="210">אחיעזר</option>
                            <option value="423">שעלבים</option>
                            <option value="437">ניר
      צבי</option>
                            <option value="446">מושב
      גימזו</option>
                            <option value="452">טל שחר</option>
                            <option value="594">מצליח</option>
                            <option value="633">אחיסמך</option>
                            <option value="704">בית
      גמליאל</option>
                            <option value="718">בית
      חשמונאי</option>
                            <option value="724">בית
      נחמיה</option>
                            <option value="728">בית
      עוזיאל</option>
                            <option value="730">בית
      עריף</option>
                            <option value="741">בן
      זכאי</option>
                            <option value="743">בן שמן</option>
                            <option value="746">בני
      עטרות</option>
                            <option value="751">בניה</option>
                            <option value="759">בקוע</option>
                            <option value="768">ברקת</option>
                            <option value="780">גבעת
      ברנר</option>
                            <option value="806">גיזו</option>
                            <option value="808">גינתון</option>
                            <option value="814">גמזו</option>
                            <option value="881">זיתן</option>
                            <option value="893">חדיד</option>
                            <option value="935">טירת
      יהודה</option>
                            <option value="947">יגל</option>
                            <option value="953">יד
      רמב''ם</option>
                            <option value="987">ישרש</option>
                            <option value="1010">כפר
      אוריה</option>
                            <option value="1016">כפר בן
      נון</option>
                            <option value="1023">כפר
      דניאל</option>
                            <option value="1041">כפר
      טרומן</option>
                            <option value="1069">כפר
      שמואל</option>
                            <option value="1119">מזור</option>
                            <option value="1189">משמר
      איילון</option>
                            <option value="1190">משמר
      דוד</option>
                            <option value="1242">נחלים</option>
                            <option value="1308">עזריה</option>
                            <option value="1367">פדיה</option>
                            <option value="1384">פתחיה</option>
                            <option value="1398">צלפון</option>
                            <option value="1408">קדרון</option>
                            <option value="1439">רינתיה</option>
                            <option value="1762">כרמי
      יוסף</option>
                            <option value="2915">השפלה</option>
                            <option value="3487">צופיה</option>
                            <option value="3488">קבוצת
      יבנה</option>
                            <option value="3552">בן שמן
      כפר נוער</option>
                            <option value="3859">קרית
      שדה התעופה</option>
                            <option value="3862">באקה א
      שרקיה</option>
                            <option value="3982">כפר
      ביל''ו</option>
                            <option value="3983">בית
      אלעזרי</option>
                            <option value="3474">הוד
      השרון</option>
                            <option value="3962">עדנים</option>
                            <option value="3963">אלישמע</option>
                            <option value="3964">נווה
      ירק</option>
                            <option value="3965">ירקונה</option>
                            <option value="3966">גני עם</option>
                            <option value="3985">שדי
      חמד</option>
                            <option value="223">אלון
      שבות</option>
                            <option value="226">אלעזר</option>
                            <option value="247">בת עין</option>
                            <option value="249">גבעות</option>
                            <option value="262">הר
      גילה</option>
                            <option value="284">כפר
      אלדד</option>
                            <option value="287">כפר
      עציון</option>
                            <option value="288">כרמי
      צור</option>
                            <option value="294">מגדל
      עוז</option>
                            <option value="308">מעלה
      עמוס</option>
                            <option value="309">מעלה
      רחבעם</option>
                            <option value="329">נוקדים
      - אל דוד</option>
                            <option value="357">פני
      קדם</option>
                            <option value="370">ראש
      צורים</option>
                            <option value="393">תקוע</option>
                            <option value="1215">נווה
      דניאל</option>
                            <option value="1229">נוקדים</option>
                            <option value="1407">קדר</option>
                            <option value="3880">מצד</option>
                            <option value="3881">שדה
      בועז</option>
                            <option value="3969">חרמלה</option>
                            <option value="89">בת חפר</option>
                            <option value="394">בית
      הלוי</option>
                            <option value="600">אביחיל</option>
                            <option value="632">אחיטוב</option>
                            <option value="656">אלישיב</option>
                            <option value="689">בארותיים</option>
                            <option value="694">בורגתה</option>
                            <option value="695">בחן</option>
                            <option value="717">בית
      חרות</option>
                            <option value="721">בית
      ינאי</option>
                            <option value="772">גאולי
      תימן</option>
                            <option value="782">גבעת
      חיים איחוד</option>
                            <option value="790">גבעת
      שפירא</option>
                            <option value="818">גן
      יאשיה</option>
                            <option value="861">הדר עם</option>
                            <option value="869">המעפיל</option>
                            <option value="871">העוגן</option>
                            <option value="889">חבצלת
      השרון</option>
                            <option value="896">חגלה</option>
                            <option value="902">חופית</option>
                            <option value="908">חיבת
      ציון</option>
                            <option value="914">חניאל</option>
                            <option value="927">חרב
      לאת</option>
                            <option value="950">יד חנה</option>
                            <option value="1018">כפר
      הרא''ה</option>
                            <option value="1030">כפר
      ויתקין</option>
                            <option value="1037">כפר
      חיים</option>
                            <option value="1047">כפר
      מונש</option>
                            <option value="1136">מכמורת</option>
                            <option value="1155">מעברות</option>
                            <option value="1195">משמר
      השרון</option>
                            <option value="1302">עולש</option>
                            <option value="1322">עין
      החורש</option>
                            <option value="1392">צוקי
      ים</option>
                            <option value="1494">שושנת
      העמקים</option>
                            <option value="1578">בת חן</option>
                            <option value="1715">אומץ</option>
                            <option value="1766">בית
      יצחק שער חפר</option>
                            <option value="1767">ביתן
      אהרן</option>
                            <option value="3109">כפר
      ידידיה</option>
                            <option value="3585">גבעת
      חיים מאוחד</option>
                            <option value="3882">בית
      חזון</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input id="registrationAddressStreet1" type="text" value="" placeholder="רחוב ומספר">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="registrationAddressZip1" type="text" value="" placeholder="מיקוד">
                    </div>
                </div>
            </div>

            <div id="payment2">
                <input id="payment-checkbox-2" type="checkbox" value="payment"><label>תשלום מס' 2</label><label id="payment-name-2"></label><abbr class="nadlan-tooltip" title="נא הסר את ה V במידה ואינך מעוניין כי תצא חשבונית על מבקר זה." rel="tooltip"> ? </abbr><br>
                <label>פרטי תשלום</label><br>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="invoiceN2" type="text" value="" placeholder="שם העסק להפקת חשבונית">
                    </div>
                    <div class="col-sm-6">
                        <input id="registrationNo2" type="text" value="" placeholder=" מס עוסק מורשה / ח.פ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="registrationAddress2" type="text" value="" placeholder="עיר רחוב ומספר">
                    </div>
                    <div class="col-sm-6">
                        <input id="amount2" type="text" value="" placeholder="סכום לתשלום">
                    </div>
                </div>

            </div>

            <div id="payment3">
                <input id="payment-checkbox-3" type="checkbox" value="payment"> <label>תשלום מס' 3</label><label id="payment-name-3"></label><abbr class="nadlan-tooltip" title="נא הסר את ה V במידה ואינך מעוניין כי תצא חשבונית על מבקר זה." rel="tooltip"> ? </abbr><br>
                <label>פרטי תשלום</label><br>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="invoiceN3" type="text" value="" placeholder="שם העסק להפקת חשבונית">
                    </div>
                    <div class="col-sm-6">
                        <input id="registrationNo3" type="text" value="" placeholder=" מס עוסק מורשה / ח.פ">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input id="registrationAddress3" type="text" value="" placeholder="עיר רחוב ומספר">
                    </div>
                    <div class="col-sm-6">
                        <input id="amount3" type="text" value="" placeholder="סכום לתשלום">
                    </div>
                </div>


            </div>

            <div id="register-paypment-area">
                                    <!--<div class="row">
                                        <div class="col-sm-11">
                                            <input id="content" type="checkbox" value="content" checked>
                                            <label>אני מעוניין לקבל תוכן פרסומי ממרכז הבנייה הישראלי </label><br>
                    
                                        </div>
                                    </div>-->
                <div class="row">
                    <div class="col-sm-11">
                        <input id="terms-of-use" type="checkbox" value="terms">
                        <label>קראתי, הבנתי ואני מסכים/ה   </label>
                        <a href="<?php echo home_url( '/' ); ?>wp-content/themes/Tyler/siteRules_2015.pdf" target="_blank"> לתקנון האתר </a><a href="<?php echo home_url( '/' ); ?>wp-content/themes/Tyler/nadlanCityRules_2015.pdf" target="_blank">ולתקנון עיר הנדל"ן</a><br>
                        <label>ניתן לבטל את ההזמנה עד ה- 14 לאוקטובר בחיוב של 750 ש"ח בתוספת מע"מ למשתתף</label><br>
                        <label>ביטול לאחר ה-14 לאוקטובר יחוייב בדמי ביטול מלאים.</label>

                    </div>
                </div>
                <div class="row">
				<div class="col-sm-6">
                        <button id="siugnUp" class="btn btn-secondary">הרשם ושלם באמצעות נציג</button>
                    </div>
                    <div class="col-sm-6">
                        <button id="siugnUpWithPay" class="btn btn-secondary">השלם הרשמה באמצעות אשראי</button>
                        <!--<label id="discount-text">הרשמה באשראי דרך האתר מקנה 5% הנחה</label>-->
                    </div>
                    <!--<div class="col-sm-6">
                        <button id="siugnUp" class="btn btn-secondary">הרשם ושלם באמצעות נציג</button>
                    </div-->
                    <form></form>
                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="formPay">
                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="business" value=" treut-facilitator@cambium.co.il" />
                        <input type="hidden" name="charset" value="utf-8">
                        <input type="hidden" name="item_name" value="עיר הנדלן" />
                        <input type="hidden" name="item_number" value="123" />
                        <input type="hidden" name="currency_code" value="ILS" />
                        <input type="hidden" name="amount" value="100" />
                        <input type="hidden" name="return" value="http://nadlancity.cambium-team.com/?page_id=48/#done" />
                        <input type="hidden" name="notify_url" value="http://nadlancity.cambium-team.com/?page_id=310" />
                        <input type="hidden" name="cancel_return" value="http://nadlancity.cambium-team.com/?page_id=48/#cancel" /> <br />
                                                    <!--<input type="image" name="submit" border="0"
                                                                                        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                                                                                        alt="PayPal - The safer, easier way to pay online">-->
                    </form>

                </div>
            </div>
        </div>
        <!--</div>-->
    </form>
</div>
<?php endwhile; // end of the loop. ?>
<?php get_footer();?>