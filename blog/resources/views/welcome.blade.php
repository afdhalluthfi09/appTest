<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            }
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
         <script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.21708" type="text/javascript"></script>
        <script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.21708" type="text/javascript"></script>
        <script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.21708" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
        <script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
        <script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.21708" type="text/javascript"></script>
        <script type="text/javascript">
	JotForm.init(function(){
if (window.JotForm && JotForm.accessible) $('input_21').setAttribute('tabindex',0);
      JotForm.setPhoneMaskingValidator( 'input_24_full', '(###) ###-####' );
if (window.JotForm && JotForm.accessible) $('input_46').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_26').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_31').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_47').setAttribute('tabindex',0);

 JotForm.calendarMonths = ["January","February","March","April","May","June","July","August","September","October","November","December"];
 JotForm.calendarDays = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
 JotForm.calendarOther = {"today":"Today"};
 var languageOptions = document.querySelectorAll('#langList li'); 
 for(var langIndex = 0; langIndex < languageOptions.length; langIndex++) { 
   languageOptions[langIndex].on('click', function(e) { setTimeout(function(){ JotForm.setCalendar("34", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""}); }, 0); });
 } 
 JotForm.setCalendar("34", false, {"days":{"monday":true,"tuesday":true,"wednesday":true,"thursday":true,"friday":true,"saturday":true,"sunday":true},"future":true,"past":true,"custom":false,"ranges":false,"start":"","end":""});
if (window.JotForm && JotForm.accessible) $('input_37').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_38').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_43').setAttribute('tabindex',0);
	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;
    /*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,null,null,{"name":"7","qid":"7","text":"Submit Form","type":"control_button"},null,null,null,null,null,{"name":"anggotaSibakul","qid":"13","text":"Anggota SiBakul","type":"control_head"},null,null,null,null,null,{"description":"","name":"name","qid":"19","text":"Name","type":"control_fullname"},null,{"description":"","name":"nikno","qid":"21","subLabel":"","text":"NIK (No KTP)","type":"control_textbox"},null,null,{"description":"","name":"noHp","qid":"24","text":"No HP","type":"control_phone"},null,{"description":"","name":"tempatLahir","qid":"26","subLabel":"","text":"Tempat Lahir","type":"control_textarea"},{"description":"","name":"jenisKelamin","qid":"27","text":"Jenis Kelamin","type":"control_radio"},{"description":"","name":"email","qid":"28","subLabel":"example@example.com","text":"Email","type":"control_email"},{"description":"","name":"jenjangPendidikan","qid":"29","subLabel":"","text":"Jenjang Pendidikan","type":"control_dropdown"},{"description":"","name":"disabilitas","qid":"30","subLabel":"","text":"Disabilitas","type":"control_dropdown"},{"description":"","name":"namaUsaha","qid":"31","subLabel":"","text":"Nama Usaha Merek","type":"control_textbox"},null,null,{"description":"","name":"mulaiMenjalankan","qid":"34","text":"Mulai Menjalankan Usaha (tgl\u002Fbulan\u002Ftahun)","type":"control_datetime"},null,null,{"description":"","name":"asetUsaha","qid":"37","subLabel":"","text":"Aset Usaha (Diluar Tanah\u002FBangunan)","type":"control_textbox"},{"description":"","name":"omsetBulanan","qid":"38","subLabel":"","text":"Omset Bulanan*","type":"control_textbox"},null,{"description":"","name":"typeA","qid":"40","subLabel":"","text":"Type a question","type":"control_dropdown"},null,{"description":"","name":"sektorUsaha","qid":"42","subLabel":"","text":"Sektor Usaha","type":"control_dropdown"},{"description":"","name":"produkUtama","qid":"43","subLabel":"","text":"Produk utama","type":"control_textbox"},{"name":"personal","qid":"44","text":"personal","type":"control_collapse"},{"name":"usaha","qid":"45","text":"usaha","type":"control_collapse"},{"description":"","name":"alamatKtp","qid":"46","subLabel":"","text":"Alamat KTP","type":"control_textarea"},{"description":"","name":"typeA47","qid":"47","subLabel":"","text":"Type a question","type":"control_textarea"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,{"name":"7","qid":"7","text":"Submit Form","type":"control_button"},null,null,null,null,null,{"name":"anggotaSibakul","qid":"13","text":"Anggota SiBakul","type":"control_head"},null,null,null,null,null,{"description":"","name":"name","qid":"19","text":"Name","type":"control_fullname"},null,{"description":"","name":"nikno","qid":"21","subLabel":"","text":"NIK (No KTP)","type":"control_textbox"},null,null,{"description":"","name":"noHp","qid":"24","text":"No HP","type":"control_phone"},null,{"description":"","name":"tempatLahir","qid":"26","subLabel":"","text":"Tempat Lahir","type":"control_textarea"},{"description":"","name":"jenisKelamin","qid":"27","text":"Jenis Kelamin","type":"control_radio"},{"description":"","name":"email","qid":"28","subLabel":"example@example.com","text":"Email","type":"control_email"},{"description":"","name":"jenjangPendidikan","qid":"29","subLabel":"","text":"Jenjang Pendidikan","type":"control_dropdown"},{"description":"","name":"disabilitas","qid":"30","subLabel":"","text":"Disabilitas","type":"control_dropdown"},{"description":"","name":"namaUsaha","qid":"31","subLabel":"","text":"Nama Usaha Merek","type":"control_textbox"},null,null,{"description":"","name":"mulaiMenjalankan","qid":"34","text":"Mulai Menjalankan Usaha (tgl\u002Fbulan\u002Ftahun)","type":"control_datetime"},null,null,{"description":"","name":"asetUsaha","qid":"37","subLabel":"","text":"Aset Usaha (Diluar Tanah\u002FBangunan)","type":"control_textbox"},{"description":"","name":"omsetBulanan","qid":"38","subLabel":"","text":"Omset Bulanan*","type":"control_textbox"},null,{"description":"","name":"typeA","qid":"40","subLabel":"","text":"Type a question","type":"control_dropdown"},null,{"description":"","name":"sektorUsaha","qid":"42","subLabel":"","text":"Sektor Usaha","type":"control_dropdown"},{"description":"","name":"produkUtama","qid":"43","subLabel":"","text":"Produk utama","type":"control_textbox"},{"name":"personal","qid":"44","text":"personal","type":"control_collapse"},{"name":"usaha","qid":"45","text":"usaha","type":"control_collapse"},{"description":"","name":"alamatKtp","qid":"46","subLabel":"","text":"Alamat KTP","type":"control_textarea"},{"description":"","name":"typeA47","qid":"47","subLabel":"","text":"Type a question","type":"control_textarea"}]);}, 20); 
</script>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.21708" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f30e2a790832f3e96009402"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css?3.3.21708" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.21708" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: inline-block;
    float: left;
    text-align: left;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
    }
  
    .form-all {
      color: #2C3345;
    }
    .form-header-group .form-header {
      color: #2C3345;
    }
    .form-header-group .form-subHeader {
      color: #2C3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #2C3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: #ecedf3;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/guest_f94a8270aad15388/form_files/sibakul-logo2.5fb3317e624557.46683550.png");
      display: inline-block;
      height: 53px;
      position: absolute;
      background-size: 378px 53px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all {
      margin-top: 73px !important;
    }
    .form-all:before {
      top: -63px;
      background-position: top center;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/.form-label.form-label-auto {
        
        display: inline-block;
        float: left;
        text-align: left;
      
      }
    /* Injected CSS Code */
</style>

        
    </head>
    <body class="antialiased">

<form class="jotform-form" action="https://submit.jotform.com/submit/203161684732454/" method="post" name="form_203161684732454" id="203161684732454" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="203161684732454" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <div class="formLogoWrapper Center">
      <img class="formLogoImg" src="https://www.jotform.com/uploads/guest_f94a8270aad15388/form_files/sibakul-logo2.5fb3317e624557.46683550.png" height="53" width="378">
    </div>
    <style>
      .formLogoWrapper { display:inline-block; position: absolute; width: 100%;} .form-all:before { background: none !important;} .formLogoWrapper.Center { top: -63px; text-align: center;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_13" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_13" class="form-header" data-component="header">
              Anggota SiBakul
            </h1>
            <div id="subHeader_13" class="form-subHeader">
              no id 099099291
            </div>
          </div>
        </div>
      </li>
      <ul class="form-section-closed" style="height: 84px;clear:both;" id="section_44">
        <li id="cid_44" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_44" data-component="collapse">
            <span class="form-collapse-mid" id="collapse-text_44">
              personal
            </span>
            <span class="form-collapse-right form-collapse-right-hide">
               
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_21">
          <label class="form-label form-label-left form-label-auto" id="label_21" for="input_21"> NIK (No KTP) </label>
          <div id="cid_21" class="form-input" data-layout="half">
            <input type="text" id="input_21" name="q21_nikno" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_21" />
          </div>
        </li>
        <li class="form-line" data-type="control_fullname" id="id_19">
          <label class="form-label form-label-left form-label-auto" id="label_19" for="first_19"> Name </label>
          <div id="cid_19" class="form-input" data-layout="full">
            <div data-wrapper-react="true">
              <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                <input type="text" id="first_19" name="q19_name[first]" class="form-textbox" size="10" value="" data-component="first" aria-labelledby="label_19 sublabel_19_first" />
                <label class="form-sub-label" for="first_19" id="sublabel_19_first" style="min-height:13px" aria-hidden="false"> First Name </label>
              </span>
              <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                <input type="text" id="last_19" name="q19_name[last]" class="form-textbox" size="15" value="" data-component="last" aria-labelledby="label_19 sublabel_19_last" />
                <label class="form-sub-label" for="last_19" id="sublabel_19_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_phone" id="id_24">
          <label class="form-label form-label-left form-label-auto" id="label_24" for="input_24_full"> No HP </label>
          <div id="cid_24" class="form-input" data-layout="half">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="input_24_full" name="q24_noHp[full]" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" style="width:310px" data-masked="true" value="" placeholder="(000) 000-0000" data-component="phone" aria-labelledby="label_24 sublabel_24_masked" />
              <label class="form-sub-label" for="input_24_full" id="sublabel_24_masked" style="min-height:13px" aria-hidden="false"> Please enter a valid phone number. </label>
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_textarea" id="id_46">
          <label class="form-label form-label-left form-label-auto" id="label_46" for="input_46"> Alamat KTP </label>
          <div id="cid_46" class="form-input" data-layout="full">
            <textarea id="input_46" class="form-textarea" name="q46_alamatKtp" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_46"></textarea>
          </div>
        </li>
        <li class="form-line" data-type="control_textarea" id="id_26">
          <label class="form-label form-label-left form-label-auto" id="label_26" for="input_26"> Tempat Lahir </label>
          <div id="cid_26" class="form-input" data-layout="full">
            <textarea id="input_26" class="form-textarea" name="q26_tempatLahir" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_26"></textarea>
          </div>
        </li>
        <li class="form-line" data-type="control_radio" id="id_27">
          <label class="form-label form-label-left form-label-auto" id="label_27" for="input_27"> Jenis Kelamin </label>
          <div id="cid_27" class="form-input" data-layout="full">
            <div class="form-single-column" role="group" aria-labelledby="label_27" data-component="radio">
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" class="form-radio" id="input_27_0" name="q27_jenisKelamin" value="Laki-Laki" />
                <label id="label_input_27_0" for="input_27_0"> Laki-Laki </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" class="form-radio" id="input_27_1" name="q27_jenisKelamin" value="Perempuan" />
                <label id="label_input_27_1" for="input_27_1"> Perempuan </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_email" id="id_28">
          <label class="form-label form-label-left form-label-auto" id="label_28" for="input_28"> Email </label>
          <div id="cid_28" class="form-input" data-layout="half">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="email" id="input_28" name="q28_email" class="form-textbox validate[Email]" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_28 sublabel_input_28" />
              <label class="form-sub-label" for="input_28" id="sublabel_input_28" style="min-height:13px" aria-hidden="false"> example@example.com </label>
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_dropdown" id="id_29">
          <label class="form-label form-label-left form-label-auto" id="label_29" for="input_29"> Jenjang Pendidikan </label>
          <div id="cid_29" class="form-input" data-layout="half">
            <select class="form-dropdown" id="input_29" name="q29_jenjangPendidikan" style="width:310px" data-component="dropdown" aria-labelledby="label_29">
              <option value=""> Please Select </option>
              <option value="SMA"> SMA </option>
              <option value="D3"> D3 </option>
              <option value="S1"> S1 </option>
              <option value="S2"> S2 </option>
              <option value="S3"> S3 </option>
            </select>
          </div>
        </li>
        <li class="form-line" data-type="control_dropdown" id="id_30">
          <label class="form-label form-label-left form-label-auto" id="label_30" for="input_30"> Disabilitas </label>
          <div id="cid_30" class="form-input" data-layout="half">
            <select class="form-dropdown" id="input_30" name="q30_disabilitas" style="width:310px" data-component="dropdown" aria-labelledby="label_30">
              <option value=""> Please Select </option>
              <option value="Tidak Ada"> Tidak Ada </option>
              <option value="Tunarungu"> Tunarungu </option>
              <option value="Tunawicara"> Tunawicara </option>
              <option value="Tunadaksa"> Tunadaksa </option>
              <option value="Tunagrahita"> Tunagrahita </option>
              <option value="Tunaganda"> Tunaganda </option>
            </select>
          </div>
        </li>
      </ul>
      <ul class="form-section-closed" style="height: 84px;clear:both;" id="section_45">
        <li id="cid_45" class="form-input-wide" data-type="control_collapse">
          <div class="form-collapse-table" id="collapse_45" data-component="collapse">
            <span class="form-collapse-mid" id="collapse-text_45">
              usaha
            </span>
            <span class="form-collapse-right form-collapse-right-hide">
               
            </span>
          </div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_31">
          <label class="form-label form-label-left form-label-auto" id="label_31" for="input_31"> Nama Usaha Merek </label>
          <div id="cid_31" class="form-input" data-layout="half">
            <input type="text" id="input_31" name="q31_namaUsaha" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_31" />
          </div>
        </li>
        <li class="form-line" data-type="control_textarea" id="id_47">
          <label class="form-label form-label-left form-label-auto" id="label_47" for="input_47"> Type a question </label>
          <div id="cid_47" class="form-input" data-layout="full">
            <textarea id="input_47" class="form-textarea" name="q47_typeA47" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_47"></textarea>
          </div>
        </li>
        <li class="form-line" data-type="control_datetime" id="id_34">
          <label class="form-label form-label-left form-label-auto" id="label_34" for="lite_mode_34"> Mulai Menjalankan Usaha (tgl/bulan/tahun) </label>
          <div id="cid_34" class="form-input" data-layout="half">
            <div data-wrapper-react="true">
              <div style="display:none">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="tel" class="form-textbox validate[limitDate]" id="month_34" name="q34_mulaiMenjalankan[month]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="off" aria-labelledby="label_34 sublabel_34_month" />
                  <span class="date-separate" aria-hidden="true">
                     -
                  </span>
                  <label class="form-sub-label" for="month_34" id="sublabel_34_month" style="min-height:13px" aria-hidden="false"> Month </label>
                </span>
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="tel" class="form-textbox validate[limitDate]" id="day_34" name="q34_mulaiMenjalankan[day]" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="off" aria-labelledby="label_34 sublabel_34_day" />
                  <span class="date-separate" aria-hidden="true">
                     -
                  </span>
                  <label class="form-sub-label" for="day_34" id="sublabel_34_day" style="min-height:13px" aria-hidden="false"> Day </label>
                </span>
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="tel" class="form-textbox validate[limitDate]" id="year_34" name="q34_mulaiMenjalankan[year]" size="4" data-maxlength="4" data-age="" maxLength="4" value="" autoComplete="off" aria-labelledby="label_34 sublabel_34_year" />
                  <label class="form-sub-label" for="year_34" id="sublabel_34_year" style="min-height:13px" aria-hidden="false"> Year </label>
                </span>
              </div>
              <span class="form-sub-label-container" style="vertical-align:top">
                <input type="text" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_34" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="off" aria-labelledby="label_34 sublabel_34_litemode" />
                <img class=" newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_34_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
                <label class="form-sub-label" for="lite_mode_34" id="sublabel_34_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
              </span>
            </div>
          </div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_37">
          <label class="form-label form-label-left form-label-auto" id="label_37" for="input_37"> Aset Usaha (Diluar Tanah/Bangunan) </label>
          <div id="cid_37" class="form-input" data-layout="half">
            <input type="text" id="input_37" name="q37_asetUsaha" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_37" />
          </div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_38">
          <label class="form-label form-label-left form-label-auto" id="label_38" for="input_38"> Omset Bulanan* </label>
          <div id="cid_38" class="form-input" data-layout="half">
            <input type="text" id="input_38" name="q38_omsetBulanan" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_38" />
          </div>
        </li>
        <li class="form-line" data-type="control_dropdown" id="id_40">
          <label class="form-label form-label-left form-label-auto" id="label_40" for="input_40"> Type a question </label>
          <div id="cid_40" class="form-input" data-layout="half">
            <select class="form-dropdown" id="input_40" name="q40_typeA" style="width:310px" data-component="dropdown" aria-labelledby="label_40">
              <option value=""> Please Select </option>
              <option value="0 s/d 2 tahun"> 0 s/d 2 tahun </option>
              <option value="2 s/d 5 tahun"> 2 s/d 5 tahun </option>
              <option value="&gt; 5 tahun"> &gt; 5 tahun </option>
            </select>
          </div>
        </li>
        <li class="form-line" data-type="control_dropdown" id="id_42">
          <label class="form-label form-label-left form-label-auto" id="label_42" for="input_42"> Sektor Usaha </label>
          <div id="cid_42" class="form-input" data-layout="half">
            <select class="form-dropdown" id="input_42" name="q42_sektorUsaha" style="width:310px" data-component="dropdown" aria-labelledby="label_42">
              <option value=""> Please Select </option>
              <option value="">  </option>
            </select>
          </div>
        </li>
        <li class="form-line" data-type="control_textbox" id="id_43">
          <label class="form-label form-label-left form-label-auto" id="label_43" for="input_43"> Produk utama </label>
          <div id="cid_43" class="form-input" data-layout="half">
            <input type="text" id="input_43" name="q43_produkUtama" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_43" />
          </div>
        </li>
        <li class="form-line" data-type="control_button" id="id_7">
          <div id="cid_7" class="form-input-wide" data-layout="full">
            <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
              <button id="input_7" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                Submit Form
              </button>
            </div>
          </div>
        </li>
        <li style="display:none">
          Should be Empty:
          <input type="text" name="website" value="" />
        </li>
      </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by JotForm";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="203161684732454" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='203161684732454'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "203161684732454-203161684732454";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6">
    <div class="formFooter-wrapper formFooter-leftSide">
      <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=203161684732454&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo/logo-new@1x.png" alt="Jotform Logo"></a>
    </div>
    <div class="formFooter-wrapper formFooter-rightSide">
      <span class="formFooter-text">
        Now create your own JotForm - It's free!
      </span>
      <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=203161684732454&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own JotForm</a>
    </div>
  </div>
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.21708"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.21708"></script>                               
    </body>
</html>
