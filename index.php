	<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./lib/sweetalert2/src/sweetalert2.scss">
	<link rel="stylesheet" type="text/css" href="./front/css/style.css">
	<link href="./lib/fontawesome-5.13.0/css/fontawesome.css" rel="stylesheet">
	<link href="./lib/fontawesome-5.13.0/css/brands.css" rel="stylesheet">
	<link href="./lib/fontawesome-5.13.0/css/solid.css" rel="stylesheet">
	<title>Welcome</title>
</head>

<body id="page-content">
	<div id="loader" class="nb_loader_hide">
		<div class="nb_loader"></div>
	</div>

	<style>


	</style>

	<?php include('./header.php'); ?>


	<div id="nbanim_container" class="nb_home">
		<div class="nb_bg_grad1">		</div>
		<div class="nb_bg_grad2">		</div>
		<div class="nb_bg_grad3">		</div>
		<div class="nb_bg_grad4">		</div>
		
			<svg version="1.1" id="nbanim_shade" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="1100px" height="550px" viewBox="0 0 1100 550" enable-background="new 0 0 1100 550" xml:space="preserve">
			<g>
				<path fill="#FFFFFF" d="M1098.551,0C773.431,246.15,402.15,434.54,0,549.92V0H1098.551z"/>
			</g>
			</svg>

			<div class="nb_home_left">
				<div class="row justify-content-center">
					<div class="col-12">
						<h1>CSS visual color editor</h1>
					</div>
					<div class="col-12">
						<h4>Simple and easy way to edit a css file.</h4>
					</div>
					
					
					<div class="col-10 p-5">
						<form class="nb_home_input" id="css_file_form" method="post" enctype="multipart/form-data" action="./initializing.php">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="css_file" name="css_file">
								<label class="custom-file-label" for="css_file">Choose file (.css)</label>
							</div>
						</form>
					</div>	
				</div>
			</div>

			<div class="nb_home_right">
				<svg version="1.1" id="nbanim_colors" class="nb_colors" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="596px" height="344px" viewBox="0 0 596 344" enable-background="new 0 0 596 344" xml:space="preserve">
					<g>
						<path fill="#F1F1F1" d="M409.68,329.628v-12.697h13.646l-6.703-9.752h-6.943v-10.104l-30.699-44.67v6.026H212.979v-89.369h108.725
							l-12.214-17.776H16.277V62.963h232.513l-10.049-14.62h-25.763V16.287h3.733L205.521,0H0v344h441.927l-9.874-14.372H409.68z
							 M16.277,16.287h166.004v32.056H16.277V16.287z M182.282,329.628H16.277v-12.697h166.004V329.628z M182.282,307.179H16.277v-12.693
							h166.004V307.179z M182.282,284.731H16.277v-12.695h166.004V284.731z M182.282,258.431H16.277v-89.369h166.004V258.431z
							 M378.98,329.628H212.979v-12.697H378.98V329.628z M378.98,307.179H212.979v-12.693H378.98V307.179z M378.98,284.731H212.979
							v-12.695H378.98V284.731z"/>
						<rect class="nb_colors_smooth" id="nb_P" x="16.277" y="16.287" fill="#914F94" width="166.004" height="32.056"/>
						<polygon fill="#BBBDBF" points="212.979,48.343 238.741,48.343 216.711,16.287 212.979,16.287 	"/>
						<polygon id="nb_Bd" class="nb_colors_smooth" fill="#29A8E0" points="16.277,151.285 309.489,151.285 248.791,62.963 16.277,62.963 	"/>
						<rect class="nb_colors_smooth" id="nb_O" x="16.277" y="169.062" fill="#F69323" width="166.004" height="89.369"/>
						<polygon class="nb_colors_smooth" id="nb_Rd" fill="#D34040" points="212.979,258.431 378.98,258.431 378.98,252.404 321.703,169.062 212.979,169.062 	"/>
						<rect x="16.277" y="272.036" fill="#929597" width="166.004" height="12.695"/>
						<rect x="16.277" y="294.485" fill="#BBBDBF" width="166.004" height="12.693"/>
						<rect x="16.277" y="316.931" fill="#BBBDBF" width="166.004" height="12.697"/>
						<rect x="212.979" y="272.036" fill="#929597" width="166.002" height="12.695"/>
						<rect x="212.979" y="294.485" fill="#BBBDBF" width="166.002" height="12.693"/>
						<rect x="212.979" y="316.931" fill="#BBBDBF" width="166.002" height="12.697"/>
						<polygon fill="#BBBDBF" points="416.623,307.179 409.68,297.074 409.68,307.179 	"/>
						<polygon fill="#BBBDBF" points="409.68,329.628 432.053,329.628 423.326,316.931 409.68,316.931 	"/>
						<path fill="#F5F5F5" d="M205.521,0l11.19,16.287h358.97v32.056h-336.94l10.049,14.62h326.891v88.322H309.489l12.214,17.776h57.277
							v83.343l30.699,44.67v-2.589h166.002v12.693H416.623l6.703,9.752h152.355v12.697H432.053L441.927,344H596V0H205.521z
							 M575.682,284.731H409.68v-12.695h166.002V284.731z M575.682,258.431H409.68v-89.369h166.002V258.431z"/>
						<polygon fill="#D0D1D2" points="575.682,48.343 575.682,16.287 216.711,16.287 238.741,48.343 	"/>
						<polygon class="nb_colors_smooth" id="nb_Bl" fill="#6BC3E9" points="575.682,151.285 575.682,62.963 248.791,62.963 309.489,151.285 	"/>
						<polygon class="nb_colors_smooth" id="nb_Rl" fill="#E07A7A" points="378.98,169.062 321.703,169.062 378.98,252.404 	"/>
						<rect class="nb_colors_smooth" id="nb_Gr" x="409.68" y="169.062" fill="#AED57C" width="166.002" height="89.369"/>
						<rect x="409.68" y="272.036" fill="#B3B5B6" width="166.002" height="12.695"/>
						<polygon fill="#D0D1D2" points="575.682,307.179 575.682,294.485 409.68,294.485 409.68,297.074 416.623,307.179 	"/>
						<polygon fill="#D0D1D2" points="575.682,329.628 575.682,316.931 423.326,316.931 432.053,329.628 	"/>
					</g>
				</svg>

				<svg version="1.1" id="nbanim_laptop" class="nb_laptop" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="850px" height="500px" viewBox="0 0 850 500" enable-background="new 0 0 850 500" xml:space="preserve">
				<g>
					<g id="laptop_2_">
						<path fill="#414042" d="M448.737,218.704H75.587c-5.175,0-9.409,4.231-9.409,9.402v248.681H458.14V228.106
							C458.14,222.936,453.906,218.704,448.737,218.704L448.737,218.704z"/>
						<polygon fill="#E6E7E8" points="441.094,464.592 83.618,464.592 83.618,234.906 441.094,234.906 441.094,464.592 		"/>
						<polygon fill="#7C828B" points="500.143,500 23.519,500 0,491.377 523.662,491.377 500.143,500 		"/>
						<path fill="#808285" d="M263.461,228.408c0,0.918-0.737,1.664-1.665,1.664c-0.916,0-1.665-0.746-1.665-1.664
							c0-0.928,0.749-1.67,1.665-1.67C262.724,226.738,263.461,227.48,263.461,228.408L263.461,228.408z"/>
						<polygon fill="#A7A9AC" points="304.101,485.369 219.237,485.369 219.237,476.749 304.101,476.749 304.101,485.369 		"/>
						<path fill="#C5CED6" d="M297.367,476.749v3.128c0,2.16-1.761,3.924-3.917,3.924h-63.502c-2.15,0-3.916-1.764-3.916-3.924v-3.128H0
							v14.628h523.662v-14.628H297.367L297.367,476.749z"/>
					</g>
					<polygon id="screen_x5F_mask_6_" fill="#313131" points="441.094,464.592 83.618,464.592 83.618,234.906 441.094,234.906 
						441.094,464.592 	"/>
				</g>
				</svg>

				<svg version="1.1" id="nbanim_screen" class="nb_screen" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="850px" height="500px" viewBox="0 0 850 500" enable-background="new 0 0 850 500" xml:space="preserve">
				<g id="screen_1_">
					<polygon fill="#7C828B" points="611.125,489.506 448.845,489.506 458.127,419.681 603.168,419.681 611.125,489.506 	"/>
					<path fill="#C5CED6" d="M209.96,394.818v9.499c0,8.751,7.162,15.916,15.92,15.916h608.213c8.747,0,15.907-7.165,15.907-15.916
						v-9.499H209.96L209.96,394.818z"/>
					<path fill="#414042" d="M850,28.699c0-8.754-7.16-15.916-15.907-15.916H225.88c-8.758,0-15.92,7.162-15.92,15.916v366.119H850
						V28.699L850,28.699z"/>
					<polygon fill="#E6E7E8" points="827.855,375.648 232.109,375.648 232.109,31.949 827.855,31.949 827.855,375.648 	"/>
					<polygon fill="#C5CED6" points="448.845,489.506 611.125,489.506 639.668,496.25 420.299,496.411 448.845,489.506 	"/>
					<polygon fill="#7C828B" points="638.173,500 421.789,500 420.354,496.411 639.668,496.25 638.173,500 	"/>
				</g>
				</svg>

				<svg version="1.1" onload="myfunc()" id="nbanim_code" class="nb_code" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="840px" height="900px" viewBox="0 0 840 900" enable-background="new 0 0 840 900" xml:space="preserve">
				<g>
					<text transform="matrix(1 0 0 1 92.9395 11.4043)">
					<tspan x="0" y="0" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-flash-purple .pace .pace-activity </tspan>
					<tspan x="284.178" y="0" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="15.506" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  border-top-color</tspan>
					<tspan x="127.88" y="15.506" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="134.985" y="15.506" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="142.089" y="15.506" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-1">#1515ff</tspan>
					<tspan x="142.089" y="15.506" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a1" class="nb_code_hide">#1515ff</tspan>
					<tspan x="191.82" y="15.506" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="31.012" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  border-left-color</tspan>
					<tspan x="134.985" y="31.012" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="142.089" y="31.012" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="149.194" y="31.012" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-2">#f5d48d</tspan>
					<tspan x="149.194" y="31.012" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a2" class="nb_code_hide">#f5d48d</tspan>
					<tspan x="198.925" y="31.012" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="46.519" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="77.531" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-loading-bar-purple .pace .pace-progress</tspan>
					<tspan x="319.701" y="77.531" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="326.805" y="77.531" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="93.037" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  background</tspan>
					<tspan x="85.253" y="93.037" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="92.358" y="93.037" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="99.462" y="93.037" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-3">#c12f15</tspan>
					<tspan x="99.462" y="93.037" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a3" class="nb_code_hide">#c12f15</tspan>
					<tspan x="149.194" y="93.037" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="108.543" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  color</tspan>
					<tspan x="49.731" y="108.543" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="56.835" y="108.543" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="63.94" y="108.543" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-4">#123f12</tspan>
					<tspan x="63.94" y="108.543" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a4" class="nb_code_hide">#123f12</tspan>
					<tspan x="113.671" y="108.543" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="124.049" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  box-shadow</tspan>
					<tspan x="85.253" y="124.049" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="92.358" y="124.049" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="99.462" y="124.049" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">120</tspan>
					<tspan x="120.776" y="124.049" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="134.985" y="124.049" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="142.089" y="124.049" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0</tspan>
					<tspan x="149.194" y="124.049" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="156.298" y="124.049" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-5">#65f566</tspan>
					<tspan x="156.298" y="124.049" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a5" class="nb_code_hide">#65f566</tspan>
					<tspan x="206.029" y="124.049" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="213.134" y="124.049" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="220.238" y="124.049" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">240</tspan>
					<tspan x="241.552" y="124.049" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="255.761" y="124.049" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="262.865" y="124.049" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0</tspan>
					<tspan x="269.97" y="124.049" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="277.074" y="124.049" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-6">#00ff0f</tspan>
					<tspan x="277.074" y="124.049" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a6" class="nb_code_hide">#00ff0f</tspan>
					<tspan x="326.805" y="124.049" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="139.556" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="170.568" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-loading-bar-purple .pace .pace-activity</tspan>
					<tspan x="319.701" y="170.568" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="326.805" y="170.568" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  box-shadow</tspan>
					<tspan x="85.253" y="186.074" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="92.358" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> inset </tspan>
					<tspan x="142.089" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0 0 0 2</tspan>
					<tspan x="191.82" y="186.074" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="206.029" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="213.134" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-7">#c2af42</tspan>
					<tspan x="213.134" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a7" class="nb_code_hide">#c2af42</tspan>
					<tspan x="262.865" y="186.074" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="269.97" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> inset </tspan>
					<tspan x="319.701" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0 0 0 7</tspan>
					<tspan x="369.432" y="186.074" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="383.641" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="390.746" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-8">#c1c1c1</tspan>
					<tspan x="390.746" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a8" class="nb_code_hide">#c1c1c1</tspan>
					<tspan x="440.477" y="186.074" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="201.581" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="232.593" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-mac-osx-purple .pace .pace-progress</tspan>
					<tspan x="291.283" y="232.593" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="298.387" y="232.593" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="248.099" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  background-color</tspan>
					<tspan x="127.88" y="248.099" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="134.985" y="248.099" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="142.089" y="248.099" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-9">#546d51</tspan>
					<tspan x="142.089" y="248.099" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a9" class="nb_code_hide">#546d51</tspan>
					<tspan x="191.82" y="248.099" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="198.925" y="248.099" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="0" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  box-shadow: inset </tspan>
					<tspan x="142.089" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">-1</tspan>
					<tspan x="156.298" y="263.605" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="170.507" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="177.611" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0</tspan>
					<tspan x="184.716" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="191.82" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-10">#245875</tspan>
					<tspan x="191.82" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a10" class="nb_code_hide">#245875</tspan>
					<tspan x="241.552" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="248.656" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> inset</tspan>
					<tspan x="291.283" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218"> 0 -1</tspan>
					<tspan x="326.805" y="263.605" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="341.014" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="348.119" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-11">#55f4fd</tspan>
					<tspan x="348.119" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a11" class="nb_code_hide">#55f4fd</tspan>
					<tspan x="397.85" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="404.954" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> inset</tspan>
					<tspan x="447.581" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218"> 0 2</tspan>
					<tspan x="475.999" y="263.605" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="490.208" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> rgba(</tspan>
					<tspan x="532.834" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">100</tspan>
					<tspan x="554.148" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="561.252" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">122</tspan>
					<tspan x="582.566" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="589.67" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">164</tspan>
					<tspan x="610.984" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="618.088" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">50</tspan>
					<tspan x="632.297" y="263.605" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="639.402" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">)</tspan>
					<tspan x="646.506" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="279.111" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="310.124" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-mac-osx-purple .pace .pace-activity</tspan>
					<tspan x="291.283" y="310.124" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="298.387" y="310.124" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="325.63" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  background-image</tspan>
					<tspan x="127.88" y="325.63" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="134.985" y="325.63" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> radial-gradient(rgba(</tspan>
					<tspan x="291.283" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">244</tspan>
					<tspan x="312.596" y="325.63" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="319.701" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">244</tspan>
					<tspan x="341.014" y="325.63" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="348.119" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">224</tspan>
					<tspan x="369.432" y="325.63" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="376.537" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">65</tspan>
					<tspan x="390.746" y="325.63" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="397.85" y="325.63" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">) </tspan>
					<tspan x="412.059" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0</tspan>
					<tspan x="419.163" y="325.63" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="426.268" y="325.63" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="433.372" y="325.63" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> rgba(</tspan>
					<tspan x="475.999" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">101</tspan>
					<tspan x="497.313" y="325.63" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="504.417" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">148</tspan>
					<tspan x="525.73" y="325.63" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="532.834" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">197</tspan>
					<tspan x="554.148" y="325.63" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="561.252" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">15</tspan>
					<tspan x="575.461" y="325.63" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="582.566" y="325.63" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">) </tspan>
					<tspan x="596.775" y="325.63" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">100</tspan>
					<tspan x="618.088" y="325.63" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="625.193" y="325.63" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">)</tspan>
					<tspan x="632.297" y="325.63" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="341.136" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  height</tspan>
					<tspan x="56.835" y="341.136" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="63.94" y="341.136" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="71.044" y="341.136" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">12</tspan>
					<tspan x="85.253" y="341.136" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="99.462" y="341.136" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="356.642" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="387.655" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-progress-color-purple .pace-progress</tspan>
					<tspan x="298.387" y="387.655" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="305.492" y="387.655" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="403.161" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  color</tspan>
					<tspan x="49.731" y="403.161" fill="#939597" font-family="'Consolas'" font-size="12.9218">: </tspan>			<tspan x="63.94" y="403.161" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-12">#d52d1d</tspan>
					<tspan x="63.94" y="403.161" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a12" class="nb_code_hide">#d52d1d</tspan>
					<tspan x="113.671" y="403.161" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="418.667" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan></text>
					<text transform="matrix(1 0 0 1 92.9395 461.0723)">
						<tspan x="0" y="0" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-flash-purple .pace .pace-activity </tspan>
					<tspan x="284.178" y="0" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="15.507" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  border-top-color</tspan>
					<tspan x="127.88" y="15.507" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="134.985" y="15.507" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="142.089" y="15.507" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-13">#1515ff</tspan>
					<tspan x="142.089" y="15.507" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a13" class="nb_code_hide">#1515ff</tspan>
					<tspan x="191.82" y="15.507" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="31.013" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  border-left-color</tspan>
					<tspan x="134.985" y="31.013" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="142.089" y="31.013" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="149.194" y="31.013" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-14">#f5d48d</tspan>
					<tspan x="149.194" y="31.013" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a14" class="nb_code_hide">#f5d48d</tspan>
					<tspan x="198.925" y="31.013" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="46.52" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="77.531" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-loading-bar-purple .pace .pace-progress</tspan>
					<tspan x="319.701" y="77.531" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="326.805" y="77.531" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="93.037" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  background</tspan>
					<tspan x="85.253" y="93.037" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="92.358" y="93.037" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="99.462" y="93.037" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-15">#c12f15</tspan>
					<tspan x="99.462" y="93.037" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a15" class="nb_code_hide">#c12f15</tspan>
					<tspan x="149.194" y="93.037" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="108.544" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  color</tspan>
					<tspan x="49.731" y="108.544" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="56.835" y="108.544" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="63.94" y="108.544" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-16">#123f12</tspan>
					<tspan x="63.94" y="108.544" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a16" class="nb_code_hide">#123f12</tspan>
					<tspan x="113.671" y="108.544" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="124.05" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  box-shadow</tspan>
					<tspan x="85.253" y="124.05" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="92.358" y="124.05" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="99.462" y="124.05" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">120</tspan>
					<tspan x="120.776" y="124.05" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="134.985" y="124.05" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="142.089" y="124.05" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0</tspan>
					<tspan x="149.194" y="124.05" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="156.298" y="124.05" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-17">#65f566</tspan>
					<tspan x="156.298" y="124.05" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a17" class="nb_code_hide">#65f566</tspan>
					<tspan x="206.029" y="124.05" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="213.134" y="124.05" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="220.238" y="124.05" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">240</tspan>
					<tspan x="241.552" y="124.05" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="255.761" y="124.05" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="262.865" y="124.05" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0</tspan>
					<tspan x="269.97" y="124.05" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="277.074" y="124.05" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-18">#00ff0f</tspan>
					<tspan x="277.074" y="124.05" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a18" class="nb_code_hide">#00ff0f</tspan>
					<tspan x="326.805" y="124.05" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="139.557" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="170.568" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-loading-bar-purple .pace .pace-activity</tspan>
					<tspan x="319.701" y="170.568" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="326.805" y="170.568" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  box-shadow</tspan>
					<tspan x="85.253" y="186.074" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="92.358" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> inset </tspan>
					<tspan x="142.089" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0 0 0 2</tspan>
					<tspan x="191.82" y="186.074" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="206.029" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="213.134" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-19">#c2af42</tspan>
					<tspan x="213.134" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a19" class="nb_code_hide">#c2af42</tspan>
					<tspan x="262.865" y="186.074" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="269.97" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> inset </tspan>
					<tspan x="319.701" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0 0 0 7</tspan>
					<tspan x="369.432" y="186.074" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="383.641" y="186.074" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="390.746" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-20">#c1c1c1</tspan>
					<tspan x="390.746" y="186.074" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a20" class="nb_code_hide">#c1c1c1</tspan>
					<tspan x="440.477" y="186.074" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="201.581" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="232.593" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-mac-osx-purple .pace .pace-progress</tspan>
					<tspan x="291.283" y="232.593" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="298.387" y="232.593" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="248.1" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  background-color</tspan>
					<tspan x="127.88" y="248.1" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="134.985" y="248.1" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="142.089" y="248.1" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-21">#546d51</tspan>
					<tspan x="142.089" y="248.1" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a21" class="nb_code_hide">#546d51</tspan>
					<tspan x="191.82" y="248.1" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="198.925" y="248.1" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="0" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  box-shadow: inset </tspan>
					<tspan x="142.089" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">-1</tspan>
					<tspan x="156.298" y="263.605" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="170.507" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="177.611" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0</tspan>
					<tspan x="184.716" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="191.82" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-22">#245875</tspan>
					<tspan x="191.82" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a22" class="nb_code_hide">#245875</tspan>
					<tspan x="241.552" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="248.656" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> inset</tspan>
					<tspan x="291.283" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218"> 0 -1</tspan>
					<tspan x="326.805" y="263.605" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="341.014" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>			<tspan x="348.119" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-23">#55f4fd</tspan>
					<tspan x="348.119" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a23" class="nb_code_hide">#55f4fd</tspan>
					<tspan x="397.85" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="404.954" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> inset</tspan>
					<tspan x="447.581" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218"> 0 2</tspan>
					<tspan x="475.999" y="263.605" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="490.208" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> rgba(</tspan>
					<tspan x="532.834" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">100</tspan>
					<tspan x="554.148" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="561.252" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">122</tspan>
					<tspan x="582.566" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="589.67" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">164</tspan>
					<tspan x="610.984" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="618.088" y="263.605" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">50</tspan>
					<tspan x="632.297" y="263.605" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="639.402" y="263.605" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">)</tspan>
					<tspan x="646.506" y="263.605" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="279.111" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="310.124" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-mac-osx-purple .pace .pace-activity</tspan>
					<tspan x="291.283" y="310.124" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="298.387" y="310.124" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="325.631" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  background-image</tspan>
					<tspan x="127.88" y="325.631" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="134.985" y="325.631" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> radial-gradient(rgba(</tspan>
					<tspan x="291.283" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">244</tspan>
					<tspan x="312.596" y="325.631" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="319.701" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">244</tspan>
					<tspan x="341.014" y="325.631" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="348.119" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">224</tspan>
					<tspan x="369.432" y="325.631" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="376.537" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">65</tspan>
					<tspan x="390.746" y="325.631" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="397.85" y="325.631" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">) </tspan>
					<tspan x="412.059" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">0</tspan>
					<tspan x="419.163" y="325.631" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="426.268" y="325.631" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="433.372" y="325.631" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> rgba(</tspan>
					<tspan x="475.999" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">101</tspan>
					<tspan x="497.313" y="325.631" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="504.417" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">148</tspan>
					<tspan x="525.73" y="325.631" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="532.834" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">197</tspan>
					<tspan x="554.148" y="325.631" fill="#939597" font-family="'Consolas'" font-size="12.9218">,</tspan>
					<tspan x="561.252" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">15</tspan>
					<tspan x="575.461" y="325.631" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="582.566" y="325.631" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">) </tspan>
					<tspan x="596.775" y="325.631" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">100</tspan>
					<tspan x="618.088" y="325.631" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">%</tspan>
					<tspan x="625.193" y="325.631" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">)</tspan>
					<tspan x="632.297" y="325.631" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="341.137" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  height</tspan>
					<tspan x="56.835" y="341.137" fill="#939597" font-family="'Consolas'" font-size="12.9218">:</tspan>
					<tspan x="63.94" y="341.137" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="71.044" y="341.137" fill="#996CAE" font-family="'Consolas'" font-size="12.9218">12</tspan>
					<tspan x="85.253" y="341.137" fill="#EC008C" font-family="'Consolas'" font-size="12.9218">px</tspan>
					<tspan x="99.462" y="341.137" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="356.643" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan>
					<tspan x="0" y="387.655" fill="#83C341" font-family="'Consolas'" font-size="12.9218">.pace-progress-color-purple .pace-progress</tspan>
					<tspan x="298.387" y="387.655" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218"> </tspan>
					<tspan x="305.492" y="387.655" fill="#939597" font-family="'Consolas'" font-size="12.9218">{</tspan>
					<tspan x="0" y="403.161" fill="#71CEE6" font-family="'Consolas'" font-size="12.9218">  color</tspan>
					<tspan x="49.731" y="403.161" fill="#939597" font-family="'Consolas'" font-size="12.9218">: </tspan>			<tspan x="63.94" y="403.161" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-24">#d52d1d</tspan>
					<tspan x="63.94" y="403.161" fill="#996CAE" font-family="'Consolas'" font-size="12.9218" id="hex-color-a24" class="nb_code_hide">#d52d1d</tspan>
					<tspan x="113.671" y="403.161" fill="#939597" font-family="'Consolas'" font-size="12.9218">;</tspan>
					<tspan x="0" y="418.668" fill="#939597" font-family="'Consolas'" font-size="12.9218">}</tspan></text>
					<text transform="matrix(1 0 0 1 32.1162 11.4224)">
						<tspan x="0" y="0" fill="#939598" font-family="'Consolas'" font-size="12.9218">21565</tspan>
					<tspan x="0" y="15.506" fill="#939598" font-family="'Consolas'" font-size="12.9218">21566</tspan>
					<tspan x="0" y="31.012" fill="#939598" font-family="'Consolas'" font-size="12.9218">21567</tspan>
					<tspan x="0" y="46.519" fill="#939598" font-family="'Consolas'" font-size="12.9218">21568</tspan>
					<tspan x="0" y="62.025" fill="#939598" font-family="'Consolas'" font-size="12.9218">21569</tspan>
					<tspan x="0" y="77.531" fill="#939598" font-family="'Consolas'" font-size="12.9218">21570</tspan>
					<tspan x="0" y="93.037" fill="#939598" font-family="'Consolas'" font-size="12.9218">21571</tspan>
					<tspan x="0" y="108.543" fill="#939598" font-family="'Consolas'" font-size="12.9218">21572</tspan>
					<tspan x="0" y="124.049" fill="#939598" font-family="'Consolas'" font-size="12.9218">21573</tspan>
					<tspan x="0" y="139.556" fill="#939598" font-family="'Consolas'" font-size="12.9218">21574</tspan>
					<tspan x="0" y="155.062" fill="#939598" font-family="'Consolas'" font-size="12.9218">21575</tspan>
					<tspan x="0" y="170.568" fill="#939598" font-family="'Consolas'" font-size="12.9218">21576</tspan>
					<tspan x="0" y="186.074" fill="#939598" font-family="'Consolas'" font-size="12.9218">21577</tspan>
					<tspan x="0" y="201.581" fill="#939598" font-family="'Consolas'" font-size="12.9218">21578</tspan>
					<tspan x="0" y="217.086" fill="#939598" font-family="'Consolas'" font-size="12.9218">21579</tspan>
					<tspan x="0" y="232.593" fill="#939598" font-family="'Consolas'" font-size="12.9218">21580</tspan>
					<tspan x="0" y="248.099" fill="#939598" font-family="'Consolas'" font-size="12.9218">21581</tspan>
					<tspan x="0" y="263.605" fill="#939598" font-family="'Consolas'" font-size="12.9218">21582</tspan>
					<tspan x="0" y="279.111" fill="#939598" font-family="'Consolas'" font-size="12.9218">21583</tspan>
					<tspan x="0" y="294.618" fill="#939598" font-family="'Consolas'" font-size="12.9218">21584</tspan>
					<tspan x="0" y="310.124" fill="#939598" font-family="'Consolas'" font-size="12.9218">21585</tspan>
					<tspan x="0" y="325.63" fill="#939598" font-family="'Consolas'" font-size="12.9218">21586</tspan>
					<tspan x="0" y="341.136" fill="#939598" font-family="'Consolas'" font-size="12.9218">21587</tspan>
					<tspan x="0" y="356.642" fill="#939598" font-family="'Consolas'" font-size="12.9218">21588</tspan>
					<tspan x="0" y="372.148" fill="#939598" font-family="'Consolas'" font-size="12.9218">21589</tspan>
					<tspan x="0" y="387.655" fill="#939598" font-family="'Consolas'" font-size="12.9218">21590</tspan>
					<tspan x="0" y="403.161" fill="#939598" font-family="'Consolas'" font-size="12.9218">21591</tspan>
					<tspan x="0" y="418.667" fill="#939598" font-family="'Consolas'" font-size="12.9218">21592</tspan>
					<tspan x="0" y="434.173" fill="#939598" font-family="'Consolas'" font-size="12.9218">21593</tspan>
					<tspan x="0" y="449.679" fill="#939598" font-family="'Consolas'" font-size="12.9218">21594</tspan>
					<tspan x="0" y="465.185" fill="#939598" font-family="'Consolas'" font-size="12.9218">21595</tspan>
					<tspan x="0" y="480.692" fill="#939598" font-family="'Consolas'" font-size="12.9218">21596</tspan>
					<tspan x="0" y="496.199" fill="#939598" font-family="'Consolas'" font-size="12.9218">21597</tspan>
					<tspan x="0" y="511.705" fill="#939598" font-family="'Consolas'" font-size="12.9218">21598</tspan>
					<tspan x="0" y="527.21" fill="#939598" font-family="'Consolas'" font-size="12.9218">21599</tspan>
					<tspan x="0" y="542.716" fill="#939598" font-family="'Consolas'" font-size="12.9218">21600</tspan>
					<tspan x="0" y="558.222" fill="#939598" font-family="'Consolas'" font-size="12.9218">21601</tspan>
					<tspan x="0" y="573.729" fill="#939598" font-family="'Consolas'" font-size="12.9218">21602</tspan>
					<tspan x="0" y="589.235" fill="#939598" font-family="'Consolas'" font-size="12.9218">21603</tspan>
					<tspan x="0" y="604.742" fill="#939598" font-family="'Consolas'" font-size="12.9218">21604</tspan>
					<tspan x="0" y="620.248" fill="#939598" font-family="'Consolas'" font-size="12.9218">21605</tspan>
					<tspan x="0" y="635.753" fill="#939598" font-family="'Consolas'" font-size="12.9218">21606</tspan>
					<tspan x="0" y="651.259" fill="#939598" font-family="'Consolas'" font-size="12.9218">21607</tspan>
					<tspan x="0" y="666.766" fill="#939598" font-family="'Consolas'" font-size="12.9218">21608</tspan>
					<tspan x="0" y="682.272" fill="#939598" font-family="'Consolas'" font-size="12.9218">21609</tspan>
					<tspan x="0" y="697.778" fill="#939598" font-family="'Consolas'" font-size="12.9218">21610</tspan>
					<tspan x="0" y="713.285" fill="#939598" font-family="'Consolas'" font-size="12.9218">21611</tspan>
					<tspan x="0" y="728.791" fill="#939598" font-family="'Consolas'" font-size="12.9218">21612</tspan>
					<tspan x="0" y="744.296" fill="#939598" font-family="'Consolas'" font-size="12.9218">21613</tspan>
					<tspan x="0" y="759.803" fill="#939598" font-family="'Consolas'" font-size="12.9218">21614</tspan>
					<tspan x="0" y="775.309" fill="#939598" font-family="'Consolas'" font-size="12.9218">21615</tspan>
					<tspan x="0" y="790.815" fill="#939598" font-family="'Consolas'" font-size="12.9218">21616</tspan>
					<tspan x="0" y="806.322" fill="#939598" font-family="'Consolas'" font-size="12.9218">21617</tspan>
					<tspan x="0" y="821.828" fill="#939598" font-family="'Consolas'" font-size="12.9218">21618</tspan>
					<tspan x="0" y="837.333" fill="#939598" font-family="'Consolas'" font-size="12.9218">21619</tspan>
					<tspan x="0" y="852.839" fill="#939598" font-family="'Consolas'" font-size="12.9218">21620</tspan>
					<tspan x="0" y="868.346" fill="#939598" font-family="'Consolas'" font-size="12.9218">21621</tspan>
					<tspan x="0" y="883.852" fill="#939598" font-family="'Consolas'" font-size="12.9218">21622</tspan></text>
				</g>
				</svg>
			</div>
	</div>


	<div class="container-fluid pt-5">
		<div class="row">

			<div class="col-12 col-lg-6 col-xl-3">
				<div>
					
				</div>
				<div class="nb_feutures d-flex pt-5">
					<img class="img-fluid p-3 p-lg-2 p-xl-0" src="dist/img/hue-icon.svg">
						<p>
							
							<span>HUE / SATURATION<br></span>
							The Hue/Saturation effect adjusts the color, purity, and lightness. Easy and simple way to create more individual themes.
						</p>
				</div>
			</div>

			<div class="col-12 col-lg-6 col-xl-3">
				<div>
					
				</div>
				<div class="nb_feutures d-flex pt-5">
					<img class="img-fluid p-3 p-lg-2 p-xl-0" src="dist/img/balance-icon.svg">
						<p>
							
							<span>COLOR BALANCE<br></span>
Color balance helps in configuring the right shades in individual or groups of colors inside themes.
						</p>
				</div>
			</div>

			<div class="col-12 col-lg-6 col-xl-3">
				<div>
					
				</div>
				<div class="nb_feutures d-flex pt-5">
					<img class="img-fluid p-3 p-lg-2 p-xl-0" src="dist/img/replace-icon.svg">
						<p>
							
							<span>REPLACE COLORS<br></span>
Replace colors eases color replacement in a file and also allows colors group selection.
						</p>
				</div>
			</div>
			<div class="col-12 col-lg-6 col-xl-3">
				<div>
					
				</div>
				
				<div class="nb_feutures d-flex pt-5">
					<img class="img-fluid p-3 p-lg-2 p-xl-0" src="dist/img/black-theme-icon.svg">
						<p>
							
							<span>BLACK THEME<br></span>
							This tool give us the ability to create individual black themes from your existing theme.
						</p>
				</div>
			</div>
		</div>
	</div>





	<?php include('./footer.php'); ?>

</body>

<script src="./lib/jquery.3.5.1/jquery-3.5.1.min.js"></script>
<script src="./lib/popper-1.16.0/popper.min.js"></script>
<script src="./lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="./lib/sweetalert2/src/sweetalert2.min.js"></script>
<script src="./front/js/login_page.js"></script>
<script src="./front/js/index_page.js"></script>



<script>
function myfunc()
{
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

	var color_1 = $('#hex-color-1');
	var color_2 = $('#hex-color-2');
	var color_3 = $('#hex-color-3');
	var color_4 = $('#hex-color-4');
	var color_5 = $('#hex-color-5');
	var color_6 = $('#hex-color-6');
	var color_7 = $('#hex-color-7');
	var color_8 = $('#hex-color-8');
	var color_9 = $('#hex-color-9');
	var color_10 = $('#hex-color-10');
	var color_11 = $('#hex-color-11');
	var color_12 = $('#hex-color-12');
	var color_13 = $('#hex-color-13');
	var color_14 = $('#hex-color-14');
	var color_15 = $('#hex-color-15');
	var color_16 = $('#hex-color-16');
	var color_17 = $('#hex-color-17');
	var color_18 = $('#hex-color-18');
	var color_19 = $('#hex-color-19');
	var color_20 = $('#hex-color-20');
	var color_21 = $('#hex-color-21');
	var color_22 = $('#hex-color-22');
	var color_23 = $('#hex-color-23');
	var color_24 = $('#hex-color-24');

	var color_a1 = $('#hex-color-a1');
	var color_a2 = $('#hex-color-a2');
	var color_a3 = $('#hex-color-a3');
	var color_a4 = $('#hex-color-a4');
	var color_a5 = $('#hex-color-a5');
	var color_a6 = $('#hex-color-a6');
	var color_a7 = $('#hex-color-a7');
	var color_a8 = $('#hex-color-a8');
	var color_a9 = $('#hex-color-a9');
	var color_a10 = $('#hex-color-a10');
	var color_a11 = $('#hex-color-a11');
	var color_a12 = $('#hex-color-a12');
	var color_a13 = $('#hex-color-a13');
	var color_a14 = $('#hex-color-a14');
	var color_a15 = $('#hex-color-a15');
	var color_a16 = $('#hex-color-a16');
	var color_a17 = $('#hex-color-a17');
	var color_a18 = $('#hex-color-a18');
	var color_a19 = $('#hex-color-a19');
	var color_a20 = $('#hex-color-a20');
	var color_a21 = $('#hex-color-a21');
	var color_a22 = $('#hex-color-a22');
	var color_a23 = $('#hex-color-a23');
	var color_a24 = $('#hex-color-a24');


	var dev_col_Bd = $('#nb_Bd');
	var dev_col_Bl = $('#nb_Bl');
	var dev_col_Rd = $('#nb_Rd');
	var dev_col_Rl = $('#nb_Rl');
	var dev_col_O = $('#nb_O');
	var dev_col_Gr = $('#nb_Gr');
	var dev_col_P = $('#nb_P');

	var x = 0;
	var c = 0;
	var l = 1;

	function update_hex_text_f()
	{
		x++;
		if(x>24){x = x - 24}
		color_a1.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a2.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a3.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a4.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a5.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a6.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a7.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a8.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a9.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a10.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a11.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a12.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a13.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a14.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a15.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a16.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a17.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a18.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a19.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a20.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a21.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a22.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a23.html(col[x]);		
		x++;
		if(x>24){x = x - 24}
		color_a24.html(col[x]);
	}

	function update_hex_text_l()
	{
		x++;
		if(x>24){x = x - 24}
		color_1.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_2.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_3.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_4.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_5.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_6.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_7.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_8.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_9.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_10.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_11.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_12.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_13.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_14.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_15.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_16.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_17.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_18.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_19.html(col[x]);
		x++;
		if(x>24){x = x - 24}
		color_20.html(col[x]);
		x++;
		if(x>24){x = 0}
		color_21.html(col[x]);
		x++;
		if(x>24){x = 0}
		color_22.html(col[x]);
		x++;
		if(x>24){x = 0}
		color_23.html(col[x]);
		x++;
		if(x>24){x = 0}
		color_24.html(col[x]);
	}

	function update_hex_class_f()
	{
		color_1.addClass('nb_code_hide');		color_a1.addClass('nb_code_show');
		color_2.addClass('nb_code_hide');		color_a2.addClass('nb_code_show');
		color_3.addClass('nb_code_hide');		color_a3.addClass('nb_code_show');
		color_4.addClass('nb_code_hide');		color_a4.addClass('nb_code_show');
		color_5.addClass('nb_code_hide');		color_a5.addClass('nb_code_show');
		color_6.addClass('nb_code_hide');		color_a6.addClass('nb_code_show');
		color_7.addClass('nb_code_hide');		color_a7.addClass('nb_code_show');
		color_8.addClass('nb_code_hide');		color_a8.addClass('nb_code_show');
		color_9.addClass('nb_code_hide');		color_a9.addClass('nb_code_show');
		color_10.addClass('nb_code_hide');		color_a10.addClass('nb_code_show');
		color_11.addClass('nb_code_hide');		color_a11.addClass('nb_code_show');
		color_12.addClass('nb_code_hide');		color_a12.addClass('nb_code_show');
		color_13.addClass('nb_code_hide');		color_a13.addClass('nb_code_show');
		color_14.addClass('nb_code_hide');		color_a14.addClass('nb_code_show');
		color_15.addClass('nb_code_hide');		color_a15.addClass('nb_code_show');
		color_16.addClass('nb_code_hide');		color_a16.addClass('nb_code_show');
		color_17.addClass('nb_code_hide');		color_a17.addClass('nb_code_show');
		color_18.addClass('nb_code_hide');		color_a18.addClass('nb_code_show');
		color_19.addClass('nb_code_hide');		color_a19.addClass('nb_code_show');
		color_20.addClass('nb_code_hide');		color_a20.addClass('nb_code_show');
		color_21.addClass('nb_code_hide');		color_a21.addClass('nb_code_show');
		color_22.addClass('nb_code_hide');		color_a22.addClass('nb_code_show');
		color_23.addClass('nb_code_hide');		color_a23.addClass('nb_code_show');
		color_24.addClass('nb_code_hide');		color_a24.addClass('nb_code_show');

		color_1.removeClass('nb_code_show');	color_a1.removeClass('nb_code_hide');
		color_2.removeClass('nb_code_show');	color_a2.removeClass('nb_code_hide');
		color_3.removeClass('nb_code_show');	color_a3.removeClass('nb_code_hide');
		color_4.removeClass('nb_code_show');	color_a4.removeClass('nb_code_hide');
		color_5.removeClass('nb_code_show');	color_a5.removeClass('nb_code_hide');
		color_6.removeClass('nb_code_show');	color_a6.removeClass('nb_code_hide');
		color_7.removeClass('nb_code_show');	color_a7.removeClass('nb_code_hide');
		color_8.removeClass('nb_code_show');	color_a8.removeClass('nb_code_hide');
		color_9.removeClass('nb_code_show');	color_a9.removeClass('nb_code_hide');
		color_10.removeClass('nb_code_show');	color_a10.removeClass('nb_code_hide');
		color_11.removeClass('nb_code_show');	color_a11.removeClass('nb_code_hide');
		color_12.removeClass('nb_code_show');	color_a12.removeClass('nb_code_hide');
		color_13.removeClass('nb_code_show');	color_a13.removeClass('nb_code_hide');
		color_14.removeClass('nb_code_show');	color_a14.removeClass('nb_code_hide');
		color_15.removeClass('nb_code_show');	color_a15.removeClass('nb_code_hide');
		color_16.removeClass('nb_code_show');	color_a16.removeClass('nb_code_hide');
		color_17.removeClass('nb_code_show');	color_a17.removeClass('nb_code_hide');
		color_18.removeClass('nb_code_show');	color_a18.removeClass('nb_code_hide');
		color_19.removeClass('nb_code_show');	color_a19.removeClass('nb_code_hide');
		color_20.removeClass('nb_code_show');	color_a20.removeClass('nb_code_hide');
		color_21.removeClass('nb_code_show');	color_a21.removeClass('nb_code_hide');
		color_22.removeClass('nb_code_show');	color_a22.removeClass('nb_code_hide');
		color_23.removeClass('nb_code_show');	color_a23.removeClass('nb_code_hide');
		color_24.removeClass('nb_code_show');	color_a24.removeClass('nb_code_hide');
	}

	function update_hex_class_l()
	{
		color_1.addClass('nb_code_show');	color_a1.addClass('nb_code_hide');
		color_2.addClass('nb_code_show');	color_a2.addClass('nb_code_hide');
		color_3.addClass('nb_code_show');	color_a3.addClass('nb_code_hide');
		color_4.addClass('nb_code_show');	color_a4.addClass('nb_code_hide');
		color_5.addClass('nb_code_show');	color_a5.addClass('nb_code_hide');
		color_6.addClass('nb_code_show');	color_a6.addClass('nb_code_hide');
		color_7.addClass('nb_code_show');	color_a7.addClass('nb_code_hide');
		color_8.addClass('nb_code_show');	color_a8.addClass('nb_code_hide');
		color_9.addClass('nb_code_show');	color_a9.addClass('nb_code_hide');
		color_10.addClass('nb_code_show');	color_a10.addClass('nb_code_hide');
		color_11.addClass('nb_code_show');	color_a11.addClass('nb_code_hide');
		color_12.addClass('nb_code_show');	color_a12.addClass('nb_code_hide');
		color_13.addClass('nb_code_show');	color_a13.addClass('nb_code_hide');
		color_14.addClass('nb_code_show');	color_a14.addClass('nb_code_hide');
		color_15.addClass('nb_code_show');	color_a15.addClass('nb_code_hide');
		color_16.addClass('nb_code_show');	color_a16.addClass('nb_code_hide');
		color_17.addClass('nb_code_show');	color_a17.addClass('nb_code_hide');
		color_18.addClass('nb_code_show');	color_a18.addClass('nb_code_hide');
		color_19.addClass('nb_code_show');	color_a19.addClass('nb_code_hide');
		color_20.addClass('nb_code_show');	color_a20.addClass('nb_code_hide');
		color_21.addClass('nb_code_show');	color_a21.addClass('nb_code_hide');
		color_22.addClass('nb_code_show');	color_a22.addClass('nb_code_hide');
		color_23.addClass('nb_code_show');	color_a23.addClass('nb_code_hide');
		color_24.addClass('nb_code_show');	color_a24.addClass('nb_code_hide');

		color_1.removeClass('nb_code_hide');		color_a1.removeClass('nb_code_show');
		color_2.removeClass('nb_code_hide');		color_a2.removeClass('nb_code_show');
		color_3.removeClass('nb_code_hide');		color_a3.removeClass('nb_code_show');
		color_4.removeClass('nb_code_hide');		color_a4.removeClass('nb_code_show');
		color_5.removeClass('nb_code_hide');		color_a5.removeClass('nb_code_show');
		color_6.removeClass('nb_code_hide');		color_a6.removeClass('nb_code_show');
		color_7.removeClass('nb_code_hide');		color_a7.removeClass('nb_code_show');
		color_8.removeClass('nb_code_hide');		color_a8.removeClass('nb_code_show');
		color_9.removeClass('nb_code_hide');		color_a9.removeClass('nb_code_show');
		color_10.removeClass('nb_code_hide');		color_a10.removeClass('nb_code_show');
		color_11.removeClass('nb_code_hide');		color_a11.removeClass('nb_code_show');
		color_12.removeClass('nb_code_hide');		color_a12.removeClass('nb_code_show');
		color_13.removeClass('nb_code_hide');		color_a13.removeClass('nb_code_show');
		color_14.removeClass('nb_code_hide');		color_a14.removeClass('nb_code_show');
		color_15.removeClass('nb_code_hide');		color_a15.removeClass('nb_code_show');
		color_16.removeClass('nb_code_hide');		color_a16.removeClass('nb_code_show');
		color_17.removeClass('nb_code_hide');		color_a17.removeClass('nb_code_show');
		color_18.removeClass('nb_code_hide');		color_a18.removeClass('nb_code_show');
		color_19.removeClass('nb_code_hide');		color_a19.removeClass('nb_code_show');
		color_20.removeClass('nb_code_hide');		color_a20.removeClass('nb_code_show');
		color_21.removeClass('nb_code_hide');		color_a21.removeClass('nb_code_show');
		color_22.removeClass('nb_code_hide');		color_a22.removeClass('nb_code_show');
		color_23.removeClass('nb_code_hide');		color_a23.removeClass('nb_code_show');
		color_24.removeClass('nb_code_hide');		color_a24.removeClass('nb_code_show');
	}

	function main_codescreen()
	{
		x = x + 7;
		c = c + 1;
		if(c<2)
		{
			update_hex_class_l();
			update_hex_text_f();
		}
		else
		{
			update_hex_class_f();
			update_hex_text_l();
			c = 0;
		}
	}

	function main_colorscreen()
	{
		if(l > 3){l = l - 4};
		dev_col_Bd.attr("fill",dev_color['Bd'][l]);
		dev_col_Bl.attr("fill",dev_color['Bl'][l]);
		dev_col_Rd.attr("fill",dev_color['Rd'][l]);
		dev_col_Rl.attr("fill",dev_color['Rl'][l]);
		dev_col_O.attr("fill",dev_color['O'][l]);
		dev_col_Gr.attr("fill",dev_color['Gr'][l]);
		dev_col_P.attr("fill",dev_color['P'][l]);
		
		if(l == 0){
		$('.nb_bg_grad4').css('opacity', '0');
		$('.nb_bg_grad1').css('opacity', '1');
		}

		if(l == 1){
		$('.nb_bg_grad1').css('opacity', '0');
		$('.nb_bg_grad2').css('opacity', '1');
		}

		if(l == 2){
		$('.nb_bg_grad2').css('opacity', '0');
		$('.nb_bg_grad3').css('opacity', '1');
		}

		if(l == 3){
		$('.nb_bg_grad3').css('opacity', '0');
		$('.nb_bg_grad4').css('opacity', '1');
		}

		l = l + 1;
	}


	main_codescreen();
	window.setInterval(function()
	{

		main_codescreen();
		main_colorscreen();


	}, 3000);
}
</script>


</html>

