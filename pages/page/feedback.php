<?php
   session_start();
?>

<?php
   include 'db.php';

$conn = new mysqli($servername, $username, $password, $db);

if(isset($_POST['submit']))
{
    $q_one=implode('<br>',$_POST['q_one']);
    $q_two=implode('<br>',$_POST['q_two']);
    $q_three=implode('<br>',$_POST['q_three']);
    $q_four=$_POST['q_four'];
    $q_five=implode('<br>',$_POST['q_five']);
    $a_five=$_POST['a_five'];


    $sql=$conn->query("INSERT INTO users(q_one, q_two, q_three, q_four, q_five, a_five)
                       values('$q_one', '$q_two', '$q_three', '$q_four', '$q_five', '$a_five')");

    if($sql>0)
    {
        echo "Data is Submited";
        header("location: feedback.php");
    }
    else {
        echo "<script> alert('Data is not submited')</script>";
    }
}
?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Feedback Form</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../../plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="../../plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../../plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body style="background: rgb(59, 140, 143);">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->



    <section class=" feed-page">
        <div class="container-fluid signup-box">
            <div class="logo">
                <a href="javascript:void(0);">hi<b>5</b></a>
                <small>Welcome 
                    <?php
                        if($_SESSION['loggedInu']===true)
                        {
                            echo $_SESSION['userDetails']['first_name'];
                            echo "<br>";
                            echo $_SESSION['userDetails']['email'];
                        }
                        else {
                            header('Location: emp-login.php');
                        }
                       ?>
                </small>
            </div>
            
                
            <form action="" method="POST">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>Feedback Form</h2>
                                <small><?php
                                           echo date("Y-m-d"). " - " .date("l")." - " .date("h:i:sa");
                                        ?>
                                </small>
                            </div>
                
                            <div class="body">
                
                                <h2 class="card-inside-title">Reviewed high risks jobs?</h2>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_one[]" value="1.All high risk jobs closed. " id="md_checkbox_29" class="filled-in chk-col-teal" />
                                    <label for="md_checkbox_29">All high risk jobs closed.</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_one[]" value="2.One high risk job ongoing. " id="md_checkbox_21" class="filled-in chk-col-red" />
                                    <label for="md_checkbox_21">One high risk job ongoing</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_one[]" value="3.Multiple high risk jobs ongoing. " id="md_checkbox_26" class="filled-in chk-col-blue" />
                                    <label for="md_checkbox_26">Multiple high risk jobs ongoing</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_one[]" value="4.Day ahead planning for high risk jobs done. " id="md_checkbox_39" class="filled-in chk-col-blue-grey" />
                                    <label for="md_checkbox_39">Day ahead planning for high risk jobs done.</label>
                                </div>
                
                
                
                                <h2 class="card-inside-title">Visited all planned maintenance jobs?</h2>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_two[]" value="1.All jobs carried out safely. " id="md_checkbox_27" class="filled-in chk-col-light-blue" />
                                    <label for="md_checkbox_27">All jobs carried out safely.</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_two[]" value="2.One job had few safety lapses. " id="md_checkbox_33" class="filled-in chk-col-yellow" />
                                    <label for="md_checkbox_33">One job had few safety lapses.</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_two[]" value="3.More than one job had safety lapses. " id="md_checkbox_24" class="filled-in chk-col-deep-purple" />
                                    <label for="md_checkbox_24">More than one job had safety lapses.</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_two[]" value="4.There was an incident in one of the jobs. " id="md_checkbox_28" class="filled-in chk-col-cyan" />
                                    <label for="md_checkbox_28">There was an incident in one of the jobs.</label>
                                </div>
                
                
                
                                <h2 class="card-inside-title">Manpower planning in the evening shift?</h2>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_three[]" value="1.Adequate manpower is available. " id="md_checkbox_32" class="filled-in chk-col-lime" />
                                    <label for="md_checkbox_32">Adequate manpower is available.</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_three[]" value="2.One manpower is shortage." id="md_checkbox_25" class="filled-in chk-col-indigo" />
                                    <label for="md_checkbox_25">One manpower is shortage.</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_three[]" value="3.Two manpower is shortage. " id="md_checkbox_38" class="filled-in chk-col-grey" />
                                    <label for="md_checkbox_38">Two manpower is shortage.</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_three[]" value="4.No manpower is available in the shift. " id="md_checkbox_35" class="filled-in chk-col-orange" />
                                    <label for="md_checkbox_35">No manpower is available in the shift.</label>
                                </div>
                
                
                
                
        
                                <h2 class="card-inside-title">Any work under progress?</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" name="q_four" class="form-control no-resize" placeholder="Please type Work Details..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                
                
                                <h2 class="card-inside-title">I have done Safety Audit for:</h2>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_five[]" value="1.High risk jobs. " id="md_checkbox_22" class="filled-in chk-col-pink" />
                                    <label for="md_checkbox_22">High risk jobs.</label>
                                </div>
                
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_five[]" value="2.Medium risk jobs. " id="md_checkbox_37" class="filled-in chk-col-brown" />
                                    <label for="md_checkbox_37">Medium risk jobs.</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_five[]" value="3.Safety observation uploaded in SAP. " id="md_checkbox_34" class="filled-in chk-col-amber" />
                                    <label for="md_checkbox_34">Safety observation uploaded in SAP.</label>
                                </div>
                                <div class="demo-checkbox">
                                    <input type="checkbox" name="q_five[]" value="4.5S observation made and communicated to Gemba owned. " id="md_checkbox_36" class="filled-in chk-col-deep-orange" />
                                    <label for="md_checkbox_36">5S observation made and communicated to
                                    Gemba owned.</label>
                                </div>
                
                                <small>Explain :-</small>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="1" name="a_five" class="form-control no-resize auto-growth"
                                            placeholder="Please type...."></textarea>
                                    </div>
                                </div>

                                <button name="submit" class="btn btn-lg bg-teal waves-effect" type="submit">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../../plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../../plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../../plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="../../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>
</html>
