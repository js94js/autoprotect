<html>
	<head>
	
		<link rel="stylesheet" href="css/bootstrap.min.css">

	</head>
	
	<body>
	<?php 
	include 'class_primenumbertable.php';
	include 'functions.php';
	
	// the upper limit is 100 by default and can not be more than 1000
	if (!isset($_POST['Limit'])){
		$_POST['Limit'] = 100;
	}
	if ($_POST['Limit'] > 1000){
		$_POST['Limit'] = 1000;
	}
	if ($_POST['Limit'] < 1){
		$_POST['Limit'] = 1;
	}
	$primeNumberTable = new PrimeNumberTable();
	$primeNumberTable->setUpperLimit($_POST['Limit']);
	?>
	
	<div class="container-fluid">
		<div class=" p-5 m-2">
			<h2 class="">Prime Number Table</h2>
			<form action="" method="post">
			
				<div class="row align-items-end">
					<div class="col-lg-2 col-4 form-group">
						<label for="Limit">Upper Limit</label>
						<input max="1000" min="1" type="number" class="form-control" name="Limit" value="<?php echo $_POST['Limit']; ?>" />
					</div>
					
					
					
					<div class="col-lg-2 col-4 form-group">
						<button type="submit" class="btn btn-success">Update Table</button>
					</div>
				</div>
				
				<hr />
				
				
				
			</form>
			<div class="table-responsive">
				<?php 
				$primeNumberTable->display();
				?>
			</div>
		</div>
	</div>
	</body>


</html>