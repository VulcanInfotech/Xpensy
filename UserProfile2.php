<?php 

session_start();

	error_reporting(0);

	try
	{
		If(isset($_SESSION['login']) && isset($_SESSION['userid']))
		{
			$User=$_SESSION['login'];
			$UserID = $_SESSION['userid'];
		}
		else
		{
			header("Location: index.php");
		}		
	}
	catch(Exception $ex)
	{
		session_destroy();
		header("Location: EndSession.php");
	}
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>XPENSY | <?php echo substr($_SESSION['pname'],9); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
	input#ibutton{
    background: url('images/Save-icon.png');
	background-size: 20px 16px;
	background-repeat: no-repeat;	
    height: 20px;
	width: 16px;
}

.box-header{
 background-color:#3c8dbc;

}
.box-title{
color:white;
}
</style>


	<!--Datepicker code start here-->
<script type="text/javascript" src="js/validation.js"></script>
		<script>
    $(function() {
    $( "#datepicker1" ).datepicker({ maxDate: "0D" });
  });
	
    $(function() {
    $( "#datepicker2" ).datepicker({ maxDate: "0D" });
  });
	
    $(function() {
    $( "#datepicker3" ).datepicker({ maxDate: "0D" });
  });
	
    $(function() {
    $( "#datepicker4" ).datepicker({ maxDate: "0D" });
  });
  
  </script>
<!--Datepicker code end here-->

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <img class=" navbar-left" height="50"  style="margin-left:20px; "  src="images/Logo3.png" alt="">
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
            

              <!-- Notifications Menu -->
           
              <!-- Tasks Menu -->
            
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="dist/img/default.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo substr($_SESSION['pname'],9); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
<img src="dist/img/default.png" class="img-circle" alt="User Image">

                    <p>
<p><?php echo substr($_SESSION['pname'],9); ?>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="UpdateProfile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="EndSession.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
             
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
<img src="dist/img/default.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo substr($_SESSION['pname'],9); ?></p>
              <!-- Status -->
             
            </div>
          </div>

          <!-- search form (Optional) -->
          
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
           
            <!-- Optionally, you can add icons to the links -->
			<li><a href="UserProfile.php"><i class="fa fa-edit"></i> <span>Create Reports</span></a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal_addReceipt"><i class="fa fa-file-text-o"></i> <span>Add Receipts</span></a></li>
                        <li><a href="MailMe.php"><i class="fa fa-envelope"></i> <span>E-Mail Current Reports</span></a></li>
                        <!--li><a href="Get PDF Download.php"><i class="fa fa-file-o"></i> <span>Generate PDF Report</span></a></li-->
			
                        <li><a href="ViewReports.php"><i class="fa fa-files-o"></i> <span>Saved Reports</span></a></li>
                        <li><a href="UpdateProfile.php"><i class="fa fa-cogs"></i> <span>User Profile</span> </a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal_editSavedReports"><i class="fa fa-trash o"></i> <span>Edit Saved Reports</span></a></li>
			<li><a href="#" data-toggle="modal" data-target="#myModal_emailSavedReports"><i class="fa fa-trash o"></i> <span>Email Saved Reports</span></a></li> 
			   

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          
		 
		   <div class="container">
		  <div class="row">
		  <div class="col-md-4">
              <div class="nav-tabs-custom">
                <ul class="nav nav-pills">
                  
                  <li class="active"><a href="#transport" data-toggle="tab">&nbsp;Transportation&nbsp;&nbsp;</a></li>
                  <li><a href="#meal" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;Meal&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
				     <li><a href="#hotel" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;Lodging&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					    <li><a href="#other" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;Other&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
                <div class="tab-content">
					<br>
					<div class="active tab-pane" id="transport">
                    <!-- The transport -->
					<form class="form-horizontal" name="transport" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Catagory</label>
                        <div class="col-sm-9">
                         
						  <select name="ExCategory" class="form-control">
                        <option value="Flight">Flight</option>
                        <option value="Railway">Railway</option>
                        <option value="Bus">Bus</option>
                        <option value="Taxi">Taxi</option>
                        <option value="Fairy">Fairy</option>
                      </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputExperience" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                          <textarea name="Descr" class="form-control" id="inputExperience" placeholder="Description" maxlength="100" style="resize:vertical;"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Date </label>
                        <div class="col-sm-9">
                          <input type="text" name="ClaimDate" id="datepicker1" class="form-control" id="inputEmail" placeholder="Select Date">
                        </div>
                      </div>
					
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-3 control-label">Amount</label>
                        <div class="col-sm-9">
                          <input type="text" name="ClaimAmt" class="form-control" maxlength="10" id="inputSkills" placeholder="Amount">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">currency</label>
                        <div class="col-sm-9">
                         
						  <select name="Curr" class="form-control">
                        <option value="USD">US$</option>
                        <option value="INR">INR₹</option>
                        
                      </select>
                        </div>
                      </div>
					  
 <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-10">
                      <input type="file" name="ClaimReceipt" id="exampleInputFile">
                     </div>
                    </div>
					  <br>
					  <div class="form-group">
					  
                        <div class="col-sm-offset-4 col-sm-15">
                          <input type="submit" name="Add" class="btn btn-success">
						  <button type="reset" name="" class="btn btn-danger">Reset</button>
                        </div>

                      </div>
					 </form>
                   
					
                  </div><!-- MEAL-->

                  <div class="tab-pane" id="meal">
				 <form class="form-horizontal" name="meal" action="" method="POST" enctype="multipart/form-data">
                     
					  <div class="form-group">
                        <label class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
						<input type="hidden" name="ExCategory" value="Meal">
                          <textarea class="form-control" name="Descr" placeholder="Description" maxlength="100" style="resize:vertical;"></textarea>
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Date </label>
                        <div class="col-sm-9">
                          <input type="text" name="ClaimDate" id="datepicker2" class="form-control" placeholder="Select Date">
                        </div>
                      </div>
					
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-3 control-label">Amount</label>
                        <div class="col-sm-9">
                          <input type="text" name="ClaimAmt" class="form-control" maxlength="10" placeholder="Amount">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">currency</label>
                        <div class="col-sm-9">
                         
						  <select name="Curr" class="form-control">
                        <option value="USD">US$</option>
                        <option value="INR">INR</option>
                        
                      </select>
                        </div>
                      </div>
					   <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-10">
                      <input type="file" name="ClaimReceipt" id="exampleInputFile">
                     </div>
                    </div>
					  <br>
					  <div class="form-group">
					  
                        <div class="col-sm-offset-4 col-sm-15">
                          <input type="submit" name="Add" class="btn btn-success">
						  <button type="reset" name="" class="btn btn-danger">Reset</button>
                        </div>

                      </div>
					 </form>
				 
                  </div><!-- hotel -->
				  <div class="tab-pane" id="hotel">
                   <form class="form-horizontal" name="hotel" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
                        <label for="inputExperience" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-9">
						<input type="hidden" name="ExCategory" value="Hotel">	
                          <textarea class="form-control" name="Descr" id="inputExperience" placeholder="Name of the hotel" style="resize:vertical;" maxlength="50"></textarea>
                        </div>
                      </div>
                     
					  <div class="form-group">
                        <label for="inputExperience" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" name="Descr" id="inputExperience" placeholder="Location of the hotel" style="resize:vertical;"  maxlength="50"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                          <input type="text" name="ClaimDate" id="datepicker3" class="form-control" id="inputEmail" placeholder="Select Date" >
                        </div>
                      </div>
					
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-3 control-label">Amount</label>
                        <div class="col-sm-9">
                          <input type="text" name="ClaimAmt" class="form-control" id="inputSkills" placeholder="Amount">
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">currency</label>
                        <div class="col-sm-9">
                         
						  <select name="Curr" class="form-control">
                        <option value="USD">US$</option>
                        <option value="INR">INR</option>
                        
                      </select>
                        </div>
                      </div>
					  <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-10">
                      <input type="file" name="ClaimReceipt" id="exampleInputFile">
                     </div>
                    </div>
					  <br>
					  <div class="form-group">
					  
                        <div class="col-sm-offset-4 col-sm-15">
                          <input type="submit" name="Add" class="btn btn-success">
						  <button type="reset" name="" class="btn btn-danger">Reset</button>
                        </div>

                      </div>
					 </form>
                  </div><!-- /.tab-pane -->
				  <div class="tab-pane" id="other">
                   <form class="form-horizontal" name="other" action="" method="POST" enctype="multipart/form-data" >
                      <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Catagory</label>
                        <div class="col-sm-9">
                         
						  <select name="ExCategory" class="form-control">
                        <option value="Entertainment">Entertainment</option>
                        <option value="Purchase">Purchase</option>
                        <option value="Fuel">Fuel</option>
                        <option value="Phone">Phone</option>
                        <option value="Hiring">Hiring</option>
						 <option value="Other">Other</option>
                      </select>
                        </div>
                      </div>
					  <div class="form-group">
                        <label for="inputExperience" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control"  name="Descr" id="inputExperience" placeholder="Description" maxlength="100" style="resize:vertical;"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-3 control-label">Date </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="datepicker4" name="ClaimDate" id="inputEmail" placeholder="Select Date">
                        </div>
                      </div>
					
                      <div class="form-group">
                        <label for="inputSkills" class="col-sm-3 control-label">Amount</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="ClaimAmt" id="inputSkills" placeholder="Amount" maxlength="10">
                        </div>
                      </div>
					   <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">currency</label>
                        <div class="col-sm-9">
                         
						  <select name="Curr" class="form-control">
                        <option value="USD">US$</option>
                        <option value="INR">INR</option>
                        
                      </select>
                        </div>
                      </div>
					    <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-10">
                      <input type="file" name="ClaimReceipt" id="exampleInputFile">
                     </div>
                    </div>
					  
					  <br>
					  <div class="form-group">
					  
                        <div class="col-sm-offset-4 col-sm-15">
                          <input type="submit" name="Add" class="btn btn-success">
						  <button type="reset" name="" class="btn btn-danger">Reset</button>
                        </div>

                      </div>
					 </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
			 <div class="col-md-7">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Expense Report</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
				
				
				<div class="row">
				<div class="col-md-1" >
				  <h4><a title="Show All Expense" href="UserProfile.php">&nbsp;<span class='glyphicon  glyphicon-refresh'></span></a></h4>
				</div>
<div class="col-md-5" >
<input type="text" class="form-control" name="Title">
				  
				</div>
<div class="col-md-3" >
	<input type="submit" name="BtnTitle" value="Genrate PDF Report" class="btn btn-success">			  
				</div>
<div class="col-md-3" >
		<a href="UserProfile.php?&DelAll=all" onclick="return confirm('Are you sure you want to delete all records?')" class="btn btn-danger"><i class="fa fa-trash o"></i> <span>Delete all</span></a>		  
				</div>
</div>
				<div class="col-xs-12 table-responsive">
                  <table class="table table-custom table-responsive table-hover" style="overflow-y: auto;">
                    <tr>
                      <th>Catagory</th>
                      <th>Description</th>
                      <th><a style=" text-decoration:none;"  href="UserProfile.php?&C=ClaimDate&ord=1" data-toggle="tooltip" data-placement="right" title="Sort expenses by date">DATE</a></th>
<th><a style=" text-decoration:none;" data-toggle="tooltip" data-placement="left" title="Sort expenses by Amount" href="UserProfile.php?&C=ClaimAmt&ord=1">&nbsp&nbsp&nbspAMOUNT&nbsp;&nbsp&nbsp</a></th>
                      <th class="glyphicon glyphicon-paperclip"></th>
                      <th>Action</th>
                    </tr>
                    
					<?php
include('dbcon.php');


 /* <input type='submit' class='btn btn-success' value='Upload File' name='rsuploadimg22' />
	   <input type='submit' class='btn btn-danger' value='Remove' name='removersrecpt22' />
	   <input type='file' name='file22' size='50' />
<input type='hidden' name='hiddenid22' value='$idno'>  */



  if(isset($_GET['removersrecpt1']))
  {
	 $getinmage=$_GET['hiddenimage'];
			$folder = "uploads/";
		unlink($folder.$getinmage);					   
	  $resettt='';
	  $getiddd=$_GET['hiddenid1'];
	  echo "$getiddd";
	  	   $sql = "UPDATE tbluserexpenses 
        SET ClaimReceipt=?	WHERE ClaimRowid=?";
$stmt = $dbh->prepare($sql);
$stmt->execute(array($resettt,$getiddd)); 
echo "<script>
alert('Removed Successfully');
window.location.href='UserProfile.php';
</script>";  
  }

  if(isset($_GET['removiimg']))
  {
	 $idofimageempt1=$_GET['removiimg'];
$result11="SELECT * FROM tbluserexpenses WHERE ClaimRowid=?";
					$stmt = $dbh->prepare($result11);
	$stmt->execute(array($idofimageempt1)); 
	while($row11 =$stmt->fetch())
	{
		
		$reciept=$row11['ClaimReceipt'];
		
		
		
	}		

$folder = "uploads/";
		unlink($folder.$reciept);
		$ClaimReceipt11='';
				$sql11 = "UPDATE tbluserexpenses 
			SET ClaimReceipt=?	WHERE ClaimRowid=?";
	$stmt = $dbh->prepare($sql11);
	$stmt->execute(array($ClaimReceipt11,$idofimageempt1)); 
				echo "<script>
	window.location.href='UserProfile.php';
	</script>"; 
  }






if (isset($_REQUEST['ClaimDate'])) 
{
	$ClaimDt = $_REQUEST['ClaimDate'];
	list($mm,$dd,$yyyy)=explode("/",$ClaimDt);
if(is_numeric($yyyy) && is_numeric($mm) && is_numeric($dd)) 
{
    $ClaimDate = $ClaimDt;
	
	$ExCategory = $_REQUEST['ExCategory'];
	$ClmAmt = $_REQUEST['ClaimAmt'];
	
	$countDot = substr_count($ClmAmt,".");
	list($rs,$ps) = explode('.',$ClmAmt);
	if(is_numeric($rs))
	{
		if($ps != null && is_numeric($ps) && $countDot == 1)
		{
			$dot = substr($ps,0,2);
			$ClaimAmt = $rs.".".$dot;
			
			$Curr = $_REQUEST['Curr'];
			if(isset($_REQUEST['Descr']))
			{
				$ClaimClass = stripslashes($_REQUEST['Descr']);
			}
		        else if(isset($_POST['hotelnm']) && isset($_POST['hotellocation']))
		        {
		                $ClaimClass = $_POST['hotelnm'].", ".$_POST['hotellocation'];
		        }
			else
			{
				$ClaimClass = '';
			}
		}
		else if(($ps == null || $ps == '') && $countDot == 0)
		{
			$ClaimAmt = $rs;
			$Curr = $_REQUEST['Curr'];
			if(isset($_REQUEST['Descr']))
			{
				$ClaimClass = stripslashes($_REQUEST['Descr']);
			}
		        else if(isset($_POST['hotelnm']) && isset($_POST['hotellocation']))
		        {
		                $ClaimClass = $_POST['hotelnm'].", ".$_POST['hotellocation'];
		        }
			else
			{
				$ClaimClass = '';
			}
		}
		else
		{
			echo "<Script>alert('Invalid Amount!');</script>";
		}
	}
	else
	{
		echo "<Script>alert('Invalid Amount!');</script>";
	}
}
else
{
	echo "<Script>alert('Invalid Date format!');</script>";
}
 
}
/* After add button clicked */	
if (isset($_POST['Add'])) 
{
		if (isset($_FILES['ClaimReceipt']))
		{
			$varCount = rand();
			$Receipt = $_FILES['ClaimReceipt'];
			$file_type= $_FILES['ClaimReceipt']['type'];			
			$file_path=$_FILES["ClaimReceipt"]["tmp_name"];

                        if($file_type == "image/jpeg")
                        {
                         $f_type = "jpeg";
                        }
                        else if($file_type == "image/png")
                        {
                          $f_type = "png";
                        }
                        else if($file_type == "image/jpg")
                        {
                          $f_type = "jpg";
                        }

			$file_name = $UserID."_".$varCount.".".$f_type;			
			if($file_type!= '' && ($file_type="image/jpeg" || $file_type="image/png" || $file_type="image/jpg"))
			{
				move_uploaded_file($file_path,"uploads/".$file_name);
				$ClaimReceipt = $file_name;
				$warning = '';
			}
			else
			{
				//echo $warning = "Please check format '.jpeg or .png' for attachments and its size < 500 kb";
			}
		}
		Else
		{   
			$ClaimReceipt = '';					
		}
                
                if($Curr != '')
                {
		   $stmt = $dbh->prepare("CALL sp_AddExpensesEntry(?,?,?,?,?,?,?)");	
		   $stmt ->execute(array($User,$ExCategory,$ClaimDate,$ClaimAmt,$ClaimClass,$ClaimReceipt,$Curr));
		   $dbh->connection = null;
                }
		$_POST = null;
		$_REQUEST = null;
		
}
 // Add button code
 
If(isset($_REQUEST['Delete'])) //delete a row
{
	$A = $_REQUEST['Delete'];
	$stmt = $dbh->prepare("CALL sp_DelAttachment(?,?)");
	$stmt->execute(array($User,$A));
	while($row = $stmt->fetch())
	{
		$folder = "uploads/";
		unlink($folder.$row[0]);
	}
	$stmt = $dbh->prepare("CALL sp_DelRow(?,?)");
	$stmt->execute(array($User,$A));
	$dbh->connection = null;
	$_POST = null;
	$_REQUEST = null;
	echo "<script>
	window.location.href='UserProfile.php';
	</script>"; 
}
if(isset($_REQUEST['DelAll'])) // delete all entries of user manually
{	
	$Del = $_REQUEST['DelAll'];
	$R = 0;
	$stmt = $dbh->prepare("CALL sp_DelAttachment(?,?)");
	$stmt->execute(array($User,$R));
	while($row = $stmt->fetch())
	{
		$folder = "uploads/";
		unlink($folder.$row[0]);
	}
	$rownum = 0;
	$stmt = $dbh->prepare("CALL sp_DelRow(?,?)");
	$stmt->execute(array($User,$rownum));


$dbh->connection = null;
unset($_REQUEST['DelAll']);
echo "<script>
	window.location.href='UserProfile.php';
	</script>"; 
}

if(isset($_REQUEST['Update'])) // Update entries of user manually
{
	 $class = stripslashes($_REQUEST['ECClass']);
	 $Amount = $_REQUEST['ECAmt'];
	 $dated = $_REQUEST['ECDate'];
	list($dd,$mm,$yyyy)=explode("/",$dated);
	if ((is_numeric($yyyy)) && (is_numeric($mm)) && (is_numeric($dd))) 
	{
	     list($rs,$ps)=explode(".",$Amount);
	     
	     $countDot = substr_count($Amount,".");
	     if(is_numeric($rs))
	     {
		
		
		if($ps != null && is_numeric($ps) && $countDot == 1)
		{
			$dot = substr($ps,0,2);
			$Amt = $rs.".".$dot;
			$U = $_REQUEST['Update'];
		}
		else if(($ps == null || $ps == '') && $countDot == 0)
		{
			$Amt = $rs;
			$U = $_REQUEST['Update'];
		}
		else
		{
			echo "<Script>alert('Invalid Amount!');</script>";
		}
		try
		{
		$stmt = $dbh->prepare("CALL sp_UpdateRow(?,?,?,?,?)");
		$stmt->execute(array($User,$class,$dated,$Amt,$U));
		$dbh->connection = null;
		//echo "updated";
		echo "<script>
			setTimeout(function() {
			document.getElementById('result').style.display = 'block';
			setTimeout(function() {
			           $('#result').show();
			           $('#result').fadeOut('slow');
			    },2000);
			});
			</script>";
		}
		catch(PDOException $ex)
		{
			$ex->getMessage();
		}
    }
    else
    {
        echo "<Script>alert('Invalid Amount!');</script>";
    }
}
else
{
echo "<Script>alert('Invalid date format!');</script>";
}
}
IF(isset($_REQUEST['C']))
{
	$C = $_REQUEST['C'];
}
else
{
	$C = "";
}
$stmt1 = $dbh->prepare("CALL sp_CategorySort(?,?)");
$stmt1->execute(array($User,$C));
$i = 0;
try
{
while ($row1 = $stmt1->fetch()) 
{
?>	
<tr class=m>
										<form action="" method="POST" name="Update" role="form" enctype="multipart/form-data">
												
												<td title="Sort by Category">
													<a size="9" href=UserProfile.php?&C=<?php echo $row1[0];?>><Label name="ECcategory"><strong><?php echo $row1[0]; ?></strong></label></a>
												</td>
												 
												<td><div class="form-group">
													<textarea class="form-control" maxlength="100" style="resize:vertical;" rows=1 cols="25" name="ECClass"><?php echo $row1[3]; ?></textarea>
													</div>
												</td>
												
												
												<td align=center>
													<input type="text" size="9" name="ECDate" value="<?php echo $row1[1]; ?>">
												</td>
												<td>
													₹&nbsp;&nbsp;<input type="text" size="9" maxlength="10"  name="ECAmt" value="<?php echo $row1[2]; ?>">
												</td>
												<td>
												<?php
												if($row1[5] != '')
												{
												
												//<center><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><img src=images/Attach-icon.png width="25px" height="22px" ></a></center>
																		
																		$idddd=$row1[4];
													 echo "<center><a href='' data-toggle='modal' role='button' data-target='#exceed$idddd' ><img src=images/Attach-icon.png width=15px height=12px /></a></center>";
												 echo"  <div id='modals'>
		  <div class='modal fade' id='exceed$idddd' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header' >
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <h4 class='modal-title' id='myModalLabel' >Image<h4>
      </div>
      <div class='modal-body'>
	  <img src='uploads/$row1[5]' class='img-responsive'><br />
    
<input type='hidden' name='hiddenid11' value='$idddd'> 
<br />
  
      </div>
      <div class='modal-footer'>
       <a href='popupfile.php?idd=$idddd' class='btn btn-success' >Change Receipt</a>
 <input type='hidden' name='hiddenimage11' value='$row1[5]'> 
	   <input type='hidden' name='hiddenidrs11' value='$idddd'> 
	   
         <a href='UserProfile.php?removiimg=$idddd' class='btn btn-danger' >Remove</a>
		 </div>
    </div>
  </div>
</div>";
						
													
												}
												else{
													$idempty=$row1[4];
													 echo "<center><a href='popupfile.php?idd=$idempty' style='color:black;text-decoration:none;'><span class='glyphicon glyphicon-plus-sign'></span></a></center>";
												
											


											}
												?>
												</td>
												<td>
												<a href="UserProfile.php?&Delete=<?php echo $row1[4];?>" onclick="alert('Record deleted successfully.')" data-toggle="tooltip" data-placement="right" title="Delete this expense"><span class="glyphicon glyphicon-trash"></span></a>
												<input type=hidden value="<?php echo $row1[4]; ?>" name="Update">
												&nbsp;<input type=submit  value=" " class="btn" id="ibutton" data-toggle="tooltip" data-placement="right" title="Update this expense">
												</td>
<!-- Modal -->
							
										</form>
									</tr>
<?php
}
}
catch(PDOException $ex)
{
   //echo "No records available";
}

$stmt1 = $dbh->prepare("CALL sp_SumOfCategory(?,?)");
$stmt1->execute(array($User,$C));
$result1 = $stmt1->fetchColumn();
if($result1 != '')
{
list($rup,$ps)=explode(".",$result1 );
$paise = substr($ps,0,2);
$InrAmt = $rup.".".$paise;
?>

									<tr bgcolor="#D8D8D8" style="color:;">
										
														<td ></td><td ></td>
														<td align="right"><strong>Total:</td>
														<td ><strong><?php echo "₹ ".$InrAmt; ?></strong></td>
														<td ></td><td ></td>
												 
									</tr>

<?php 
}
$dbh->connection = null;
include('dbcon.php');
IF(isset($_REQUEST['C']))
{
	$C = $_REQUEST['C'];
}
else
{
	$C = '';
}

$stmt = $dbh->prepare("CALL sp_DCategorySort(?,?)");
$stmt->execute(array($User,$C));
$i = 0;
try
{
while ($row = $stmt->fetch()) 
{
?>		
									<tr >
										<form action="" method="POST" name="Update" role="form" enctype="multipart/form-data">
												<td title="Sort by Category">
													<a href=UserProfile.php?&C=<?php echo $row[0];?>><Label name="ECcategory"><strong><?php echo $row[0]; ?></strong></label></a>
												</td>
												<td><div class="form-group">
													<textarea class="form-control"   maxlength="100" style="resize:vertical;" rows=1 cols="25" name="ECClass"><?php echo $row[3]; ?></textarea>
												</div>
												</td>
												<td align=center>
													<input type="text" size="9" name="ECDate" value="<?php echo $row[1]; ?>">
												</td>
												<td>
													$&nbsp;&nbsp;<input type="text" size="9" name="ECAmt" value="<?php echo $row[2]; ?>">
												</td>
												<td>
												<?php
												if($row[5] != '')
												{
												
												//<center><a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><img src=images/Attach-icon.png width="25px" height="22px" ></a></center>
																		
																		$iddddd=$row[4];
													 echo "<center><a href='' data-toggle='modal' role='button'  data-target='#exceed$iddddd' ><img src=images/Attach-icon.png width=15px height=12px /></a></center>";
												 echo"  <div id='modals'>
		  <div class='modal fade' id='exceed$iddddd' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header' >
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <h4 class='modal-title' id='myModalLabel' >Image<h4>
      </div>
      <div class='modal-body'>
	  <img src='uploads/$row[5]' class='img-responsive'><br />
      

<input type='hidden' name='hiddenid1' value='$iddddd'> 
<br />
  
      </div>
      <div class='modal-footer'>
       <a href='popupfile.php?idd=$iddddd' class='btn btn-success'>Change Receipt</a>
 <input type='hidden' name='hiddenimage' value='$row[5]'> 
	   <input type='hidden' name='hiddenidrs1' value='$iddddd'> 
	<a href='UserProfile.php?removiimg=$iddddd' class='btn btn-danger' >Remove</a>
         </div>
    </div>
  </div>
</div>";
						
													
}
else{
	$idempty=$row[4];
	
	 echo "<center><a href='popupfile.php?idd=$idempty' style='color:black;text-decoration:none;'><span class='glyphicon glyphicon-plus-sign'></a></center>";


	}
?>
												</td>
												<td >
												<a  href="UserProfile.php?&Delete=<?php echo $row[4];?>" onclick="alert('Record deleted successfully.')" data-toggle="tooltip" data-placement="right" title="Delete this expense"> <span class="glyphicon glyphicon-trash"></span> </a>
												<input type=hidden value="<?php echo $row[4]; ?>" name="Update">
												&nbsp;<input type=submit value=" " class="btn" id="ibutton" data-toggle="tooltip" data-placement="right" title="Update this expense">
												</td>
<!-- Modal -->

										</form>
									</tr>
<?php
}
}
catch(PDOException $ex)
{
   //echo "No records available";
}
									$stmt = $dbh->prepare("CALL sp_DSumOfCategory(?,?)");
									$stmt->execute(array($User,$C));
									$rowcount = $stmt->fetchColumn();
									if($rowcount != '')
									{
										list($rup,$ps)=explode(".",$rowcount );
										$paise = substr($ps,0,2);
										$InrAmt = $rup.".".$paise;
?>
									
															<tr bgcolor="#D8D8D8" style="color:;">
																<td></td><td ></td>
																<td align="right"><strong>Total:</td>
																<td><strong><?php echo "$ ".$rowcount; ?></strong></td>
																<td ></td><td ></td>
															 </tr>
														
<?php
									}
									?>
					
              
			
			</table>
				  </div>    
                </div><!-- /.box-body -->
               
              </div><!-- /.box -->

              
            </div><!-- /.col --></div><!-- /.row -->
			</div><!-- /.container -->
			
		</div><!-- /.row -->
      </div><!-- /.container -->
 </section>
    </div><!-- ./content-wrapper -->
      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
		
        <strong>Copyright &copy; 201622 <a href="#">Company</a>.</strong> All rights reserved.
      </footer>
<!-- Control Sidebar -->
    
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      
      <!-- Control Sidebar -->
     
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
   

   </div><!-- ./wrapper -->

     <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
<!--Datepicker code start here-->
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <!--Datepicker code end here-->

   



<!--POPUP FOR ADD RECEIPT-->
<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal_addReceipt" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Add Receipt</h4></center>
        </div>
        <div class="modal-body">
          <a href="www.expensegoblin.net">ExpenseGoblin</a>
        </div>
        <!--div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div-->
      </div>
      
    </div>
  </div>
  
</div>



<!--POPUP FOR EDIT SAVED REPORTS-->
<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal_editSavedReports" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Add Receipt</h4></center>
        </div>
        <div class="modal-body">
          <a herf="www.expensegoblin.net">Expense Goblin</a>
        </div>
        <!--div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div-->
      </div>
      
    </div>
  </div>
  
</div>

<!--POPUP FOR EMAIL SAVED REPORTS-->
<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal_emailSavedReports" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Add Receipt</h4></center>
        </div>
        <div class="modal-body">
          <a herf="www.expensegoblin.net">Expense Goblin</a>
        </div>
        <!--div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div-->
      </div>
      
    </div>
  </div>
  
</div>
  </body>
</html>