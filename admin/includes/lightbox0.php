<style>
.wpmchimpa-overlay-bg {
top: 0;
left: 0;
height:778px;
width: 1024px;
background: #000;
background: rgba(0,0,0,{{theme.lite_bg_op/100 ||'0.4'}});
}
.wpmchimpa-overlay-bg #wpmchimpa-main {
width: 100%;
}
.wpmchimpa-overlay-bg .wpmchimpa-wrapper {
width:80%;
max-width:780px;
min-width:320px;
margin:0 auto;
}
.wpmchimpa-overlay-bg #wpmchimpa-newsletterform {
width:100%;
display: block;
text-align: center;
letter-spacing: 1px;
}
#wpmchimpa{
padding-top:150px;
}
#wpmchimpa h3 {
display: block;
line-height:1.2;
text-align: center;
padding-bottom:20px;
margin: 0 auto 30px auto;
border-bottom:1px solid #fff;
width:60%;
color: {{theme.heading_fc||'#fff'}};
font-size: {{theme.heading_f.s||'26'}}px;
font-weight: {{theme.heading_f.w||'400'}};
font-family: {{theme.heading_f.f | livepf}};
font-style: {{theme.heading_f.st}};
}
#wpmchimpa p {
line-height:26px;
margin-bottom:25px;
color:#fff;
font-size: {{theme.msg_f.s||'16'}}px;
font-family:Arial;
font-family: {{theme.msg_f.f | livepf}};
}
#wpmchimpa .lite_tbox{
display: block;
width:55%;
text-align: center;
margin: 0 auto 12px auto;
outline:0;
border-radius: 1px;
-webkit-border-radius: 1px;
-moz-border-radius: 1px;
-ms-border-radius: 1px;
-o-border-radius: 1px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
transition: all 0.5s ease;
color: {{theme.tbox_fc||'#888'}};
font-size: {{theme.tbox_f.s||'14'}}px;
font-weight: {{theme.tbox_f.w||'500'}};
font-family:Arial;
font-family: {{theme.tbox_f.f | livepf}};
font-style: {{theme.tbox_f.st}};
background-color: {{theme.tbox_bgc||'#fff'}};
width: {{theme.tbox_w}}px;
height: {{theme.tbox_h||'50'}}px;
line-height: {{theme.tbox_h||'50'}}px;
border: {{theme.tbox_bor||'1'}}px solid {{theme.tbox_borc||'#dddddd'}};
}

#wpmchimpa .wpmchimpa-subs-button{
width:40%;
border:none;
margin: 10px auto;
display: block;
transition: all 0.5s ease;
-webkit-box-shadow:none;
-moz-box-shadow:none;
-ms-box-shadow:none;
-o-box-shadow:none;
box-shadow:none;
background: #62bc33;
clear:both;
text-shadow:none;
color: {{theme.button_fc||'#fff'}};
font-size: {{theme.button_f.s||'18'}}px;
font-weight: {{theme.button_f.w}};
font-family:Open Sans;
font-family: {{theme.button_f.f | livepf}};
font-style: {{theme.button_f.st}};
{{theme.button_bc? "background-color:"+theme.button_bc+";" : "background: -moz-linear-gradient(left, #62bc33 0%, #8bd331 100%);
background: -webkit-gradient(linear, left top, right top, color-stop(0%,#62bc33), color-stop(100%,#8bd331));
background: -webkit-linear-gradient(left, #62bc33 0%,#8bd331 100%);
background: -o-linear-gradient(left, #62bc33 0%,#8bd331 100%);
background: -ms-linear-gradient(left, #62bc33 0%,#8bd331 100%);
background: linear-gradient(to right, #62bc33 0%,#8bd331 100%);"}}
width: {{theme.button_w}}px;
height: {{theme.button_h||'45'}}px;
line-height: {{theme.button_h||'45'}}px;
-webkit-border-radius: {{theme.button_br||'1'}}px;
-moz-border-radius: {{theme.button_br||'1'}}px;
border-radius: {{theme.button_br||'1'}}px;
border: {{theme.button_bor||'0'}}px solid {{theme.button_borc}};
}
#wpmchimpa .wpmchimpa-subs-button:hover {
border:none;
-webkit-box-shadow:none;
-moz-box-shadow:none;
-ms-box-shadow:none;
-o-box-shadow:none;
box-shadow:none;
background: #8BD331;
color: {{theme.button_fch||'#fff'}};
background-color: {{theme.button_bch}};
{{theme.button_bch? "background-color:"+theme.button_bch+";" : "background: -moz-linear-gradient(left, #8BD331 0%, #8bd331 100%);
background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8BD331), color-stop(100%,#8bd331));
background: -webkit-linear-gradient(left, #8BD331 0%,#8bd331 100%);
background: -o-linear-gradient(left, #8BD331 0%,#8bd331 100%);
background: -ms-linear-gradient(left, #8BD331 0%,#8bd331 100%);
background: linear-gradient(to right, #8BD331 0%,#8bd331 100%);"}}
border: {{theme.button_bor||'0'}}px solid {{theme.button_borc}};
}
#wpmchimpa .wpmchimpa-feedback {
color: #fff;
margin-top: 10px;
}

.wpmchimpa-overlay-bg .wpmchimpa-close-button {
display: inline-block;
width: 2em;
height: 2em;
border: 0.1em solid #7e7e7e;
-webkit-border-radius: 50%;
-moz-border-radius: 50%;
-msborder-radius: 50%;
-o-border-radius: 50%;
border-radius: 50%;
background-color: #7e7e7e;
top: 2em;
right:2em;
-moz-transform: rotate(45deg);
-o-transform: rotate(45deg);
-ms-transform: rotate(45deg);
-webkit-transform: rotate(45deg);
transform: rotate(45deg);
transition: all 0.5s ease;
position: absolute;
z-index:9999;
}
.wpmchimpa-overlay-bg .wpmchimpa-close-button::before {
content: "";
display: block;
position: absolute;
background-color: #000;
width: 80%;
height: 6%;
left: 10%;
top: 47%;
}
.wpmchimpa-overlay-bg .wpmchimpa-close-button::after {
content: "";
display: block;
position: absolute;
background-color: #000;
width: 6%;
height: 80%;
left: 47%;
top: 10%;
}
.wpmchimpa-overlay-bg .wpmchimpa-close-button:hover {
background-color: #fff;
-ms-transform: rotate(225deg);
-webkit-transform: rotate(225deg);
-moz-transform: rotate(225deg);
-o-transform: rotate(225deg);
transform: rotate(225deg);
}
.wpmchimpa-overlay-bg .wpmchimpa-close-button:hover::after {
background-color: #7e7e7e;
}
.wpmchimpa-overlay-bg .wpmchimpa-close-button:hover::before {
background-color: #7e7e7e;
}
#wpmchimpa .wpmchimpa-groups{
display: inline-block;
}
#wpmchimpa .wpmchimpa-item{
display:inline-block;
margin: 2px 15px;
}
#wpmchimpa .lite_check .ctext {
display: inline-block;
position: relative;
padding-left: 25px;
margin-right: 10px;
top: -5px;
color: {{theme.check_fc||'#fff'}};
font-size: {{theme.check_f.s}}px;
font-weight: {{theme.check_f.w}};
font-family: {{theme.check_f.f | livepf}};
font-style: {{theme.check_f.st}};
}
#wpmchimpa .lite_check .cbox{
display: inline-block;
width: 18px;
height: 18px;
background-color: #fafafa;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
-webkit-box-shadow: 0 0 1px 1px {{theme.check_borc}};
-moz-box-shadow: 0 0 1px 1px {{theme.check_borc}};
-ms-box-shadow: 0 0 1px 1px {{theme.check_borc}};
-o-box-shadow: 0 0 1px 1px {{theme.check_borc}};
box-shadow: 0 0 1px 1px {{theme.check_borc}};
}
#wpmchimpa .lite_check .cbox.checked {
background-color: {{theme.check_c||'#158EC6'}};
}
#wpmchimpa .lite_check .cbox.checked:after,#wpmchimpa .lite_check:hover .cbox:after{
content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAC4jAAAuIwF4pT92AAAAvElEQVQ4T63RwQsBQRzF8U0kycVBScp/wU3yB8jVXS6uFAcHe1JykIu7/3O8qackO2/2t3P4HHZ7892mzZxzWWpyYCEHFnJgIQeR+tBMGR3DHeapolN4wer7vToUsoQn7KFWNdqADYPbfxsV+NWGA4M7fqBU9AELqPO5BzmDJ2gVnQ1FZwwcYQI3PvtwJ3BOXn/N0McFuuKMjPornhm8wkAFY6LekMFRxDY66hX+lCrRUuTAQg4s5MBCDizeX/c4P/MwE9UAAAAASUVORK5CYII=);
content: {{theme.check_shade | chshade}};
}
#wpmchimpa .lite_check:hover .cbox:after{
background-image:{{getIcon(theme.check_mark||'ch1',12,'#444')}};
opacity: 0.5;
}
#wpmchimpa .wpmchimpa-tag{
display: {{theme.tag_en? 'block':'none'}};
}
#wpmchimpa .wpmchimpa-tag,
#wpmchimpa .wpmchimpa-tag *{
pointer-events: none;
color: {{theme.tag_fc||'#fff'}};
font-size: {{theme.tag_f.s||'10'}}px;
font-weight: {{theme.tag_f.w||'500'}};
font-family:Arial;
font-family: {{theme.tag_f.f | livepf}};
font-style: {{theme.tag_f.st}};
}
#wpmchimpa .wpmchimpa-tag:before{
content:{{getIcon('lock1',theme.tag_f.s||10,theme.tag_fc||'#fff')}};
margin: 5px;
top: 1px;
position: relative;
}
#wpmchimpa .lite_check {
display: inline-block;
position: relative;
padding-left: 30px;
min-width: 100px;
}
</style>
<div class="wpmchimpa-overlay-bg overcss">
<div class="chimpmate-live-sc" ng-click="prev.goto(8)" data-lhint="Go to Additional Theme Options" style="margin:25px;">7</div>
	<div id="wpmchimpa-main">
	<div class="chimpmate-live-sc" ng-click="prev.goto(7)" data-lhint="Go to Additional Theme Options" style="margin:15px;bottom:0;">6</div>
		<div class="wpmchimpa-wrapper">
			<div id="wpmchimpa-newsletterform">
    			<div class="wpmchimpa" id="wpmchimpa">
    			<div><div class="chimpmate-live-sc" ng-click="prev.goto(1)" data-lhint="Go to Custom Message Settings">1</div>
	    			<h3>{{theme.heading}}</h3>
	    			<div class="lite_msg"><p ng-bind-html="theme.msg | safe"></p></div>
	    		</div>
	    		<div><div class="chimpmate-live-sc righthov" ng-click="prev.goto(2)" data-lhint="Go to Text Box Settings" style="right: 10%;">2</div>
	    			<div class="lite_tbox"><div class="in-name">Name</div></div>
	    			<div class="lite_tbox"><div class="in-mail">Email address</div></div>
	    		</div>
	    		<div><div class="chimpmate-live-sc" ng-click="prev.goto(3)" data-lhint="Go to Checkbox Settings">3</div>
	    			<div class="wpmchimpa-groups">
						 <div class="wpmchimpa-item">
	                  <div class="lite_check">
	                    <div class="cbox"></div>
	                    <div class="ctext">group1</div>
	                  </div>
		              </div>
		              <div class="wpmchimpa-item">
	                  <div class="lite_check">
	                    <div class="cbox checked"></div>
	                    <div class="ctext">group2</div>
	                  </div>
		              </div>
	   				</div>
	   			</div>
	   			<div><div class="chimpmate-live-sc righthov" ng-click="prev.goto(4)" data-lhint="Go to Button Settings" style="right: 10%;">4</div>
	    			<div class="wpmchimpa-subs-button">{{theme.button}}</div>
	    		</div>
	    		<div><div class="chimpmate-live-sc" ng-click="prev.goto(7)" data-lhint="Go to Tag Settings">6</div>
	    		<div class="wpmchimpa-tag" ng-bind-html="theme.tag||'Secure and Spam free...' | safe"></div></div>
	    		<div>
	    			<div class="chimpmate-live-sc" ng-click="prev.goto(5)" data-lhint="Go to Spinner Settings" style="right: 10%;">5</div>
        			<div class="wpmchimpa-signal" ng-bind-html="getSpin(theme.spinner_t||'1','wpmchimpa-wrapper',theme.spinner_c||'#fff')"></div>
        		</div>
    			</div>
			</div>
		</div>
	</div>
	<div class="wpmchimpa-close-button"></div>
</div>