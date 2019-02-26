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
		<table class="table table-hover " style='background:white'>
			<thead>
				<tr>
					<th scope="col">Sno.</th>
					<th scope="col">Employee Id</th>
					<th scope="col">Employee Name</th>
					<th scope="col">Product Id</th>
					<th scope="col">Product Name</th>
					<th scope="col">Dimension</th>
					<th scope="col">Timestamp</th>
					<th scope="col">Quantity Unit</th>
					<th scope="col">Department</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include('dbcon.php');
				$qry = "SELECT * FROM `inward_stock`";
				$run = mysqli_query($conn,$qry);
				if(mysqli_num_rows($run)>0)
				{
					$count = 0;
					while($dada = mysqli_fetch_assoc($run))
					{
						$count++;
						?>
						<tr class="text-center"style="">
							<th scope="row"><?php echo $count; ?></th>
							<td><?php echo $dada['emp_id']; ?></td>
							<td><?php echo $dada['emp_name']; ?></td>
							<td><?php echo $dada['product_id']; ?></td>
							<td><?php echo $dada['product_name']; ?></td>
							<td><?php echo $dada['dimension']; ?></td>
							<td><?php echo $dada['timestamp']; ?></td>
							<td><?php echo $dada['quantity']; ?></td>
							<td><?php echo $dada['dept']; ?></td>
						</tr>
				<?php
					}
				}
				else
				{
					
					//$dada = mysqli_fetch_assoc($run);
					//echo $data;
				}
				mysqli_close($conn);
			?>
		</tbody>
		</table>
		
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
