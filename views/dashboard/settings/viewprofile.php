<?php if($_SESSION['email']){ ?>
<html class="lang-en no-js">
    <head>
        <?php
        include 'views/page_includes/dashboard/head.php';
        ?>
        
    </head>

    <body class="fixedMenu_header">
        <div class="bg-dark" id="wrap">
            <?php
            include 'views/page_includes/dashboard/header.php';
            ?>
        <div class="wrapper">

        <?php 
          include('views/page_includes/dashboard/sidebar.php'); 
        ?>
        
        
        <?php
        include 'inc/viewprofile.php';
        ?>

        </div>
        </div>

        <?php
        include 'views/page_includes/dashboard/footer.php';
        ?>

    </body>
</html>
<?php }else{ header("Location: /login/"); } ?>