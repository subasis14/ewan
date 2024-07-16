<section>
    <div class="container-fluid" style="padding:0px;">
        <div>
            <img src="/assets/images/faq/faq_individual_sector.jpg" width="100%" height="100%" alt="" />
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
              <li><a class="active" href="/faq/individual"><?php echo $output['individual_sector'] ?></a></li>
              <li><a href="/faq/corporate"><?php echo $output['corporate_sector'] ?></a></li>
              <li><a href="/faq/healthcare"><?php echo $output['healthcare_sector'] ?></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-7">
		<h3  <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>><?php echo $output['individual_sector'] ?></h3>
        <div class="text-box">
          
          <div class="row">
            <div class="col-sm-12 service-box mb-30">
              <div class="panel-group service-faq faq" id="accordion">
                <div class="panel-group" id="accordion">
                  
					<div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-1" aria-expanded="false"><?php echo $output['faq_qus01'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-1" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans01'] ?></p>
							<ul>
								<li><?php echo $output['faq_list01'] ?></li>
								<li><?php echo $output['faq_list02'] ?></li>
								<li><?php echo $output['faq_list03'] ?></li>
							</ul>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-2" aria-expanded="false"><?php echo $output['faq_qus02'] ?> <i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-2" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans02'] ?></p>
							<ul>
								<li><?php echo $output['faq_list0201'] ?></li>
								<li><?php echo $output['faq_list0202'] ?></li>
								<li><?php echo $output['faq_list0203'] ?></li>
								<li><?php echo $output['faq_list0204'] ?></li>
							</ul>
							<p><strong><?php echo $output['faq_note01'] ?></strong></p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-3" aria-expanded="false"><?php echo $output['faq_qus03'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-3" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans03'] ?></p>
							<ul>
								<li><?php echo $output['faq_list0301'] ?></li>
								<li><?php echo $output['faq_list0302'] ?></li>
								<li><?php echo $output['faq_list0303'] ?></li>
								<li><?php echo $output['faq_list0304'] ?></li>
							</ul>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-4" aria-expanded="false"><?php echo $output['faq_qus04'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-4" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans04'] ?></p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-5" aria-expanded="false"><?php echo $output['faq_qus05'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-5" class="panel-collapse collapse">
						  <div class="panel-body">
						  <ul>
								<li><?php echo $output['faq_list0501'] ?></li>
								<li><?php echo $output['faq_list0502'] ?></li>
								<li><?php echo $output['faq_list0503'] ?></li>
								<li><?php echo $output['faq_list0504'] ?></li>
							</ul>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-6" aria-expanded="false"><?php echo $output['faq_qus06'] ?> <i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-6" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans06'] ?></p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-7" aria-expanded="false"><?php echo $output['faq_qus07'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-7" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans07'] ?></p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-8" aria-expanded="false"><?php echo $output['faq_qus08'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-8" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans08'] ?></p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-9" aria-expanded="false"><?php echo $output['faq_qus09'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-9" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans09'] ?></p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-10" aria-expanded="false"><?php echo $output['faq_qus010'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-10" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans010'] ?></p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-11" aria-expanded="false"><?php echo $output['faq_qus011'] ?> <i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-11" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans011'] ?></p>
							<ul>
							  <li><?php echo $output['faq_list01101'] ?></li>
							  <li><?php echo $output['faq_list01102'] ?> </li>
							  <li><?php echo $output['faq_list01103'] ?></li>
							</ul>
							<p><?php echo $output['faq_list011note'] ?></p>
						  </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-12" aria-expanded="false"><?php echo $output['faq_qus012'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-12" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans012'] ?></p>
							<ul>
							  <li><?php echo $output['faq_list01201'] ?></li>
							  <li><?php echo $output['faq_list01202'] ?></li>
							  <li><?php echo $output['faq_list01203'] ?></li>
							  <li><?php echo $output['faq_list01204'] ?></li>
							  <li><?php echo $output['faq_list01205'] ?></li>
							  <li><?php echo $output['faq_list01206'] ?></li>
							  <li><?php echo $output['faq_list01207'] ?></li>
							  <li><?php echo $output['faq_list01208'] ?></li>
							</ul>
						   </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-13" aria-expanded="false"><?php echo $output['faq_qus013'] ?><i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-13" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans01301'] ?></p>
							<p><?php echo $output['faq_ans01302'] ?></p>
							<p><?php echo $output['faq_ans01303'] ?></p>
						   </div>
						</div>
					  </div>
					  <div class="panel panel-default" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right" <?php } ?>>
						<div class="panel-heading">
						  <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-14" aria-expanded="false"><?php echo $output['faq_qus014'] ?> <i class="fa fa-plus collape-plus"></i></a></h4>
						</div>
						<div id="faq-14" class="panel-collapse collapse">
						  <div class="panel-body">
							<p><?php echo $output['faq_ans014'] ?></p>
							<ul>
								<li><?php echo $output['faq_list01401'] ?></li>
								<li><?php echo $output['faq_list01402'] ?></li>
							</ul>
							<p><strong><?php echo $output['faq_ans014note'] ?></p>
						   </div>
						</div>
					 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
  <!-- Service Section end --> 