<?php
/**
 * Template Name: Contact Form
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pingpong
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!--
      PPD Baidu tongji
    -->
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?9cbd3ea553fb7f3ca8c4f14672894c24";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>

    <!--
      client GA tracking
    -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-4221199-12"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-4221199-12');
    </script>

    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?1e8ce9a46af2263abf8fc8e3e3c5c3b3";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>

    <meta name="referrer" content="no-referrer-when-downgrade">
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(){
            const FORM_TIME_START = Math.floor((new Date).getTime()/1000);
            let formElement = document.getElementById("tfa_0");
            if (null === formElement) {
                formElement = document.getElementById("0");
            }
            let appendJsTimerElement = function(){
                let formTimeDiff = Math.floor((new Date).getTime()/1000) - FORM_TIME_START;
                let cumulatedTimeElement = document.getElementById("tfa_dbCumulatedTime");
                if (null !== cumulatedTimeElement) {
                    let cumulatedTime = parseInt(cumulatedTimeElement.value);
                    if (null !== cumulatedTime && cumulatedTime > 0) {
                        formTimeDiff += cumulatedTime;
                    }
                }
                let jsTimeInput = document.createElement("input");
                jsTimeInput.setAttribute("type", "hidden");
                jsTimeInput.setAttribute("value", formTimeDiff.toString());
                jsTimeInput.setAttribute("name", "tfa_dbElapsedJsTime");
                jsTimeInput.setAttribute("id", "tfa_dbElapsedJsTime");
                jsTimeInput.setAttribute("autocomplete", "off");
                if (null !== formElement) {
                    formElement.appendChild(jsTimeInput);
                }
            };
            if (null !== formElement) {
                if(formElement.addEventListener){
                    formElement.addEventListener('submit', appendJsTimerElement, false);
                } else if(formElement.attachEvent){
                    formElement.attachEvent('onsubmit', appendJsTimerElement);
                }
            }
        });
    </script>

    <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-layout.css?v=6b1109ac309299ec751af6a3c690f678773e405f" rel="stylesheet" type="text/css" />

    <link href="https://www.tfaforms.com/uploads/themes/theme-70297.css" rel="stylesheet" type="text/css" />
    <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-jsonly.css?v=6b1109ac309299ec751af6a3c690f678773e405f" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
    <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms.js?v=6b1109ac309299ec751af6a3c690f678773e405f"></script>
    <script type="text/javascript">
        wFORMS.behaviors.prefill.skip = false;
    </script>
        <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_GB.js?v=6b1109ac309299ec751af6a3c690f678773e405f"></script>

	<?php wp_head();?>
</head>

<body <?php body_class('default wFormWebPage');?>>

<div id="tfaContent">
        <div class="wFormContainer" >
    <div class="wFormHeader"></div>
    <style type="text/css">
                #tfa_1331,
                *[id^="tfa_1331["] {
                    width: 341px !important;
                }
                #tfa_1331-D,
                *[id^="tfa_1331["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_1332,
                *[id^="tfa_1332["] {
                    width: 326px !important;
                }
                #tfa_1332-D,
                *[id^="tfa_1332["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_1332-L,
                label[id^="tfa_1332["] {
                    width: 203px !important;
                    min-width: 0px;
                }
            
                #tfa_1412,
                *[id^="tfa_1412["] {
                    width: 1001px !important;
                }
                #tfa_1412-D,
                *[id^="tfa_1412["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_4,
                *[id^="tfa_4["] {
                    width: 1001px !important;
                }
                #tfa_4-D,
                *[id^="tfa_4["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_4-L,
                label[id^="tfa_4["] {
                    width: 464px !important;
                    min-width: 0px;
                }
            
                #tfa_5,
                *[id^="tfa_5["] {
                    width: 464px !important;
                }
                #tfa_5-D,
                *[id^="tfa_5["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_5-L,
                label[id^="tfa_5["] {
                    width: 464px !important;
                    min-width: 0px;
                }
            
                #tfa_1881,
                *[id^="tfa_1881["] {
                    width: 227px !important;
                }
                #tfa_1881-D,
                *[id^="tfa_1881["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_1428,
                *[id^="tfa_1428["] {
                    width: 766px !important;
                }
                #tfa_1428-D,
                *[id^="tfa_1428["][class~="field-container-D"] {
                    width: auto !important;
                }
            
                #tfa_1428-L,
                label[id^="tfa_1428["] {
                    width: 535px !important;
                    min-width: 0px;
                }
            
                #tfa_1431-L,
                label[id^="tfa_1431["] {
                    width: 535px !important;
                    min-width: 0px;
                }
            
                #tfa_1435-L,
                label[id^="tfa_1435["] {
                    width: 535px !important;
                    min-width: 0px;
                }
            
                #tfa_1439-L,
                label[id^="tfa_1439["] {
                    width: 635px !important;
                    min-width: 0px;
                }
            
                #tfa_1428,
                *[id^="tfa_1428["] {
                    height: 202px
                }
                #tfa_1428-D,
                *[id^="tfa_1428["][class~="field-container-D"] {
                    height: auto !important;
                }
                #tfa_1428-L,
                label[id^="tfa_1428["],
                *[id^="tfa_1428["][id$="-L"] {
                    height: auto !important;
                }
            </style><div class=""><div class="wForm" id="4882456-WRPR" dir="ltr">
<div class="codesection" id="code-4882456"><style>
.wForm {
padding: 0px 6px !important;
}
</style>
<style type="text/css">
  .wFormWebPage{
    background-position: center top;
    background-repeat: no-repeat;
    background-size: 1450px 505px;

}
</style></div>
<form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4882456" role="form">
<div class="htmlSection" id="tfa_2344"><div class="htmlContent" id="tfa_2344-HTML"><div style="text-align: center;"><img src="https://agsd.org.uk/wp-content/uploads/2019/02/Keele-University-logo.jpg" alt="Keele Logo" style="font-size: 14.4px; word-spacing: normal; width: 45%; height: 30%;"></div></div></div>
<div class="htmlSection" id="tfa_2083"><div class="htmlContent" id="tfa_2083-HTML"><h1 style="text-align: center;">China Enquiry Form</h1></div></div>
<div class="htmlSection" id="tfa_1880"><div class="htmlContent" id="tfa_1880-HTML"><p style="text-align: center;" class="modern-description form-description ng-binding"><b><span style="font-size: 11pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">请在下面的表格中提交您的问题，我们团队的成员将尽快与您联系</span></b></p><p style="text-align: center;" class="modern-description form-description ng-binding"><b><span style="font-size: 11pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><br></span></b></p><p style="text-align: center;" class="modern-description form-description ng-binding"><span style="font-size: 18px; word-spacing: normal;">Please submit your question in the form below and a member our enquiries team will be in touch with you shortly.</span></p></div></div>
<div class="htmlSection" id="tfa_1879"><div class="htmlContent" id="tfa_1879-HTML"></div></div>
<fieldset id="tfa_1877" class="section">
<div id="tfa_1878" class="section inline group">
<div class="oneField field-container-D    " id="tfa_1331-D">
<label id="tfa_1331-L" class="label preField reqMark" for="tfa_1331"><b>First Name&nbsp;</b><span style="font-size: 11pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">名</span></label><br><div class="inputWrapper"><input type="text" id="tfa_1331" name="tfa_1331" value="" placeholder="First Name" aria-required="true" title="First Name 名" class="required"></div>
</div>
<div class="oneField field-container-D    " id="tfa_1332-D">
<label id="tfa_1332-L" class="label preField reqMark" for="tfa_1332"><b>Last Name&nbsp;</b><span style="font-size: 11pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">姓</span>&nbsp;</label><br><div class="inputWrapper"><input type="text" id="tfa_1332" name="tfa_1332" value="" placeholder="Last Name" aria-required="true" title="Last Name 姓 " class="required"></div>
</div>
</div>
<div class="oneField field-container-D    " id="tfa_1412-D">
<label id="tfa_1412-L" class="label preField reqMark" for="tfa_1412"><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">Date of Birth (dd/mm/yyyy)&nbsp;</span><span style="font-size: 10.5pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">&nbsp;生日&nbsp;</span></label><br><div class="inputWrapper"><input type="text" id="tfa_1412" name="tfa_1412" value="" placeholder="Pick a date " aria-required="true" title="Date of Birth (dd/mm/yyyy)  生日 " class="validate-date required"></div>
</div>
<div class="oneField field-container-D    " id="tfa_4-D">
<label id="tfa_4-L" class="label preField reqMark" for="tfa_4"><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">Email address&nbsp;</span><span style="font-size: 10.5pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">邮箱</span></label><br><div class="inputWrapper"><input type="text" id="tfa_4" name="tfa_4" value="" placeholder="your.name@company.com" aria-required="true" title="Email address 邮箱" class="validate-email required"></div>
</div>
<div class="oneField field-container-D    " id="tfa_5-D">
<label id="tfa_5-L" class="label preField " for="tfa_5"><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">Please provide a contact telephone number&nbsp;</span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 14.4px; word-spacing: normal;">请提供联系电话</span><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">&nbsp;</span><span style="color: rgb(209, 46, 46); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600; word-spacing: normal;">*<br></span><div style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px;"><div class="ng-scope"></div></div></label><br><div class="inputWrapper"><input type="text" id="tfa_5" name="tfa_5" value="" placeholder="+1 2345 678910" title="Please provide a contact telephone number 请提供联系电话 *" class=""></div>
</div>
<div class="oneField field-container-D    " id="tfa_1881-D">
<label id="tfa_1881-L" class="label preField reqMark" for="tfa_1881"><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">Year of Entry&nbsp;</span><span style="font-size: 11pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; color: rgb(52, 59, 62); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">入学年份</span></label><br><div class="inputWrapper"><select id="tfa_1881" name="tfa_1881" title="Year of Entry 入学年份" aria-required="true" class="required"><option value="">Please select...</option>
<option value="tfa_1883" id="tfa_1883" class="">2021-22</option>
<option value="tfa_2342" id="tfa_2342" class="">2022-23</option>
<option value="tfa_2343" id="tfa_2343" class="">2023-24</option></select></div>
</div>
<div class="oneField field-container-D    " id="tfa_1428-D">
<label id="tfa_1428-L" class="label preField reqMark" for="tfa_1428"><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">Please enter your question below&nbsp;</span><span style="font-size: 10.5pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">咨询问题</span><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;"><br></span></label><br><div class="inputWrapper"><textarea aria-required="true" id="tfa_1428" name="tfa_1428" title="Please enter your question below 咨询问题" class="required"></textarea></div>
</div>
<div class="htmlSection" id="tfa_1429"><div class="htmlContent" id="tfa_1429-HTML"><div class="form-group gecko-field gecko-field-type-script" id="field6920" style="margin-bottom: 20px;"><div style="" class="ng-scope"><div style="" class="ng-binding"><p style="text-align: center; margin-bottom: 10px;"><font face="Metropolis, sans-serif" color="#424856"><span style="font-size: 14px;">Upon submitting this form, your enquiry will be forwarded on to our enquiries team who will contact you&nbsp; to answer your question and provide further details about the course that you are interested in.</span></font></p><p style="text-align: center; margin: 0cm 5pt 23pt 0cm;" class="MsoNormal"><span style="font-size: 10.5pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">提交此表格后，您的问题将被转发给我们的招生小组，他们将与您联系，并提供有关您感兴趣的课程的更多详细信息。</span><b><span style="font-size: 18pt; line-height: 115%; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"></span></b></p></div></div></div><div class="form-group gecko-field gecko-field-type-script" id="field6867" style="margin-bottom: 20px; color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px;"><div><div class="ng-scope"><div class="ng-binding"></div></div></div></div></div></div>
<div class="htmlSection" id="tfa_1430"><div class="htmlContent" id="tfa_1430-HTML"><h4><div class="form-group gecko-field gecko-field-type-script" id="field6867" style="margin-bottom: 20px; color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px;"><div style=""><div style="" class="ng-scope"><div style="" class="ng-binding"><p style="text-align: center; margin-bottom: 10px;"><span data-mce-style="font-family: arial, helvetica, sans-serif; font-size: 18pt;" style="font-family: arial, helvetica, sans-serif; font-size: 18pt;">Your Contact Preferences</span></p><p style="text-align: center; margin-bottom: 10px;"><span data-mce-style="font-family: arial, helvetica, sans-serif; font-size: 18pt;" style="font-family: arial, helvetica, sans-serif; font-size: 18pt;"><span style="font-size: 10pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">你希望被联系的方式</span></span></p></div></div></div></div><div class="form-group gecko-field gecko-field-type-radio field-required" id="field6917" style="margin-bottom: 20px; color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 300;"></div></h4></div></div>
<div class="oneField field-container-D    " id="tfa_1431-D" role="radiogroup" aria-labelledby="tfa_1431-L" data-tfa-labelledby="-L tfa_1431-L">
<label id="tfa_1431-L" class="label preField reqMark"><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">Please keep me informed using email&nbsp;</span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 14.4px; word-spacing: normal;">是否希望我们用邮箱和您联系？</span><p style="margin-top:11.0pt;margin-right:5.0pt;margin-bottom:
0cm;margin-left:5.0pt;margin-bottom:.0001pt" class="MsoNormal"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"></span></p></label><br><div class="inputWrapper"><span id="tfa_1431" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_1443" class="" id="tfa_1443" name="tfa_1431" aria-required="true" aria-labelledby="tfa_1443-L" data-tfa-labelledby="tfa_1431-L tfa_1443-L"><label class="label postField" id="tfa_1443-L" for="tfa_1443"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_1444" class="" id="tfa_1444" name="tfa_1431" aria-required="true" aria-labelledby="tfa_1444-L" data-tfa-labelledby="tfa_1431-L tfa_1444-L"><label class="label postField" id="tfa_1444-L" for="tfa_1444"><span class="input-radio-faux"></span>No</label></span></span></div>
</div>
<div class="oneField field-container-D    " id="tfa_1435-D" role="radiogroup" aria-labelledby="tfa_1435-L" data-tfa-labelledby="-L tfa_1435-L">
<label id="tfa_1435-L" class="label preField reqMark"><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">Please keep me informed using phone&nbsp;</span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 14.4px; word-spacing: normal;">是否希望我们用电话和您联系？</span><p style="margin-top:11.0pt;margin-right:5.0pt;margin-bottom:
0cm;margin-left:5.0pt;margin-bottom:.0001pt" class="MsoNormal"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"></span></p></label><br><div class="inputWrapper"><span id="tfa_1435" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_1445" class="" id="tfa_1445" name="tfa_1435" aria-required="true" aria-labelledby="tfa_1445-L" data-tfa-labelledby="tfa_1435-L tfa_1445-L"><label class="label postField" id="tfa_1445-L" for="tfa_1445"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_1446" class="" id="tfa_1446" name="tfa_1435" aria-required="true" aria-labelledby="tfa_1446-L" data-tfa-labelledby="tfa_1435-L tfa_1446-L"><label class="label postField" id="tfa_1446-L" for="tfa_1446"><span class="input-radio-faux"></span>No</label></span></span></div>
</div>
<div class="oneField field-container-D    " id="tfa_1439-D" role="radiogroup" aria-labelledby="tfa_1439-L" data-tfa-labelledby="-L tfa_1439-L">
<label id="tfa_1439-L" class="label preField reqMark"><span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">Please keep me informed using messages/texts&nbsp;</span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 14.4px; word-spacing: normal;">是否希望我们用短信和您联系？</span><p style="margin-top:11.0pt;margin-right:5.0pt;margin-bottom:
0cm;margin-left:5.0pt;margin-bottom:.0001pt" class="MsoNormal"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"></span></p></label><br><div class="inputWrapper"><span id="tfa_1439" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_1447" class="" id="tfa_1447" name="tfa_1439" aria-required="true" aria-labelledby="tfa_1447-L" data-tfa-labelledby="tfa_1439-L tfa_1447-L"><label class="label postField" id="tfa_1447-L" for="tfa_1447"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_1448" class="" id="tfa_1448" name="tfa_1439" aria-required="true" aria-labelledby="tfa_1448-L" data-tfa-labelledby="tfa_1439-L tfa_1448-L"><label class="label postField" id="tfa_1448-L" for="tfa_1448"><span class="input-radio-faux"></span>No</label></span></span></div>
</div>
<div class="htmlSection" id="tfa_1449"><div class="htmlContent" id="tfa_1449-HTML"><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-size: 10pt;" style="font-size: 10pt;"><span style="font-weight: 600;">What we’re going to do with your data and why?&nbsp;</span></span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 10pt; word-spacing: normal;">我们将如何处理您的数据以及原因？</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:8.0pt;
margin-left:5.0pt"><span style="font-size: 10pt; line-height: 115%; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">We will securely store your data and send you essential information (examples include updates on an application or booking confirmations for events such as Open Days).&nbsp;</span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 10pt; word-spacing: normal;">我们将安全地存储您的数据并向您发送重要信息（例如，包括应用程序更新或预订活动（如开放日）的预订）。</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:8.0pt;
margin-left:0cm"><span style="font-size: 10pt; line-height: 115%; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">We would also like to send you useful information about studying at University (particularly Keele) and/or the courses that you have shown an interest in. To do this we need your consent and information on which communication channels you would like to hear from us on (please see opt-in boxes above).&nbsp;</span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 10pt; word-spacing: normal;">我们还想向您发送有关在大学（尤其是基尔大学）学习和/或您感兴趣的课程的有用信息。为此，我们需要您的同意以及提供您希望从我们这里获得哪些沟通渠道的信息。开启同意（请参见上方的“选择加入”框）。</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:8.0pt;
margin-left:0cm"><span style="font-size: 10pt; line-height: 115%; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">We will never sell your data to a third party. We only ever share data with companies involved in helping us communicate with you or helping us to manage your data (examples include; Online forms, Printers, Postal services, other University partners etc).&nbsp;</span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 10pt; word-spacing: normal;">我们绝不会将您的数据出售给第三方。我们仅与参与帮助我们与您沟通或帮助我们管理您的数据的公司共享数据（示例包括；在线表格，打印机，邮政服务，其他大学合作伙伴等）。</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:8.0pt;
margin-left:5.0pt"><span style="font-size: 10pt; line-height: 115%; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-size: 10pt;" style="font-size: 10pt;"><span style="font-weight: 600;">How long are we keeping it?&nbsp;</span></span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 10pt; word-spacing: normal;">我们要保留数据多久？</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:8.0pt;
margin-left:5.0pt"><span style="font-size: 10pt; line-height: 115%; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">We will keep your data for the year that you first enquire with us plus 6 subsequent years. This is to ensure that you are legally protected should you have any issues with the use of your data.&nbsp;</span></p><span style="font-size: 10pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">我们将保留您第一次向我们咨询的年份以及随后6年的数据。这是为了确保您在使用数据时遇到任何问题时都受到法律保护。<br><br></span><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-size: 10pt;" style="font-size: 10pt;"><span style="font-weight: 600;">Unsubscribe</span></span></p><span style="font-size: 10pt; line-height: 115%; font-family: &quot;Arial Unicode MS&quot;; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">取消预定<br><br></span><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">By selecting no to the preferences above you will have unsubscribed, however, this does not mean that your data has been deleted. If you would like to invoke your right to be forgotten please refer to the section below.&nbsp;</span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 10pt; word-spacing: normal;">通过在上面的首选项中选择“否”，您将退订，但这并不意味着您的数据已被删除。如果您想修改被删除的权利，请参阅以下部分。</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:8.0pt;
margin-left:5.0pt"><span style="font-size: 10pt; line-height: 115%; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-size: 10pt;" style="font-size: 10pt;"><span style="font-weight: 600;">What to do if I change my mind?&nbsp;</span></span><span style="font-family: &quot;Arial Unicode MS&quot;; font-size: 10pt; word-spacing: normal;">如果我改变主意该怎么办？</span></p><p class="MsoNormal" style="margin-top:0cm;margin-right:5.0pt;margin-bottom:8.0pt;
margin-left:5.0pt"><span style="font-size: 10pt; line-height: 115%; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><o:p></o:p></span></p><p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;"><span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">To change your preferences after you have closed this form, simply reopen the link to this page. For further information about how your data is held, including your right to be forgotten, please contact&nbsp;<span style="color: rgb(51, 122, 183); text-decoration-line: none; font-weight: 600;"><a href="mailto:dpa@keele.ac.uk" target="_blank" rel="noopener" data-mce-href="mailto:dpa@keele.ac.uk" style="color: rgb(51, 122, 183); text-decoration-line: none;">dpa@keele.ac.uk</a>&nbsp;</span></span><span style="font-family: &quot;Arial Unicode MS&quot;; color: rgb(0, 0, 0); font-size: 14.4px; word-spacing: normal;">要在关闭此表单后更改选项，只需重新打开此页面的链接即可。有关如何保存您的数据（包括您被删除的权利）的更多信息，请联系dpa@keele.ac.uk</span></p><p class="MsoNormal"><o:p></o:p></p></div></div>
<input type="hidden" id="tfa_1872" name="tfa_1872" value="" class=""><input type="hidden" id="tfa_1873" name="tfa_1873" value="" class="">
</fieldset>
<input type="hidden" id="tfa_2084" name="tfa_2084" value="" class=""><input type="hidden" id="tfa_2085" name="tfa_2085" value="" class=""><input type="hidden" id="tfa_2086" name="tfa_2086" value="" class=""><input type="hidden" id="tfa_2087" name="tfa_2087" value="" class=""><input type="hidden" id="tfa_2088" name="tfa_2088" value="" class=""><input type="hidden" id="tfa_2089" name="tfa_2089" value="&lt;style&gt;   .wFormWebPage{  background-position: center top;     background-repeat: no-repeat !important;     background-size: 1450px 505px;}&lt;style/&gt;" class=""><div class="actions" id="4882456-A"><input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit"></div>
<div style="clear:both"></div>
<input type="hidden" value="4882456" name="tfa_dbFormId" id="tfa_dbFormId"><input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId"><input type="hidden" value="f69e3585690d8b2fef12ca6368f3adb8" name="tfa_dbControl" id="tfa_dbControl"><input type="hidden" value="" name="tfa_dbWorkflowSessionUuid" id="tfa_dbWorkflowSessionUuid"><input type="hidden" value="10" name="tfa_dbVersionId" id="tfa_dbVersionId"><input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
</form>
</div></div><div class="wFormFooter"><p class="supportInfo"><br></p></div>
  <p class="supportInfo" >
      </p>
 </div>
    </div>

        <script src='https://www.tfaforms.com/js/iframe_message_helper_internal.js?v=2'></script>


<?php get_footer(); ?>
