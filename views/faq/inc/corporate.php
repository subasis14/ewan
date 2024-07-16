<section>
    <div class="container-fluid" style="padding:0px;">
        <div>
            <img src="/assets/images/faq/faq_corpoare_sector.jpg" width="100%" height="100%" alt="" />
        </div>
    </div>
</section>

<!-- Service Section -->
<div id="services-section" class="pt-80 pt-xs-60">
  <div class="container">
    <div class="row">
	<div class="col-md-12 col-sm-12 col-sx-12">
		<div class="block-title v-line mb-35">
            <h2><?php echo $output['faq_innerpage'] ?></h2>
          </div>
	</div>
      <div class="col-md-3 col-sm-5 col-sx-12">
        <div class="single-sidebar-widget">
          <div class="special-links" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
            <ul>
              <li><a href="/faq/individual"><?php echo $output['individual_sector'] ?></a></li>
              <li><a class="active" href="/faq/corporate"><?php echo $output['corporate_sector'] ?></a></li>
              <li><a href="/faq/healthcare"><?php echo $output['healthcare_sector'] ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-7">
		<h3 <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>><?php echo $output['corporate_sector'] ?></h3>
        <div class="text-box">
          
          <div class="row">
            <div class="col-sm-12 service-box mb-30">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  <!-- Service Section end --> 