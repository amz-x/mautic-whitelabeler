<?php
	$sidebar_background = urldecode($_GET['sidebar_background']);
	$mautic_primary = urldecode($_GET['mautic_primary']);
	$mautic_hover = urldecode($_GET['mautic_hover']);
    header("Content-type: text/css; charset: UTF-8");
?>

body {
	background: #f9f9f9;
	font-family:'Open Sans', Helvetica, Arial, sans-serif;
}

div.whitelabeler {
	float:left;
	width:100%;
	margin-top:100px;
}

div#header {
	position: fixed;
	width:100%;
	min-width:712px;
	height:60px;
	background: #fff;
	margin-bottom: 40px;
	-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
		box-shadow: 0 5px 5px -5px rgba(0, 0, 0, 0.15), 0 1px 0 rgba(0, 0, 0, 0.03);
		z-index: 999;
}

div#logo {
	background:<?=$mautic_primary;?>;
	width:230px;
	height:60px;
	text-align: center;
	float:left;
}

div#links {
	float:left;
	margin-left:30px;
	margin-top: 18px;
}

div#links a {
	margin:10px 25px;			
	font-size:1.2em;
}

a.mautic-link {
	color:<?=$mautic_primary;?>
}

a.mautic-hover {
	color:<?=$mautic_hover;?>
}

svg.mautic-logo-figure {
    width: 32px;
    height: 60px;
}

svg.mautic-logo-text {
    height: 60px;
    width: 98px;
    position: relative;
    top:-2px;
    left:-5px;
}

svg.mautic-logo-figure .m, .mautic-brand > svg.mautic-logo-figure .m-arrow, svg.mautic-logo-figure .m-arrow {
    fill: #fdb933;
}

svg.mautic-logo-figure .circle {
    fill: #fff;
}

svg.mautic-logo-text .m, svg.mautic-logo-text .a, svg.mautic-logo-text .u, svg.mautic-logo-text .t, svg.mautic-logo-text .i, svg.mautic-logo-text .c {
    fill: #fff;
}

div.container {
	max-width: 1000px;
}

label {
	margin:0;
}
small {
	color: #a2a2a2;
}

div#options {
	width:100%;
	padding:30px;
	background:#fff;
	border-radius: 4px;
	border: 1px solid #ebedf0;
	-webkit-box-shadow: 0px 1px 1px #f3f3f3;
	box-shadow: 0px 1px 1px #f3f3f3;
}

div#console {
	float:left;
	padding:0.9em 1.4em;
	background:#383a42;
	width:100%;
	height:200px;
	font-family: monospace;
	font-size: 0.9em;
	color: #9a9eaf;
	overflow: hidden;
}

div#console:hover {
	overflow-y:scroll;
}

#waiting-for-input,
#waiting-for-input-success,
#looking-for-installation, 
#looking-for-installation-success,
#looking-for-installation-error,
#updating-css,
#updating-css-success,
#updating-css-error,
#updating-companyname,
#updating-companyname-success,
#updating-companyname-error,
#updating-images,
#updating-images-success,
#updating-images-error,
#regenerating,
#regenerating-success,
#regenerating-error,
#clearing,
#clearing-success,
#clearing-error,
#complete
{
	display: none;
}

div#console p {
    margin: 0;
    padding: 0.3em 0;
}

div#console span.arrow {
	font-weight:bold;
	letter-spacing: 2px;
	color:#fff;
}

div#console span.success {
	color:#81ff81;
}
div#console span.error {
	color:#ff6d6d;
}

div#login_preview {
	float:left;
	width:100%;
	max-width: 468px;
}

div#login_preview .mautic-logo {
    width: 150px;
    margin: 0 auto;
    background: #fff;
}

div#login_preview .mb-15, .mb-md {
    margin-bottom: 15px !important;
}

div#login_preview .text-center {
    text-align: center;
}

div#login_preview .img-circle {
    border-radius: 50%;
}

div#login_preview .form-group {
    margin-bottom: 15px;
}

div#login_preview .mb-15, .mb-md {
    margin-bottom: 15px !important;
}

div#login_preview .input-group {
    position: relative;
    display: table;
    border-collapse: separate;
}

div#login_preview .btn-primary {
    color: #fff;
    background-color: #4e5d9d;
    border-color: #4e5d9d;
}

div#login_preview .panel-body {
    padding: 15px;
}

div#login_preview svg:not(:root) {
    overflow: hidden;
}

div#login_preview .mautic-logo > svg.mautic-logo-figure .circle {
    fill: #4e5e9e;
}
div#login_preview .mautic-logo > svg.mautic-logo-figure .m, .mautic-logo > svg.mautic-logo-figure .m-arrow {
    fill: #fdb933;
}
div#login_preview .mautic-logo > svg.mautic-logo-figure .m, .mautic-logo > svg.mautic-logo-figure .m-arrow {
    fill: #fdb933;
}

div#login_preview .mt-10, .mt-sm {
    margin-top: 10px !important;
}

h2 {
	margin-top:0;
}
.panel-body {
	padding:0;
}
.panel-primary {
	border-color: <?=$mautic_primary;?>;
}
.panel-primary>.panel-heading {
	border-color: <?=$mautic_primary;?>;
	background-color:<?=$mautic_primary;?>;
	text-align: center;
	height: 40px;
}
button.btn-default {
	background-color:<?=$mautic_primary;?>;
	border-color:<?=$mautic_primary;?>;
	color:#fff;
	font-size:1.5em;
	padding:0.5em 3em;
}
button.btn-default:hover {
	background-color:<?=$mautic_hover;?>;
	border-color:<?=$mautic_hover;?>;
	color:#fff;
}
small.path-fail, small.url-fail {
	display: none;
	color:red;
}
small.path-success, small.url-success {
	display: none;
	color:#1db91d;
}

.spinner {
  text-align: center;
  display: none;
}

.spinner > div {
  width: 10px;
  height: 10px;
  background-color: #fff;

  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}

.panel {
    border: 1px solid #ebedf0;
    -webkit-box-shadow: 0px 1px 1px #f3f3f3;
    box-shadow: 0px 1px 1px #f3f3f3;
}

div#overlay {
	display: none;
	z-index: 999;
	position: fixed;
	top:0;
	right:0;
	bottom:0;
	left:0;
	background:rgba(0, 0, 0, 0.75);
}

small {
	color:#000;
}

div#basic {
	float:left;
	width:100%;
	margin:10px 0;	
}

div#colors, div#sidebarlogo, div#loginlogo, div#favicon {
	float:left;
	width:100%;
	padding:10px 20px;
	background: #f9f9f9;
	border: 1px solid #e2e1e4;
	margin:0 0 20px 0;
	border-radius: 4px;
}


.col-md-3 {
	padding:0 5px;
}

input[type="file"] {
	width: 180px;
}

h3 {
	margin: 10px 0;
    font-size: 22px;
}

.consolewindow {
	z-index: 9999;
	width:100%;
	max-width: 468px;
}

a#forgot {
	color: <?=$mautic_primary;?>
}

@keyframes blinker {  
  50% { opacity: 0; }
}

.blink {
  animation: blinker 1s linear infinite;
}

.typed-cursor{
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}

  @media (min-width: 1199px) {
    &.affix-top {
    }

    &.affix {
      position: fixed;
      top: 20px;
      bottom: 100px;
    }

    &.affix-bottom {
    }
  }
}