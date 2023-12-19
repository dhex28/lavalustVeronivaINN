<div class="page-wrapper">
			<div class="content container-fluid">

					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">All Pending Booking</h4> </div>
					
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
                                <table class="datatable table table-stripped table table-hover table-center mb-0">
    <tr>
        <th>Room</th>
        <th>Check In Date</th>
        <th>Check out date</th>
        <th>Special Request</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Status</th>
        <th>Completed</th>

        

        
        
    </tr>
    <?php foreach ($data as $info) : ?>
        <?php if ($info['status'] === 'Pending') : ?>

        <tr>
        <td><?= $info['roomName'] ?></td>
        <td><?= $info['check_in_date'] ?></td>
            <td><?= $info['check_out_date'] ?></td>
            <td><?= $info['special_requests'] ?></td>
            <td><?= $info['name'] ?></td>
            <td><?= $info['email'] ?></td>
            <td><?= $info['phone'] ?></td>
            <td><?= $info['address'] ?></td>
            <td><?= $info['status'] ?></td>
            <td><?= $info['payment_status'] ?></td>
            <td class="text-right">
			<div class="dropdown dropdown-action"> <a href="" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item view-booking" href="#" data-toggle="modal" data-target="#viewModal" data-booking='<?= json_encode($info); ?>'>
                        <i class="fas fa-eye m-r-5"></i> View
                    </a>
                    <a class="dropdown-item" href="<?= site_url('approve/' . $info['id']) ?>">
                        <i class="fas fa-check m-r-5"></i> Approve
                    </a>
                    <a class="dropdown-item" href="<?= site_url('decline/' . $info['id']); ?>">
                        <i class="fas fa-times m-r-5"></i> Decline
                    </a>
                </div>

        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>






								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


            <!-- approve booking table -->

          
			<div class="content container-fluid"> 

					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">All Approved Booking</h4> </div>
					
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
                                <table class="datatable table table-stripped table table-hover table-center mb-0">
    <tr>
        <th>Room</th>
        <th>Check In Date</th>
        <th>Check out date</th>
        <th>Special Request</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Status</th>
        <th>Completed</th>
        

        
        
    </tr>
    <?php foreach ($data as $info) : ?>
        <?php if ($info['status'] === 'Approved') : ?>

        <tr>
        <td><?= $info['roomName'] ?></td>
        <td><?= $info['check_in_date'] ?></td>
            <td><?= $info['check_out_date'] ?></td>
            <td><?= $info['special_requests'] ?></td>
            <td><?= $info['name'] ?></td>
            <td><?= $info['email'] ?></td>
            <td><?= $info['phone'] ?></td>
            <td><?= $info['address'] ?></td>
            <td><?= $info['status'] ?></td>
            <td><?= $info['payment_status'] ?></td>
            <td class="text-right">
			<div class="dropdown dropdown-action"> <a href="" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
			<div class="dropdown-menu dropdown-menu-right"> 
            <a class="dropdown-item view-booking" href="#" data-toggle="modal" data-target="#viewModal" data-booking='<?= json_encode($info); ?>'>
                <i class="fas fa-eye m-r-5"></i> View
            </a>
            <a class="dropdown-item" href="<?= site_url('decline/' . $info['id']); ?>"><i class="fas fa-times m-r-5"></i> Decline </a> 
        </div>
		</div>

        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>

								</div>
							</div>
						</div>

            <!-- end of approve table -->


            <!-- Decline booking table -->

			<div class="content container-fluid"> 

            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-5">
                        <h4 class="card-title float-left mt-2">All Decline Booking</h4> </div>

            </div>
            </div>
            <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card">
                        <div class="table-responsive">
                        <table class="datatable table table-stripped table table-hover table-center mb-0">
            <tr>
            <th>Room</th>
            <th>Check In Date</th>
            <th>Check out date</th>
            <th>Special Request</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Status</th>




            </tr>
            <?php foreach ($data as $info) : ?>
                <?php if ($info['status'] === 'Declined') : ?>

            <tr>
            <td><?= $info['roomName'] ?></td>
            <td><?= $info['check_in_date'] ?></td>
            <td><?= $info['check_out_date'] ?></td>
            <td><?= $info['special_requests'] ?></td>
            <td><?= $info['name'] ?></td>
            <td><?= $info['email'] ?></td>
            <td><?= $info['phone'] ?></td>
            <td><?= $info['address'] ?></td>
            <td><?= $info['status'] ?></td>
            
            <td class="text-right">
            <div class="dropdown dropdown-action"> <a href="" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
            <div class="dropdown-menu dropdown-menu-right"> 
            <a class="dropdown-item view-booking" href="#" data-toggle="modal" data-target="#viewModal" data-booking='<?= json_encode($info); ?>'>
            <i class="fas fa-eye m-r-5"></i> View
            </a>
            <a class="dropdown-item" href="<?= site_url('approve/' . $info['id']) ?>"><i class="fas fa-pencil-alt m-r-5"></i> Approve</a> 
            </div>
            </div>

            </tr>
            <?php endif; ?>
            <?php endforeach; ?>
            </table>

                        </div>
                    </div>
                </div>
					


    <!-- Modal for Viewing Booking Details -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Booking Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
        <!-- Add the booking details here -->
        <p><strong>Room:</strong> <span id="roomName"></span></p>
        <p><strong>Check In Date:</strong> <span id="checkInDate"></span></p>
        <p><strong>Check Out Date:</strong> <span id="checkOutDate"></span></p>
        <p><strong>Special Request:</strong> <span id="specialRequest"></span></p>
        <p><strong>Name:</strong> <span id="bookingName"></span></p>
        <p><strong>Email:</strong> <span id="bookingEmail"></span></p>
        <p><strong>Phone Number:</strong> <span id="bookingPhone"></span></p>
        <p><strong>Address:</strong> <span id="bookingAddress"></span></p>
        <p><strong>Status:</strong> <span id="bookingStatus"></span></p>
        <p><strong>Completed:</strong> <span id="payment_status"></span></p>
    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <script>
    $(document).ready(function () {
        // Event handler for clicking the "View" button
        $('.view-booking').on('click', function () {
            var bookingDetails = $(this).data('booking');

            // Set booking details in the modal
            $('#roomName').text(bookingDetails.roomName);
            $('#checkInDate').text(bookingDetails.check_in_date);
            $('#checkOutDate').text(bookingDetails.check_out_date);
            $('#specialRequest').text(bookingDetails.special_requests);
            $('#bookingName').text(bookingDetails.name);
            $('#bookingEmail').text(bookingDetails.email);
            $('#bookingPhone').text(bookingDetails.phone);
            $('#bookingAddress').text(bookingDetails.address);
            $('#bookingStatus').text(bookingDetails.status);
            $('#payment_status').text(bookingDetails.payment_status);


            // Show the modal
            $('#viewModal').modal('show');
        });
    });
</script>