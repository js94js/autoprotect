<html>
	<head>
	
		<link rel="stylesheet" href="css/bootstrap.min.css">

	</head>
	
	<body>
	<?php 
	include 'class_multiplicationtable.php';
	
	// there must be at least 12 rows and colunns 
	
	if (!isset($_POST['Rows']) || $_POST['Rows'] < 12){
		$_POST['Rows'] = 12;
	}
	if (!isset($_POST['Columns']) || $_POST['Columns'] < 12){
		$_POST['Columns'] = 12;
	}
	
	$multiplicationTable = new MultiplicationTable();
	$multiplicationTable->setRows($_POST['Rows']);
	$multiplicationTable->setColumns($_POST['Columns']);
	?>
	
	<div class="container-fluid">
		<div class="p-5 m-2">
			<h2 class="">Multiplication Table</h2>
			<form action="" method="post">
			
				<div class="row align-items-end">
					<div class="col-lg-2 col-4 form-group">
						<label for="Columns">Columns</label>
						<input min="12" type="number" class="form-control" name="Columns" value="<?php echo $_POST['Columns']; ?>" />
					</div>
					
					
					<div class="col-lg-2 col-4 form-group">
						<label for="Rows">Rows</label>
						<input min="12" type="number" class="form-control" name="Rows" value="<?php echo $_POST['Rows']; ?>" />
					</div>
					
					<div class="col-lg-2 col-4 form-group">
						<button type="submit" class="btn btn-success">Update Table</button>
					</div>
				</div>
				
				<hr />
				
				
				
			</form>
			<div class="table-responsive">
				<?php 
				$multiplicationTable->display();
				?>
			</div>
		</div>
	</div>
	</body>


</html>