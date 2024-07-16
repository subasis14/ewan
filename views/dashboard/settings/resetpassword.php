<?php if($_SESSION['email']){ ?>
<html class="lang-en no-js">
    <head>
        <?php
        include 'views/page_includes/dashboard/head.php';
        ?>
        <script type="text/javascript" src="/ewanlocal/assets/js/jquery.min.js"></script>
        <script src="/ewanlocal/assets/libs/axios/axios.js"></script>
        <script src="/ewanlocal/assets/libs/axios/es6-promise.js"></script>
        <script>
            function check()
            {
                var result = true;

                if ($('#oldpassword').val().length < 1)
                {
                    $('#oldpasswordError').show();
                    result = false;
                }
                if ($('#newpassword').val().length < 1)
                {
                    $('#newpasswordError').show();
                    result = false;
                }
                if ($('#cnfpassword').val().length < 1)
                {
                    $('#cnfpasswordError').show();
                    result = false;
                }
                if ($('#newpassword').val() !== $('#cnfpassword').val()) {
                    $('#password_does_not_match_Error').show();
                    result = false;
                }
                if (result) {
                    let data = new FormData();
                    data.append('reqType', 'checkoldPassword');
                    data.append('ajax', '1');
                    data.append('email', $('#email').val());
                    data.append('password', $('#oldpassword').val());
                    axios.post('/dashboard/settings/resetpassword/', data).then(function (res) {
                        if (res.data.length > 0) {
                            data.append('reqType', '');
                            data.append('reqTypeUpdatePassword', 'updatePassword');
                            data.append('newPassword', $('#cnfpassword').val());
                            axios.post('/dashboard/settings/resetpassword/', data).then(function (res) {
                                location.href = '/dashboard';
                            });
                        } else {
                            $('#oldpassword_does_not_match_error').show();
                        }

                    });
                } else {
                    return false;
                }
            }
            $(document).ready(function () {
                $("#resetsubmit").click(function () {
                    if (check()) {
                        let data = new FormData();
                        data.append('ajax', 1);
                        data.append('reqType', 'login');
                        data.append('email', $('#email').val());
                        data.append('password', $('#password').val());
                        axios.post('/login/', data).then(function (res) {
                            console.log(res.data.length);
                            if (res.data.length > 0) {
                                location.href = '/login';
                            } else {
                                $('#invalidError').show();
                            }

                        });
                    }
                })
            });
        </script>
        <style>
            .error-msg {
                color: #D8000C;
                /*background-color: #FFBABA;*/
                display:none;
            }
        </style>
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
                include 'inc/resetpassword.php';
                ?>

            </div>
        </div>

        <?php
        include 'views/page_includes/dashboard/footer.php';
        ?>

    </body>
</html>
<?php }else{ header("Location: /login/"); } ?>