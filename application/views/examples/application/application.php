<?php
$this->load->library('session');
?>
    <!doctype html>
    <html lang="en">

    <!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Jul 2018 13:04:37 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"/>
        <link rel="icon" type="image/png" href="<?= base_url('assets/images/ucscLogo.jpg') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

        <title>UCSC</title>

        <!-- Bootstrap core CSS     -->
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"/>

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="<?= base_url('assets/css/demo.css') ?>" rel="stylesheet"/>


        <!--     Fonts and icons     -->
        <link href="<?= base_url('assets/font-awesome/latest/css/font-awesome.min.css') ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
    </head>


    <body>

    <div class="wrapper" style="background-color: #f5f5f5">


        <div style="background-color: #f5f5f5">
            <div style="text-align: center;font-size: 40px">
                <div style="padding-top: 60px">Application</div>
            </div>
            <div style="background-color: white;border: 2px solid #666666;margin: 50px;padding: 10px">
                <div class="row" style="margin-bottom: 30px">
                    <div class="col-sm-4" style="font-weight: bold;font-size: 20px">University of Colombo School of
                        Computing
                    </div>
                    <div class="col-sm-4" style="text-align: center">Application No : <span id="appNo"></span></div>
                    <div class="col-sm-4" style="text-align: center">Date issued : <span id="appDate"></span></div>
                </div>

                <hr>

                <div class="row" style="margin-bottom: 20px">
                    <div class="col-sm-12" style="font-weight: bold">
                        Posts applied for
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        Lecturer (Probationary)<input type="checkbox"
                                                      style="margin-left: 30px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                    </div>
                    <div class="col-sm-6">
                        Senior Lecturer Gr. II<input type="checkbox"
                                                     style="margin-left: 30px;-ms-transform: scale(2); /* IE */-moz-transform: scale(2); /* FF */-webkit-transform: scale(2); /* Safari and Chrome */-o-transform: scale(2); /* Opera */">
                    </div>
                </div>

                <hr>

                <div class="row" style="margin-bottom: 20px">
                    <div class="col-sm-12" style="font-weight: bold">
                        Areas of Specialization
                    </div>
                    <div class="col-sm-12">
                        (Please indicate the subject arrears of specialization based on your qualification and work
                        experience)
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><span>1.</span> <input type="text" class="form-control"></div>
                    <div class="col-sm-6"><span>2.</span> <input type="text" class="form-control"></div>
                </div>
                <div class="row" id="aosId">
                    <div class="col-sm-6">
                        <button class="btn btn-primary"
                                style="left: 50%;transform: translateX(-50%);position: relative">Add Field
                        </button>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-primary"
                                style="left: 50%;transform: translateX(-50%);position: relative">Remove Field
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$this->load->view('examples/footer');
?>