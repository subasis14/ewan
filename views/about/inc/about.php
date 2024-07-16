<!-- Intro Section -->

<section>
   <div class="container-fluid" style="padding:0px;">
      <div class="owl-carousel nf-carousel-theme" data-pagination="false" data-items="1"  data-loop="true" data-margin="0" data-center="true" data-navigation="true" data-desktop="1" data-desktopsmall="1" data-tablet="1" data-mobile="1" data-autoplay="false" data-autotime="5000" data-autoplayHoverPause="true" data-prev="fa fa-chevron-left" data-next="fa fa-chevron-right">
         <img src="/ewan/assets/images/banner/slider1.jpg" width="100%" height="100%" alt="" />
         <img src="/ewan/assets/images/banner/slider2.jpg" width="100%" height="100%" alt="" />
         <img src="/ewan/assets/images/banner/slider3.jpg" width="100%" height="100%" alt="" />
      </div>
   </div>
</section>

<!-- Intro Section -->
<!-- About Section -->
<section class="padding ptb-xs-60">
   <div class="container">
      <div class="row">
         <div class="col-sm-3 mt-xs-40 pb-xs-40">
            <div class="tab-title" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right"    <?php }  ?>>
               <ul class="clearfix">
                  <li>
                   <a href="#about_ewan" class="active"><?php echo $output['about_ewan'] ?></a>
                  </li>
                  <li>
                     <a href="#ewan_mission"><?php echo $output['ewan_mission'] ?></a>
                  </li>
                  <li>
                     <a href="#vission"><?php echo $output['our_vission'] ?></a>
                  </li>
                  <li>
                     <a href="#values"><?php echo $output['our_values'] ?></a>
                  </li>
                  <li >
                     <a href="#innovation"><?php echo $output['innovation'] ?></a>
                  </li>
                  <li>
                     <a href="#compliance"><?php echo $output['compliance'] ?></a>
                  </li>
                  <li>
                     <a href="#excellence"><?php echo $output['excellence_of_performance'] ?></a>
                  </li>
                  <li>
                     <a href="#diversity"><?php echo $output['diversity_of_services'] ?></a>
                  </li>
               </ul>
            </div>
            
         </div>
         <div class="col-sm-9">
            <div class="tab-content" id="about_ewan" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right"    <?php }  ?>>
               <div class="row">
                  <div class="col-sm-12">
                     <h2 class="pt-30"><?php echo $output['about_ewan'] ?></h2>
                     <p><?php echo $output['index_about_ewan_1st_para'] ?></p>
                     <p><?php echo $output['index_about_ewan_2nd_para'] ?></p>
                  </div>
               </div>
            </div>
            <!-- About Section -->
            <div class=" pt-xs-60">
               <div class="tab-content" id="ewan_mission">
                  <div class="row" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right"    <?php }  ?>>
                     <div class="col-sm-12">
                        <h2 class="pt-30"><?php echo $output['ewan_mission'] ?></h2>
                        <p><?php echo $output['ewan_mission_content'] ?></p>
                     </div>
                  </div>
               </div>
               <div class="history-timeline__block">
                  <ul class="history-timeline">
                     <li>
                        <div class="icon-dot"></div>
                        <p class="date text-block text-bold m-b-30"><?php echo $output['mission'] ?></p>
                        <div class="abt-block__slider">
                           <div class="abt-block__wrap">
                              <div class="abt-block__left abt-block__bg" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right"    <?php }  ?>>
                                 <h2><?php echo $output['objectives'] ?></h2>
                                 <p><?php echo $output['objectives_content_01'] ?><br><br></p>
                              </div>
                              <div class="abt-block__right abt-block__img1">
                              </div>
                           </div>
                           <!--item 1-->
                           <div class="abt-block__wrap">
                              <div class="abt-block__left abt-block__bg" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right"    <?php }  ?>>
                                 <h2><?php echo $output['objectives'] ?></h2>
                                 <p><?php echo $output['objectives_content_02'] ?></p>
                              </div>
                              <div class="abt-block__right abt-block__img2">
                              </div>
                           </div>
                           <!--item 2-->
                           <div class="abt-block__wrap">
                              <div class="abt-block__left abt-block__bg" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right"    <?php }  ?>>
                                 <h2><?php echo $output['objectives'] ?></h2>
                                 <p><?php echo $output['objectives_content_03'] ?><br><br><br></p>
                              </div>
                              <div class="abt-block__right abt-block__img3">
                              </div>
                           </div>
                           <!--item 3-->
                        </div>
                     </li>
                     <li id="vission">
                        <div class="icon-dot"></div>
                        <p class="date text-block text-bold m-b-30"><?php echo $output['vission'] ?></p>
                        <div class="mv-block"  <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right"    <?php }  ?>>
                           <div class="mv-block__mission mv-block__mission-bg">
                              <h3><?php echo $output['our_vission'] ?></h3>
                              <p><?php echo $output['our_vission_content_para_1'] ?></p>
                              <p><?php echo $output['our_vission_content_para_2'] ?></p>
                           </div>
                        </div>
                     </li>
                     <li id="values">
                        <div class="icon-dot"></div>
                        <p class="date text-block text-bold m-b-30"><?php echo $output['values'] ?></p>
                        <div class="mv-block">
                           <div class="mv-block__vision mv-block__vision-bg" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right"    <?php }  ?>>
                              <h3><?php echo $output['our_values'] ?> </h3>
                              <p><?php echo $output['our_values_content'] ?></p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="abt-block">
               </div>
            </div>
            <!-- About Section End-->
         </div>
      </div>
      <div class="row" <?php if($_SESSION['lang']==="ar"){?>  style="text-align: right"    <?php }  ?>>
         <div class="pt-60 pt-xs-60 ">
            <div class="row-table partner-blck__brdr mb-40">
               <div class="col-sm-6 no-padding t_cell partner-blck__brdr-r" id="innovation">
               <div class="partner__content">
                     <h3><?php echo $output['innovation'] ?></h3>
                     <p><?php echo $output['innovation_content'] ?> </p>
                     
                  </div>
               </div>
               <div class="col-sm-6 no-padding t_cell" id="compliance">
                  <div class="partner__content">
                     <h3><?php echo $output['compliance'] ?></h3>
                     <p><?php echo $output['compliance_content'] ?></p>
                     
                  </div>
               </div>
            </div>
            <div class="row-table partner-blck__brdr mb-40">
               <div class="col-sm-6 no-padding t_cell partner-blck__brdr-r" id="excellence">
               <div class="partner__content">
                     <h3><?php echo $output['excellence_of_performance'] ?></h3>
                     <p><?php echo $output['excellence_of_performance_content'] ?></p>
                     
                  </div>
               </div>
               <div class="col-sm-6 no-padding t_cell" id="diversity">
                  <div class="partner__content">
                     <h3><?php echo $output['diversity_of_services'] ?></h3>
                     <p><?php echo $output['diversity_of_services_content'] ?></p>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- About Section End-->