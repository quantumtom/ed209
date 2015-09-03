<?php include($_SERVER['DOCUMENT_ROOT']."/include/housekeeping/global.php"); ?>
<!DOCTYPE html>

<html>

	<head>
		
		<?php include(__ROOT__."/include/head.php"); ?>

	</head>

	<body>
		
		<!-- // 360 VIEW page -->
		
		<div class="no-background view-root" data-role="page" id="mobile-view-root" data-theme="c" data-title="360 VIEW">

			<div class="drop-shadow max-width-320px my-headers" data-position="fixed" data-role="header" data-id="my-header" data-theme="c">

				<div class="header-toggle-button"></div>

				<div class="header-image">

					<img src="/img/rezound-logo-320.png" height="40" width="320" alt="HTC Rezound" />
					
				</div>
			
				<div data-role="navbar" class="nav-custom-icons">

					<ul>

						<li>

							<a href="#mobile-view-root" class="view ui-nav-btn ui-btn-active ui-state-persist"></a>

						</li>

						<li>

							<a href="#mobile-true-root" class="true ui-nav-btn"></a>

						</li>

						<li>

							<a href="#mobile-beat-root" class="beat ui-nav-btn"></a>

						</li>

						<li>

							<a href="#mobile-spec-root" class="spec ui-nav-btn"></a>

						</li>

					</ul>

				</div><!-- // navbar -->

			</div><!-- // header -->

			<div data-role="content" id="view-content" data-theme="c" class="no-padding">
				
				<div class="content-wrapper">
					
					<div class="body-feature">

						<div id="threesixty" class="subsection">

							<div class="viewport">

								<div class="viewport-container">

									<?php include(__ROOT__."/include/content/img-tags.php"); ?>
							
								</div><!-- // viewport-container -->

							</div><!-- // viewport -->

						</div><!-- // threesixty -->
						
					</div><!-- // body-feature -->
					
					<div class="body-copy">
	
						<h2>360 View</h2>

						<p>The HTC Rezound features a huge screen, sharp design and style that lives, breathes and eats entertainment from front-to-back and side-to-side. Give it a spin.</p>
						
					</div><!-- // body-copy -->
					
				</div><!-- // content-wrapper -->

			</div><!-- // content -->

			<?php include(__ROOT__."/include/content/generic-footer.php"); ?>

		</div><!-- // mobile-view-root -->
		

		<!-- TRUE HD page -->
		
		<div class="no-background view-root" data-role="page" id="mobile-true-root" data-theme="c" data-title="TRUE HD">

			<div class="drop-shadow max-width-320px my-headers" data-position="fixed" data-role="header" data-id="my-header" data-theme="c">

				<div class="header-toggle-button"></div>

				<div class="header-image">

					<img src="/img/rezound-logo-320.png" height="40" width="320" alt="HTC Rezound" />
					
				</div>

				<div data-role="navbar" class="nav-custom-icons">

					<ul>

						<li>

							<a href="#mobile-view-root" class="view ui-nav-btn"></a>

						</li>

						<li>

							<a href="#mobile-true-root" class="true ui-nav-btn ui-btn-active ui-state-persist"></a>

						</li>

						<li>

							<a href="#mobile-beat-root" class="beat ui-nav-btn"></a>

						</li>

						<li>

							<a href="#mobile-spec-root" class="spec ui-nav-btn"></a>

						</li>

					</ul>

				</div><!-- // navbar -->

			</div><!-- // header -->

			<div data-role="content" class="no-padding">
				
				<div id="true-content" class="content-wrapper no-padding">

					<div class="body-feature">
						
						<div class="video-wrapper">

							<video class="part-2" id="vp-1" controls poster="/img/poster.png">

								<source src="/vid/video2-desktop.m4v" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />

								<source src="/vid/video2-iPhone.m4v" type='video/mp4; codecs="avc1.58A01E, mp4a.40.2"' />

								<source src="/vid/video2.ogv" type='video/ogg; codecs="theora, vorbis"' />

								<source src="/vid/video2-iPhone-cell.3gp" type='video/3gpp; codecs="mp4v.20.8, samr"' />

							  </video>
							
						</div><!-- // video-wrapper -->
						
					</div><!-- // body-feature -->

					<div class="body-copy">

						<h2>True HD Screen</h2>

						<p>Welcome to real HD. The HTC Rezound is the first smart phone to feature a true 16:9 aspect ratio and 720p screen resolution. Just like your HDTV.</p>

					</div><!-- // body-copy -->
				
				</div><!-- // content-wrapper -->
				
			</div><!-- // content -->

			<?php include(__ROOT__."/include/content/generic-footer.php"); ?>

		</div><!-- // mobile-true-root -->
		

		<!-- BEATS page -->

		<div class="no-background view-root" data-role="page" id="mobile-beat-root" data-theme="c" data-title="BEATS DSP SOUND">

			<div class="drop-shadow max-width-320px my-headers" data-position="fixed" data-role="header" data-id="my-header" data-theme="c">

				<div class="header-toggle-button"></div>

				<div class="header-image">

					<img src="/img/rezound-logo-320.png" height="40" width="320" alt="HTC Rezound" />
					
				</div>

				<div data-role="navbar" class="nav-custom-icons" data-theme="c">

					<ul>

						<li>

							<a href="#mobile-view-root" class="view ui-nav-btn"></a>

						</li>

						<li>

							<a href="#mobile-true-root" class="true ui-nav-btn"></a>

						</li>

						<li>

							<a href="#mobile-beat-root" class="beat ui-nav-btn ui-btn-active ui-state-persist"></a>

						</li>

						<li>

							<a href="#mobile-spec-root" class="spec ui-nav-btn"></a>

						</li>

					</ul>

				</div><!-- // navbar -->

			</div><!-- // header -->

			<div data-role="content" id="beat-content" class="no-padding">
					
				<div class="content-wrapper">
					
					<div class="body-feature">
					
						
					
					</div><!-- // body-feature -->

					<div class="body-copy">
	
						<h2>Beats DSP Audio</h2>

						<p>Studio-quality sound on your mobile phone has arrived. Plug in and sync up with the included urbeats ear buds and experience crisp, clean Digital Sound Processing like never before.</p>
						
					</div><!-- // body-copy -->
					
				</div><!-- // content-wrapper -->
				
			</div><!-- // content -->

			<?php include(__ROOT__."/include/content/generic-footer.php"); ?>

		</div><!-- // mobile-beat-root -->


		<!-- SPECS page -->

		<div class="no-background view-root" data-role="page" id="mobile-spec-root" data-theme="c" data-title="SPECS">

			<div class="drop-shadow max-width-320px my-headers" data-position="fixed" data-role="header" data-id="my-header" data-theme="c">

				<div class="header-toggle-button"></div>

				<div class="header-image">

					<img src="/img/rezound-logo-320.png" height="40" width="320" alt="HTC Rezound" />
					
				</div>

				<div data-role="navbar" class="nav-custom-icons" data-theme="c">

					<ul>

						<li>

							<a href="#mobile-view-root" class="view ui-nav-btn"></a>

						</li>

						<li>

							<a href="#mobile-true-root" class="true ui-nav-btn"></a>

						</li>

						<li>

							<a href="#mobile-beat-root" class="beat ui-nav-btn"></a>

						</li>

						<li>

							<a href="#mobile-spec-root" class="spec ui-nav-btn ui-btn-active ui-state-persist"></a>

						</li>

					</ul>

				</div><!-- // navbar -->

			</div><!-- // header -->

			<div data-role="content" id="spec-content" class="no-padding">
					
				<div class="content-wrapper spec-page">
					
					<div class="body-copy">

						<h2>Specifications</h2>

						<p><b>Size / Weight</b><span class="columnar">129 x 65.5 x 13.65 mm bureaucratic</span></p>

						<p><b>Networks</b><span class="columnar">LTE 700MHz (band 13); CDMA 1x/DO 800/1900MHz UMTS/HSPA/HSPA+dual band 2100/900) and quad band GSM/GPRS/EDGE 850/900/1800/1900) (global mode operation disabled at initial launch)</span></p>

						<p><b>Operating system</b><span class="columnar">Android  Gingerbread</span></p>

						<p><b>Display</b><span class="columnar">4.3” S-LCD720x1280HD720 resolution</span></p>

						<p><b>Camera</b><span class="columnar">8MP with auto focus, 2 x LED Flash; 2.0MP fixed focus front camera 1080p/720p camcorder</span></p>

						<p><b>Internal memory</b><span class="columnar">16GB eMMC (~14GB available to user), 1GB DDR2 RAM</span></p>

						<p><b>Memory card</b><span class="columnar">16GB microSD™</span></p>

						<p><b>WLAN</b><span class="columnar">802.11 a/b/g/n</span></p>

						<p><b>Bluetooth</b><span class="columnar">3.0 + HS</span></p>

						<p><b>GPS</b><span class="columnar">GPS/AGPS</span></p>

						<p><b>Battery</b><span class="columnar">1,620 mAh</span></p>

						<p><b>Special features</b><span class="columnar">G-sensor, Light sensor, Compass, Proximity sensor, MicroUSB, USIM/CSIM/ISIM, audio jack Wireless Charging, TI Audio with SRS WOW HD</span></p>

						<p><b>Chipset</b><span class="columnar">Qualcomm® MSM8660 1.5Ghz  Qualcomm® MDM9600</span></p>

						<p><b>UX</b><span class="columnar">Sense 3.5 w/ VzW Horizontal Application Support</span></p>
						
					</div><!-- // body-copy -->

				</div>

			</div><!-- // content -->
			
			<?php include(__ROOT__."/include/content/generic-footer.php"); ?>

		</div><!-- // mobile-spec-root -->

		<?php include(__ROOT__."/include/js.php"); ?>

	</body>

</html>