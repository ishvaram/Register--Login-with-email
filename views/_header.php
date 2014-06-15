<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Signin - Charmhost Technologies</title>
     <link rel="stylesheet" type="text/css" href="bootstrap.css" />
      <img src="./img/signup.jpg"/ id="bg"/>
  <div id="overlay" class="no-overlay-img">
<div class="content">
  <!-- BEGIN: Login Form. -->
  <div class="form loginForm">
    <header>
      <img src="./img/small.png"/>
      <a href="#">
      <img align="right" style="width:30px;height:30px;" src="./img/d1.png"/></a>
    </header>

<style>
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://themes.googleusercontent.com/static/fonts/opensans/v8/DXI1ORHCpsQm3Vp6mXoaTXhCUOGz7vYGh680lGh-uXM.woff) format('woff');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans'), local('OpenSans'), url(https://themes.googleusercontent.com/static/fonts/opensans/v8/cJZKeOuBrn4kERxqtaUH3T8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(https://themes.googleusercontent.com/static/fonts/opensans/v8/MTP_ySUJH_bn48VBG8sNSnhCUOGz7vYGh680lGh-uXM.woff) format('woff');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://themes.googleusercontent.com/static/fonts/opensans/v8/k3k702ZOKiLJc3WVjuplzHhCUOGz7vYGh680lGh-uXM.woff) format('woff');
}
#bg {
position: fixed;
top: 0;
left: 0;
min-width: 100%;
min-height: 100%;
z-index: 10;
}
body {
margin: 0;
font-family: "Open Sans", sans-serif;
font-size: 12px;
line-height: 17px;
color: red;

}
div.subLoginForm .getStarted {
float: right;
}
.content {
  position: absolute;
  -webkit-transition: top 0.5s ease;
  -moz-transition: top 0.5s ease;
  -ms-transition: top 0.5s ease;
  -o-transition: top 0.5s ease;
  transition: top 0.5s ease;
  top: 50%;
  margin-top: -315px;
  left: 50%;
  width: 487px;
  margin-left: -243.5px;
}
div.loginForm.form {
  border: none;
}
div.loginForm .form-wrap {
  background: #fff;
  border-radius: 0 0 8px 8px;
}
div.loginForm form {
  margin: 0;
  margin-bottom: 20px;
  margin-top: 12px;
}
img {
vertical-align: middle;
border: 0;
-ms-interpolation-mode: bicubic;
}
div.loginForm .login-title {
  padding: 45px 0 0 0;
  text-align: center;
  font: 400 22px/1em 'Open Sans';
  color: #252b33;
}

div.loginForm fieldset {
  padding: 20px 42px 0px 42px;
}
div.loginForm fieldset:-moz-placeholder {
  color: #a0a3a6;
}
div.loginForm fieldset::-moz-placeholder {
  color: #a0a3a6;
}
div.loginForm fieldset:-ms-input-placeholder {
  color: #a0a3a6;
}
div.loginForm fieldset::-webkit-input-placeholder {
  color: #a0a3a6;
}
div.loginForm fieldset:-moz-placeholder {
  color: #a0a3a6;
}
div.loginForm fieldset::-moz-placeholder {
  color: #a0a3a6;
}
div.loginForm fieldset:-ms-input-placeholder {
  color: #a0a3a6;
}
div.loginForm fieldset::-webkit-input-placeholder {
  color: #a0a3a6;
}
div.loginForm fieldset:-moz-placeholder {
  color: #a0a3a6;
  font-style: italic;
  font-weight: bold;
  font-size: 12px;
}
div.loginForm fieldset:-ms-input-placeholder {
  color: #a0a3a6;
  font-style: italic;
  font-weight: bold;
  font-size: 12px;
}
div.loginForm fieldset::-webkit-input-placeholder {
  color: #a0a3a6;
  font-style: italic;
  font-weight: bold;
  font-size: 12px;
}
div.loginForm fieldset input {
  width: 100%;
  height: 45px;
  border: 1px solid #dbd9d9;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  padding: 0px 13px;
  margin: 0 0 20px 0;
  color: #434343;
  font-weight: 300;
  outline: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  -webkit-box-shadow: none 3px 3px 3px #cccccc;
  -moz-box-shadow: none 3px 3px 3px #cccccc;
  box-shadow: none 3px 3px 3px #cccccc;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box;
}
div.loginForm fieldset input:focus {
  border: 1px solid #dbd9d9;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  -webkit-box-shadow: none 3px 3px 3px #cccccc;
  -moz-box-shadow: none 3px 3px 3px #cccccc;
  box-shadow: none 3px 3px 3px #cccccc;
}
div.loginForm fieldset input.error {
  border-color: #ff3366;
}

div.loginForm footer {
  *zoom: 1;
  margin-top: 0px;
  padding: 0px 42px 60px 42px;
  background: #fff;
  border-radius: 0 0 8px 8px;
}
div.loginForm footer:before,
div.loginForm footer:after {
  display: table;
  content: "";
}
div.loginForm footer:after {
  clear: both;
}
div.loginForm footer:before,
div.loginForm footer:after {
  display: table;
  content: "";
}
div.loginForm footer:after {
  clear: both;
}
div.loginForm footer .legalNotice {
  float: left;
  width: 45%;
  font-size: 11px ;
  font-weight: 100;
  margin-top: 8px ;
  text-align: left;
  color: #838585;
}
div.loginForm footer .legalNotice a {
  color: #838585;
  text-decoration: underline ;
}
div.loginForm footer .primary.button {
  color: #fff;
  background: #086666;
  line-height: 1em;
  text-align: center;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  -webkit-box-shadow: none 3px 3px 3px #cccccc;
  -moz-box-shadow: none 3px 3px 3px #cccccc;
  box-shadow: none 3px 3px 3px #cccccc;
  text-shadow: none ;
  width: 100%;
  text-transform: uppercase;
  font: 400 16px/1em "brandon-grotesque", sans-serif;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
div.loginForm footer .primary.button:focus {
  outline: none;
}
div.loginForm footer .primary.button.large {
  padding: 23px 0;
  font-size: 16px;
}
div.loginForm footer .primary.button:hover {
  background: #088A68;
}
div.loginForm .keepMeLoggedIn {
  display: block;
  padding-top: 5px;
}
div.loginForm .keepMeLoggedIn .checker,
div.loginForm .keepMeLoggedIn label,
div.loginForm .keepMeLoggedIn input {
  float: left;
  margin: 0;
}
div.loginForm .keepMeLoggedIn label {
  color: #515151;
  margin-left: 10px;
  font-size: 12px;
  font-weight: 400;
  line-height: 17px;
}

div.form form button.submit {
  float: right;
}
div.form form .clear {
  clear: both;
}
div.loginForm.form {
  margin: 20px;
}
div.loginForm header {
  position: relative;
  background: #323a45;
  text-align: center;
  padding: 10px 0 4px 0;
  -webkit-border-radius: 8px 8px 0 0;
  -moz-border-radius: 8px 8px 0 0;
  border-radius: 8px 8px 0 0;
}
div.loginForm header:after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 50%;
  width: 0;
  height: 0;
  margin-left: -8px;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-top: 8px solid #323a45;
}

div.subLoginForm {
  color: #6a6f73;
  font-size: 13px;
  font-weight: 300;
}
div.subLoginForm a {
  color: #6a6f73;
}
div.subLoginForm .getStarted {
  float: right;
}
div.subLoginForm .getStarted a {
  color: #ff3366;
}
#overlay {
position: fixed;
top: 0;
left: 0;
min-width: 100%;
min-height: 100%;
z-index: 20;
background: url('./img/regi1.png');
}
#overlay.no-overlay-img {
background: none;
}
</style>
</head>
<body>

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
