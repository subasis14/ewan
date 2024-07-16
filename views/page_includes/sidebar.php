<style>
            .box{
                float:left;
                background: #f0e68c;
                z-index:99999999;
            }
            /* Add padding and border to inner content
            for better animation effect */
            .box-inner{
                width: 400px;
                padding: 10px;
                border: 1px solid #a29415;
            }
            /* toggle in label designing */ 
    .toggle { 
        position : relative ; 
        display : inline-block; 
        width : 100px; 
        height : 30px;
        background-color: #bb2880; 
        border-radius: 30px; 
        border: 2px solid #bb2880; 
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
    
    
    
  @media screen and (max-width: 767px) {
             .box{
                float:left;
                background: #f0e68c;
                z-index:99999999;
            }
            /* Add padding and border to inner content
            for better animation effect */
            .box-inner{
                width: 400px;
                padding: 10px;
                border: 1px solid #a29415;
            }
            /* toggle in label designing */ 
    .toggle { 
        position : relative ; 
        display : inline-block; 
        width : 80px; 
        height : 26px;
        background-color: #bb2880; 
        border-radius: 30px; 
        border: 2px solid #bb2880; 
    } 

    /* After slide changes */ 
    .toggle:after { 
        content: ''; 
        position: absolute; 
        width: 30px; 
        height: 22px; 
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
<script>
            $(document).ready(function () {
                $(".box").hide();
                $(".slide-toggle").click(function () {
                    $(".box").animate({
                        width: "toggle"
                    },360);
                });
            });
        </script>

<menutoggle>
        <div class="menutoggle__overlay"></div>
        <nav class="side-bar" style="padding-top:1rem;">
            <div class="vertical-list">
                <a href='' class='button contact homeButton' title='Contact' aria-hidden='true' >
                    <img id="homeIcon" src="/ewan/assets/images/icons/home.png" width="20">
                    <div id="homeLabel" class="label"><?php echo $output['home'] ?></div>
                </a>
                <a href="/ewan/about" class='button contact' title='Contact' aria-hidden='true' >
                    <img src="/ewan/assets/images/icons/about.png" width="20">
                    <div class="label"><?php echo $output['about_ewan_menu'] ?></div>
                </a>
                <button class="button menu slide-toggle">
                    <img src="/ewan/assets/images/icons/services.png" width="20">
                    <div class="menu-close"></div>
                    
                    <div class="label-close">Close</div>
                     <div class="label"><?php echo $output['our_services'] ?></div>
                </button>
                <a href="/ewan/news" class='button contact' title='Contact' aria-hidden='true' >
                    <img src="/ewan/assets/images/icons/news.png" width="20">
                    <div class="label"><?php echo $output['news_offers'] ?></div>
                </a>
                <a href="/ewan/faq/individual" class='button contact' title='Contact' aria-hidden='true' >
                    <img src="/ewan/assets/images/icons/faq.png" width="20">
                    <div class="label"><?php echo $output['faq'] ?></div>
                </a>
                <a href="/ewan/contact" class='button contact' title='Contact' aria-hidden='true' >
                    <img src="/ewan/assets/images/icons/contact.png" width="20">
                    <div class="label"><?php echo $output['contact_us'] ?></div>
                </a>
                <a href="/ewan/locations" class='button contact' title='Contact' aria-hidden='true' >
                    <img src="/ewan/assets/images/icons/locations.png" width="20">
                    <div class="label"><?php echo $output['our_locations'] ?></div>
                </a>
                
                <input type="checkbox" id="switch" class="checkbox language" /> 
                   <label for="switch" class="toggle"> 
                        <p style="color:#fff;margin-top: 5px;">  &nbsp; &nbsp;  عربى &nbsp; &nbsp;ENG &nbsp;&nbsp;</p> 
                   </label>
                <br>
                <img src="/ewan/assets/images/vision_2030.png" style="position:fixed;bottom:25px;width:80%;">
            </div>
        </nav>
    </menutoggle>
    
    