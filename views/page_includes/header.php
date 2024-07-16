<style>
     label {
    margin-bottom: 3px;
    margin-top: 3px;
 	}

    /* toggle in label designing */ 
    .toggle { 
        position : relative ; 
        display : inline-block; 
        width : 100px; 
        height : 34px;
        background-color: #BB2A83; 
        border-radius: 30px; 
        border: 2px solid #BB2A83; 
    } 

    /* After slide changes */ 
    .toggle:after { 
        content: ''; 
        position: absolute; 
        width: 40px; 
        height: 27px; 
        border-radius: 50%; 
        background-color: #CBCBCB; 
        top: 1px;  
        left: 12px; 
        transition:  all 0.5s; 
    } 

    /* Toggle text */ 
    

    /* Checkbox cheked effect */ 
    .checkbox:checked + .toggle::after { 
        left : 49px;  
    } 

    /* Checkbox cheked toggle label bg color */ 
    .checkbox:checked + .toggle { 
        background-color: #9D1D96; 
    } 

    /* Checkbox vanished */ 
    .language {  
        display : none !important;
    } 
    .justify-content-center {
        justify-content: center!important;
    }

</style>
<script type="text/javascript" src="/ewanlocal/assets/js/jquery.min.js"></script>
<script src="/ewanlocal/assets/libs/axios/axios.js"></script>
<script src="/ewanlocal/assets/libs/axios/es6-promise.js"></script>
<script>
    $(document).ready(function () {

        var langValue = "<?php echo $_SESSION['lang'] ?>";
        if (langValue == "en") {
            if (!$('#switch').attr('checked')) {
                $('#switch').attr('Checked', 'Checked');
            }
        }
//   

        var switchStatus = false;
        $("#switch").on('change', function () {
            if ($(this).is(':checked')) {
                switchStatus = $(this).is(':checked');
                let data = new FormData();
                data.append('ajax', 1);
                data.append('reqType', 'languageChnage');
                data.append('lang', "en");
                axios.post('/ewan/language/lang', data).then(function (res) {
                    location.reload();
                });
            } else {
                switchStatus = $(this).is(':checked');
                let data = new FormData();
                data.append('ajax', 1);
                data.append('reqType', 'languageChnage');
                data.append('lang', "ar");
                axios.post('/ewan/language/lang', data).then(function (res) {
                    location.reload();
                });
            }
        });
    });
</script>
<header class="header__block">
    <div class="top-part__block ptb-5">
        <div class="" style="background-color: #9d1d96; color:#fff;text-align: center;text-transform: uppercase;">
            <div class="container" style="width: 100%;">
                <div class="row">
                    <div class="col-sm-10 col-xs-12">
                        <div class="col-sm-6 col-md-7 col-xs-6" style="border-right:1px solid #ffffff;">
                            <p><a href="http://185.230.211.136:82/CustomerPortal/individual-sector/inquiry/register-query"  target="_new" style="color:#fff;"><?php echo $output['individual_sector'] ?></a></p>
                        </div>
                        <div class="col-sm-6 col-md-5 col-xs-6">
                            <p><a href="http://185.230.211.136:82/CustomerPortal/business-sector/public/user/register"   target="_new" style="color:#fff;"><?php echo $output['corporate_sector'] ?></a></p>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12" style="padding-right: 0px;padding-left: 0px;">
                        <div class="social-link__block text-right">
                            <input type="checkbox" id="switch"
                                   class="checkbox language" /> 
                            <label for="switch" class="toggle"> 
                                <p style="color:#fff;">عربى &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;ENG &nbsp;</p> 
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="middel-part__block ptb-15">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="/"> <img src="/ewan/assets/images/ewan_logo.png" alt="Logo"> </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="top-info__block  d-sm-block text-right">
                        <ul>
                            <li>
                                <i class="ion-ios-location-outline"></i>
                                <p>
                                <?php echo $output['location'] ?> <span> <?php echo $output['saudi_arabia'] ?> </span>
                                </p>
                            </li>
                            <li>
                                <i class="ion-ios-telephone-outline"></i>
                                <p>
                                <?php echo $output['phone'] ?> <span>+966 11 4 7777 02</span>
                                </p>
                            </li>
                            <li>
                                <i class="ion-ios-email-outline"></i>
                                <p>
                                <?php echo $output['email'] ?> <span>info@ewanintl.sa</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navgation__block stricky-header__top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu__block">
                        <div class="navbar-header">
                        <!-- <img style="width:180px;height:auto;" src="http://localhost/ewan/assets/images/dashboard-logo.png"  alt="logo">  -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <p style="color:#fff;">Menu</p>
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>

                        <!--===Navigation===-->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav justify-content-center navbar-nav mobile-menu">
                                <li><a href="/"><?php echo $output['home'] ?></a></li>
                                <li>
                                    <a href="#"><?php echo $output['about_ewan_menu'] ?></a><span class="submenu-button"></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="/ewan/about"><?php echo $output['about_company'] ?></a></li>
                                        <!--<li><a href="/about/ourteam"><?php echo $output['our_team'] ?></a></li>-->
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:avoid(0);"><?php echo $output['our_services'] ?></a><span class="submenu-button"></span>
                                    <ul class="dropdown-menu">
                                        <li><a href="/ewan/services/individualsector"><?php echo $output['individual_sector'] ?></a></li>
                                        <li><a href="/ewan/services/corporatesector"><?php echo $output['corporate_sector'] ?></a></li>
                                        <li><a href="/ewan/services/healthcaresector"><?php echo $output['healthcare_sector'] ?></a></li>
                                    </ul>
                                </li>
                                <li><a href="/ewan/news" target="_new"><?php echo $output['news_offers'] ?></a></li>
                                <li><a href="/ewan/faq/individual"><?php echo $output['faq'] ?></a></li>
                                <li><a href="/ewan/contact"><?php echo $output['contact_us'] ?></a></li>
                                <li><a href="/ewan/locations"><?php echo $output['our_locations'] ?></a></li>
                                <li><a class="custom_btn__block" href="/ewan/joinourteam"><?php echo $output['joinourteam'] ?></a></li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>