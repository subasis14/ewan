<style>
    .modal-backdrop.show{
        opacity:0 !important;
    }
    .modal-backdrop{
            position: relative !important;
    }
</style>
<div id="top" class="fixed">
    <!-- .navbar -->
    <nav class="navbar navbar-static-top">
        <div class="container-fluid m-0">
            <a class="navbar-brand float-left text-center" href="/dashboard">
                <h3 class="text-white">
                    <!-- Add Logo Here -->
                    <img style="width:180px;height:auto;" src="/ewan/assets/images/dashboard-logo.png" class="admin_img"
                         alt="logo"> 
                </h3>
            </a>
            <div class="menu">
                <span class="toggle-left" id="menu-toggle">
                    <i class="fa fa-bars text-white"></i>
                </span>
            </div>
            <div class="topnav dropdown-menu-right float-right" style="margin-right: 20px !important;">
                <div class="btn-group">
                    <div class="show-language-menu">
                        <a href="#">
                            <span class="flag-icon flag-icon-us"></span> English
                            <span class="caret-language"></span>
                        </a>
                        <ul class="menu-language">
                            <li>
                                <a rel="alternate" hreflang="zhHant" href="#">
                                    <span class="flag-icon flag-icon-cn"></span> 繁體中文
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="btn-group">
                    <div class="notifications messages no-bg" id="admin-notifications">
                        <a class="btn btn-default btn-sm" data-toggle="dropdown"> <i
                                class="fa fa-bell text-white"></i>
                            <strong class="badge badge-danger"><span id="notificationCount">0</span></strong>
                        </a>
                        <div class="dropdown-menu drop_box_align"  role="menu" >
                            <div class="popover-title" id="zeroNotofication" style="display: none">You have &nbsp;<span >0</span> &nbsp;Notifications</div>
                            <div id="hasNotification"  style="display: none;overflow-y: scroll;height: 400px;">


                            </div>
                        </div>
                    </div>
                </div>
                <div  class="modal fade in display_none" id="details_modal_notification" style='display:none' role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-warning">
                                <h4 class="modal-title text-white">Notification Detail Page</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body" style="min-height: 524px;">
                                <div class="preloader-modal" style="position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; z-index: 100000; backface-visibility: hidden; background: rgb(255, 255, 255); display: none;">
                                    <div class="preloader_img" style="width: 200px;
                                         height: 200px;
                                         position: absolute;
                                         left: 48%;
                                         top: 48%;
                                         background-position: center;
                                         z-index: 999999">
                                        <img src="/ewan/assets/img/loader.gif" style=" width: 40px;" alt="loading...">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" id="notification_modal">


                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            </div>
                        </div>
                    </div>
                </div>'
                <div class="btn-group">
                    <div class="user-settings no-bg">
                        <button type="button" class="btn btn-default no-bg Back_btn" data-toggle="dropdown">
                            <img src="/ewan/assets/dashboard/images/profile.png"
                                 class="admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>Back</strong>
                            <span class="fa fa-sort-down white_bg"></span>
                        </button>
                        <div class="dropdown-menu admire_admin">
                            <a class="dropdown-item title" href="#">
                                Admin</a>
                            <a class="dropdown-item" href="/ewan/logout"><i class="fa fa-sign-out"></i>
                                Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid --> 
    </nav>
    <!-- /.navbar -->
    <!-- /.head --> 

</div>

