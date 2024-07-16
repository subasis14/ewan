<style>
    code {
        padding: 0px 4px;
        font-size: 90%;
        color: #c7254e;
        background-color: #f9f2f4;
        border-radius: 4px;
        margin-left: 10px;
    }
    label {
        margin-bottom: 0px;
    }
    .form-control{
        background-color: transparent;
    }
    input[type="text"], input[type="email"], input[type="tel"]{
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .contact-form input[type="text"] {
        height: 34px;
        margin-bottom: 0px;
        border: 1px solid #ccc;
        color: #000000;
        border-radius: 4px;
    }
    .form-group {
        margin-bottom: 0px;
    }
    input, textarea, select {
        margin-bottom: 0px;
    }
    option:focus, option:visited, option:hover, option:focus-within, option:active {
        background:#000;
    }
    .form-control:focus {
        border-color: #991289;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgb(188 12 183 / 60%);
    }
    .contact-form textarea {
        height: auto;
        width: 100%;
    }
    textarea{
        width:100%;
    }
    .error-msg {
        color: #D8000C;
        background-color: #FFBABA;
        display:none;
    }
    /*Modal CSS start here*/
    .thank-you-pop{
        width:100%;
        padding:20px;
        text-align:center;
    }
    .thank-you-pop img{
        width:76px;
        height:auto;
        margin:0 auto;
        display:block;
        margin-bottom:25px;
    }
    .thank-you-pop h1{
        font-size: 42px;
        margin-bottom: 25px;
        color:#5C5C5C;
    }
    .thank-you-pop p{
        font-size: 20px;
        margin-bottom: 27px;
        color:#5C5C5C;
    }
    .thank-you-pop h3.cupon-pop{
        font-size: 25px;
        margin-bottom: 40px;
        color:#222;
        display:inline-block;
        text-align:center;
        padding:10px 20px;
        border:2px dashed #222;
        clear:both;
        font-weight:normal;
    }
    .thank-you-pop h3.cupon-pop span{
        color:#03A9F4;
    }
    .thank-you-pop a{
        display: inline-block;
        margin: 0 auto;
        padding: 9px 20px;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        background-color: #8BC34A;
        border-radius: 17px;
    }
    .thank-you-pop a i{
        margin-right:5px;
        color:#fff;
    }
    #ignismyModal .modal-header{
        border:0px;
    }
    .modal-dialog {
        width: 600px;
        z-index: 10000;
        margin: 30px auto;
    }
    /*--Modal CSS ends here--*/
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/ewan/assets/libs/axios/axios.js"></script>
<script src="/ewan/assets/libs/axios/es6-promise.js"></script>
<script>
    $(document).ready(function () {
        let data = new FormData();
        data.append('ajax', 1);
        data.append('reqType', 'getsubject');
        axios.post('/contactform/', data).then(function (res) {
            $.each(res.data, function (key, value) {
                $('#select_subject').append($('<option>').val(value['Sub_ID']).text(value['Sub_Name']))
            });
        });

    });
    function countChar(val) {
        var len = val.value.length;
        if (len >= 500) {
            val.value = val.value.substring(0, 500);
        } else {
            $('#charNum').text((500 - len) + " characters remaining");
        }
    }
    function check()
    {
        var result = true;
        var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
        if ($('#first_name').val().length < 1)
        {
            $('#fisrtNameError').show();
            result = false;
        }
        if ($('#family_name').val().length < 1)
        {
            $('#familyNameError').show();
            result = false;
        }
        if ($('#email').val().length < 1)
        {
            $('#emailError').show();
            result = false;
        }
        if ($('#mobile').val().length < 1)
        {
            $('#mobileError').show();
            result = false;
        }
        if ($('#mobile').val().length > 10) {
            $('#mobileErrorMax').show();
            result = false;

        }
        if (numberRegex.test($('#mobile').val()) && ($('#mobile').val().length) > 1 && ($('#mobile').val().length < 10)) {
            $('#mobileErrorLess').show();
            result = false;

        }
        if (($('#mobile').val().length) > 1 && !numberRegex.test($('#mobile').val())) {
            $('#mobileErrorString').show();
            result = false;

        }

        if ($('#select_subject').val().length < 1)
        {
            $('#subjectError').show();
            result = false;
        }
        if ($('#w3review').val().length < 1)
        {
            $('#w3reviewError').show();
            result = false;
        }
        if (result) {
            return true;
        } else {
            return false;
        }
    }

    $(document).ready(function () {
        $('#ignismyModal, #ignismyModalError').on('hidden.bs.modal', function () {
            window.location.reload(true);
        })
        $("#submitBtn").click(function () {
            if (check()) {
                let data = new FormData();
                data.append('ajax', 1);
                data.append('first_name', $('#first_name').val());
                data.append('family_name', $('#family_name').val());
                data.append('email', $('#email').val());
                data.append('mobile', $('#mobile').val());
                data.append('select_subject', $('#select_subject').val());
                data.append('select_profession_text', $("#select_subject option:selected").text());
                data.append('w3review', $('#w3review').val());

                data.append('reqType', 'insertContactForm');
                axios.post('/ewan/contactform', data).then(function (res) {
                    if (res.data) {
                        $("#ignismyModal").modal('show');
                    } else {
                        $("#ignismyModalError").modal('show');
                    }
                });
            }
        });
    });
</script>
<!-- Intro Section -->
<section>
    <div class="container-fluid" style="padding:0px;">
        <div>
            <img src="/ewan/assets/images/contact_us.jpg" width="100%" height="100%" alt="" />
        </div>
    </div>
</section>
<!-- Intro Section --> 
<!-- Contact Section -->
<section class="ptb ptb-xs-60">
    <div class="container contact-form pt-80 pt-xs-60 mt-up" style="text-align:justify;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2><?php echo $output['contact_us'] ?></h2>
                <p><?php echo $output['contact_us_sub_title'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="box-shadow:none;">
                    <div class="card-body">
                        <form  id="frm-loan" method="post">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10" style="border: 1px solid #fff;padding:20px 10px;">
                                    <div class="form-group col-sm-6">
                                        <label><?php echo $output['first_name'] ?><code>*</code></label>
                                        <input type="text" name="first_name" id="first_name" class="form-control">
                                        <div id="fisrtNameError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter First Name.
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label><?php echo $output['last_name'] ?><code>*</code></label>
                                        <input type="text" name="family_name" id="family_name" class="form-control">
                                        <div id="familyNameError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter Last Name.
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label><?php echo $output['form_email'] ?><code>*</code></label>
                                        <input type="email" name="email" id="email" class="form-control">
                                        <div id="emailError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter Email ID.
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label><?php echo $output['form_mobile'] ?> <code>*</code></label>
                                        <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                        <div id="mobileError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter Mobile Number.
                                        </div>
                                        <div id="mobileErrorMax" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter Valid format.
                                        </div>
                                        <div id="mobileErrorString" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter only Number.
                                        </div>
                                        <div id="mobileErrorLess" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter 10 Number.
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="select_subject"><?php echo $output['subject'] ?> <code>*</code> </label>
                                        <select class="form-control" id="select_subject" name="select_subject">
                                        </select>
                                        <div id="subjectError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter Subject.
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label><?php echo $output['your_message'] ?> <code>*</code> </label><br>
                                        <textarea id="w3review" name="w3review" rows="4" Placeholder="<?php echo $output['500_char'] ?>" onkeyup="countChar(this)"></textarea>
                                        <div id="w3reviewError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter your message.
                                        </div>
                                        <h6 class="pull-right" id="charNum"><?php echo $output['500_char'] ?></h6>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <br>
                                        <button class="btn btn-primary" id="submitBtn" type="button"><?php echo $output['send_meg'] ?></button>
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2><?php echo $output['get_in_touch'] ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 contact pb-60 pt-30">
                <div class="row text-center">
                    <div class="col-sm-4 pb-xs-30">
                        <i class="ion-ios-location icon-circle pos-s"></i>
                        <p  class="mt-15"><strong><?php echo $output['haed_office_add'] ?></strong><br />
                            <?php echo $output['po_box'] ?><br>
                            <?php echo $output['riyadh_add'] ?><br>
                            <?php echo $output['kingdom_saudi'] ?>
                        </p>
                    </div>
                    <div class="col-sm-4 pb-xs-30"> <i class="ion-android-call icon-circle pos-s"></i>
                        <strong><?php echo $output['call_center'] ?>: </strong><a href="tel: 92 000 76 53" class="mt-15 i-block"> 92 000 76 53</a><br>
                        <strong><?php echo $output['tele_phone'] ?>: </strong><a href="tel:+966 11 4 7777 02" class="i-block"> +966 11 4 7777 02 </a><br>
                        <strong><?php echo $output['fax'] ?>: </strong><a href="tel:+966 11 4 7777 63"  class="i-block">+966 11 4 7777 63</a> 
                    </div>
                    <div class="col-sm-4 pb-xs-30"><i class="ion-ios-email icon-circle pos-s"></i>
                        <strong><?php echo $output['email'] ?>: </strong> <a href="mailto:info@ewanintl.sa"  class="mt-15 i-block">info@ewanintl.sa</a> 
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12 pb-xs-30">
                    <ul class="event-social">
                        <li><a href="https://www.facebook.com/ewanksa.intl.7/" target="_new"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/EwanKsa" target="_new"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/ewanksaa2/" target="_new"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UClXQkRX8hCovc56rl8e0NLg" target="_new"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section>
    <div class="container">
        <div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="thank-you-pop">
                            <img src="/ewan/assets/images/Green-Round-Tick.png" alt="">
                            <h1>Thank You!</h1>
                            <p>Your submission is received and we will contact you soon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ignismyModalError" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="thank-you-pop">
                            <img src="/ewan/assets/images/error.png" alt="">
                            <p>Something went wrong!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>