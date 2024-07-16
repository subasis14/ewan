<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="/ewan/assets/dashboard/js/components.js"></script>
<script type="text/javascript" src="/ewan/assets/dashboard/js/custom.js"></script>
<script type="text/javascript" src="/ewan/assets/dashboard/js/fixed_menu.js"></script>
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    $(document).ready(function () {

        let data = new FormData();
        data.append('ajax', 1);
        data.append('reqType', 'notificationsData');
        axios.post('/ewan/notifications/', data).then(function (response) {
            var total = 0;
            $.each(response.data, function (key, value) {
                total = total + parseInt(value.length);

                $.each(value, function (x, y) {
                    var tableName;
                    if (y['tableName'] === "ourteamform") {
                         tableName = 'JobEnquiry';
                    }else{
                        tableName=y['tableName'];
                    } 
                    $("#hasNotification").append('<div class="popover-title"><a class="notification_details" onclick="viewNotification(' + y['Usr_ID'] + ',\'' + y['tableName'] + '\')" data-toggle="modal" href="#details_modal_notification"  data-href="#details_modal_notification" data-placement="top" type="button" data-original-title="Assign">You have ' + tableName + ' form notofification from ' + y['Usr_FName'] + '</a></div>');
                });
            });

            $('#notificationCount').text(total);
            if (total > 0) {
                $('#zeroNotofication').hide();
                $('#hasNotification').show();
            } else {
                $('#zeroNotofication').show();

            }
        });

    });
</script>
<script>
        function downloadFile(filename) {
        var url = "http://karnatakahub.com/assets/cv/" + filename;
        fetch(url).then(function (t) {
            return t.blob().then((b) => {
                var a = document.createElement("a");
                a.href = URL.createObjectURL(b);
                a.setAttribute("download", filename);
                a.click();
            }
            );
        })
        }
    function viewNotification(id, tablename) {
        $('#notification_modal').empty();
        let data = new FormData();
        if (tablename === "corporateform") {
            data.append('reqType', 'modalServiceCorporate');
        }
        if (tablename === "individualform") {
            data.append('reqType', 'modalServiceIndividual');
        }

        if (tablename === "healthcareform") {
            data.append('reqType', 'modalServiceHealthcare');
        }
        if (tablename === "ourteamform") {
            data.append('reqType', 'modalOurTeam');
        }
        if (tablename === "contactform") {
            data.append('reqType', 'modalContact');
        }

        data.append('ajax', 1);

        data.append('post_id', id);

        axios.post('/ewan/dashboard/', data).then(function (response) {
            var pieces = response.data[0]['Usr_Cv_Path'].split("/");
            var status = "";
            var color = "";
            var job_type=""
            if (response.data[0]['status'] == "1") {
                color = "green";
                status = "Approved";
            }
            if (response.data[0]['status'] == "2") {
                color = "red";
                status = "Not Approved";
            }

            if (response.data[0]['status'] == "0") {
                color = "orange";
                status = "Pending";
            }
            if (response.data[0]['Job_Type'] == "1") {
                job_type = "Full Time";

            } else {
                job_type = "Per Time";
            }
            if (response.data[0]['tableName'] == "ourteamform") {
                $data = "<table class='nowrap table table-striped table-bordered' id=''><tbody><tr><th class='col-md-4'>First Name :</th><td class='col-md-6'>" + response.data[0]['Usr_FName'] + "</td></tr><tr><th class='col-md-4'>Last Name :</th><td class='col-md-6'>" + response.data[0]['Usr_FMName'] + "</td></tr><tr><th class='col-md-4'>Email :</th><td class='col-md-6'>" + response.data[0]['Usr_Email'] + "</td></tr><tr><th class='col-md-4'>Mobile :</th><td class='col-md-6'>" + response.data[0]['Usr_Mobile'] + "</td></tr></tr><tr><th class='col-md-4'>Job ID :</th><td class='col-md-6'>" + response.data[0]['Job_Name'] + "</td></tr><tr><th class='col-md-4'>Job Position :</th><td class='col-md-6'>" + response.data[0]['Job_Position'] + "</td></tr><tr><th class='col-md-4'>Job Location :</th><td class='col-md-6'>" + response.data[0]['Job_Location'] + "</td></tr><tr><th class='col-md-4'>Job Type :</th><td class='col-md-6'>" + job_type + "</td></tr><tr><th class='col-md-4'>CV :</th><td class='col-md-6'>" + pieces[pieces.length - 1] + "</td></tr><tr><th class='col-md-4'>Download CV :</th><td class='col-md-6'><button type='button' onclick='downloadFile(\"" + pieces[pieces.length - 1] + "\")'>Download Resume</button></td></tr><tr><th class='col-md-4'>Comments :</th><td class='col-md-6'>" + response.data[0]['Usr_Comment'] + "</td></tr><tr><th class='col-md-4'>Time :</th><td class='col-md-6'>" + response.data[0]['createdAt'] + "</td></tr><tr><th class='col-md-4'>Status :</th><td class='col-md-6'> <span style='color:" + color + "'>" + status + "</span></td></tr></tbody></table>";
                // $data = "<table class='nowrap table table-striped table-bordered' id=''><tbody><tr><th class='col-md-4'>First Name :</th><td class='col-md-6'>" + response.data[0]['Usr_FName'] + "</td></tr><tr><th class='col-md-4'>Last Name :</th><td class='col-md-6'>" + response.data[0]['Usr_FMName'] + "</td></tr><tr><th class='col-md-4'>Email :</th><td class='col-md-6'>" + response.data[0]['Usr_Email'] + "</td></tr><tr><th class='col-md-4'>Mobile :</th><td class='col-md-6'>" + response.data[0]['Usr_Mobile'] + "</td></tr><tr><th class='col-md-4'>CV :</th><td class='col-md-6'>---</td></tr><tr><th class='col-md-4'>Comments :</th><td class='col-md-6'>" + response.data[0]['Usr_Comment'] + "</td></tr><tr><th class='col-md-4'>Time :</th><td class='col-md-6'>" + response.data[0]['createdAt'] + "</td></tr><tr><th class='col-md-4'>Status :</th><td class='col-md-6'> <span style='color:" + color + "'>" + status + "</span></td></tr></tbody></table>";
            } else if (response.data[0]['tableName'] == "contactform") {
                $data = "<table class='nowrap table table-striped table-bordered' id=''><tbody><tr><th class='col-md-4'>First Name :</th><td class='col-md-6'>" + response.data[0]['Usr_FName'] + "</td></tr><tr><th class='col-md-4'>Last Name :</th><td class='col-md-6'>" + response.data[0]['Usr_FMName'] + "</td></tr><tr><th class='col-md-4'>Email :</th><td class='col-md-6'>" + response.data[0]['Usr_Email'] + "</td></tr><tr><th class='col-md-4'>Mobile :</th><td class='col-md-6'>" + response.data[0]['Usr_Mobile'] + "</td></tr><tr><th class='col-md-4'>Subject :</th><td class='col-md-6'>" + response.data[0]['Sub_Name'] + "</td></tr><tr><th class='col-md-4'>Message :</th><td class='col-md-6'>" + response.data[0]['Usr_Message'] + "</td></tr><tr><th class='col-md-4'>Time :</th><td class='col-md-6'>" + response.data[0]['createdAt'] + "</td></tr><tr><th class='col-md-4'>Status :</th><td class='col-md-6'> <span style='color:" + color + "'>" + status + "</span></td></tr></tbody></table>";
            } else {
                $data = "<table class='nowrap table table-striped table-bordered' id=''><tbody><tr><th class='col-md-4'>First Name :</th><td class='col-md-6'>" + response.data[0]['Usr_FName'] + "</td></tr><tr><th class='col-md-4'>Last Name :</th><td class='col-md-6'>" + response.data[0]['Usr_FMName'] + "</td></tr><tr><th class='col-md-4'>Email :</th><td class='col-md-6'>" + response.data[0]['Usr_Email'] + "</td></tr><tr><th class='col-md-4'>Mobile :</th><td class='col-md-6'>" + response.data[0]['Usr_Mobile'] + "</td></tr><tr><th class='col-md-4'>Gender :</th><td class='col-md-6'>" + response.data[0]['Usr_Gender'] + "</td></tr><tr><th class='col-md-4'>Professional :</th><td class='col-md-6'>" + response.data[0]['Prf_Name'] + "</td></tr><tr><th class='col-md-4'>Branch :</th><td class='col-md-6'>" + response.data[0]['Brn_Name'] + "</td></tr><tr><th class='col-md-4'>Nationalities :</th><td class='col-md-6'>" + response.data[0]['Nat_Name'] + "</td></tr><tr><th class='col-md-4'>Required Period :</th><td class='col-md-6'>" + response.data[0]['Per_Name'] + " month</td></tr><tr><th class='col-md-4'>Time :</th><td class='col-md-6'>" + response.data[0]['createdAt'] + "</td></tr><tr><th class='col-md-4'>Status :</th><td class='col-md-6'> <span style='color:" + color + "'>" + status + "</span></td></tr></tbody></table>";
            }
            $('#notification_modal').show().html($data);

        });
    }
</script>

<script type="text/javascript" src="/ewan/assets/dashboard/js/countUp.min.js"></script>
<!-- end page level js -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>