

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="">
        <div class="main-wrapper">

            <div class="">
                <h1 align="center">Student Result Management System</h1>

                            <!-- <div class="row mt-40"> -->
                                <div class="col-md-10 col-md-offset-1 pt-10">
                                    <div class="row mt-20 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>Admin Login</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-30">

                                                    <form class="form-horizontal" action="login.php" method="post" class="">
                                                    	<div class="form-group">
                                                    		<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                                    		<div class="col-sm-5">
                                                    			<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                    		</div>
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                    		<div class="col-sm-5">
                                                    			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    		</div>
                                                    	</div>
                                                    
                                                        <div class="form-group mt-20">
                                                    		<div class="col-sm-offset-2 col-sm-10">
                                                    			<button type="submit" name="login" class="btn btn-success btn-labeled pull-centre">Sign in<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                                    		</div>
                                                    	</div>
                                                    </form>

                                                </div>
                                            <!-- </div> -->
                                            <!-- /.panel -->
                                           
                                        <!-- </div> -->
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                        </div>
                            <!-- /.row -->
                    <!-- /.col-md-6 -->
                    <!-- <div class="container" style="height: 50px">
                    </div> -->
                    <div class="row mt-10">
                                <div class="col-md-10 col-md-offset-1 pt-20">

                                    <div class="row mt-30 ">
                                        <div class="col-md-11">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    <div class="panel-title text-center">
                                                        <h4>For Students</h4>
                                                    </div>
                                                </div>
                                                <div class="panel-body p-20" style="text-align: center;">

                                                    <div class="section-title">
                                                        <p class="sub-title">For students press below to view your results</p>
                                                    </div>

                                                    <form class="form-horizontal" action="find-result.php" method="post">
                                                        <div class="form-group">
                                                            <div style="text-align: center;">
                                                                <button type="submit" name="submit" class="btn btn-success btn-labeled pull-centre">click Here<span class="btn-label btn-label-right"><i class="fa fa-forward"></i></span></button>
                                                            </div>
                                                        </div>
                                                       
                                                    </form>

                                            

                                                 
                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                      
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->
        <p class="text-muted text-center" style="padding: 30px;"><small>Copyright © <a target="_blank" href="https://guizfinecodes.github.io/">guizfinecodes</a> and thanks to: <a target="_blank" href="http://facebook.com/createnetworksng">Create Network NG</a> 2020</small></p>

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
 
    </body>
</html>
