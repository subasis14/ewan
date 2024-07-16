<!-- /#right -->

<div id="content" class="bg-container">
    <!-- Content -->
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-home"></i>
                        Dashboard
                    </h4>
                </div>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-xl-12 col-lg-7 col-12">
                    <div class="row">
                        <div class="col-sm-6 col-xl-4 col-12">
                            <div class="bg-warning top_cards">
                                <div class="row icon_margin_left">
                                    <div class="col-5 icon_padd_left">
                                        <div class="float-left">
                                            <span class="fa-stack fa-sm">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-th-large  fa-stack-1x fa-inverse text-warning sub"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-7 icon_padd_right">
                                        <div class="float-right cards_content">
                                            <span class="number_val" id="revenue_count"></span><i
                                                class="fa fa-long-arrow-up fa-2x"></i>
                                            <br/>
                                            <span class="card_description">Our Services</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4 col-12">
                            <div class="bg-success top_cards">
                                <div class="row icon_margin_left">
                                    <div class="col-5 icon_padd_left">
                                        <div class="float-left">
                                            <span class="fa-stack fa-sm">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-handshake-o fa-stack-1x fa-inverse text-success visit_icon"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-7 icon_padd_right">
                                        <div class="float-right cards_content">
                                            <span class="number_val" id="visitors_count"></span><i
                                                class="fa fa-long-arrow-up fa-2x"></i>
                                            <br/>
                                            <span class="card_description">Join Our Team</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4 col-12">
                            <div class="bg-primary top_cards">
                                <div class="row icon_margin_left">
                                    <div class="col-5 icon_padd_left">
                                        <div class="float-left">
                                            <span class="fa-stack fa-sm">
                                                <i class="fa fa-circle fa-stack-2x"></i>
                                                <i class="fa fa-users  fa-stack-1x fa-inverse text-primary sub"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-7 icon_padd_right">
                                        <div class="float-right cards_content">
                                            <span class="number_val" id="sales_count"></span><i
                                                class="fa fa-long-arrow-up fa-2x"></i>
                                            <br/>
                                            <span class="card_description">Conatct Us</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-35">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Our Services - Registered  Users 

                        </div>
                        <div class="card-block">
                            <div>
                                <input type="hidden" name="_token" value="ekeH95zCbuoOHmeoUg3UALOxGcfbeFjyLNfN5lO3">
                                <ul class="nav nav-inline view_user_nav_padding">
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link active deposit" href="#tab1" id="home-tab" data-toggle="tab" aria-expanded="true">All</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link withdraw" href="#tab2"  id="followers"  data-toggle="tab">Corporate Sector</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link internal-transfers" href="#tab3" id="hats-tab" data-toggle="tab">Individual Sector</a>
                                    </li>
                                    <li class="nav-item card_nav_hover">
                                        <a class="nav-link partner_tr" href="#tab4"  id="followers" data-toggle="tab">Healthcare Sector</a>
                                    </li>
                                </ul>
                                <div id="clothing-nav-content" class="tab-content m-t-10">
                                    <div role="tabpanel" class="tab-pane fade show active" id="tab1" style="position: relative;min-height: 300px;">
                                        <div class="card-block m-t-35" style="position: relative;">
                                            <div id="liveAccounts_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                                <div class="row">


                                                    <div id="liveAccounts_processing" class="dataTables_processing panel panel-default" style="display: none;">Processing...</div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table id="allData_table" class="table nowrap table-striped table-bordered table-advance table-hover table_status_padding" width="100%" cellspacing="0" role="grid" aria-describedby="liveAccounts_info" style="width: 100%;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_desc" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 106.75px;" aria-sort="descending" aria-label="Reg. Time: activate to sort column ascending">Reg. Time</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">First Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">Last Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 151.75px;" aria-label="Email: activate to sort column ascending">Email</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Mobile</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Gender</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Profession</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Branch</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Nationalities</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Required Period</th>
                                                                <th  class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 57.75px;" aria-label="Manager: activate to sort column ascending">Verify</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 61.75px;" aria-label="IB Status: activate to sort column ascending">Status</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">Details</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Delete Row">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>                                                          
                                                            <?php foreach ($allData as $rows) { ?>                                                         
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1"><?php echo $rows['createdAt'] ?></td>
                                                                    <td><?php echo $rows['Usr_FName'] ?></td>
                                                                    <td><?php echo $rows['Usr_FMName'] ?></td>
                                                                    <td><?php echo $rows['Usr_Email'] ?></td>
                                                                    <td><?php echo $rows['Usr_Mobile'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Usr_Gender'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Prf_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Brn_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Nat_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Per_Name'] ?></td>
                                                                    <td><button class="btn btn-default btn-default btn-sm change all_data_statusModal" data-toggle="modal" href="#manager_modal" data-href="#manager_modal" id="<?php echo $rows['Usr_ID'] . "-" . $rows['formname']; ?>" data-placement="top" type="button" data-original-title="Assign" intid="1337"><i class="fa fa-pencil-square-o  "></i>
                                                                        </button>
                                                                    </td>
                                                                    <td><button class="btn btn-<?php
                                                                        if ($rows['status'] == "0") {
                                                                            echo "default";
                                                                        } elseif ($rows['status'] == "1") {
                                                                            echo "success";
                                                                        } elseif ($rows['status'] == "2") {
                                                                            echo "danger";
                                                                        }
                                                                        ?> stat" data-placement="top" data-toggle="tooltip" type="button" stat="0" data-original-title="<?php if ($rows['status'] == "0") { echo "New";}elseif ($rows['status'] == "1") {  echo "Approved";}elseif ($rows['status'] == "2") { echo "Not Approved"; } ?>" intid="1333" email=""><i class="fa fa-<?php
                                                                                if ($rows['status'] == "0") {
                                                                                    echo "lock";
                                                                                } elseif ($rows['status'] == "1") {
                                                                                    echo "check";
                                                                                } elseif ($rows['status'] == "2") {
                                                                                    echo "times";
                                                                                }
                                                                                ?>"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td><a class="btn btn-xs btn-primary service_details" data-toggle="modal" href="#details_modal_service"  id="<?php echo $rows['Usr_ID'] . "-" . $rows['formname']; ?>" data-href="#details_modal_service"  data-placement="top" type="button" data-original-title="Assign" ><i class="fa fa-eye"></i> Details</a></td>
                                                                    <td><a class="btn btn-xs btn-danger delete_row" data-toggle="modal" href="#deleterow"  id="<?php echo $rows['Usr_ID'] . "-" . $rows['formname']; ?>" data-href="#deleterow"  data-placement="top" type="button" data-original-title="Assign" ></i> Delete</a></td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade show" id="tab2" style="position: relative;min-height: 300px;">
                                        <div class="card-block m-t-35" style="position: relative;">
                                            <div id="liveAccounts_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">

                                                <div class="table-responsive">
                                                    <table id="corporateTable_table" class="table nowrap table-striped table-bordered table-advance table-hover table_status_padding" width="100%" cellspacing="0" role="grid" aria-describedby="liveAccounts_info" style="width: 100%;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_desc" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 106.75px;" aria-sort="descending" aria-label="Reg. Time: activate to sort column ascending">Reg. Time</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">First Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">Last Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 151.75px;" aria-label="Email: activate to sort column ascending">Email</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Mobile</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Gender</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Profession</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Branch</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Nationalities</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Required Period</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 57.75px;" aria-label="Manager: activate to sort column ascending">Verify</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 61.75px;" aria-label="IB Status: activate to sort column ascending">Status</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">Details</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Delete Row">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                    <?php foreach ($CorporateData as $rows) { ?>                                                         
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1"><?php echo $rows['createdAt'] ?></td>
                                                                    <td><?php echo $rows['Usr_FName'] ?></td>
                                                                    <td><?php echo $rows['Usr_FMName'] ?></td>
                                                                    <td><?php echo $rows['Usr_Email'] ?></td>
                                                                    <td><?php echo $rows['Usr_Mobile'] ?></td>
                                                                     <td style="display:none"><?php echo $rows['Usr_Gender'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Prf_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Brn_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Nat_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Per_Name'] ?></td>
                                                                    <td><button class="btn btn-default btn-default btn-sm change corporate_statusModal" data-toggle="modal" href="#manager_modal" data-href="#manager_modal" id="<?php echo $rows['Usr_ID'] . "-" . $rows['formname']; ?>" data-placement="top" type="button" data-original-title="Assign" intid="1337"><i class="fa fa-pencil-square-o  "></i>
                                                                        </button>
                                                                    </td>
                                                                    <td><button class="btn btn-<?php
                                                                        if ($rows['status'] == "0") {
                                                                            echo "default";
                                                                        } elseif ($rows['status'] == "1") {
                                                                            echo "success";
                                                                        } elseif ($rows['status'] == "2") {
                                                                            echo "danger";
                                                                        }
                                                                        ?> stat" data-placement="top" data-toggle="tooltip" type="button" stat="0" data-original-title="<?php if ($rows['status'] == "0") { echo "New";}elseif ($rows['status'] == "1") {  echo "Approved";}elseif ($rows['status'] == "2") { echo "Not Approved"; } ?>" intid="1333" email=""><i class="fa fa-<?php
                                                                            if ($rows['status'] == "0") {
                                                                                echo "lock";
                                                                            } elseif ($rows['status'] == "1") {
                                                                                echo "check";
                                                                            } elseif ($rows['status'] == "2") {
                                                                                echo "times";
                                                                            }
                                                                            ?>"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td><a class="btn btn-xs btn-primary corporate_service_details" data-toggle="modal" href="#details_modal_corporate" id="<?php echo $rows['Usr_ID'] ?>" data-href="#details_modal_corporate"  data-placement="top" type="button" data-original-title="Assign" ><i class="fa fa-eye"></i> Details</a></td>
                                                                    <td><a class="btn btn-xs btn-danger corporate_delete_row" data-toggle="modal" href="#deleterow"  id="<?php echo $rows['Usr_ID'] . "-" . $rows['formname']; ?>" data-href="#deleterow"  data-placement="top" type="button" data-original-title="Assign" ></i> Delete</a></td>
                                                                </tr>
<?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab3" style="position: relative;min-height: 300px;">
                                        <div class="card-block m-t-35" style="position: relative;">
                                            <div id="liveAccounts_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">

                                                <div class="table-responsive">
                                                    <table id="individualData_table" class="table nowrap table-striped table-bordered table-advance table-hover table_status_padding" width="100%" cellspacing="0" role="grid" aria-describedby="liveAccounts_info" style="width: 100%;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_desc" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 106.75px;" aria-sort="descending" aria-label="Reg. Time: activate to sort column ascending">Reg. Time</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">First Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">Last Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 151.75px;" aria-label="Email: activate to sort column ascending">Email</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Mobile</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Gender</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Profession</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Branch</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Nationalities</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Required Period</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 57.75px;" aria-label="Manager: activate to sort column ascending">Verify</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 61.75px;" aria-label="IB Status: activate to sort column ascending">Status</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">Details</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Delete Row">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                     <?php foreach ($individualData as $rows) { ?>             
                                                            
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1"><?php echo $rows['createdAt'] ?></td>
                                                                    <td><?php echo $rows['Usr_FName'] ?></td>
                                                                    <td><?php echo $rows['Usr_FMName'] ?></td>
                                                                    <td><?php echo $rows['Usr_Email'] ?></td>
                                                                    <td><?php echo $rows['Usr_Mobile'] ?></td>
                                                                     <td style="display:none"><?php echo $rows['Usr_Gender'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Prf_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Brn_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Nat_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Per_Name'] ?></td>
                                                                    <td><button class="btn btn-default btn-default btn-sm change individual_statusModal" data-toggle="modal" href="#manager_modal" data-href="#manager_modal" id="<?php echo $rows['Usr_ID'] . "-" . $rows['formname']; ?>" data-placement="top" type="button" data-original-title="Assign" intid="1337"><i class="fa fa-pencil-square-o  "></i>
                                                                        </button>
                                                                    </td>
                                                                    <td><button class="btn btn-<?php
                                                                                if ($rows['status'] == "0") {
                                                                                    echo "default";
                                                                                } elseif ($rows['status'] == "1") {
                                                                                    echo "success";
                                                                                } elseif ($rows['status'] == "2") {
                                                                                    echo "danger";
                                                                                }
                                                                                ?> stat" data-placement="top" data-toggle="tooltip" type="button" stat="0" data-original-title="<?php if ($rows['status'] == "0") { echo "New";}elseif ($rows['status'] == "1") {  echo "Approved";}elseif ($rows['status'] == "2") { echo "Not Approved"; } ?>" intid="1333" email=""><i class="fa fa-<?php
                                                                                if ($rows['status'] == "0") {
                                                                                    echo "lock";
                                                                                } elseif ($rows['status'] == "1") {
                                                                                    echo "check";
                                                                                } elseif ($rows['status'] == "2") {
                                                                                    echo "times";
                                                                                }
                                                                                ?>"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td><a class="btn btn-xs btn-primary individual_service_details" data-toggle="modal" href="#details_modal_individual" id="<?php echo $rows['Usr_ID'] ?>" data-href="#details_modal_individual"  data-placement="top" type="button" data-original-title="Assign" ><i class="fa fa-eye"></i> Details</a></td>
                                                                    <td><a class="btn btn-xs btn-danger individual_delete_row" data-toggle="modal" href="#deleterow"  id="<?php echo $rows['Usr_ID'] . "-" . $rows['formname']; ?>" data-href="#deleterow"  data-placement="top" type="button" data-original-title="Assign" ></i> Delete</a></td>
                                                                </tr>
<?php } ?>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab4" style="position: relative;min-height: 300px;">
                                        <div class="card-block m-t-35" style="position: relative;">
                                            <div id="liveAccounts_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">

                                                <div class="table-responsive">
                                                    <table id="healthcareData_table" class="table nowrap table-striped table-bordered table-advance table-hover table_status_padding" width="100%" cellspacing="0" role="grid" aria-describedby="liveAccounts_info" style="width: 100%;">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_desc" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 106.75px;" aria-sort="descending" aria-label="Reg. Time: activate to sort column ascending">Reg. Time</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">First Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">Last Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 151.75px;" aria-label="Email: activate to sort column ascending">Email</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Mobile</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Gender</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Profession</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Branch</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Nationalities</th>
                                                                <th style="display:none" class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Required Period</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 57.75px;" aria-label="Manager: activate to sort column ascending">Verify</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 61.75px;" aria-label="IB Status: activate to sort column ascending">Status</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">Details</th>
                                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Delete Row">Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                                    <?php foreach ($healthcareData as $rows) { ?>                                                         
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1"><?php echo $rows['createdAt'] ?></td>
                                                                    <td><?php echo $rows['Usr_FName'] ?></td>
                                                                    <td><?php echo $rows['Usr_FMName'] ?></td>
                                                                    <td><?php echo $rows['Usr_Email'] ?></td>
                                                                    <td><?php echo $rows['Usr_Mobile'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Usr_Gender'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Prf_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Brn_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Nat_Name'] ?></td>
                                                                    <td style="display:none"><?php echo $rows['Per_Name'] ?></td>
                                                                    <td><button class="btn btn-default btn-default btn-sm change healthcare_statusModal" data-toggle="modal" href="#manager_modal" data-href="#manager_modal" id="<?php echo $rows['Usr_ID'] . "-" . $rows['formname']; ?>" data-placement="top" type="button" data-original-title="Assign" intid="1337"><i class="fa fa-pencil-square-o  "></i>
                                                                        </button>
                                                                    </td>
                                                                    <td><button class="btn btn-<?php
                                                                            if ($rows['status'] == "0") {
                                                                                echo "default";
                                                                            } elseif ($rows['status'] == "1") {
                                                                                echo "success";
                                                                            } elseif ($rows['status'] == "2") {
                                                                                echo "danger";
                                                                            }
                                                                            ?> stat" data-placement="top" data-toggle="tooltip" type="button" stat="0" data-original-title="<?php if ($rows['status'] == "0") { echo "New";}elseif ($rows['status'] == "1") {  echo "Approved";}elseif ($rows['status'] == "2") { echo "Not Approved"; } ?>" intid="1333" email=""><i class="fa fa-<?php
                                                                            if ($rows['status'] == "0") {
                                                                                echo "lock";
                                                                            } elseif ($rows['status'] == "1") {
                                                                                echo "check";
                                                                            } elseif ($rows['status'] == "2") {
                                                                                echo "times";
                                                                            }
                                                                            ?>"></i>
                                                                        </button>
                                                                    </td>
                                                                    <td><a class="btn btn-xs btn-primary healthcare_service_details" data-toggle="modal" href="#details_modal_healthcare" id="<?php echo $rows['Usr_ID'] ?>" data-href="#details_modal_healthcare"  data-placement="top" type="button" data-original-title="Assign" ><i class="fa fa-eye"></i> Details</a></td>
                                                                    <td><a class="btn btn-xs btn-danger healthcare_delete_row" data-toggle="modal" href="#deleterow"  id="<?php echo $rows['Usr_ID'] . "-" . $rows['formname']; ?>" data-href="#deleterow"  data-placement="top" type="button" data-original-title="Assign" ></i> Delete</a></td>
                                                                </tr>
<?php } ?>

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
            <!-- Join our Team -->
            <div class="row m-t-35">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Join Our Team - Registered  Users

                        </div>
                        <div class="card-block m-t-35" style="position: relative;">
                            <div id="liveAccounts_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">

                                <div class="table-responsive">
                                    <table id="join_our_team_table" class="table nowrap table-striped table-bordered table-advance table-hover table_status_padding" width="100%" cellspacing="0" role="grid" aria-describedby="liveAccounts_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_desc" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 106.75px;" aria-sort="descending" aria-label="Reg. Time: activate to sort column ascending">Reg. Time</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">First Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">Last Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 151.75px;" aria-label="Email: activate to sort column ascending">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Mobile</th>
                                                <th class="sorting" style="display:none" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">Cv Name</th>
                                                <th class="sorting" style="display:none" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">comment</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 57.75px;" aria-label="Manager: activate to sort column ascending">Verify</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 61.75px;" aria-label="IB Status: activate to sort column ascending">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">Details</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Delete Row">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                            <?php foreach ($ourTeamData as $rows) { ?>                                                         
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?php echo $rows['createdAt'] ?></td>
                                                    <td><?php echo $rows['Usr_FName'] ?></td>
                                                    <td><?php echo $rows['Usr_FMName'] ?></td>
                                                    <td><?php echo $rows['Usr_Email'] ?></td>
                                                    <td><?php echo $rows['Usr_Mobile'] ?></td>
                                                    <td style="display:none"><?php echo end(explode("/",$rows['Usr_Cv_Path'])) ?></td>
                                                    <td style="display:none"><?php echo $rows['Usr_Comment'] ?></td>
                                                    <td><button class="btn btn-default btn-default btn-sm change join_our_team_statusModal" data-toggle="modal" href="#manager_modal" data-href="#manager_modal" id="<?php echo $rows['Usr_ID'] . "-ourTeam"; ?>" data-placement="top" type="button" data-original-title="Assign" intid="1337"><i class="fa fa-pencil-square-o  "></i>
                                                        </button>
                                                    </td>
                                                    <td><button class="btn btn-<?php
                                                if ($rows['status'] == "0") {
                                                    echo "default";
                                                } elseif ($rows['status'] == "1") {
                                                    echo "success";
                                                } elseif ($rows['status'] == "2") {
                                                    echo "danger";
                                                }
                                                ?> stat" data-placement="top" data-toggle="tooltip" type="button" stat="0" data-original-title="<?php if ($rows['status'] == "0") { echo "New";}elseif ($rows['status'] == "1") {  echo "Approved";}elseif ($rows['status'] == "2") { echo "Not Approved"; } ?>" intid="1333" email=""><i class="fa fa-<?php
                                                if ($rows['status'] == "0") {
                                                    echo "lock";
                                                } elseif ($rows['status'] == "1") {
                                                    echo "check";
                                                } elseif ($rows['status'] == "2") {
                                                    echo "times";
                                                }
                                                ?>"></i>
                                                        </button>
                                                    </td>
                                                    <td><a class="btn btn-xs btn-primary our_team_details" data-toggle="modal" href="#joinourteam_modal" id="<?php echo $rows['Usr_ID'] ?>" data-href="#joinourteam_modal" data-placement="top" type="button" data-original-title="Assign" ><i class="fa fa-eye"></i> Details</a></td>
                                                    <td><a class="btn btn-xs btn-danger delete_row_our_team" data-toggle="modal" href="#deleterow"  id="<?php echo $rows['Usr_ID']?>" data-href="#deleterow"  data-placement="top" type="button" data-original-title="Assign" ></i> Delete</a></td>
                                                </tr>
<?php } ?>                                            
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Us--->
            <div class="row m-t-35">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Contact Us - Registered  Users

                        </div>
                        <div class="card-block m-t-35" style="position: relative;">
                            <div id="liveAccounts_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">

                                <div class="table-responsive">
                                    <table id="contactData_table" class="table nowrap table-striped table-bordered table-advance table-hover table_status_padding" width="100%" cellspacing="0" role="grid" aria-describedby="liveAccounts_info" style="width: 100%;">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_desc" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 106.75px;" aria-sort="descending" aria-label="Reg. Time: activate to sort column ascending">Reg. Time</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">First Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 131.75px;" aria-label="Name: activate to sort column ascending">Last Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 151.75px;" aria-label="Email: activate to sort column ascending">Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 53.75px;" aria-label="Country: activate to sort column ascending">Mobile</th>
                                                <th class="sorting" style="display:none" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">Subject</th>
                                                <th class="sorting" style="display:none" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">Message</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 57.75px;" aria-label="Manager: activate to sort column ascending">Verify</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 61.75px;" aria-label="IB Status: activate to sort column ascending">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Verification: activate to sort column ascending">Details</th>
                                                <th class="sorting" tabindex="0" aria-controls="liveAccounts" rowspan="1" colspan="1" style="width: 75.75px;" aria-label="Delete Row">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                            <?php foreach ($contactData as $rows) { ?>                                                         
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?php echo $rows['createdAt'] ?></td>
                                                    <td><?php echo $rows['Usr_FName'] ?></td>
                                                    <td><?php echo $rows['Usr_FMName'] ?></td>
                                                    <td><?php echo $rows['Usr_Email'] ?></td>
                                                    <td><?php echo $rows['Usr_Mobile'] ?></td>
                                                    <td style="display:none"><?php echo $rows['Sub_Name']; ?></td>
                                                    <td style="display:none"><?php echo $rows['Usr_Message'] ?></td>
                                                    <td><button class="btn btn-default btn-default btn-sm change contact_statusModal" data-toggle="modal" href="#manager_modal" data-href="#manager_modal" id="<?php echo $rows['Usr_ID'] . "-contactus"; ?>" data-placement="top" type="button" data-original-title="Assign" intid="1337"><i class="fa fa-pencil-square-o  "></i>
                                                        </button>
                                                    </td>
                                                    <td><button class="btn btn-<?php
                                            if ($rows['status'] == "0") {
                                                echo "default";
                                            } elseif ($rows['status'] == "1") {
                                                echo "success";
                                            } elseif ($rows['status'] == "2") {
                                                echo "danger";
                                            }
                                            ?> stat" data-placement="top" data-toggle="tooltip" type="button" stat="0" data-original-title="<?php if ($rows['status'] == "0") { echo "New";}elseif ($rows['status'] == "1") {  echo "Approved";}elseif ($rows['status'] == "2") { echo "Not Approved"; } ?>" intid="1333" email=""><i class="fa fa-<?php
                                            if ($rows['status'] == "0") {
                                                echo "lock";
                                            } elseif ($rows['status'] == "1") {
                                                echo "check";
                                            } elseif ($rows['status'] == "2") {
                                                echo "times";
                                            }
                                            ?>"></i>
                                                        </button>
                                                    </td>
                                                    <td><a class="btn btn-xs btn-primary contact_us_details" data-toggle="modal" href="#contactus_modal" id="<?php echo $rows['Usr_ID'] ?>" data-href="#contactus_modal" data-placement="top" type="button" data-original-title="Assign" ><i class="fa fa-eye"></i> Details</a></td>
                                                    <td><a class="btn btn-xs btn-danger delete_row_contact" data-toggle="modal" href="#deleterow"  id="<?php echo $rows['Usr_ID']?>" data-href="#deleterow"  data-placement="top" type="button" data-original-title="Assign" ></i> Delete</a></td>
                                                </tr>
<?php } ?>
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
<div class="modal fade" id="deleterow" tabindex="-1" role="dialog" aria-labelledby="deleteBranch" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Branch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Confirm To Delete Field
            </div>
            <div class="modal-footer" id="rowDeleteConfirm">

            </div>
        </div>
    </div>
</div>
<!-- Model Manager --->
<div class="modal fade in display_none" id="manager_modal" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary bg-warning">
                <h4 class="modal-title text-white">Enquiry Status</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="min-height: 524px;">
                <div class="row">
                    <div class="col-md-12" id="assign_manager_holder">
                        <form method="POST"accept-charset="UTF-8" name="ass_man" id="ass_man">
                            <input name="_token" type="hidden" value="ekeH95zCbuoOHmeoUg3UALOxGcfbeFjyLNfN5lO3"> 
                            <br>
                            <div class="form-group m-t-25 row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="id_proof" style="font-weight:bold;font-size: 15px;" class="form-control-label">Select Status:</label>
                                </div>
                                <input type="hidden" name="statusHidden" id="statusHidden">
                                <div class="col-xl-6 col-lg-8">
                                    <select name="manager" id="manager"  class="validate[required] form-control select_manager">
                                        <option value="0">New</option>
                                        <option value="1">Approved</option>
                                        <option value="2">Not Approved</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" class="id" name="id" value="1337">
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <input type="button" class="btn btn-primary m-submit" value="Update" id="m-submit"><button style="display: none;" type="button" class="btn btn-primary m-wait">Updating...</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Our services details model-->
<div  class="modal fade in display_none" id="details_modal_service" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title text-white">Our Services - Registered User Details</h4>
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
                        <img src="/assets/img/loader.gif" style=" width: 40px;" alt="loading...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="our_service_modal">


                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>
<div  class="modal fade in display_none" id="details_modal_corporate" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title text-white">Our Services - Registered User Detail</h4>
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
                        <img src="/assets/img/loader.gif" style=" width: 40px;" alt="loading...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="our_service_corporate">


                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>
<div  class="modal fade in display_none" id="details_modal_individual" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title text-white">Our Services - Registered User Detail</h4>
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
                        <img src="/assets/img/loader.gif" style=" width: 40px;" alt="loading...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="our_service_individual">


                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>
<div  class="modal fade in display_none" id="details_modal_healthcare" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title text-white">Our Services - Registered User Detail</h4>
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
                        <img src="/assets/img/loader.gif" style=" width: 40px;" alt="loading...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="our_service_healthcare">


                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Our services details model-->
<div  class="modal fade in display_none" id="joinourteam_modal" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title text-white">Join Our Team - Registered User Detail</h4>
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
                        <img src="/assets/img/loader.gif" style=" width: 40px;" alt="loading...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="join_our_team_modal">                       

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Our services details model-->
<div  class="modal fade in display_none" id="contactus_modal" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title text-white">Conatct Us - Registered User Detail</h4>
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
                        <img src="/assets/img/loader.gif" style=" width: 40px;" alt="loading...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="contact_us_modal">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Deleted Rows model-->
<div class="container">
        <div class="modal fade" id="ignismyDeleteModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="thank-you-pop">
                            <img src="/assets/images/Green-Round-Tick.png" alt="">
                          
                            <p>The selected row has been deleted</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>



