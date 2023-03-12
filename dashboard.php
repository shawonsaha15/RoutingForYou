<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
	<!--Navbar-->
	<?php include('./view/header_loggedin.php'); ?>

	<!--Body-->
	<div class="container">
		<div class="row">
			<div class="col-4">
			</div>
			<div class="col-4">
				<form>
					<div class="form-row">
						<div class="form-group">
							<label for="staticEmail">Email</label>
							<input readonly class="form-control-plaintext" type="text" id="staticEmail" value="">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Password</label>
							<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<label for="inputAddress">Address</label>
						<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
					</div>
					<div class="form-group">
						<label for="inputAddress2">Address 2</label>
						<input type="text" class="form-control" id="inputAddress2"
							placeholder="Apartment, studio, or floor">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputCity">City</label>
							<input type="text" class="form-control" id="inputCity">
						</div>
						<div class="form-group col-md-4">
							<label for="inputState">State</label>
							<select id="inputState" class="form-control">
								<option selected>Choose...</option>
								<option>...</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="inputZip">Zip</label>
							<input type="text" class="form-control" id="inputZip">
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								I agree all details are correctly insert.
							</label>
						</div>
					</div>
					<button type="submit" class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>

	<!--Footer-->
	<?php include('./view/footer.php'); ?>




	<script>
		let subMenu = document.getElementById("subMenu");

		function toggleMenu() {
			subMenu.classList.toggle("open-menu");
		}
	</script>
</body>

</html>