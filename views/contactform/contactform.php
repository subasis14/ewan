<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bootstrap 4 Unstyled List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="/ewan/assets/libs/axios/axios.js"></script>
        <script src="/ewan/assets/libs/axios/es6-promise.js"></script>

        <style>
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
            /*--Modal CSS ends here--*/
 
        </style>
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
                        var myform = document.getElementById("frm-loan");
                        var fd = new FormData(myform);
                        $.ajax({
                            url: "/ewan/contactform",
                            data: fd,
                            cache: false,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            success: function (dataofconfirm) {
                                if (dataofconfirm === "true") {
                                    $("#ignismyModal").modal('show');
                                } else {
                                    $("#ignismyModalError").modal('show');
                                }

                            }
                        });
                    }
                });
            });
        </script>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form  id="frm-loan" method="post">
                                <h3>Contact Form</h3>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>First Name <code>*</code></label>
                                        <input type="text" name="first_name" id="first_name" class="form-control">
                                        <div id="fisrtNameError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter First Name.
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Family Name <code>*</code></label>
                                        <input type="text" name="family_name" id="family_name" class="form-control">
                                        <div id="familyNameError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter Family Name.
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Email<code>*</code></label>
                                        <input type="email" name="email" id="email" class="form-control">
                                        <div id="emailError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter Email ID.
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Mobile <code>*</code></label>
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
                                        <label for="select_subject">Select Subject <code>*</code> </label>
                                        <select class="form-control" id="select_subject" name="select_subject">

                                        </select>
                                        <div id="subjectError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter Subject.
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label>Your Message <code>*</code> </label><br>
                                        <textarea id="w3review" name="w3review" rows="4" Placeholder="500-character left" onkeyup="countChar(this)"></textarea>

                                        <div id="w3reviewError" class="error-msg">
                                            <i class="fa fa-times-circle"></i>
                                            Please enter your message.
                                        </div>
                                        <h6 class="pull-right" id="charNum">500 characters remaining</h6>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <button class="btn btn-primary" id="submitBtn" type="button">Send Message</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
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
        </div>


    </body>
</html>