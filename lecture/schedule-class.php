<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tabs -- </title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../../elephant.html">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/demo.min.css">
    </head>
    <body class="layout layout-header-fixed">
        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="layout-content-body"> 
                    <div class="row">
                        <div class="col-md-12 " style="margin-top: 25px;">
                            <div class="col-md-12 text-center" style="padding: 10px;border-bottom: 1px solid #bfbcbc;">
                                <h3>Manage Class Documents</h3>
                            </div>
                            <div class="panel m-b-lg">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#home" data-toggle="tab">Class Room</a></li>
                                    <li><a href="#past_lesson" data-toggle="tab">Pass Lesson</a></li> 
                                    <li><a href="#mcq_papers" data-toggle="tab">MCQ Papers</a></li> 
                                    <li><a href="#tutorials" data-toggle="tab">Tutorials</a></li> 
                                    <li><a href="#assignment" data-toggle="tab">Assignment</a></li> 
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="home">
                                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                            <div class="form form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Video Title: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="file"  placeholder="Enter Video Title name "   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Video URL: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="text"  placeholder="Enter Video URL "   >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-4"></div> 
                                                    <div class="col-md-2">  
                                                        <input type="hidden"  name="update">
                                                        <input type="hidden"  name="id"  value="<?php echo $id ?>" >
                                                        <input type="submit" class="btn btn-primary btn-block"   value="Add" id="update" >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="tab-pane fade" id="past_lesson">
                                        <div class="card">
                                            <div class="box-shadow">
                                                <div class="card-header">
                                                    <h5>
                                                        <a  href="#" >
                                                            Chemical Equilibrium Part 3 <small> (2020-05-16 )</small>
                                                            <span class="fas-fa fa-chevron-down"> 
                                                            </span> 
                                                        </a>
                                                    </h5>
                                                    <hr>

                                                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/h04Hj6sb1qg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="mcq_papers">
                                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                            <div class="form form-horizontal">

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Title: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="text"  placeholder="Enter Title "   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">MCQ Papers: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="file"   >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-4"></div> 
                                                    <div class="col-md-2">  
                                                        <input type="hidden"  name="update">
                                                        <input type="hidden"  name="id"  value="<?php echo $id ?>" >
                                                        <input type="submit" class="btn btn-primary btn-block"   value="Add" id="update" >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="card">
                                            <div class="box-shadow">
                                                <div class="card-header">
                                                    <h5>
                                                        <a  href="#" >
                                                            Chemical Equilibrium Part 3 <small> (2020-05-16 )</small>
                                                            <span class="fas-fa fa-chevron-down"> 
                                                            </span> 
                                                        </a>
                                                    </h5>
                                                    <hr>
                                                    <div class="file">
                                                        <a href="#" class="file-link" title="file-name.pdf">
                                                            <div class="file-thumbnail file-thumbnail-pdf">

                                                            </div>
                                                            <div class="file-info">
                                                                <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>   
                                                            </div>

                                                        </a>

                                                        <button class="file-delete-btn delete"title="Delete" type="button">
                                                            <span class="icon icon-remove"></span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tutorials">
                                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                            <div class="form form-horizontal">

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Title: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="text"  placeholder="Enter Title "   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">MCQ Papers: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="file"   >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-4"></div> 
                                                    <div class="col-md-2">  
                                                        <input type="hidden"  name="update">
                                                        <input type="hidden"  name="id"  value="<?php echo $id ?>" >
                                                        <input type="submit" class="btn btn-primary btn-block"   value="Add" id="update" >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="card">
                                            <div class="box-shadow">
                                                <div class="card-header">
                                                    <h5>
                                                        <a  href="#" >
                                                            Chemical Equilibrium Part 3 <small> (2020-05-16 )</small>
                                                            <span class="fas-fa fa-chevron-down"> 
                                                            </span> 
                                                        </a>
                                                    </h5>
                                                    <hr>
                                                    <div class="file">
                                                        <a href="#" class="file-link" title="file-name.pdf">
                                                            <div class="file-thumbnail file-thumbnail-pdf">

                                                            </div>
                                                            <div class="file-info">
                                                                <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>   
                                                            </div>

                                                        </a>

                                                        <button class="file-delete-btn delete"title="Delete" type="button">
                                                            <span class="icon icon-remove"></span>

                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="assignment">
                                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                            <div class="form form-horizontal">

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Title: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="text"  placeholder="Enter Title "   >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Assignment: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="file"   >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-4"></div> 
                                                    <div class="col-md-2">  
                                                        <input type="hidden"  name="update">
                                                        <input type="hidden"  name="id"  value="<?php echo $id ?>" >
                                                        <input type="submit" class="btn btn-primary btn-block"   value="Add" id="update" >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="card">
                                            <div class="box-shadow">
                                                <div class="card-header">
                                                    <h5>
                                                        <a  href="#" >
                                                            Manage Assignments <small> (2020-05-16 )</small>
                                                            <span class="fas-fa fa-chevron-down"> 
                                                            </span> 
                                                        </a>
                                                    </h5>
                                                    <hr>
                                                    <div class="col-md-4 card">
                                                        <div class="text-center">
                                                            <h4 class="">පළමු ප්‍රශ්නය - මෙම ප්‍රශ්නය ඩවුන්ලෝඩ් කරගෙන, හෙට පන්තියට පලමු නියමිත පරිදි පිළිතුරු සපයාගෙන සූදානම් කර තබාගන්න.</h4>
                                                            <p>2020-05-16</p>

                                                            <a href="" target="blank" class="btn btn-success">  VIEW ASSIGNMENT </a>
                                                            <br/><br/>
                                                            <p class="label label-danger">Not Submitted / +6 Days Late</p>
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
                </div>
            </div>
            <div class="layout-footer">
                <div class="layout-footer-body">
                    <small class="version">Version 1.4.0</small>
                    <small class="copyright">2017 &copy; Elephant <a href="http://madebytilde.com/">Made by Tilde</a></small>
                </div>
            </div>
        </div>

        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>


    </body>

</html>