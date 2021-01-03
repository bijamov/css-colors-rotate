<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./lib/sweetalert2/src/sweetalert2.scss">
	<link rel="stylesheet" type="text/css" href="./front/css/style.css">
	<title>Welcome</title>
</head>

<body>

	<style>
		body
		{
			margin: 0px;
			padding: 0px;
			overflow: hidden;
			background-color: #f1f1f1;
		}

		.nb_input_field_div
		{
			position: relative;
			height: 550px;
			width: -webkit-calc(100% - 925px)

		}

		@media screen and (max-width: 1400px) {
		  .nb_input_field_div {
		  	position: relative;
		  	width: 100%;
		    height: 550px;
		    padding: 0px;
		  }
		}


		.nb_input_field
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		@media screen and (max-width: 1400px) {
		  .nb_input_field {
		  	width: 60%;
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		  }
		}

		.nbanim_code_c
		{
			position: absolute;
			top: 0px;
			left: 0px;
			clip: rect(0px, 100vw, 550px, 0px);
			opacity: 1;
		}

		.nbanim_devices_c
		{
			position: absolute;
			bottom: 0px;
			right: 50px;

		}


		@media screen and (max-width: 1400px) {
		  .nbanim_devices_c {
		    display: none;
		  }
		}


		#nbanim_container
		{
			z-index: -666;
			position: relative;
			width:100vw;
			height:550px;
			background-color: #39383c;

		}
		#nbanim_code
		{
			animation-name: codes_one;
			animation-duration: 24s;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
		}

		@keyframes codes_one {
			0% {top: 0px; clip: rect(0px, 100vw, 550px, 0px);}

			100% {top: -550px; clip: rect(0px, 100vw, 1100px, 0px);}
		}
	</style>

	<?php include('./header.php'); ?>
	<style>
		.bg-dark
		{
			background-color: #ffffff!important;
		}

		.nb_logo_text
		{
			color: #343a40!important;
		}
	</style>




	<div id="nbanim_container">
		<svg onload="myfunc()" version="1.1" id="nbanim_code" class="nbanim_code_c" x="0px" y="0px"
			 width="100%" height="1100px" enable-background="new 0 0 100% 1100">
		<g>
			<style>
			  tspan
			  {
			    font-family:"Consolas";
			    font-size:"15.8085";
			  }
			</style>

			<text transform="matrix(1 0 0 1 135.2886 14.395)">
			<tspan x="0" y="0" fill="#83C341">.pace-flash-purple .pace .pace-activity </tspan>
			<tspan x="347.664" y="0" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="18.97" fill="#71CEE6">  border-top-color</tspan>
			<tspan x="156.449" y="18.97" fill="#BFBFBF">:</tspan>
			<tspan x="165.14" y="18.97" fill="#71CEE6"> </tspan>
			<tspan x="173.832" y="18.97" fill="#996CAE" id="hex-color-1">#1515ff</tspan>
			<tspan x="234.673" y="18.97" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="37.94" fill="#71CEE6">  border-left-color</tspan>
			<tspan x="165.14" y="37.94" fill="#BFBFBF">:</tspan>
			<tspan x="173.832" y="37.94" fill="#71CEE6"> </tspan>
			<tspan x="182.523" y="37.94" fill="#996CAE" id="hex-color-2">#f5d48d</tspan>
			<tspan x="243.365" y="37.94" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="56.911" fill="#BFBFBF">}</tspan>
			<tspan x="0" y="94.851" fill="#83C341">.pace-loading-bar-purple .pace .pace-progress</tspan>
			<tspan x="391.122" y="94.851" fill="#71CEE6"> </tspan>
			<tspan x="399.813" y="94.851" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="113.821" fill="#71CEE6">  background</tspan>
			<tspan x="104.299" y="113.821" fill="#BFBFBF">:</tspan>
			<tspan x="112.991" y="113.821" fill="#71CEE6"> </tspan>
			<tspan x="121.682" y="113.821" fill="#996CAE" id="hex-color-3">#c12f15</tspan>
			<tspan x="182.523" y="113.821" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="132.792" fill="#71CEE6">  color</tspan>
			<tspan x="60.841" y="132.792" fill="#BFBFBF">:</tspan>
			<tspan x="69.533" y="132.792" fill="#71CEE6"> </tspan>
			<tspan x="78.224" y="132.792" fill="#996CAE" id="hex-color-4">#123f12</tspan>
			<tspan x="139.065" y="132.792" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="151.762" fill="#71CEE6">  box-shadow</tspan>
			<tspan x="104.299" y="151.762" fill="#BFBFBF">:</tspan>
			<tspan x="112.991" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="121.682" y="151.762" fill="#996CAE">120</tspan>
			<tspan x="147.757" y="151.762" fill="#EC008C">px</tspan>
			<tspan x="165.14" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="173.832" y="151.762" fill="#996CAE">0</tspan>
			<tspan x="182.523" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="191.215" y="151.762" fill="#996CAE" id="hex-color-5">#65f566</tspan>
			<tspan x="252.056" y="151.762" fill="#BFBFBF">,</tspan>
			<tspan x="260.748" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="269.439" y="151.762" fill="#996CAE">240</tspan>
			<tspan x="295.514" y="151.762" fill="#EC008C">px</tspan>
			<tspan x="312.897" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="321.589" y="151.762" fill="#996CAE">0</tspan>
			<tspan x="330.28" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="338.972" y="151.762" fill="#996CAE" id="hex-color-6">#00ff0f</tspan>
			<tspan x="399.813" y="151.762" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="170.732" fill="#BFBFBF">}</tspan>
			<tspan x="0" y="208.672" fill="#83C341">.pace-loading-bar-purple .pace .pace-activity</tspan>
			<tspan x="391.122" y="208.672" fill="#71CEE6"> </tspan>
			<tspan x="399.813" y="208.672" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="227.643" fill="#71CEE6">  box-shadow</tspan>
			<tspan x="104.299" y="227.643" fill="#BFBFBF">:</tspan>
			<tspan x="112.991" y="227.643" fill="#71CEE6"> inset </tspan>
			<tspan x="173.832" y="227.643" fill="#996CAE">0 0 0 2</tspan>
			<tspan x="234.673" y="227.643" fill="#EC008C">px</tspan>
			<tspan x="252.056" y="227.643" fill="#71CEE6"> </tspan>
			<tspan x="260.748" y="227.643" fill="#996CAE" id="hex-color-7">#c2af42</tspan>
			<tspan x="321.589" y="227.643" fill="#BFBFBF">,</tspan>
			<tspan x="330.28" y="227.643" fill="#71CEE6"> inset </tspan>
			<tspan x="391.122" y="227.643" fill="#996CAE">0 0 0 7</tspan>
			<tspan x="451.962" y="227.643" fill="#EC008C">px</tspan>
			<tspan x="469.346" y="227.643" fill="#71CEE6"> </tspan>
			<tspan x="478.038" y="227.643" fill="#996CAE" id="hex-color-8">#c1c1c1</tspan>
			<tspan x="538.878" y="227.643" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="246.613" fill="#71CEE6">}</tspan>
			<tspan x="0" y="284.553" fill="#83C341">.pace-mac-osx-purple .pace .pace-progress</tspan>
			<tspan x="356.355" y="284.553" fill="#71CEE6"> </tspan>
			<tspan x="365.047" y="284.553" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="303.523" fill="#71CEE6">  background-color</tspan>
			<tspan x="156.449" y="303.523" fill="#BFBFBF">:</tspan>
			<tspan x="165.14" y="303.523" fill="#71CEE6"> </tspan>
			<tspan x="173.832" y="303.523" fill="#996CAE" id="hex-color-9">#546d51</tspan>
			<tspan x="234.673" y="303.523" fill="#BFBFBF">;</tspan>
			<tspan x="243.365" y="303.523" fill="#71CEE6"> </tspan>
			<tspan x="0" y="322.494" fill="#71CEE6">  box-shadow: inset </tspan>
			<tspan x="173.832" y="322.494" fill="#996CAE">-1</tspan>
			<tspan x="191.215" y="322.494" fill="#EC008C">px</tspan>
			<tspan x="208.598" y="322.494" fill="#71CEE6"> </tspan>
			<tspan x="217.29" y="322.494" fill="#996CAE">0</tspan>
			<tspan x="225.981" y="322.494" fill="#71CEE6"> </tspan>
			<tspan x="234.673" y="322.494" fill="#996CAE" id="hex-color-10">#245875</tspan>
			<tspan x="295.514" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="304.206" y="322.494" fill="#71CEE6"> inset</tspan>
			<tspan x="356.355" y="322.494" fill="#996CAE"> 0 -1</tspan>
			<tspan x="399.813" y="322.494" fill="#EC008C">px</tspan>
			<tspan x="417.196" y="322.494" fill="#71CEE6"> </tspan>
			<tspan x="425.888" y="322.494" fill="#996CAE" id="hex-color-11">#55f4fd</tspan>
			<tspan x="486.729" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="495.42" y="322.494" fill="#71CEE6"> inset</tspan>
			<tspan x="547.57" y="322.494" fill="#996CAE"> 0 2</tspan>
			<tspan x="582.336" y="322.494" fill="#EC008C">px</tspan>
			<tspan x="599.72" y="322.494" fill="#71CEE6"> rgba(</tspan>
			<tspan x="651.869" y="322.494" fill="#996CAE">100</tspan>
			<tspan x="677.944" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="686.636" y="322.494" fill="#996CAE">122</tspan>
			<tspan x="712.71" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="721.402" y="322.494" fill="#996CAE">164</tspan>
			<tspan x="747.477" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="756.168" y="322.494" fill="#996CAE">50</tspan>
			<tspan x="773.551" y="322.494" fill="#EC008C">%</tspan>
			<tspan x="782.243" y="322.494" fill="#71CEE6">)</tspan>
			<tspan x="790.935" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="799.626" y="322.494" fill="#71CEE6"> inset </tspan>
			<tspan x="860.467" y="322.494" fill="#996CAE">0 6</tspan>
			<tspan x="886.542" y="322.494" fill="#EC008C">px</tspan>
			<tspan x="903.925" y="322.494" fill="#71CEE6"> rgba(</tspan>
			<tspan x="956.075" y="322.494" fill="#996CAE">255</tspan>
			<tspan x="982.149" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="990.841" y="322.494" fill="#996CAE">255</tspan>
			<tspan x="1016.916" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="1025.607" y="322.494" fill="#996CAE">255</tspan>
			<tspan x="1051.682" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="1060.374" y="322.494" fill="#996CAE">30</tspan>
			<tspan x="1077.757" y="322.494" fill="#EC008C">%</tspan>
			<tspan x="1086.449" y="322.494" fill="#71CEE6">)</tspan>
			<tspan x="1095.141" y="322.494" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="341.464" fill="#BFBFBF">}</tspan>
			<tspan x="0" y="379.404" fill="#83C341">.pace-mac-osx-purple .pace .pace-activity</tspan>
			<tspan x="356.355" y="379.404" fill="#71CEE6"> </tspan>
			<tspan x="365.047" y="379.404" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="398.375" fill="#71CEE6">  background-image</tspan>
			<tspan x="156.449" y="398.375" fill="#BFBFBF">:</tspan>
			<tspan x="165.14" y="398.375" fill="#71CEE6"> radial-gradient(rgba(</tspan>
			<tspan x="356.355" y="398.375" fill="#996CAE">244</tspan>
			<tspan x="382.43" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="391.122" y="398.375" fill="#996CAE">244</tspan>
			<tspan x="417.196" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="425.888" y="398.375" fill="#996CAE">224</tspan>
			<tspan x="451.962" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="460.654" y="398.375" fill="#996CAE">65</tspan>
			<tspan x="478.038" y="398.375" fill="#EC008C">%</tspan>
			<tspan x="486.729" y="398.375" fill="#71CEE6">) </tspan>
			<tspan x="504.112" y="398.375" fill="#996CAE">0</tspan>
			<tspan x="512.804" y="398.375" fill="#EC008C">%</tspan>
			<tspan x="521.496" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="530.187" y="398.375" fill="#71CEE6"> rgba(</tspan>
			<tspan x="582.336" y="398.375" fill="#996CAE">101</tspan>
			<tspan x="608.411" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="617.103" y="398.375" fill="#996CAE">148</tspan>
			<tspan x="643.178" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="651.869" y="398.375" fill="#996CAE">197</tspan>
			<tspan x="677.944" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="686.636" y="398.375" fill="#996CAE">15</tspan>
			<tspan x="704.019" y="398.375" fill="#EC008C">%</tspan>
			<tspan x="712.71" y="398.375" fill="#71CEE6">) </tspan>
			<tspan x="730.093" y="398.375" fill="#996CAE">100</tspan>
			<tspan x="756.168" y="398.375" fill="#EC008C">%</tspan>
			<tspan x="764.86" y="398.375" fill="#71CEE6">)</tspan>
			<tspan x="773.551" y="398.375" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="417.345" fill="#71CEE6">  height</tspan>
			<tspan x="69.533" y="417.345" fill="#BFBFBF">:</tspan>
			<tspan x="78.224" y="417.345" fill="#71CEE6"> </tspan>
			<tspan x="86.916" y="417.345" fill="#996CAE">12</tspan>
			<tspan x="104.299" y="417.345" fill="#EC008C">px</tspan>
			<tspan x="121.682" y="417.345" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="436.315" fill="#BFBFBF">}</tspan>
			<tspan x="0" y="474.255" fill="#83C341">.pace-progress-color-purple .pace-progress</tspan>
			<tspan x="365.047" y="474.255" fill="#71CEE6"> </tspan>
			<tspan x="373.738" y="474.255" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="493.226" fill="#71CEE6">  color</tspan>
			<tspan x="60.841" y="493.226" fill="#BFBFBF">: </tspan>
			<tspan x="78.224" y="493.226" fill="#996CAE" id="hex-color-12">#d52d1d</tspan>
			<tspan x="139.065" y="493.226" fill="#BFBFBF"> ;</tspan>
			<tspan x="0" y="512.196" fill="#BFBFBF">}</tspan></text>
			<text transform="matrix(1 0 0 1 135.2886 564.5703)">
				<tspan x="0" y="0" fill="#83C341">.pace-flash-purple .pace .pace-activity </tspan>
			<tspan x="347.664" y="0" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="18.97" fill="#71CEE6">  border-top-color</tspan>
			<tspan x="156.449" y="18.97" fill="#BFBFBF">:</tspan>
			<tspan x="165.14" y="18.97" fill="#71CEE6"> </tspan>
			<tspan x="173.832" y="18.97" fill="#996CAE" id="hex-color-13">#1515ff</tspan>
			<tspan x="234.673" y="18.97" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="37.94" fill="#71CEE6">  border-left-color</tspan>
			<tspan x="165.14" y="37.94" fill="#BFBFBF">:</tspan>
			<tspan x="173.832" y="37.94" fill="#71CEE6"> </tspan>
			<tspan x="182.523" y="37.94" fill="#996CAE" id="hex-color-14">#f5d48d</tspan>
			<tspan x="243.365" y="37.94" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="56.911" fill="#BFBFBF">}</tspan>
			<tspan x="0" y="94.851" fill="#83C341">.pace-loading-bar-purple .pace .pace-progress</tspan>
			<tspan x="391.122" y="94.851" fill="#71CEE6"> </tspan>
			<tspan x="399.813" y="94.851" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="113.821" fill="#71CEE6">  background</tspan>
			<tspan x="104.299" y="113.821" fill="#BFBFBF">:</tspan>
			<tspan x="112.991" y="113.821" fill="#71CEE6"> </tspan>
			<tspan x="121.682" y="113.821" fill="#996CAE" id="hex-color-15">#c12f15</tspan>
			<tspan x="182.523" y="113.821" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="132.792" fill="#71CEE6">  color</tspan>
			<tspan x="60.841" y="132.792" fill="#BFBFBF">:</tspan>
			<tspan x="69.533" y="132.792" fill="#71CEE6"> </tspan>
			<tspan x="78.224" y="132.792" fill="#996CAE" id="hex-color-16">#123f12</tspan>
			<tspan x="139.065" y="132.792" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="151.762" fill="#71CEE6">  box-shadow</tspan>
			<tspan x="104.299" y="151.762" fill="#BFBFBF">:</tspan>
			<tspan x="112.991" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="121.682" y="151.762" fill="#996CAE">120</tspan>
			<tspan x="147.757" y="151.762" fill="#EC008C">px</tspan>
			<tspan x="165.14" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="173.832" y="151.762" fill="#996CAE">0</tspan>
			<tspan x="182.523" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="191.215" y="151.762" fill="#996CAE" id="hex-color-17">#65f566</tspan>
			<tspan x="252.056" y="151.762" fill="#BFBFBF">,</tspan>
			<tspan x="260.748" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="269.439" y="151.762" fill="#996CAE">240</tspan>
			<tspan x="295.514" y="151.762" fill="#EC008C">px</tspan>
			<tspan x="312.897" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="321.589" y="151.762" fill="#996CAE">0</tspan>
			<tspan x="330.28" y="151.762" fill="#71CEE6"> </tspan>
			<tspan x="338.972" y="151.762" fill="#996CAE" id="hex-color-18">#00ff0f</tspan>
			<tspan x="399.813" y="151.762" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="170.732" fill="#BFBFBF">}</tspan>
			<tspan x="0" y="208.672" fill="#83C341">.pace-loading-bar-purple .pace .pace-activity</tspan>
			<tspan x="391.122" y="208.672" fill="#71CEE6"> </tspan>
			<tspan x="399.813" y="208.672" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="227.643" fill="#71CEE6">  box-shadow</tspan>
			<tspan x="104.299" y="227.643" fill="#BFBFBF">:</tspan>
			<tspan x="112.991" y="227.643" fill="#71CEE6"> inset </tspan>
			<tspan x="173.832" y="227.643" fill="#996CAE">0 0 0 2</tspan>
			<tspan x="234.673" y="227.643" fill="#EC008C">px</tspan>
			<tspan x="252.056" y="227.643" fill="#71CEE6"> </tspan>
			<tspan x="260.748" y="227.643" fill="#996CAE" id="hex-color-19">#c2af42</tspan>
			<tspan x="321.589" y="227.643" fill="#BFBFBF">,</tspan>
			<tspan x="330.28" y="227.643" fill="#71CEE6"> inset </tspan>
			<tspan x="391.122" y="227.643" fill="#996CAE">0 0 0 7</tspan>
			<tspan x="451.962" y="227.643" fill="#EC008C">px</tspan>
			<tspan x="469.346" y="227.643" fill="#71CEE6"> </tspan>
			<tspan x="478.038" y="227.643" fill="#996CAE" id="hex-color-20">#c1c1c1</tspan>
			<tspan x="538.878" y="227.643" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="246.613" fill="#71CEE6">}</tspan>
			<tspan x="0" y="284.553" fill="#83C341">.pace-mac-osx-purple .pace .pace-progress</tspan>
			<tspan x="356.355" y="284.553" fill="#71CEE6"> </tspan>
			<tspan x="365.047" y="284.553" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="303.523" fill="#71CEE6">  background-color</tspan>
			<tspan x="156.449" y="303.523" fill="#BFBFBF">:</tspan>
			<tspan x="165.14" y="303.523" fill="#71CEE6"> </tspan>
			<tspan x="173.832" y="303.523" fill="#996CAE" id="hex-color-21">#546d51</tspan>
			<tspan x="234.673" y="303.523" fill="#BFBFBF">;</tspan>
			<tspan x="243.365" y="303.523" fill="#71CEE6"> </tspan>
			<tspan x="0" y="322.494" fill="#71CEE6">  box-shadow: inset </tspan>
			<tspan x="173.832" y="322.494" fill="#996CAE">-1</tspan>
			<tspan x="191.215" y="322.494" fill="#EC008C">px</tspan>
			<tspan x="208.598" y="322.494" fill="#71CEE6"> </tspan>
			<tspan x="217.29" y="322.494" fill="#996CAE">0</tspan>
			<tspan x="225.981" y="322.494" fill="#71CEE6"> </tspan>
			<tspan x="234.673" y="322.494" fill="#996CAE" id="hex-color-22">#245875</tspan>
			<tspan x="295.514" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="304.206" y="322.494" fill="#71CEE6"> inset</tspan>
			<tspan x="356.355" y="322.494" fill="#996CAE"> 0 -1</tspan>
			<tspan x="399.813" y="322.494" fill="#EC008C">px</tspan>
			<tspan x="417.196" y="322.494" fill="#71CEE6"> </tspan>
			<tspan x="425.888" y="322.494" fill="#996CAE" id="hex-color-23">#55f4fd</tspan>
			<tspan x="486.729" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="495.42" y="322.494" fill="#71CEE6"> inset</tspan>
			<tspan x="547.57" y="322.494" fill="#996CAE"> 0 2</tspan>
			<tspan x="582.336" y="322.494" fill="#EC008C">px</tspan>
			<tspan x="599.72" y="322.494" fill="#71CEE6"> rgba(</tspan>
			<tspan x="651.869" y="322.494" fill="#996CAE">100</tspan>
			<tspan x="677.944" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="686.636" y="322.494" fill="#996CAE">122</tspan>
			<tspan x="712.71" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="721.402" y="322.494" fill="#996CAE">164</tspan>
			<tspan x="747.477" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="756.168" y="322.494" fill="#996CAE">50</tspan>
			<tspan x="773.551" y="322.494" fill="#EC008C">%</tspan>
			<tspan x="782.243" y="322.494" fill="#71CEE6">)</tspan>
			<tspan x="790.935" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="799.626" y="322.494" fill="#71CEE6"> inset </tspan>
			<tspan x="860.467" y="322.494" fill="#996CAE">0 6</tspan>
			<tspan x="886.542" y="322.494" fill="#EC008C">px</tspan>
			<tspan x="903.925" y="322.494" fill="#71CEE6"> rgba(</tspan>
			<tspan x="956.075" y="322.494" fill="#996CAE">255</tspan>
			<tspan x="982.149" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="990.841" y="322.494" fill="#996CAE">255</tspan>
			<tspan x="1016.916" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="1025.607" y="322.494" fill="#996CAE">255</tspan>
			<tspan x="1051.682" y="322.494" fill="#BFBFBF">,</tspan>
			<tspan x="1060.374" y="322.494" fill="#996CAE">30</tspan>
			<tspan x="1077.757" y="322.494" fill="#EC008C">%</tspan>
			<tspan x="1086.449" y="322.494" fill="#71CEE6">)</tspan>
			<tspan x="1095.141" y="322.494" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="341.464" fill="#BFBFBF">}</tspan>
			<tspan x="0" y="379.404" fill="#83C341">.pace-mac-osx-purple .pace .pace-activity</tspan>
			<tspan x="356.355" y="379.404" fill="#71CEE6"> </tspan>
			<tspan x="365.047" y="379.404" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="398.375" fill="#71CEE6">  background-image</tspan>
			<tspan x="156.449" y="398.375" fill="#BFBFBF">:</tspan>
			<tspan x="165.14" y="398.375" fill="#71CEE6"> radial-gradient(rgba(</tspan>
			<tspan x="356.355" y="398.375" fill="#996CAE">244</tspan>
			<tspan x="382.43" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="391.122" y="398.375" fill="#996CAE">244</tspan>
			<tspan x="417.196" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="425.888" y="398.375" fill="#996CAE">224</tspan>
			<tspan x="451.962" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="460.654" y="398.375" fill="#996CAE">65</tspan>
			<tspan x="478.038" y="398.375" fill="#EC008C">%</tspan>
			<tspan x="486.729" y="398.375" fill="#71CEE6">) </tspan>
			<tspan x="504.112" y="398.375" fill="#996CAE">0</tspan>
			<tspan x="512.804" y="398.375" fill="#EC008C">%</tspan>
			<tspan x="521.496" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="530.187" y="398.375" fill="#71CEE6"> rgba(</tspan>
			<tspan x="582.336" y="398.375" fill="#996CAE">101</tspan>
			<tspan x="608.411" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="617.103" y="398.375" fill="#996CAE">148</tspan>
			<tspan x="643.178" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="651.869" y="398.375" fill="#996CAE">197</tspan>
			<tspan x="677.944" y="398.375" fill="#BFBFBF">,</tspan>
			<tspan x="686.636" y="398.375" fill="#996CAE">15</tspan>
			<tspan x="704.019" y="398.375" fill="#EC008C">%</tspan>
			<tspan x="712.71" y="398.375" fill="#71CEE6">) </tspan>
			<tspan x="730.093" y="398.375" fill="#996CAE">100</tspan>
			<tspan x="756.168" y="398.375" fill="#EC008C">%</tspan>
			<tspan x="764.86" y="398.375" fill="#71CEE6">)</tspan>
			<tspan x="773.551" y="398.375" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="417.345" fill="#71CEE6">  height</tspan>
			<tspan x="69.533" y="417.345" fill="#BFBFBF">:</tspan>
			<tspan x="78.224" y="417.345" fill="#71CEE6"> </tspan>
			<tspan x="86.916" y="417.345" fill="#996CAE">12</tspan>
			<tspan x="104.299" y="417.345" fill="#EC008C">px</tspan>
			<tspan x="121.682" y="417.345" fill="#BFBFBF">;</tspan>
			<tspan x="0" y="436.314" fill="#BFBFBF">}</tspan>
			<tspan x="0" y="474.256" fill="#83C341">.pace-progress-color-purple .pace-progress</tspan>
			<tspan x="365.047" y="474.256" fill="#71CEE6"> </tspan>
			<tspan x="373.738" y="474.256" fill="#BFBFBF">{</tspan>
			<tspan x="0" y="493.226" fill="#71CEE6">  color</tspan>
			<tspan x="60.841" y="493.226" fill="#BFBFBF">: </tspan>
			<tspan x="78.224" y="493.226" fill="#996CAE" id="hex-color-24">#d52d1d</tspan>
			<tspan x="139.065" y="493.226" fill="#BFBFBF"> ;</tspan>
			<tspan x="0" y="512.195" fill="#BFBFBF">}</tspan></text>
			<text transform="matrix(1 0 0 1 60.8784 14.4429)">
				<tspan x="0" y="0" fill="#939598">21565</tspan>
			<tspan x="0" y="18.97" fill="#939598">21566</tspan>
			<tspan x="0" y="37.94" fill="#939598">21567</tspan>
			<tspan x="0" y="56.911" fill="#939598">21568</tspan>
			<tspan x="0" y="75.881" fill="#939598">21569</tspan>
			<tspan x="0" y="94.851" fill="#939598">21570</tspan>
			<tspan x="0" y="113.821" fill="#939598">21571</tspan>
			<tspan x="0" y="132.792" fill="#939598">21572</tspan>
			<tspan x="0" y="151.762" fill="#939598">21573</tspan>
			<tspan x="0" y="170.732" fill="#939598">21574</tspan>
			<tspan x="0" y="189.702" fill="#939598">21575</tspan>
			<tspan x="0" y="208.672" fill="#939598">21576</tspan>
			<tspan x="0" y="227.643" fill="#939598">21577</tspan>
			<tspan x="0" y="246.613" fill="#939598">21578</tspan>
			<tspan x="0" y="265.583" fill="#939598">21579</tspan>
			<tspan x="0" y="284.553" fill="#939598">21580</tspan>
			<tspan x="0" y="303.523" fill="#939598">21581</tspan>
			<tspan x="0" y="322.494" fill="#939598">21582</tspan>
			<tspan x="0" y="341.464" fill="#939598">21583</tspan>
			<tspan x="0" y="360.434" fill="#939598">21584</tspan>
			<tspan x="0" y="379.404" fill="#939598">21585</tspan>
			<tspan x="0" y="398.375" fill="#939598">21586</tspan>
			<tspan x="0" y="417.345" fill="#939598">21587</tspan>
			<tspan x="0" y="436.315" fill="#939598">21588</tspan>
			<tspan x="0" y="455.285" fill="#939598">21589</tspan>
			<tspan x="0" y="474.255" fill="#939598">21590</tspan>
			<tspan x="0" y="493.226" fill="#939598">21591</tspan>
			<tspan x="0" y="512.196" fill="#939598">21592</tspan>
			<tspan x="0" y="531.166" fill="#939598">21593</tspan>
			<tspan x="0" y="550.136" fill="#939598">21594</tspan>
			<tspan x="0" y="569.106" fill="#939598">21595</tspan>
			<tspan x="0" y="588.077" fill="#939598">21596</tspan>
			<tspan x="0" y="607.047" fill="#939598">21597</tspan>
			<tspan x="0" y="626.017" fill="#939598">21598</tspan>
			<tspan x="0" y="644.987" fill="#939598">21599</tspan>
			<tspan x="0" y="663.958" fill="#939598">21600</tspan>
			<tspan x="0" y="682.928" fill="#939598">21601</tspan>
			<tspan x="0" y="701.898" fill="#939598">21602</tspan>
			<tspan x="0" y="720.868" fill="#939598">21603</tspan>
			<tspan x="0" y="739.838" fill="#939598">21604</tspan>
			<tspan x="0" y="758.808" fill="#939598">21605</tspan>
			<tspan x="0" y="777.779" fill="#939598">21606</tspan>
			<tspan x="0" y="796.749" fill="#939598">21607</tspan>
			<tspan x="0" y="815.719" fill="#939598">21608</tspan>
			<tspan x="0" y="834.689" fill="#939598">21609</tspan>
			<tspan x="0" y="853.66" fill="#939598">21610</tspan>
			<tspan x="0" y="872.629" fill="#939598">21611</tspan>
			<tspan x="0" y="891.6" fill="#939598">21612</tspan>
			<tspan x="0" y="910.57" fill="#939598">21613</tspan>
			<tspan x="0" y="929.541" fill="#939598">21614</tspan>
			<tspan x="0" y="948.51" fill="#939598">21615</tspan>
			<tspan x="0" y="967.481" fill="#939598">21616</tspan>
			<tspan x="0" y="986.451" fill="#939598">21617</tspan>
			<tspan x="0" y="1005.421" fill="#939598">21618</tspan>
			<tspan x="0" y="1024.391" fill="#939598">21619</tspan>
			<tspan x="0" y="1043.362" fill="#939598">21620</tspan>
			<tspan x="0" y="1062.332" fill="#939598">21621</tspan>
			<tspan x="0" y="1081.302" fill="#939598">21622</tspan></text>
		</g>
		</svg>



		<svg version="1.1" id="nbanim_devices" class="nbanim_devices_c" x="0px" y="0px"
			 width="875px" height="490px" enable-background="new 0 0 875 490" xml:space="preserve">
			<g id="devices_1_">
				<path fill="#221F1F" d="M105.458,440.458c0,1.074-8.444,1.933-18.854,1.933c-10.416,0-18.853-0.859-18.853-1.933
					c0-1.063,8.437-1.925,18.853-1.925C97.013,438.533,105.458,439.395,105.458,440.458L105.458,440.458z"/>
				<polygon fill="#D0D2D3" points="408.075,412.236 269.51,412.236 289.544,318.394 388.041,318.394 408.075,412.236 	"/>
				<polygon fill="#BBBDBF" points="399.37,371.457 388.041,318.394 289.544,318.394 278.215,371.457 399.37,371.457 	"/>
				<path fill="#E6E6E7" d="M437.11,423.052H240.475c-10.432,0-12.039-13.862-12.039-13.862h220.712
					C449.149,409.19,447.544,423.052,437.11,423.052"/>
				<path fill="#221F1F" d="M598.856,299.624c0,12.732-10.278,23.047-22.961,23.047H101.691c-12.685,0-22.96-10.315-22.96-23.047
					V23.052C78.73,10.322,89.006,0,101.691,0h474.204c12.684,0,22.961,10.322,22.961,23.052V299.624"/>
				<path fill="#E6E6E7" d="M78.73,293.38v45.357c0,12.727,10.276,23.046,22.96,23.046h474.204c12.684,0,22.961-10.32,22.961-23.046
					V293.38H78.73"/>
				<polyline fill="#F1F1F1" points="582.075,272.714 95.512,272.714 95.512,21.773 582.075,21.773 582.075,272.714 	"/>
				<path fill="#929597" d="M355.413,326.375c0,9.211-7.442,16.681-16.619,16.681c-9.178,0-16.619-7.469-16.619-16.681
					c0-9.215,7.441-16.683,16.619-16.683C347.971,309.693,355.413,317.161,355.413,326.375L355.413,326.375z"/>
				<polyline class="nb_P" fill="#914F94" points="266.209,57.067 160.233,57.067 160.233,33.684 266.209,33.684 266.209,57.067 	"/>
				<polyline fill="#BBBDBF" points="517.355,57.067 285.809,57.067 285.809,33.684 517.355,33.684 517.355,57.067 	"/>
				<polyline class="nb_Bd" fill="#29A8E0" points="517.355,132.163 160.233,132.163 160.233,67.733 517.355,67.733 517.355,132.163 	"/>
				<polyline class="nb_O" fill="#F69323" points="266.209,210.323 160.237,210.323 160.237,145.128 266.209,145.128 266.209,210.323 	"/>
				<polyline class="nb_Rd" fill="#D34040" points="391.782,210.323 285.809,210.323 285.809,145.128 391.782,145.128 391.782,210.323 	"/>
				<polyline fill="#8BC543" points="517.355,210.323 411.381,210.323 411.381,145.128 517.355,145.128 517.355,210.323 	"/>
				<polyline fill="#929597" points="266.209,229.508 160.237,229.508 160.237,220.249 266.209,220.249 266.209,229.508 	"/>
				<polyline fill="#BBBDBF" points="266.209,245.884 160.237,245.884 160.237,236.624 266.209,236.624 266.209,245.884 	"/>
				<polyline fill="#BBBDBF" points="266.209,262.26 160.237,262.26 160.237,253.001 266.209,253.001 266.209,262.26 	"/>
				<polyline fill="#929597" points="391.782,229.508 285.809,229.508 285.809,220.249 391.782,220.249 391.782,229.508 	"/>
				<polyline fill="#BBBDBF" points="391.782,245.884 285.809,245.884 285.809,236.624 391.782,236.624 391.782,245.884 	"/>
				<polygon fill="#BBBDBF" points="391.782,262.26 285.809,262.26 285.809,253.001 391.782,253.001 391.782,262.26 	"/>
				<polyline fill="#929597" points="517.355,229.508 411.381,229.508 411.381,220.249 517.355,220.249 517.355,229.508 	"/>
				<polyline fill="#BBBDBF" points="517.355,245.884 411.381,245.884 411.381,236.624 517.355,236.624 517.355,245.884 	"/>
				<polyline fill="#BBBDBF" points="517.355,262.26 411.381,262.26 411.381,253.001 517.355,253.001 517.355,262.26 	"/>
				<path fill="#656464" d="M451.76,293.38h-28.789l-12.429-20.667h41.218V293.38 M598.856,214.982h-16.781V21.773H259.621
					L246.739,0.353h329.156c12.684,0,22.961,10.322,22.961,23.053V214.982"/>
				<polyline fill="#EEEEEE" points="451.76,341.248 422.971,293.38 451.76,293.38 451.76,341.248 	"/>
				<path fill="#F5F5F5" d="M451.76,272.714h-41.218l-18.76-31.192v-4.897h-2.945l-4.279-7.116h7.224v-9.259h-12.794l-5.97-9.926
					h18.764v-65.194H333.81l-7.798-12.966h191.343v-64.43H287.262l-27.641-45.959h322.453v193.208H472.206
					c-5.259,0-10.052,1.994-13.675,5.267h-47.149v9.259h41.266c-0.578,1.898-0.888,3.915-0.888,6.001v1.114h-40.378v9.26h40.378v7.117
					h-40.378v9.259h40.378V272.714 M411.381,145.128v65.194h105.974v-65.194H411.381 M285.809,33.684v23.384h231.546V33.684H285.809"/>
				<polyline fill="#D0D1D2" points="517.355,57.067 285.809,57.067 285.809,33.684 517.355,33.684 517.355,57.067 	"/>
				<polyline class="nb_Bl" fill="#6BC3E9" points="517.355,132.163 326.012,132.163 287.262,67.733 517.355,67.733 517.355,132.163 	"/>
				<polyline class="nb_Rl" fill="#E07A7A" points="391.782,210.323 373.018,210.323 333.81,145.128 391.782,145.128 391.782,210.323 	"/>
				<polyline class="nb_Gr" fill="#AED57C" points="517.355,210.323 411.381,210.323 411.381,145.128 517.355,145.128 517.355,210.323 	"/>
				<polyline fill="#B3B5B6" points="391.782,229.508 384.558,229.508 378.988,220.249 391.782,220.249 391.782,229.508 	"/>
				<polyline fill="#D0D1D2" points="391.782,241.521 388.836,236.624 391.782,236.624 391.782,241.521 	"/>
				<path fill="#B3B5B6" d="M452.647,229.508h-41.266v-9.259h47.149C455.806,222.713,453.745,225.898,452.647,229.508"/>
				<polyline fill="#D0D1D2" points="451.76,245.884 411.381,245.884 411.381,236.624 451.76,236.624 451.76,245.884 	"/>
				<polyline fill="#D0D1D2" points="451.76,262.26 411.381,262.26 411.381,253.001 451.76,253.001 451.76,262.26 	"/>
				<path fill="#221F1F" d="M833.918,473.396V235.51c0-11.337-9.154-20.528-20.448-20.528H472.206
					c-11.293,0-20.446,9.191-20.446,20.528v237.886H833.918"/>
				<path fill="#BBBDBF" d="M864.396,487.396H421.282c-9.192,0-10.606-12.212-10.606-12.212H875
					C875,475.183,873.59,487.396,864.396,487.396L864.396,487.396z"/>
				<polygon fill="#E6E6E7" points="875,477.264 410.676,477.264 410.676,470.414 875,470.414 875,477.264 	"/>
				<polygon fill="#BBBDBF" points="687.641,474.297 598.034,474.297 598.034,470.414 687.641,470.414 687.641,474.297 	"/>
				<polyline fill="#F1F1F1" points="818.974,457.828 466.705,457.828 466.705,234.371 818.974,234.371 818.974,457.828 	"/>
				<polygon class="nb_P" fill="#914F94" points="577.055,265.773 482.688,265.773 482.688,244.95 577.055,244.95 577.055,265.773 	"/>
				<polyline fill="#BBBDBF" points="800.69,265.773 594.505,265.773 594.505,244.95 800.69,244.95 800.69,265.773 	"/>
				<polyline class="nb_Bd" fill="#29A8E0" points="800.69,332.645 482.688,332.645 482.688,275.271 800.69,275.271 800.69,332.645 	"/>
				<polygon class="nb_O" fill="#F69323" points="577.055,402.243 482.688,402.243 482.688,344.191 577.055,344.191 577.055,402.243 	"/>
				<polyline class="nb_Rd" fill="#D34040" points="688.872,402.243 594.505,402.243 594.505,344.191 688.872,344.191 688.872,402.243 	"/>
				<polyline fill="#8BC543" points="800.69,402.243 706.324,402.243 706.324,344.191 800.69,344.191 800.69,402.243 	"/>
				<polygon fill="#929597" points="577.055,419.328 482.688,419.328 482.688,411.08 577.055,411.08 577.055,419.328 	"/>
				<polygon fill="#BBBDBF" points="577.055,433.91 482.688,433.91 482.688,425.664 577.055,425.664 577.055,433.91 	"/>
				<polygon fill="#BBBDBF" points="577.055,448.492 482.688,448.492 482.688,440.244 577.055,440.244 577.055,448.492 	"/>
				<polygon fill="#929597" points="688.872,419.328 594.505,419.328 594.505,411.08 688.872,411.08 688.872,419.328 	"/>
				<polygon fill="#BBBDBF" points="688.872,433.91 594.505,433.91 594.505,425.664 688.872,425.664 688.872,433.91 	"/>
				<polygon fill="#BBBDBF" points="688.872,448.492 594.505,448.492 594.505,440.244 688.872,440.244 688.872,448.492 	"/>
				<polyline fill="#929597" points="800.69,419.328 706.324,419.328 706.324,411.08 800.69,411.08 800.69,419.328 	"/>
				<polyline fill="#BBBDBF" points="800.69,433.91 706.324,433.91 706.324,425.664 800.69,425.664 800.69,433.91 	"/>
				<polyline fill="#BBBDBF" points="800.69,448.492 706.324,448.492 706.324,440.244 800.69,440.244 800.69,448.492 	"/>
				<g>
					<defs>
						<path id="SVGID_3_" d="M834.047,469.583h-0.129V235.51c0-11.337-9.154-20.528-20.448-20.528h0.131
							c11.295,0,20.446,9.191,20.446,20.528V469.583"/>
					</defs>
					<clipPath id="SVGID_2_">
						<use xlink:href="#SVGID_3_"  overflow="visible"/>
					</clipPath>
					<rect x="813.47" y="214.982" clip-path="url(#SVGID_2_)" fill="#FFFFFF" width="20.577" height="254.601"/>
				</g>
				<path fill="#656464" d="M833.918,469.583H731.726l-7.071-11.755h94.319V234.371H590.266l-11.662-19.389H813.47
					c11.294,0,20.448,9.191,20.448,20.528V469.583"/>
				<path fill="#F5F5F5" d="M818.974,457.828h-94.319l-5.614-9.336h81.649v-8.248h-86.608l-3.812-6.334h90.42v-8.246h-94.366v1.683
					l-17.452-29.018v-54.138h-32.56l-6.944-11.546H800.69v-57.375H614.863l-5.711-9.497H800.69V244.95H596.627l-6.361-10.579h228.708
					V457.828 M706.324,411.08v8.248h94.366v-8.248H706.324 M706.324,344.191v58.052h94.366v-58.052H706.324"/>
				<polyline fill="#D0D1D2" points="800.69,265.773 609.151,265.773 596.627,244.95 800.69,244.95 800.69,265.773 	"/>
				<polyline class="nb_Bl" fill="#6BC3E9" points="800.69,332.645 649.368,332.645 614.863,275.271 800.69,275.271 800.69,332.645 	"/>
				<polyline class="nb_Rl" fill="#E07A7A" points="688.872,398.329 656.313,344.191 688.872,344.191 688.872,398.329 	"/>
				<polyline class="nb_Gr" fill="#AED57C" points="800.69,402.243 706.324,402.243 706.324,344.191 800.69,344.191 800.69,402.243 	"/>
				<polyline fill="#B3B5B6" points="800.69,419.328 706.324,419.328 706.324,411.08 800.69,411.08 800.69,419.328 	"/>
				<polyline fill="#D0D1D2" points="800.69,433.91 710.27,433.91 706.324,427.346 706.324,425.664 800.69,425.664 800.69,433.91 	"/>
				<polyline fill="#D0D1D2" points="800.69,448.492 719.041,448.492 714.082,440.244 800.69,440.244 800.69,448.492 	"/>
				<path fill="#221F1F" d="M11.439,443.203c-6.32,0-11.439-5.14-11.439-11.485V200.499c0-6.341,5.119-11.482,11.439-11.482h154.056
					c6.32,0,11.44,5.141,11.44,11.482v231.219c0,6.345-5.12,11.485-11.44,11.485H11.439"/>
				<polyline fill="#F1F1F1" points="12.057,418.471 12.057,213.748 164.878,213.748 164.878,418.471 12.057,418.471 	"/>
				<path fill="#403F41" d="M100.395,431.491c0,2.323-1.877,4.207-4.193,4.207H83.026c-2.315,0-4.189-1.884-4.189-4.207
					c0-2.327,1.874-4.207,4.189-4.207h13.176C98.517,427.284,100.395,429.164,100.395,431.491L100.395,431.491z"/>
				<polyline class="nb_P" fill="#914F94" points="67.436,245.245 20.132,245.245 20.132,225.043 67.436,225.043 67.436,245.245 	"/>
				<polyline fill="#BBBDBF" points="156.752,245.245 75.806,245.245 75.806,225.043 156.752,225.043 156.752,245.245 	"/>
				<polyline class="nb_Bd" fill="#29A8E0" points="156.752,312.873 20.133,312.873 20.133,256.109 156.752,256.109 156.752,312.873 	"/>
				<polygon class="nb_O" fill="#F69323" points="82.272,361.937 20.132,361.937 20.132,323.708 82.272,323.708 82.272,361.937 	"/>
				<polyline class="nb_Rd" fill="#D34040" points="155.904,361.937 93.763,361.937 93.763,323.708 155.904,323.708 155.904,361.937 	"/>
				<polygon fill="#929597" points="82.272,376.719 20.132,376.719 20.132,371.288 82.272,371.288 82.272,376.719 	"/>
				<polygon fill="#BBBDBF" points="82.272,387.797 20.132,387.797 20.132,382.367 82.272,382.367 82.272,387.797 	"/>
				<polygon fill="#BBBDBF" points="82.272,398.875 20.132,398.875 20.132,393.446 82.272,393.446 82.272,398.875 	"/>
				<polygon fill="#BBBDBF" points="82.274,409.952 20.133,409.952 20.133,404.521 82.274,404.521 82.274,409.952 	"/>
				<polyline fill="#929597" points="155.904,376.719 93.763,376.719 93.763,371.288 155.904,371.288 155.904,376.719 	"/>
				<polyline fill="#BBBDBF" points="155.904,387.797 93.763,387.797 93.763,382.367 155.904,382.367 155.904,387.797 	"/>
				<polyline fill="#BBBDBF" points="155.904,398.875 93.763,398.875 93.763,393.446 155.904,393.446 155.904,398.875 	"/>
				<polyline fill="#BBBDBF" points="155.904,409.956 93.763,409.956 93.763,404.524 155.904,404.524 155.904,409.956 	"/>
				<polyline fill="#F5F5F5" points="136.993,404.524 136.613,404.524 133.215,398.875 136.993,398.875 136.993,404.524 	"/>
				<polyline fill="#656464" points="176.937,293.38 176.935,293.38 176.935,272.714 176.937,272.714 176.937,293.38 	"/>
				<polyline fill="#EEEEEE" points="176.937,311.397 176.935,311.397 176.935,293.38 176.937,293.38 176.937,311.397 	"/>
				<path fill="#F5F5F5" d="M176.937,272.714h-0.002V262.26h0.002V272.714 M176.937,253.001h-0.002v-7.117h0.002V253.001
					 M176.937,236.624h-0.002v-7.116h0.002V236.624 M176.937,220.249h-0.002v-9.926h0.002V220.249"/>
				<path fill="#F8B465" d="M176.937,210.323h-0.002v-9.824c0-6.329-5.101-11.462-11.403-11.482
					c6.302,0.021,11.405,5.152,11.405,11.482V210.323"/>
				<polyline fill="#B3B5B6" points="176.937,229.508 176.935,229.508 176.935,220.249 176.937,220.249 176.937,229.508 	"/>
				<polyline fill="#D0D1D2" points="176.937,245.884 176.935,245.884 176.935,236.624 176.937,236.624 176.937,245.884 	"/>
				<polyline fill="#D0D1D2" points="176.937,262.26 176.935,262.26 176.935,253.001 176.937,253.001 176.937,262.26 	"/>
				<polyline fill="#FFFFFF" points="11.407,189.017 11.413,189.017 11.407,189.017 	"/>
				<path fill="#656464" d="M176.935,311.397h-12.056v-97.65H21.877L7.444,189.75c1.235-0.462,2.566-0.729,3.963-0.733
					c0.001,0,0.004,0,0.006,0c0.009,0,0.018,0,0.027,0h154.055c0.012,0,0.024,0,0.037,0c6.302,0.021,11.403,5.154,11.403,11.482v9.824
					v9.926v9.259v7.116v9.26v7.117v9.259v10.454v20.667V311.397"/>
				<path fill="#F5F5F5" d="M136.993,393.446h-7.042l-3.397-5.649h10.439V393.446 M136.993,382.367h-13.706l-3.396-5.648h17.101
					V382.367 M136.993,371.288h-20.368L111,361.937h25.993V371.288 M93.763,333.275l-12.271-20.402h60.014
					c-1.685,1.033-3.046,2.546-3.896,4.348l0.2,0.331c-0.527,1.231-0.818,2.585-0.818,4.008v2.148h-43.23V333.275 M164.878,311.397
					h-8.126v-55.288H47.353l-6.534-10.865h26.617v-20.202H28.67l-6.793-11.295h143.002V311.397 M75.806,225.043v20.202h80.947v-20.202
					H75.806"/>
				<polyline fill="#B283B4" points="67.436,245.245 40.819,245.245 28.67,225.043 67.436,225.043 67.436,245.245 	"/>
				<polyline fill="#D0D1D2" points="156.752,245.245 75.806,245.245 75.806,225.043 156.752,225.043 156.752,245.245 	"/>
				<path class="nb_Bl" fill="#6BC3E9" d="M141.506,312.873H81.492l-34.139-56.763h109.399v55.288h-9.639l0,0h-0.361
					C144.829,311.397,143.034,311.937,141.506,312.873"/>
				<polyline class="nb_Rl" fill="#E07A7A" points="136.993,361.937 111,361.937 93.763,333.275 93.763,323.708 136.993,323.708 136.993,361.937 	"/>
				<polyline fill="#B3B5B6" points="136.993,376.719 119.891,376.719 116.625,371.288 136.993,371.288 136.993,376.719 	"/>
				<polyline fill="#D0D1D2" points="136.993,387.797 126.554,387.797 123.287,382.367 136.993,382.367 136.993,387.797 	"/>
				<polyline fill="#D0D1D2" points="136.993,398.875 133.215,398.875 129.951,393.446 136.993,393.446 136.993,398.875 	"/>
				<polyline fill="#D0D1D2" points="136.993,405.156 136.613,404.524 136.993,404.524 136.993,405.156 	"/>
				<path fill="#221F1F" d="M239.694,479.838c0,5.614-4.532,10.162-10.12,10.162h-82.46c-5.593,0-10.121-4.547-10.121-10.162V321.56
					c0-5.61,4.528-10.162,10.121-10.162h82.46c5.588,0,10.12,4.552,10.12,10.162V479.838"/>
				<polyline fill="#F1F1F1" points="233.37,464.949 143.316,464.949 143.316,333.849 233.37,333.849 233.37,464.949 	"/>
				<path fill="#403F41" d="M192.125,323.817c0,2.099-1.694,3.797-3.782,3.797c-2.088,0-3.784-1.698-3.784-3.797
					c0-2.097,1.696-3.795,3.784-3.795C190.431,320.022,192.125,321.72,192.125,323.817"/>
				<path fill="#403F41" d="M199.053,477.599c0,2.308-1.866,4.178-4.165,4.178h-13.089c-2.302,0-4.167-1.87-4.167-4.178
					c0-2.309,1.865-4.179,4.167-4.179h13.089C197.187,473.419,199.053,475.29,199.053,477.599L199.053,477.599z"/>
				<polyline class="nb_P" fill="#914F94" points="229.102,351.189 147.842,351.189 147.842,338.017 229.102,338.017 229.102,351.189 	"/>
				<polyline fill="#BBBDBF" points="229.099,370.192 147.844,370.192 147.844,355.608 229.099,355.608 229.099,370.192 	"/>
				<polyline class="nb_Bd" fill="#29A8E0" points="229.1,408.494 147.844,408.494 147.844,375.577 229.1,375.577 229.1,408.494 	"/>
				<polyline class="nb_O" fill="#F69323" points="229.099,459.181 147.842,459.181 147.842,413.71 229.099,413.71 229.099,459.181 	"/>
				<path fill="#F8F8F8" d="M137.81,317.551l-0.2-0.331c0.849-1.802,2.211-3.314,3.896-4.348h0.352
					C140.068,313.966,138.644,315.602,137.81,317.551"/>
				<path fill="#98D4EF" d="M141.858,312.873h-0.352c1.528-0.936,3.322-1.475,5.246-1.475h0.361
					C145.188,311.397,143.391,311.937,141.858,312.873"/>
				<path fill="#656464" d="M238.206,484.485l-11.749-19.536h6.913V333.849h-85.76l-9.8-16.297c0.834-1.949,2.258-3.585,4.048-4.679
					c1.532-0.936,3.33-1.475,5.255-1.475h82.099c5.589,0,10.122,4.552,10.122,10.162v158.279
					C239.334,481.517,238.922,483.092,238.206,484.485 M188.343,320.022c-2.088,0-3.784,1.698-3.784,3.795
					c0,2.099,1.696,3.797,3.784,3.797c2.088,0,3.782-1.698,3.782-3.797C192.125,321.72,190.431,320.022,188.343,320.022"/>
				<polyline fill="#F5F5F5" points="233.37,464.949 226.457,464.949 222.988,459.181 229.099,459.181 229.099,413.71 195.641,413.71 
					192.503,408.494 229.1,408.494 229.1,375.577 172.707,375.577 169.467,370.192 229.099,370.192 229.099,355.608 160.698,355.608 
					158.04,351.189 229.102,351.189 229.102,338.017 150.117,338.017 147.61,333.849 233.37,333.849 233.37,464.949 	"/>
				<path fill="#7B7A7B" d="M188.343,327.614c-2.088,0-3.784-1.698-3.784-3.797c0-2.097,1.696-3.795,3.784-3.795
					c2.088,0,3.782,1.698,3.782,3.795C192.125,325.916,190.431,327.614,188.343,327.614"/>
				<polyline fill="#B283B4" points="229.102,351.189 158.04,351.189 150.117,338.017 229.102,338.017 229.102,351.189 	"/>
				<polyline fill="#D0D1D2" points="229.099,370.192 169.467,370.192 160.698,355.608 229.099,355.608 229.099,370.192 	"/>
				<polyline class="nb_Bl" fill="#6BC3E9" points="229.1,408.494 192.503,408.494 172.707,375.577 229.1,375.577 229.1,408.494 	"/>
				<polyline fill="#F8B465" points="229.099,459.181 222.988,459.181 195.641,413.71 229.099,413.71 229.099,459.181 	"/>
			</g>
		</svg>
		<div class="nb_input_field_div">
		<!-- 	<form id="css_file_form" class="nb_input_field" method="post" enctype="multipart/form-data" action="./initializing.php">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="css_file" name="css_file">
					<label class="custom-file-label" for="css_file">Choose file</label>
				</div>
			</form> -->
		</div>
	</div>









































	<div class="row" style="width: 100%; height: 250px; position: absolute; top: 600px;">
	</div>
	<div class="row justify-content-center">
		<form id="css_file_form" class="col-6 pt-5" method="post" enctype="multipart/form-data" action="./initializing.php">
			<div class="custom-file">
				<input type="file" class="custom-file-input" id="css_file" name="css_file">
				<label class="custom-file-label" for="css_file">Choose file</label>
			</div>
		</form>
	</div>


	<?php include('./footer.php'); ?>

</body>

<script src="./lib/jquery.3.5.1/jquery-3.5.1.min.js"></script>
<script src="./lib/popper-1.16.0/popper.min.js"></script>
<script src="./lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="./lib/sweetalert2/src/sweetalert2.min.js"></script>
<script src="./front/js/login_page.js"></script>
<script src="./front/js/index_page.js"></script>



<script type="text/javascript">
function myfunc(){

	var col = [];
	col[0]  =  "#f9e9b3";
	col[1]  =  "#333333";
	col[2]  =  "#c4c9bf";
	col[3]  =  "#f3c71e";
	col[4]  =  "#ffd416";
	col[5]  =  "#fcd314";
	col[6]  =  "#ffc100";
	col[7]  =  "#a77864";
	col[8]  =  "#f3658c";
	col[9]  =  "#ff007f";
	col[10] =  "#7fffbf";
	col[11] =  "#ffd700";
	col[12] =  "#ecc9ff";
	col[13] =  "#fd625e";
	col[14] =  "#faffa7";
	col[15] =  "#ffc0cb";
	col[16] =  "#4b0f0f";
	col[17] =  "#f9f0e6";
	col[18] =  "#c6e2ff";
	col[19] =  "#b3f9e9";
	col[20] =  "#7f7f7f";
	col[21] =  "#faf0a5";
	col[22] =  "#fac6a5";
	col[23] =  "#b3e6f9";

	var dev_color = [];
	dev_color['Bd'] = [];
	dev_color['Bl'] = [];
	dev_color['Rd'] = [];
	dev_color['Rl'] = [];
	dev_color['O'] = [];
	dev_color['Gr'] = [];
	dev_color['P'] = [];

	dev_color['Bd'][0] = '#29A8E0';
	dev_color['Bl'][0] = '#6BC3E9';
	dev_color['Rd'][0] = '#D34040';
	dev_color['Rl'][0] = '#E07A7A';
	dev_color['O'][0] = '#F69323';
	dev_color['Gr'][0] = '#AED57C';
	dev_color['P'][0] = '#914F94';

	dev_color['Bd'][1] = '#df299e';
	dev_color['Bl'][1] = '#e86abd';
	dev_color['Rd'][1] = '#d2c840';
	dev_color['Rl'][1] = '#e0d97a';
	dev_color['O'][1] = '#30f622';
	dev_color['Gr'][1] = '#7b83d3';
	dev_color['P'][1] = '#937a4f';

	dev_color['Bd'][2] = '#df6129';
	dev_color['Bl'][2] = '#e8906a';
	dev_color['Rd'][2] = '#40d245';
	dev_color['Rl'][2] = '#7ae07d';
	dev_color['O'][2] = '#22acf6';
	dev_color['Gr'][2] = '#c47bd3';
	dev_color['P'][2] = '#8a934f';

	dev_color['Bd'][3] = '#75df29';
	dev_color['Bl'][3] = '#a0e86a';
	dev_color['Rd'][3] = '#7840d2';
	dev_color['Rl'][3] = '#a17ae0';
	dev_color['O'][3] = '#f62286';
	dev_color['Gr'][3] = '#d3b27b';
	dev_color['P'][3] = '#4f5e93';

	var color_1 = document.getElementById("hex-color-1");
	var color_2 = document.getElementById("hex-color-2");
	var color_3 = document.getElementById("hex-color-3");
	var color_4 = document.getElementById("hex-color-4");
	var color_5 = document.getElementById("hex-color-5");
	var color_6 = document.getElementById("hex-color-6");
	var color_7 = document.getElementById("hex-color-7");
	var color_8 = document.getElementById("hex-color-8");
	var color_9 = document.getElementById("hex-color-9");
	var color_10 = document.getElementById("hex-color-10");
	var color_11 = document.getElementById("hex-color-11");
	var color_12 = document.getElementById("hex-color-12");
	var color_13 = document.getElementById("hex-color-13");
	var color_14 = document.getElementById("hex-color-14");
	var color_15 = document.getElementById("hex-color-15");
	var color_16 = document.getElementById("hex-color-16");
	var color_17 = document.getElementById("hex-color-17");
	var color_18 = document.getElementById("hex-color-18");
	var color_19 = document.getElementById("hex-color-19");
	var color_20 = document.getElementById("hex-color-20");
	var color_21 = document.getElementById("hex-color-21");
	var color_22 = document.getElementById("hex-color-22");
	var color_23 = document.getElementById("hex-color-23");
	var color_24 = document.getElementById("hex-color-24");
	var dev_col_Bd = $('.nb_Bd');
	var dev_col_Bl = $('.nb_Bl');
	var dev_col_Rd = $('.nb_Rd');
	var dev_col_Rl = $('.nb_Rl');
	var dev_col_O = $('.nb_O');
	var dev_col_Gr = $('.nb_Gr');
	var dev_col_P = $('.nb_P');

	var x = 0;
	var c = 0;

	window.setInterval(function(){
		  /// call your function here
		  x = x + 7;
		  if(x > 24){x = x - 24};
		  color_1.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_1.innerHTML = col[x];

		  color_1.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_13.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_13.innerHTML = col[x];

		  color_13.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;


		  
		  if(x > 24){x = x - 24};
		  color_2.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_2.innerHTML = col[x];

		  color_2.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_14.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_14.innerHTML = col[x];

		  color_14.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;


		  if(x > 24){x = x - 24};
		  color_3.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_3.innerHTML = col[x];

		  color_3.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_15.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_15.innerHTML = col[x];

		  color_15.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;

		  
		  if(x > 24){x = x - 24};
		  color_4.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_4.innerHTML = col[x];

		  color_4.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_16.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_16.innerHTML = col[x];

		  color_16.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;


		  
		  if(x > 24){x = x - 24};
		  color_5.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_5.innerHTML = col[x];

		  color_5.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_17.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_17.innerHTML = col[x];

		  color_17.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;

		  
		  if(x > 24){x = x - 24};
		  color_6.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_6.innerHTML = col[x];

		  color_6.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_18.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_18.innerHTML = col[x];

		  color_18.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;


		  
		  if(x > 24){x = x - 24};
		  color_7.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_7.innerHTML = col[x];

		  color_7.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_19.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });


		  color_19.innerHTML = col[x];

		  color_19.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;

		  
		  if(x > 24){x = x - 24};
		  color_8.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_8.innerHTML = col[x];

		  color_8.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_20.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_20.innerHTML = col[x];

		  color_20.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;


		  
		  if(x > 24){x = x - 24};
		  color_9.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_9.innerHTML = col[x];

		  color_9.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_21.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_21.innerHTML = col[x];

		  color_21.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;

		  
		  if(x > 24){x = x - 24};
		  color_10.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });


		  color_10.innerHTML = col[x];

		  color_10.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_22.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_22.innerHTML = col[x];

		  color_22.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;


		  
		  if(x > 24){x = x - 24};
		  color_11.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_11.innerHTML = col[x];

		  color_11.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_23.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_23.innerHTML = col[x];

		  color_23.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;

		  
		  if(x > 24){x = x - 25};
		  color_12.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });


		  color_12.innerHTML = col[x];

		  color_12.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  color_24.animate([
		    // keyframes
		    { opacity: '1' },
		    { opacity: '0' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });

		  color_24.innerHTML = col[x];

		  color_24.animate([
		    // keyframes
		    { opacity: '0' },
		    { opacity: '1' }
		    
		  ], { 
		    // timing options
		    duration: 1000,
		    iterations: 1
		  });
		  x = x + 1;

		if(c > 3){c = c - 4};
	  	dev_col_Bd.fadeOut(500,function(){
	    dev_col_Bd.attr("fill",dev_color['Bd'][c]);
	    dev_col_Bd.fadeIn(500);
		});

	  	dev_col_Bl.fadeOut(500,function(){
	    dev_col_Bl.attr("fill",dev_color['Bl'][c]);
	    dev_col_Bl.fadeIn(500);
		});

	  	dev_col_Rd.fadeOut(500,function(){
	    dev_col_Rd.attr("fill",dev_color['Rd'][c]);
	    dev_col_Rd.fadeIn(500);
		});

	  	dev_col_Rl.fadeOut(500,function(){
	    dev_col_Rl.attr("fill",dev_color['Rl'][c]);
	    dev_col_Rl.fadeIn(500);
		});

	  	dev_col_O.fadeOut(500,function(){
	    dev_col_O.attr("fill",dev_color['O'][c]);
	    dev_col_O.fadeIn(500);
		});

	  	dev_col_Gr.fadeOut(500,function(){
	    dev_col_Gr.attr("fill",dev_color['Gr'][c]);
	    dev_col_Gr.fadeIn(500);
		});

	  	dev_col_P.fadeOut(500,function(){
	    dev_col_P.attr("fill",dev_color['P'][c]);
	    dev_col_P.fadeIn(500);
		});

	  	c = c + 1;



		  
















		}, 4000);
}
</script>

</html>

