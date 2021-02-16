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

    <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-layout.css?v=9450f29438457bd047f6085c50be5f6e988888c2" rel="stylesheet" type="text/css" />

    <link href="https://www.tfaforms.com/uploads/themes/theme-70297.css" rel="stylesheet" type="text/css" />
    <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-jsonly.css?v=9450f29438457bd047f6085c50be5f6e988888c2" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
    <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms.js?v=9450f29438457bd047f6085c50be5f6e988888c2"></script>
    <script type="text/javascript">
        wFORMS.behaviors.prefill.skip = false;
    </script>
    <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_GB.js?v=9450f29438457bd047f6085c50be5f6e988888c2"></script>



	<?php wp_head();?>
</head>

<body <?php body_class('default wFormWebPage');?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="pagewidth">
			<div class="site-branding">
				<a class="logo" href="/">
					<img src="/wp-content/themes/pingpong/img/logo.png" alt="logo">
				</a>
			</div><!-- .site-branding -->

			<nav>
					<?php if (is_front_page()): ?>
						<a href="/kiite"> 创新与卓越教育研究院 <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					<?php else: ?>
						<a href="/"> 基尔大学主页 <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					<?php endif?>
			</nav>
		</div>
	</header><!-- #masthead -->

  <div id="tfaContent">
            <div class="wFormContainer">
                <div class="wFormHeader">
                </div>
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
                </style>
                <div class="">
                    <div class="wForm" dir="ltr" id="4882456-WRPR">
                        <div class="codesection" id="code-4882456">
                            <style>
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
                            </style>
                        </div>
                        <form action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4882456" method="post" role="form">
                            <div class="htmlSection" id="tfa_2344">
                                <div class="htmlContent" id="tfa_2344-HTML">
                                    <div style="text-align: center;">
                                        <img alt="Keele Logo" src="https://agsd.org.uk/wp-content/uploads/2019/02/Keele-University-logo.jpg" style="font-size: 14.4px; word-spacing: normal; width: 45%; height: 30%;"/>
                                    </div>
                                </div>
                            </div>
                            <div class="htmlSection" id="tfa_2083">
                                <div class="htmlContent" id="tfa_2083-HTML">
                                    <h1 style="text-align: center;">
                                        China Enquiry Form
                                    </h1>
                                </div>
                            </div>
                            <div class="htmlSection" id="tfa_1880">
                                <div class="htmlContent" id="tfa_1880-HTML">
                                    <p class="modern-description form-description ng-binding" style="text-align: center;">
                                        <b>
                                            <span style='font-size: 11pt; line-height: 115%; font-family: "Arial Unicode MS"; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;'>
                                                请在下面的表格中提交您的问题，我们团队的成员将尽快与您联系
                                            </span>
                                        </b>
                                    </p>
                                    <p class="modern-description form-description ng-binding" style="text-align: center;">
                                        <b>
                                            <span style='font-size: 11pt; line-height: 115%; font-family: "Arial Unicode MS"; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;'>
                                                <br/>
                                            </span>
                                        </b>
                                    </p>
                                    <p class="modern-description form-description ng-binding" style="text-align: center;">
                                        <span style="font-size: 18px; word-spacing: normal;">
                                            Please submit your question in the form below and a member our enquiries team will be in touch with you shortly.
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="htmlSection" id="tfa_1879">
                                <div class="htmlContent" id="tfa_1879-HTML">
                                </div>
                            </div>
                            <fieldset class="section" id="tfa_1877">
                                <div class="section inline group" id="tfa_1878">
                                    <div class="oneField field-container-D " id="tfa_1331-D">
                                        <label class="label preField reqMark" for="tfa_1331" id="tfa_1331-L">
                                            <b>
                                                First Name
                                            </b>
                                            <span style='font-size: 11pt; line-height: 115%; font-family: "Arial Unicode MS"; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;'>
                                                名
                                            </span>
                                        </label>
                                        <br>
                                            <div class="inputWrapper">
                                                <input aria-required="true" class="required" id="tfa_1331" name="tfa_1331" placeholder="First Name" title="First Name 名" type="text" value=""/>
                                            </div>
                                        </br>
                                    </div>
                                    <div class="oneField field-container-D " id="tfa_1332-D">
                                        <label class="label preField reqMark" for="tfa_1332" id="tfa_1332-L">
                                            <b>
                                                Last Name
                                            </b>
                                            <span style='font-size: 11pt; line-height: 115%; font-family: "Arial Unicode MS"; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;'>
                                                姓
                                            </span>
                                        </label>
                                        <br>
                                            <div class="inputWrapper">
                                                <input aria-required="true" class="required" id="tfa_1332" name="tfa_1332" placeholder="Last Name" title="Last Name 姓 " type="text" value=""/>
                                            </div>
                                        </br>
                                    </div>
                                </div>
                                <div class="oneField field-container-D " id="tfa_1412-D">
                                    <label class="label preField reqMark" for="tfa_1412" id="tfa_1412-L">
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                            Date of Birth (dd/mm/yyyy)
                                        </span>
                                        <span style='font-size: 10.5pt; line-height: 115%; font-family: "Arial Unicode MS"; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;'>
                                            生日
                                        </span>
                                    </label>
                                    <br>
                                        <div class="inputWrapper">
                                            <input aria-required="true" class="validate-date required" id="tfa_1412" name="tfa_1412" placeholder="Pick a date " title="Date of Birth (dd/mm/yyyy)  生日 " type="text" value=""/>
                                        </div>
                                    </br>
                                </div>
                                <div class="oneField field-container-D " id="tfa_4-D">
                                    <label class="label preField reqMark" for="tfa_4" id="tfa_4-L">
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                            Email address
                                        </span>
                                        <span style='font-size: 10.5pt; line-height: 115%; font-family: "Arial Unicode MS"; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;'>
                                            邮箱
                                        </span>
                                    </label>
                                    <br>
                                        <div class="inputWrapper">
                                            <input aria-required="true" class="validate-email required" id="tfa_4" name="tfa_4" placeholder="your.name@company.com" title="Email address 邮箱" type="text" value=""/>
                                        </div>
                                    </br>
                                </div>
                                <div class="oneField field-container-D " id="tfa_5-D">
                                    <label class="label preField " for="tfa_5" id="tfa_5-L">
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                            Please provide a contact telephone number
                                        </span>
                                        <span style='font-family: "Arial Unicode MS"; font-size: 14.4px; word-spacing: normal;'>
                                            请提供联系电话
                                        </span>
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                        </span>
                                        <span style="color: rgb(209, 46, 46); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600; word-spacing: normal;">
                                            *
                                            <br/>
                                        </span>
                                        <div style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px;">
                                            <div class="ng-scope">
                                            </div>
                                        </div>
                                    </label>
                                    <br>
                                        <div class="inputWrapper">
                                            <input class="" id="tfa_5" name="tfa_5" placeholder="+1 2345 678910" title="Please provide a contact telephone number 请提供联系电话 *" type="text" value=""/>
                                        </div>
                                    </br>
                                </div>
                                <div class="oneField field-container-D " id="tfa_1881-D">
                                    <label class="label preField reqMark" for="tfa_1881" id="tfa_1881-L">
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                            Year of Entry
                                        </span>
                                        <span style='font-size: 11pt; line-height: 115%; font-family: "Arial Unicode MS"; color: rgb(52, 59, 62); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;'>
                                            入学年份
                                        </span>
                                    </label>
                                    <br>
                                        <div class="inputWrapper">
                                            <select aria-required="true" class="required" id="tfa_1881" name="tfa_1881" title="Year of Entry 入学年份">
                                                <option value="">
                                                    Please select...
                                                </option>
                                                <option class="" id="tfa_1883" value="tfa_1883">
                                                    2021-22
                                                </option>
                                                <option class="" id="tfa_2342" value="tfa_2342">
                                                    2022-23
                                                </option>
                                                <option class="" id="tfa_2343" value="tfa_2343">
                                                    2023-24
                                                </option>
                                            </select>
                                        </div>
                                    </br>
                                </div>
                                <div class="oneField field-container-D " id="tfa_1428-D">
                                    <label class="label preField reqMark" for="tfa_1428" id="tfa_1428-L">
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                            Please enter your question below
                                        </span>
                                        <span style='font-size: 10.5pt; line-height: 115%; font-family: "Arial Unicode MS"; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;'>
                                            咨询问题
                                        </span>
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                            <br/>
                                        </span>
                                    </label>
                                    <br>
                                        <div class="inputWrapper">
                                            <textarea aria-required="true" class="required" id="tfa_1428" name="tfa_1428" title="Please enter your question below 咨询问题">
                                            </textarea>
                                        </div>
                                    </br>
                                </div>
                                <div class="htmlSection" id="tfa_1429">
                                    <div class="htmlContent" id="tfa_1429-HTML">
                                        <div class="form-group gecko-field gecko-field-type-script" id="field6920" style="margin-bottom: 20px;">
                                            <div class="ng-scope" style="">
                                                <div class="ng-binding" style="">
                                                    <p style="text-align: center; margin-bottom: 10px;">
                                                        <font color="#424856" face="Metropolis, sans-serif">
                                                            <span style="font-size: 14px;">
                                                                Upon submitting this form, your enquiry will be forwarded on to our enquiries team who will contact you  to answer your question and provide further details about the course that you are interested in.
                                                            </span>
                                                        </font>
                                                    </p>
                                                    <p class="MsoNormal" style="text-align: center; margin: 0cm 5pt 23pt 0cm;">
                                                        <span style='font-size: 10.5pt; line-height: 115%; font-family: "Arial Unicode MS"; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;'>
                                                            提交此表格后，您的问题将被转发给我们的招生小组，他们将与您联系，并提供有关您感兴趣的课程的更多详细信息。
                                                        </span>
                                                        <b>
                                                            <span style="font-size: 18pt; line-height: 115%; color: rgb(66, 72, 86); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                                            </span>
                                                        </b>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group gecko-field gecko-field-type-script" id="field6867" style="margin-bottom: 20px; color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px;">
                                            <div>
                                                <div class="ng-scope">
                                                    <div class="ng-binding">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="htmlSection" id="tfa_1430">
                                    <div class="htmlContent" id="tfa_1430-HTML">
                                        <h4>
                                            <div class="form-group gecko-field gecko-field-type-script" id="field6867" style="margin-bottom: 20px; color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px;">
                                                <div style="">
                                                    <div class="ng-scope" style="">
                                                        <div class="ng-binding" style="">
                                                            <p style="text-align: center; margin-bottom: 10px;">
                                                                <span data-mce-style="font-family: arial, helvetica, sans-serif; font-size: 18pt;" style="font-family: arial, helvetica, sans-serif; font-size: 18pt;">
                                                                    Your Contact Preferences
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group gecko-field gecko-field-type-radio field-required" id="field6917" style="margin-bottom: 20px; color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 300;">
                                            </div>
                                        </h4>
                                    </div>
                                </div>
                                <div aria-labelledby="tfa_1431-L" class="oneField field-container-D " data-tfa-labelledby="-L tfa_1431-L" id="tfa_1431-D" role="radiogroup">
                                    <label class="label preField reqMark" id="tfa_1431-L">
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                            Please keep me informed using email
                                        </span>
                                        <span style='font-family: "Arial Unicode MS"; font-size: 14.4px; word-spacing: normal;'>
                                            是否希望我们用邮箱和您联系？
                                        </span>
                                        <p class="MsoNormal" style="margin-top:11.0pt;margin-right:5.0pt;margin-bottom:
0cm;margin-left:5.0pt;margin-bottom:.0001pt">
                                            <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                            </span>
                                        </p>
                                    </label>
                                    <br>
                                        <div class="inputWrapper">
                                            <span class="choices vertical required" id="tfa_1431">
                                                <span class="oneChoice">
                                                    <input aria-labelledby="tfa_1443-L" aria-required="true" class="" data-tfa-labelledby="tfa_1431-L tfa_1443-L" id="tfa_1443" name="tfa_1431" type="radio" value="tfa_1443">
                                                        <label class="label postField" for="tfa_1443" id="tfa_1443-L">
                                                            <span class="input-radio-faux">
                                                            </span>
                                                            Yes
                                                        </label>
                                                    </input>
                                                </span>
                                                <span class="oneChoice">
                                                    <input aria-labelledby="tfa_1444-L" aria-required="true" class="" data-tfa-labelledby="tfa_1431-L tfa_1444-L" id="tfa_1444" name="tfa_1431" type="radio" value="tfa_1444">
                                                        <label class="label postField" for="tfa_1444" id="tfa_1444-L">
                                                            <span class="input-radio-faux">
                                                            </span>
                                                            No
                                                        </label>
                                                    </input>
                                                </span>
                                            </span>
                                        </div>
                                    </br>
                                </div>
                                <div aria-labelledby="tfa_1435-L" class="oneField field-container-D " data-tfa-labelledby="-L tfa_1435-L" id="tfa_1435-D" role="radiogroup">
                                    <label class="label preField reqMark" id="tfa_1435-L">
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                            Please keep me informed using phone
                                        </span>
                                        <span style='font-family: "Arial Unicode MS"; font-size: 14.4px; word-spacing: normal;'>
                                            是否希望我们用电话和您联系？
                                        </span>
                                        <p class="MsoNormal" style="margin-top:11.0pt;margin-right:5.0pt;margin-bottom:
0cm;margin-left:5.0pt;margin-bottom:.0001pt">
                                            <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                            </span>
                                        </p>
                                    </label>
                                    <br>
                                        <div class="inputWrapper">
                                            <span class="choices vertical required" id="tfa_1435">
                                                <span class="oneChoice">
                                                    <input aria-labelledby="tfa_1445-L" aria-required="true" class="" data-tfa-labelledby="tfa_1435-L tfa_1445-L" id="tfa_1445" name="tfa_1435" type="radio" value="tfa_1445">
                                                        <label class="label postField" for="tfa_1445" id="tfa_1445-L">
                                                            <span class="input-radio-faux">
                                                            </span>
                                                            Yes
                                                        </label>
                                                    </input>
                                                </span>
                                                <span class="oneChoice">
                                                    <input aria-labelledby="tfa_1446-L" aria-required="true" class="" data-tfa-labelledby="tfa_1435-L tfa_1446-L" id="tfa_1446" name="tfa_1435" type="radio" value="tfa_1446">
                                                        <label class="label postField" for="tfa_1446" id="tfa_1446-L">
                                                            <span class="input-radio-faux">
                                                            </span>
                                                            No
                                                        </label>
                                                    </input>
                                                </span>
                                            </span>
                                        </div>
                                    </br>
                                </div>
                                <div aria-labelledby="tfa_1439-L" class="oneField field-container-D " data-tfa-labelledby="-L tfa_1439-L" id="tfa_1439-D" role="radiogroup">
                                    <label class="label preField reqMark" id="tfa_1439-L">
                                        <span style="color: rgb(66, 72, 86); font-family: Metropolis, sans-serif; font-size: 14px; font-weight: 600;">
                                            Please keep me informed using messages/texts
                                        </span>
                                        <span style='font-family: "Arial Unicode MS"; font-size: 14.4px; word-spacing: normal;'>
                                            是否希望我们用短信和您联系？
                                        </span>
                                        <p class="MsoNormal" style="margin-top:11.0pt;margin-right:5.0pt;margin-bottom:
0cm;margin-left:5.0pt;margin-bottom:.0001pt">
                                            <span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">
                                            </span>
                                        </p>
                                    </label>
                                    <br>
                                        <div class="inputWrapper">
                                            <span class="choices vertical required" id="tfa_1439">
                                                <span class="oneChoice">
                                                    <input aria-labelledby="tfa_1447-L" aria-required="true" class="" data-tfa-labelledby="tfa_1439-L tfa_1447-L" id="tfa_1447" name="tfa_1439" type="radio" value="tfa_1447">
                                                        <label class="label postField" for="tfa_1447" id="tfa_1447-L">
                                                            <span class="input-radio-faux">
                                                            </span>
                                                            Yes
                                                        </label>
                                                    </input>
                                                </span>
                                                <span class="oneChoice">
                                                    <input aria-labelledby="tfa_1448-L" aria-required="true" class="" data-tfa-labelledby="tfa_1439-L tfa_1448-L" id="tfa_1448" name="tfa_1439" type="radio" value="tfa_1448">
                                                        <label class="label postField" for="tfa_1448" id="tfa_1448-L">
                                                            <span class="input-radio-faux">
                                                            </span>
                                                            No
                                                        </label>
                                                    </input>
                                                </span>
                                            </span>
                                        </div>
                                    </br>
                                </div>
                                <div class="htmlSection" id="tfa_1449">
                                    <div class="htmlContent" id="tfa_1449-HTML">
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-size: 10pt;" style="font-size: 10pt;">
                                                <span style="font-weight: 600;">
                                                    What we’re going to do with your data and why?
                                                </span>
                                            </span>
                                        </p>
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">
                                                We will securely store your data and send you essential information (examples include updates on an application or booking confirmations for events such as Open Days).
                                            </span>
                                        </p>
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">
                                                We would also like to send you useful information about studying at University (particularly Keele) and/or the courses that you have shown an interest in. To do this we need your consent and information on which communication channels you would like to hear from us on (please see opt-in boxes above).
                                            </span>
                                        </p>
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">
                                                We will never sell your data to a third party. We only ever share data with companies involved in helping us communicate with you or helping us to manage your data (examples include; Online forms, Printers, Postal services, other University partners etc).
                                            </span>
                                        </p>
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-size: 10pt;" style="font-size: 10pt;">
                                                <span style="font-weight: 600;">
                                                    How long are we keeping it?
                                                </span>
                                            </span>
                                        </p>
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">
                                                We will keep your data for the year that you first enquire with us plus 6 subsequent years. This is to ensure that you are legally protected should you have any issues with the use of your data.
                                            </span>
                                        </p>
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-size: 10pt;" style="font-size: 10pt;">
                                                <span style="font-weight: 600;">
                                                    Unsubscribe
                                                </span>
                                            </span>
                                        </p>
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">
                                                By selecting no to the preferences above you will have unsubscribed, however, this does not mean that your data has been deleted. If you would like to invoke your right to be forgotten please refer to the section below.
                                            </span>
                                        </p>
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-size: 10pt;" style="font-size: 10pt;">
                                                <span style="font-weight: 600;">
                                                    What to do if I change my mind?
                                                </span>
                                            </span>
                                        </p>
                                        <p style="margin-bottom: 10px; font-family: Metropolis, sans-serif; color: rgb(66, 72, 86); font-size: 14px;">
                                            <span data-mce-style="font-weight: 400; font-size: 10pt;" style="font-size: 10pt;">
                                                To change your preferences after you have closed this form, simply reopen the link to this page. For further information about how your data is held, including your right to be forgotten, please contact
                                                <a data-mce-href="mailto:dpa@keele.ac.uk" href="mailto:dpa@keele.ac.uk" rel="noopener" style="color: rgb(51, 122, 183); text-decoration-line: none;" target="_blank">
                                                    <span style="font-weight: 600;">
                                                        dpa@keele.ac.uk
                                                    </span>
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <input class="" id="tfa_1872" name="tfa_1872" type="hidden" value="">
                                    <input class="" id="tfa_1873" name="tfa_1873" type="hidden" value="">
                                    </input>
                                </input>
                            </fieldset>
                            <input class="" id="tfa_2084" name="tfa_2084" type="hidden" value="">
                                <input class="" id="tfa_2085" name="tfa_2085" type="hidden" value="">
                                    <input class="" id="tfa_2086" name="tfa_2086" type="hidden" value="">
                                        <input class="" id="tfa_2087" name="tfa_2087" type="hidden" value="">
                                            <input class="" id="tfa_2088" name="tfa_2088" type="hidden" value="">
                                                <input class="" id="tfa_2089" name="tfa_2089" type="hidden" value="<style>   .wFormWebPage{  background-position: center top;     background-repeat: no-repeat !important;     background-size: 1450px 505px;}<style/>">
                                                    <div class="actions" id="4882456-A">
                                                        <input class="primaryAction" data-label="Submit" id="submit_button" type="submit" value="Submit"/>
                                                    </div>
                                                    <div style="clear:both">
                                                    </div>
                                                    <input id="tfa_dbFormId" name="tfa_dbFormId" type="hidden" value="4882456">
                                                        <input id="tfa_dbResponseId" name="tfa_dbResponseId" type="hidden" value="">
                                                            <input id="tfa_dbControl" name="tfa_dbControl" type="hidden" value="f69e3585690d8b2fef12ca6368f3adb8">
                                                                <input id="tfa_dbWorkflowSessionUuid" name="tfa_dbWorkflowSessionUuid" type="hidden" value="">
                                                                    <input id="tfa_dbVersionId" name="tfa_dbVersionId" type="hidden" value="9">
                                                                        <input id="tfa_switchedoff" name="tfa_switchedoff" type="hidden" value="">
                                                                        </input>
                                                                    </input>
                                                                </input>
                                                            </input>
                                                        </input>
                                                    </input>
                                                </input>
                                            </input>
                                        </input>
                                    </input>
                                </input>
                            </input>
                        </form>
                    </div>
                </div>
                <div class="wFormFooter">
                    <p class="supportInfo">
                        <br/>
                    </p>
                </div>
                <p class="supportInfo">
                </p>
            </div>
        </div>
        <script src="https://www.tfaforms.com/js/iframe_message_helper_internal.js?v=2">
        </script>

<?php get_footer(); ?>
