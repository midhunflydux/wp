

<?php get_header(); ?>




<div class="headerSliderSection mobHide" id="aftemp1">


	<input type="text" id="screenwidth1" name="screenwidth1" style="display: none"/>

	<script type="text/javascript">

	$(function () {
		if (document.getElementById("divRotator").offsetWidth != document.getElementById("RadRotator1").clientWidth) {
			SetWindowWidth();
		}
	})

	var l_iTimerID = 0;

	window.onresize = function () {
		if (l_iTimerID > 0) clearTimeout(l_iTimerID)
		l_iTimerID = setTimeout(function () {
			SetWindowWidth();
		}, 250);
	}

	function SetWindowWidth() {
		$get('screenwidth1').value = document.getElementById("divRotator").offsetWidth;
		$get('btnPostBackRebind').click();
	}

	</script>

	<div class="obj100" id="divRotator">
		<div id="CP1_conBannerSlider1_upRotator">


			<div id="RadRotator1" class="RadRotator RadRotator_Default" style="height:256px;width:980px;">
				<!-- 2015.2.729.45 --><div class="rrRelativeWrapper">
				<div class="rrClipRegion">
					<ul class="rrItemsList">
						<?php
						$i=0;
						$args = array(
							'category_name'    => 'banner',
							'order'    => 'DESC'
						);
						// The Query
						query_posts( $args );
						while( have_posts() ):the_post();
						?>
						<li class="rrItem" style="width:980px;">
							<div id="i<?php echo $i; ?>">

								<?php
								$image1= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'banner-image' );
								?>


								<div id="divSliderContainer" class="obj100L sliderItem" style="background-image: url(<?php echo $image1[0]; ?>)">
									<div class="sliderText">
										<h3>
										</h3>

										<a id="hypRead"><?php echo the_title(); $i++; ?></a>
									</div>
								</div>

							</div>
						</li>
					<?php endwhile;
					wp_reset_query(); ?>
				</ul>
			</div><a class="rrButton rrButtonUp" href="javascript:void(0);">&nbsp;</a><a class="rrButton rrButtonLeft" href="javascript:void(0);">&nbsp;</a><a class="rrButton rrButtonRight" href="javascript:void(0);">&nbsp;</a><a class="rrButton rrButtonDown" href="javascript:void(0);">&nbsp;</a>
		</div><input id="RadRotator1_ClientState" name="RadRotator1_ClientState" type="hidden" />
	</div>
	<div class="sliderButtons">
		<img id="CP1_conBannerSlider1_img_left" class="SliderLeftBtn" onmouseover="this.src=<?php echo bloginfo('template_url'); ?>&#39;/images/icons/sldPreviousOver.png&#39;" onmouseout="this.src=<?php echo bloginfo('template_url'); ?>&#39;/images/icons/sldPrevious.png&#39;" src="<?php echo bloginfo('template_url'); ?>/images/icons/sldPrevious.png" alt="left" style="cursor: pointer;" />
		<img id="CP1_conBannerSlider1_img_right" class="SliderRightBtn" onmouseover="this.src=<?php echo bloginfo('template_url'); ?>&#39;/images/icons/sldNextOver.png&#39;" onmouseout="this.src=<?php echo bloginfo('template_url'); ?>&#39;/images/icons/sldNext.png&#39;" src="<?php echo bloginfo('template_url'); ?>/images/icons/sldNext.png" alt="right" style="cursor: pointer;" />
	</div>



</div>
</div>
<input type="submit" name="ctl00$ctl00$CP1$conBannerSlider1$btnPostBackRebind" value="Postback and rebind" id="btnPostBackRebind" style="display: none;" />

</div>


<div class="mainContent">


	<h1>

	</h1>

	<div class="obj100L btmGap">
		<div class="obj50LPad mob100">
			<span style="font-weight: bold;"></span><strong>Welcome to Merrifields...</strong><br />
			<br />
			<strong>Established in 1990 and with over 25 years experience we pride ourselves in offering a personal and professional service, unrivalled market knowledge and providing realistic advice with the aim of maximising the value of our Client's property assets.&nbsp;&nbsp;<br />
				<br />
				Our Clients needs are at the heart of everything we do and we are able to use our knowledge and experience to deliver sensible cost effective&nbsp;solutions to enhance our Client's portfolios.</strong>
			</div>
			<div class="divHomeNews mobHide">
				<div class="clear btmGap b">Latest News</div>


				<div class="obj100L">

					<div id="CP2_cNews1_upNews">


						<div class="obj100L newsPaging HIDETHIS">


							<div class="newsPagingText">

							</div>




						</div>
						<div class="obj100L colourHeaderBox HIDETHIS">
							<div class="innerS">
								<span class="txtUpper">Latest News</span>

							</div>
						</div>

						<div class="obj100L newsBox btmGap">
							<?php
							$args = array(
								'category_name'    => 'news',
								'order'    => 'DESC'
							);
							// The Query
							query_posts( $args );
							while( have_posts() ):the_post();
							?>
							<div class="newsItem mob100L btmGap">
								<div class="obj65L">
									<div class="innerM">
										<div class="newsItemTitle"><a id="CP2_cNews1_repNews_hypMore_0" href="<?php the_permalink(); ?>">
											<span class="b"><?php the_title(); ?></span>
										</a></div>
										<div class="newsItemDate">
											<h5></h5>
										</div>
									</div>
								</div>
								<div>
									<a id="CP2_cNews1_repNews_hypMore2_0" href="<?php the_permalink(); ?>">
										<div class="newsItemArrowDiv colourHeaderBox">
											<?php $image2= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'banner-image' ); ?>
											<img id="CP2_cNews1_repNews_imgArrow_0" class="newsItemArrowImg" src="<?php echo bloginfo('template_url'); ?>/images/icons/sldNextOver.png" />
										</div>
										<div class="mobHide"><img id="CP2_cNews1_repNews_imgNews_0" class="newsItemImg" src="<?php echo $image2[0]; ?>" /></div>
									</a>
								</div>
								<div class="clear"></div>
							</div>
						<?php  endwhile;
						wp_reset_query();
						?>

					</div>
					<div class="clear"></div>
					<div class="R newsPaging">




						<div class="newsPagingText">

						</div>




					</div>
					<div class="obj40L txtR" style="display: none;">
						<a id="CP2_cNews1_hypShowAll" href="news/ShowAll.html">Show All</a>
					</div>


				</div>
			</div>

		</div>
	</div>
	<div class="clear"></div>

	<div class="colourHeaderBox obj100L btmGap">
		<h1>Search Properties</h1>
	</div>
	<div class="homeItems mob100">

		<div class="itemContainer">


			<div id="CP2_conItems1_repItem_divItemBox_0" class="itemBox mob100">
				<a id="CP2_conItems1_repItem_hypReadMore_0" class="hypMore" href="searchproperties/Industrial-Warehouse.html" target="_self"><img id="CP2_conItems1_repItem_imgPhoto_0" class="itemBoxImg" src="<?php echo bloginfo('template_url'); ?>/images/cms/Industrial%20search%20BW%20%26%20cropped.jpg" />
					<div class="homeItemsBanner">
						<div class="obj75L" style="overflow: hidden; max-height: 100%">Industrial</div>
						<img id="CP2_conItems1_repItem_imgBannerSelect_0" class="itemBannerArrow" src="<?php echo bloginfo('template_url'); ?>/images/icons/sldNext.png" />
					</div>
				</a>





			</div>


			<div id="CP2_conItems1_repItem_divItemBox_1" class="itemBox mob100 itemBoxMargin">
				<a id="CP2_conItems1_repItem_hypReadMore_1" class="hypMore" href="searchproperties/office.html" target="_self"><img id="CP2_conItems1_repItem_imgPhoto_1" class="itemBoxImg" src="<?php echo bloginfo('template_url'); ?>/images/cms/Office%20Search%20BW%20%26%20cropped.jpg" />
					<div class="homeItemsBanner">
						<div class="obj75L" style="overflow: hidden; max-height: 100%">Office</div>
						<img id="CP2_conItems1_repItem_imgBannerSelect_1" class="itemBannerArrow" src="<?php echo bloginfo('template_url'); ?>/images/icons/sldNext.png" />
					</div>
				</a>





			</div>


			<div id="CP2_conItems1_repItem_divItemBox_2" class="itemBox mob100">
				<a id="CP2_conItems1_repItem_hypReadMore_2" class="hypMore" href="searchproperties/Retail.html" target="_self"><img id="CP2_conItems1_repItem_imgPhoto_2" class="itemBoxImg" src="<?php echo bloginfo('template_url'); ?>/images/cms/Retail%20Search%20BW%20%26%20cropped.jpg" />
					<div class="homeItemsBanner">
						<div class="obj75L" style="overflow: hidden; max-height: 100%">Retail</div>
						<img id="CP2_conItems1_repItem_imgBannerSelect_2" class="itemBannerArrow" src="<?php echo bloginfo('template_url'); ?>/images/icons/sldNext.png" />
					</div>
				</a>





			</div>


			<div id="CP2_conItems1_repItem_divItemBox_3" class="itemBox mob100">
				<a id="CP2_conItems1_repItem_hypReadMore_3" class="hypMore" href="searchproperties/investment.html" target="_self"><img id="CP2_conItems1_repItem_imgPhoto_3" class="itemBoxImg" src="<?php echo bloginfo('template_url'); ?>/images/cms/Investments%20Search%20BW%20%26%20cropped.jpg" />
					<div class="homeItemsBanner">
						<div class="obj75L" style="overflow: hidden; max-height: 100%">Investment</div>
						<img id="CP2_conItems1_repItem_imgBannerSelect_3" class="itemBannerArrow" src="<?php echo bloginfo('template_url'); ?>/images/icons/sldNext.png" />
					</div>
				</a>





			</div>


			<div id="CP2_conItems1_repItem_divItemBox_4" class="itemBox mob100 itemBoxMargin">
				<a id="CP2_conItems1_repItem_hypReadMore_4" class="hypMore" href="searchproperties/Development-Commercial-or-Development-Residential.html" target="_self"><img id="CP2_conItems1_repItem_imgPhoto_4" class="itemBoxImg" src="<?php echo bloginfo('template_url'); ?>/images/cms/Land%20and%20Development%20Search%20BW%20%26%20cropped.jpg" />
					<div class="homeItemsBanner">
						<div class="obj75L" style="overflow: hidden; max-height: 100%">Development</div>
						<img id="CP2_conItems1_repItem_imgBannerSelect_4" class="itemBannerArrow" src="<?php echo bloginfo('template_url'); ?>/images/icons/sldNext.png" />
					</div>
				</a>





			</div>


			<div id="CP2_conItems1_repItem_divItemBox_5" class="itemBox mob100">
				<a id="CP2_conItems1_repItem_hypReadMore_5" class="hypMore" href="defaultccdc.html?mid=5&amp;type=requirement" target="_self"><img id="CP2_conItems1_repItem_imgPhoto_5" class="itemBoxImg" src="<?php echo bloginfo('template_url'); ?>/images/cms/Register%20requirement%20BW%20%26%20cropped.jpg" />
					<div class="homeItemsBanner">
						<div class="obj75L" style="overflow: hidden; max-height: 100%">Register your requirement</div>
						<img id="CP2_conItems1_repItem_imgBannerSelect_5" class="itemBannerArrow" src="<?php echo bloginfo('template_url'); ?>/images/icons/sldPencil.png" />
					</div>
				</a>





			</div>

		</div>
	</div>


</div>

<div class="clear"></div>
</div>



<div class="obj100L footerSection mob100">

	<div class="TransparentContainer mob100">


		<div class="obj20L mobHide">
			<div class=" innerS">
				<a href="http://www.rics.org/uk/" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/images/RICS_logo.png" style="max-width: 175px; width:100%; padding: 25px 0;"/></a>
				<h5>Regulated by RICS</h5>
			</div>
		</div>
		<div class="obj20L mobHide">
			<div class=" innerS foot2">
				<h5>Our Services</h5>
				<p>
					<a href="OurServices/Valuations.html">Valuations</a>
					<br />
					<a href="OurServices/Commercial_Agency.html">Commercial Agency</a>
					<br />
					<a href="OurServices/Property_Management.html">Property Management</a>
					<br />
					<a href="OurServices/Rent_Reviews_Lease_Renewals.html">Rent Reviews and Lease Renewals</a>
					<br />
					<a href="OurServices/Planning_and_Development.html">Planning and Development</a>
					<br />
					<a href="OurServices/Rating.html">Rating</a>
				</p>
			</div>
		</div>
		<div class="obj20L mobHide">
			<div class=" innerS">
				<h5>Search Properties</h5>
				<p>
					<a href="searchproperties/Industrial-Warehouse.html">Industrial</a><br />
					<a href="searchproperties/Office-2.html">Office</a><br />
					<a href="searchproperties/Retail.html">Retail</a><br />
					<a href="searchproperties/Investment-2.html">Investment</a><br />
					<a href="searchproperties/Development-Commercial-or-Development-Residential.html">Development</a>
				</p>
			</div>
		</div>
		<div class="obj20L mobHide">
			<div class=" innerS foot4">
				<h5>Search Areas</h5>
				<p>
					<a title='Properties in Brandon' href='searchProperties/Brandon.html'>Brandon</a><br /><a title='Properties in Bury St Edmunds' href='searchProperties/Bury_St_Edmunds.html'>Bury St Edmunds</a><br /><a title='Properties in Kings Lynn' href='searchProperties/Kings_Lynn.html'>Kings Lynn</a><br /><a title='Properties in Mildenhall' href='searchProperties/Mildenhall.html'>Mildenhall</a><br /><a title='Properties in Newmarket' href='searchProperties/Newmarket.html'>Newmarket</a><br /><a title='Properties in Stowmarket' href='searchProperties/Stowmarket.html'>Stowmarket</a><br /><a title='Properties in Sudbury' href='searchProperties/Sudbury.html'>Sudbury</a><br /><a title='Properties in Thetford' href='searchProperties/Thetford.html'>Thetford</a><br />
				</p>
			</div>
		</div>
		<div class="obj20L mob100">
			<div class=" innerS">
				<h5>Contact Us</h5>
				<img id="conFooter1_imgPhoneIcon" class="contactIcon" src="<?php echo bloginfo('template_url'); ?>/images/icons/phone_icon.png" />01284 700 700<br />
				<img id="conFooter1_imgLetterIcon" class="contactIcon" src="<?php echo bloginfo('template_url'); ?>/images/icons/letter_icon.png" /><a href="mailto:info@merrifields.co.uk">info@merrifields.co.uk</a><br />
				<img id="conFooter1_imgLocationIcon" class="contactIcon L mobHide" src="<?php echo bloginfo('template_url'); ?>/images/icons/map_location_icon.png" /><div class="L mobNoFloat">63 Churchgate Street<br />
					Bury St Edmunds<br />
					Suffolk, IP33 1RH</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="footerBottomBar mob100">
			<div class="TransparentContainer mob100">
				<div class="obj20L mob100">© Merrifields 2018</div>
				<div class="obj20L mobHide"><a target="_blank" href="Sitemap.html">Sitemap</a></div>
				<div class="obj20L mobHide"><a target="_blank" href="config/Sitemap.xml">XML Sitemap</a></div>
				<div class="obj20L mobHide"><a id="conFooter1_hypCookiesPolicy" href="cookie-policy.html">Cookies Policy</a></div>
				<div class="obj20L mob100">Developed by <a href="http://www.alciumsoftware.com/" target="_blank">Alcium Software</a></div>
			</div>
		</div>
	</div>


	<div class="obj100L rel">
		<div id="divCookie" class="divCookie rndM">
			<div class="Close_icon">
				<img onclick="hideCookieBox();" src="<?php echo bloginfo('template_url'); ?>/images/Close_Icon.png" />
			</div>
			This site uses cookies for analysis purposes only. This helps us understand how
			you and other visitors use our site. To see a complete list of these cookies or
			to opt out please access our
			<a id="hypCookies" href="cookie-policy.html">cookie policy page</a>.
			<br />
			<br />
			You will see this message only once, but you will be able to find more information
			about our use of cookies or opt out at any time.
		</div>
	</div>









	<script type="text/javascript">
	//<![CDATA[
	Sys.Application.add_init(function() {
		$create(Telerik.Web.UI.RadRotator, {"_itemWidth":"980px","clientStateFieldID":"RadRotator1_ClientState","controlButtons":{"UpButtonID":"","DownButtonID":"","LeftButtonID":"CP1_conBannerSlider1_img_left","RightButtonID":"CP1_conBannerSlider1_img_right","OnClientButtonClick":"","OnClientButtonOver":"","OnClientButtonOut":""},"frameDuration":5000,"items":[{},{},{},{}],"rotatorType":3,"skin":"Default"}, {"buttonClick":OnClientButtonClick,"itemShown":OnClientItemShown,"load":OnClientLoad}, null, $get("RadRotator1"));
	});
	//]]>
</script>
</form>
</body>

<!-- Mirrored from www.merrifields.co.uk/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 03:57:45 GMT -->
</html>
