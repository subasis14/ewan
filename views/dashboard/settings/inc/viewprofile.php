<!-- /#right -->
<div id="content" class="bg-container">
   <!-- Content -->
   <header class="head">
   <div class="main-bar">
                     <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-4">
                           <h4 class="nav_top_align">
                              <i class="fa fa-th"></i>
                              View Profile
                           </h4>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8">
                           <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                              <li class="breadcrumb-item">
                                 <a href="/dashboard">
                                 <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                 </a>
                              </li>
                              <li class="breadcrumb-item active">View Profile</li>
                           </ol>
                        </div>
                     </div>
                  </div>
   </header>
   <div class="outer">
      <div class="inner bg-container">
         
         
         <!-- Join our Team -->
         <div class="row m-t-35">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header bg-white">
                     <i class="fa fa-table"></i> Admin Deatils
                     
                  </div>
                  <div class="card-block m-t-35" style="position: relative;">
                     <div id="liveAccounts_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                     <div class="modal-body">
            
            <div class="row">
               <div class="col-md-12">
                  <table class="nowrap table table-striped table-bordered">
                     <tbody>
                        <tr>
                           <th style="width:50%">First Name :</th>
                           <td style="width:50%"><?php echo $output[0]['User_FName']; ?></td>
                        </tr>
                        <tr>
                           <th style="width:50%">Last Name :</th>
                           <td style="width:50%"><?php echo $output[0]['User_LName']; ?></td>
                        </tr>
                        <tr>
                           <th style="width:50%">Email :</th>
                           <td style="width:50%"><?php echo $output[0]['Usr_Email']; ?></td>
                        </tr>
                        <tr>
                           <th style="width:50%">Phone :</th>
                           <td style="width:50%"><?php echo $output[0]['User_Mobile']; ?></td>
                        </tr>
                        
                       
                     </tbody>
                  </table>
                 
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
<!-- /.inner -->
</div>
<!-- /.outer -->
</div>
<!-- Content end -->
</div>









