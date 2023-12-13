<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>DASHBOARD</title>
	<link rel="shortcut icon" type="image/x-icon" href="../assets/img/veronicalogo.png">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="../assets/css/feathericon.min.css">
	<link rel="stylesheet" href="../assets/plugins/morris/morris.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="../assets/css/style.css"> </head>

<body>
	<!-- topbar -->
	<?php include 'app/views/admin/topbar.php'?>

	<!-- sidebar -->
	<?php include 'app/views/admin/sidebar.php'?>

		
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Add Room</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
					<form action="<?php echo site_url('/add');?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="room_name">Room Name</label>
        <input type="text" name="room_name" id="room_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="int" name="price" id="price" class="form-control">
    </div>
    <div class="form-group">
        <label for="max_person">Max Person</label>
        <input type="number" name="max_person" id="max_person" class="form-control">
    </div>
    <div class="form-group">
        <label for="view">View</label>
        <input type="text" name="view" id="view" class="form-control">
    </div>
    <div class="form-group">
        <label for="bed">Bed</label>
        <input type="text" name="bed" id="bed" class="form-control">
    </div>
	<!-- <div class="mb-1"> 
                <label for="roomimage" class="form-label">Image</label>
                <input type="file" name="roomimage" id="roomimage" class="form-control" required>
    </div> -->

    <div class="mt-4">
        <input class="btn btn-primary btn-lg" type="submit" value="Submit">
    </div>
</form>
	
			</div>
			</div>
			</div>
		</div>
	</div>
	<script src="../assets/js/jquery-3.5.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/moment.min.js"></script>
	<script src="../assets/js/select2.min.js"></script>
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/raphael/raphael.min.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="../assets/js/script.js"></script>
	<script>
	$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script>
</body>

</html>