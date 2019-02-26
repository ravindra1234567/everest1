<?php
	include('dbcon.php');
	if(isset($_GET['login']))
	{
		$emp_id = $_REQUEST['emp_id'];
		$pass = $_REQUEST['pass'];
		//echo $emp_id." <br>".$pass;
		$qry = "SELECT * FROM `user` WHERE `emp_id`='$emp_id' AND `pass` ='$pass' ";
		$run = mysqli_query($conn,$qry);
		$row = mysqli_num_rows($run);
		$data = mysqli_fetch_assoc($run);
		if($row<1)
		{
		?>
		<script>
			alert("Name And Password Miss Match");
			//window.open('login.php','_self');
		</script>
		<?php
		}
		else
		{
			$sno = $data['sno'];
			$emp_id = $data['emp_id'];
			$emp_dept = $data['emp_dept'];
			$pass = $data['pass'];
			$privilege = $data['privilege'];
			session_start();
			$_SESSION['sno']=$sno;
			$_SESSION['emp_id']=$emp_id;
			$_SESSION['emp_dept']=$emp_dept;
			//echo $privilege ;


			if($emp_dept=='testing')
			{
				header("Location: testing_dashboard.php?emp_id1=$emp_id&pass1=$pass"); 
				exit;
			}
			
			
			
			
			else if($emp_dept=='admin')
			{	
			
				header('location:admin_dashboard.php?emp_id1=$emp_id&pass1=$pass'); 
				exit;
			}
			
			
			
			else if($emp_dept=='store')
			{
			
				header("Location: store_dashboard.php?emp_id1=$emp_id&pass1=$pass"); 
				exit;
			}
			
			else if($emp_dept=='superuser')
			{
				
				header("Location: super_dashboard.php?emp_id1=$emp_id&pass1=$pass"); 
				exit;
			}
			
			
			else if($emp_dept=='manufacturing')
			{
				header("Location: manufacturing_dashboard.php?emp_id1=$emp_id&pass1=$pass"); 
				exit;
			}
			
			else if($emp_dept=='operator')
			{
				header("Location: operator_dashboard.php?emp_id1=$emp_id&pass1=$pass"); 
				exit;
			}
			
			else if($emp_dept=='manager')
			{
				header("Location: manager_dashboard.php?emp_id1=$emp_id&pass1=$pass"); 
				exit;
			}
			
			else if($emp_dept=='sales')
			{
			
				header("Location: sales_dashboard.php?emp_id1=$emp_id&pass1=$pass"); 
				exit;
			}
			
			
			else
			{
				header("Location: hod_dashboard.php?emp_id1=$emp_id&pass1=$pass"); 
				exit;
			}
			
		}
	}
	?>
	
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
		
        <title>Startmin - Bootstrap Admin Theme</title>
		
        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
		
        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">
		
        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">
		
        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body >
	
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title text-center">Login</h3>
					</div>
					<div class="panel-body">
						<form role="form" action="login.php" method="get">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="emp_id" type="text" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="pass" type="password" value="">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me">Remember Me
									</label>
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<input class="btn btn-lg btn-success btn-block" name="login" type="submit" value="Login" />
								</fieldset>
								</form>
								</div>
								</div>
								</div>
								</div>
								</div>
								
								<!-- jQuery -->
								<script src="../js/jquery.min.js"></script>
								
								<!-- Bootstrap Core JavaScript -->
								<script src="../js/bootstrap.min.js"></script>
								
								<!-- Metis Menu Plugin JavaScript -->
								<script src="../js/metisMenu.min.js"></script>
								
								<!-- Custom Theme JavaScript -->
								<script src="../js/startmin.js"></script>
								
								</body>
							</html>
														