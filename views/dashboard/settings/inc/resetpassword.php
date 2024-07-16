<!-- /#right -->
<div id="content" class="bg-container">
   <!-- Content -->
   <header class="head">
   <div class="main-bar">
                     <div class="row">
                        <div class="col-lg-6 col-md-4 col-sm-4">
                           <h4 class="nav_top_align">
                              <i class="fa fa-th"></i>
                              Reset Password
                           </h4>
                        </div>
                        <div class="col-lg-6 col-md-8 col-sm-8">
                           <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                              <li class="breadcrumb-item">
                                 <a href="/dashboard">
                                 <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                 </a>
                              </li>
                              <li class="breadcrumb-item active">Reset Password</li>
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
                     <i class="fa fa-table"></i> Reset Password
                     
                  </div>
                  <div class="card-block m-t-35" style="margin-top: 10px;">
                                 <form method="POST"  accept-charset="UTF-8" name="verificationForm" id="edit-validation" class="form">
                                    <input name="_token" type="hidden" value="CRWCAg9YSbEeFbeHu0Gj1NOmzCZZY5EA6YLsbkIQ">
                                    <div class="form-group row">
                                       <div class="col-xl-3 text-xl-right">
                                          <label for="live_server" class="col-form-label">User Name</label>
                                       </div>
                                       <div class="col-xl-5">
                                          <input type="text" name="live_server" id="email" class="validate[required] form-control" value="<?php echo $output[0]['Usr_Email']; ?>" disabled>
                                       </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                       <div class="col-xl-3 text-xl-right">
                                          <label for="password" class="col-form-label">Current Password</label>
                                       </div>
                                       <div class="col-xl-5">
                                          <input type="password" name="password" id="oldpassword" class="form-control" placeholder="******">     
                                       </div>
                                        <div id="oldpasswordError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter your old Password.
                                        </div>
                                         <div id="oldpassword_does_not_match_error" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Old Password doesn't match..
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                       <div class="col-xl-3 text-xl-right">
                                          <label for="password" class="col-form-label">New Password</label>
                                       </div>
                                       <div class="col-xl-5">
                                          <input type="password" name="password" id="newpassword" class="form-control" placeholder="******">     
                                       </div>
                                        <div id="newpasswordError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter your new Password.
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                       <div class="col-xl-3 text-xl-right">
                                          <label for="password" class="col-form-label">Confirm Password</label>
                                       </div>
                                       <div class="col-xl-5">
                                          <input type="password" name="password" id="cnfpassword" class="form-control" placeholder="******">     
                                       </div>
                                         <div id="cnfpasswordError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please confirm the  Password.
                                        </div>
                                         <div id="password_does_not_match_Error" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Old Password doesn't match..
                                        </div>
                                    </div>
                                    <div class="form-actions form-group row">
                                       <div class="col-xl-1"></div>
                                       <div class="col-xl-4 push-xl-2">
                                           <input type="button" name="submit" id="resetsubmit" value="Update" class="btn btn-success add-new-submit la-e-submit">
                                       </div>
                                    </div>
                                 </form>
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









