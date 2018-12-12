
<?php get_header(); ?>
<div class="mainContent">




  <div class="obj100L colourHeaderBox">
    <h1>Property Search Results</h1>
  </div>
  <div class="innerM greyContentBox resultsSearch btmGap">
<form class="" action="" method="post">


    <div class="greyContentBox resultsSearchContainer clear">
      <div class="mob100L">
        <div class="obj5L txtR innerS b mob40L mobTxtL">
          Post Category:
        </div>
        <div class="obj25L innerS mob50L">
          <select name="" onchange="" id=""  class="">
            <?php
            $categories = get_categories( array(
              'orderby' => 'name',
              'order'   => 'ASC'
            ) );

            foreach( $categories as $category ) {


              echo '<option selected="selected" value="'.$category->slug.'">' .$category->name. '</option>';
            }

            ?>
          </select>
        </div>
      </div>
      <div class="mob100L">
        <div class="obj10L txtR innerS b mob40L mobTxtL">
          Service:
        </div>
        <div class="obj15L innerS mob50L">
          <select name="ctl00$ctl00$CP2$CPContent$conSearch2$cmbLocation" id="CP2_CPContent_conSearch2_cmbLocation" class="obj100L" class="">
            <?php $args = array(
              'type'=> 'services',
              'order'=> 'DESC',
              'taxonomy'=> 'services-category'
            );
            $categories = get_categories($args);
            foreach( $categories as $category ) {
              echo '<option selected="selected" value="'.$category->slug.'">' .$category->name. '</option>';
            }
            ?>

          </select>
        </div>
      </div>

      <div class="clear btmGap"></div>


      <div class="R mob100">
        <input type="submit" name="ctl00$ctl00$CP2$CPContent$conSearch2$btnSearch" value="Search" id="CP2_CPContent_conSearch2_btnSearch" class="RefineButton Float_Right btn" style="width:165px; margin-top:3px;" />
      </div>
      <div class="clear btmGap mobOnly"></div>
    </div>


</form>








  </div>



  <div class="obj100L">
    <div id="CP2_CPContent_conProperties1_conPager1_DivPaging" style="margin-bottom: 5px; margin-top: 5px; display: block; height: 15px;">

      <div class="R">
        <div class='pageingBlock lightBorder selectedBorder'>1</div><div class='pageingBlock lightBorder'><a href='PropertyResults738a.html?paging=true&amp;page=2'>2</a></div><div class='pageingBlock lightBorder'><a href='PropertyResultsca28.html?paging=true&amp;page=3'>3</a></div><div class='pageingBlock lightBorder'><a href='PropertyResults66f3.html?paging=true&amp;page=4'>...</a></div><div class='pageingBlock lightBorder'><a href='PropertyResultsb14a.html?paging=true&amp;page=7'>7</a></div><div class='pageingBlock' style='border: none;'><a href='PropertyResults738a.html?paging=true&amp;page=2'><img src='images/icons/propNext.png' /></a></div>
      </div>

      <div id="CP2_CPContent_conProperties1_conPager1_divSortBy" class="L mobHide">
        <label for="CP2_CPContent_conProperties1_conPager1_cmbSort" id="CP2_CPContent_conProperties1_conPager1_lblSort">Sort by</label>
        <select name="ctl00$ctl00$CP2$CPContent$conProperties1$conPager1$cmbSort" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ctl00$CP2$CPContent$conProperties1$conPager1$cmbSort\&#39;,\&#39;\&#39;)&#39;, 0)" id="CP2_CPContent_conProperties1_conPager1_cmbSort" class="" style="margin-right:20px;">
          <option selected="selected" value="L3_UPDATED[DESC]">Newest Added First</option>
          <option value="L3_FIRSTMAXSIZE">Size (Smallest First)</option>
          <option value="L3_FIRSTMAXSIZE[DESC]">Size (Largest First)</option>
          <option value="L3_ADDRESS_LINE4">Location</option>

        </select>
        <span class="b"><a id="CP2_CPContent_conProperties1_conPager1_lnkViewOnMap" href="javascript:__doPostBack(&#39;ctl00$ctl00$CP2$CPContent$conProperties1$conPager1$lnkViewOnMap&#39;,&#39;&#39;)">VIEW RESULTS ON MAP</a></span>
        &nbsp;<input type="submit" name="ctl00$ctl00$CP2$CPContent$conProperties1$conPager1$btnRequirement" value="Register your requirement" id="CP2_CPContent_conProperties1_conPager1_btnRequirement" class="innerS txtUpper standardBtnEdit" />
      </div>


    </div>

  </div>

  <div class="obj100L" style="overflow: hidden;">
    <div class="propRpt">
      <div id="CP2_CPContent_conProperties1_repProp_divPropItem_11" class="divRptPropItem mob100" style="margin-right:0px;">
        <div class="InnerPropItem">


          <div class="obj100L colourHeaderBox propertyItemTypeTenure">
            <div class="innerM" style="padding-right: 8px;">
              <a id="CP2_CPContent_conProperties1_repProp_hypDetails3_11" class="Page_Link" href="propertyInfo/720/Breckland-Retail-Park-London-Road-Thetford--IP24-3SA.html">Retail - To Let</a>
            </div>
          </div>
          <div class="obj100L rel" style="text-align: center;">


            <a id="CP2_CPContent_conProperties1_repProp_hypDetails2_11" href="propertyInfo/720/Breckland-Retail-Park-London-Road-Thetford--IP24-3SA.html"><img id="CP2_CPContent_conProperties1_repProp_imgProp_11" src="https://merrifields.agencypilot.com/store/property/235+3178_web.jpg" alt="Image of Thetford, London Road" style="max-height: 155px; max-width: 100%;" /></a>
          </div>
          <div class="obj100L">
            <div class="innerM">
              <div class="propertyItemAddress b">
                Thetford, London Road
              </div>

              <div class="propertyItemSize b">
                1,800 to 70,000 Sq Ft  / 167.22 to 6,503 Sq M
              </div>

              <div class="propertyItemDescription b HIDETHIS">
                A brand new retail and leisure destination fronting the busy London Road in Thetford. Located adjacent to the Forest Retail Park, opposite Topps Tiles and Kwik Fit and close to LIDL and Wickes.

                Planning has been granted for an Out of Town Retail Park providing approximately 70,000 sq ft of open A1 food / non-food retail space.

                Units are available via a pre-let on terms to be agreed.
              </div>
              <div class="propertyItemButtons">
                <a id="CP2_CPContent_conProperties1_repProp_hypDetails_11" class="innerS txtUpper btnNoArrow" href="propertyInfo/720/Breckland-Retail-Park-London-Road-Thetford--IP24-3SA.html">

                  <span style="font-size: 11pt">View Details</span><img Class="itemBannerArrow" src="images/icons/sldNextOver.png" />
                </a>
              </div>

            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="obj100L">
    <div id="CP2_CPContent_conProperties1_conPager2_DivPaging" style="margin-bottom: 5px; margin-top: 5px; display: block; height: 15px;">
      <div class="R">
        <div class='pageingBlock lightBorder selectedBorder'>1</div><div class='pageingBlock lightBorder'><a href='PropertyResults738a.html?paging=true&amp;page=2'>2</a></div><div class='pageingBlock lightBorder'><a href='PropertyResultsca28.html?paging=true&amp;page=3'>3</a></div><div class='pageingBlock lightBorder'><a href='PropertyResults66f3.html?paging=true&amp;page=4'>...</a></div><div class='pageingBlock lightBorder'><a href='PropertyResultsb14a.html?paging=true&amp;page=7'>7</a></div><div class='pageingBlock' style='border: none;'><a href='PropertyResults738a.html?paging=true&amp;page=2'><img src='images/icons/propNext.png' /></a></div>
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
</body>

<!-- Mirrored from www.merrifields.co.uk/PropertyResults.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 03:58:20 GMT -->
</html>
