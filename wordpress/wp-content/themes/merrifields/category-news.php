



<?php get_header(); ?>
<div class="mainContent">
	<img id="CP2_imgBanner" class="obj100L" src="<?php bloginfo('template_url'); ?>/images/papers.jpg" alt="Page Image" />
	<div class="colourHeaderBox obj100L btmGap">
		<h1>News</h1>
	</div>

	<div class="contentImage obj35 R mob100L">
		<div class="innerM NoPadRight mobNoPad">

		</div>
	</div>
	<div class="obj65L mob100L">
		<div class="innerM NoPadLeft mobNoPad">
		</div>
	</div>

	<div class="obj100L">
		<div id="CP2_divLatest">


			<div class="obj100L">

				<div id="CP2_conNews1_upNews">


					<div class="obj100L newsPaging HIDETHIS">


						<div class="newsPagingText">
							Page 1 of 13
						</div>
						<a id="CP2_conNews1_hypNext" class="newsNext" href="javascript:__doPostBack(&#39;ctl00$ctl00$CP2$conNews1$hypNext&#39;,&#39;&#39;)"> </a>
						<a id="CP2_conNews1_hypLast" class="newsLast" href="javascript:__doPostBack(&#39;ctl00$ctl00$CP2$conNews1$hypLast&#39;,&#39;&#39;)"> </a>


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
									<div class="newsItemTitle"><a id="CP2_conNews1_repNews_hypMore_0" href="News/Support-the-High-Street-this-Christmas.html">
										<span class="b"><?php echo the_title(); ?></span>
									</a></div>
									<div class="newsItemDate">
										<h5><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></h5>
									</div>
								</div>
							</div>
							<div>
								<a id="CP2_conNews1_repNews_hypMore2_0" href="News/Support-the-High-Street-this-Christmas.html">
									<div class="newsItemArrowDiv colourHeaderBox">
										<img id="CP2_conNews1_repNews_imgArrow_0" class="newsItemArrowImg" src="<?php bloginfo('template_url'); ?>/images/icons/sldNextOver.png" />
									</div>
										<?php $image2= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'banner-image' ); ?>
									<div class="mobHide"><img id="CP2_conNews1_repNews_imgNews_0" class="newsItemImg" src="<?php echo $image2[0]; ?>" /></div>
								</a>
							</div>
							<div class="clear"></div>
						</div>
<?php endwhile; wp_reset_query(); ?>
					</div>
					<div class="clear"></div>
					<div class="R newsPaging">




						<div class="newsPagingText">
							Page 1 of 13
						</div>

						<a id="CP2_conNews1_hypNextBot" class="newsNext" href="javascript:__doPostBack(&#39;ctl00$ctl00$CP2$conNews1$hypNextBot&#39;,&#39;&#39;)"> </a>
						<a id="CP2_conNews1_hypLastBot" class="newsLast" href="javascript:__doPostBack(&#39;ctl00$ctl00$CP2$conNews1$hypLastBot&#39;,&#39;&#39;)"> </a>

					</div>
					<div class="obj40L txtR" style="display: none;">
						<a id="CP2_conNews1_hypShowAll" href="news/ShowAll.html">Show All</a>
					</div>


				</div>
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
				<a href="http://www.rics.org/uk/" target="_blank"><img src="images/RICS_logo.png" style="max-width: 175px; width:100%; padding: 25px 0;"/></a>
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
				<img id="conFooter1_imgPhoneIcon" class="contactIcon" src="images/icons/phone_icon.png" />01284 700 700<br />
				<img id="conFooter1_imgLetterIcon" class="contactIcon" src="images/icons/letter_icon.png" /><a href="mailto:info@merrifields.co.uk">info@merrifields.co.uk</a><br />
				<img id="conFooter1_imgLocationIcon" class="contactIcon L mobHide" src="images/icons/map_location_icon.png" /><div class="L mobNoFloat">63 Churchgate Street<br />
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
				<img onclick="hideCookieBox();" src="images/Close_Icon.png" />
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







</form>
</body>

<!-- Mirrored from www.merrifields.co.uk/News.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 03:58:42 GMT -->
</html>
