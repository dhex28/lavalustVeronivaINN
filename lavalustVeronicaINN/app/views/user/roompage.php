<div class="hero-wrap" style="background-image: url('public/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/home">Home</a></span> <span>About</span></p>
	            <h1 class="mb-4 bread">Rooms</h1>
            </div>
          </div>
        </div>
      </div>
    </div>



<section class="ftco-section bg-light">
    <div class="container">
        <div class="col-lg-9">
		<div class="row">
    <?php foreach ($data as $info) : ?>
        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room">
                <div class="image-container">
                    <img src="<?= $info['roomimage']; ?>"  class="img-fluid">
                </div>
                <div class="text p-3 text-center">
                    <h3 class="mb-3"><?= $info['room_name']; ?></h3>
                    <p><span class="price mr-2">₱<?= $info['price']; ?></span> <span class="per">per night</span></p>
                    <ul class="list">
                        <li><span>Max:</span> <?= $info['max_person']; ?> Persons</li>
                        <li><span>View:</span> <?= $info['view']; ?></li>
                        <li><span>Bed:</span> <?= $info['bed']; ?></li>
                    </ul>
                    <hr>
					
					<p class="pt-1"><a class="btn-custom bookNowBtn" data-toggle="modal" data-target="#bookNowModal" data-room_name="<?= $info['room_name']; ?>">Book Now <span class="icon-long-arrow-right"></span></a>
</p>
                </div>
            </div>
        </div>
		
    <?php endforeach; ?>
</div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="bookNowModal" tabindex="-1" role="dialog" aria-labelledby="bookNowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookNowModalLabel">Booking Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url('addbook');?>" method="post" id="bookingForm">
            <div class="modal-body">
                <!-- Booking Form -->
				<div class="form-group">
                        <label for="roomName">RoomName</label>
                        <input name="roomName" type="text" class="form-control" id="roomName" readonly>
                    </div>

                    <div class="form-group">
                        <label for="check_in_date">Check-in Date:</label>
                        <input name="check_in_date" type="date" class="form-control" id="check_in_date" required>
                    </div>
                    <div class="form-group">
                        <label for="check_out_date">Check-out Date:</label>
                        <input name="check_out_date" type="date" class="form-control" id="check_out_date" required>
                    </div>
                    <div class="form-group">
                        <label for="special_requests">Special Requests:</label>
                        <textarea name="special_requests" class="form-control" id="special_requests" rows="3"></textarea>
                    </div>


                    <a>Contact Information</a>
                    <br>
                    <br>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input name="name" placeholder="  name" type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input name="email" placeholder="sample@email.com" type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input name="phone" placeholder="sample +639012371263" type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input name="address" placeholder=" address" type="text" class="form-control" id="address" required>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Book Now</button>  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               
                <!-- End Booking Form -->
            </div>
            </form>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function () {
    $('.bookNowBtn').click(function () {
        // Get the room name from the clicked button
        var roomName = $(this).data('room_name');

        // Display the room name in the modal
        $('#roomName').val(roomName);

        // Show the modal
        $('#bookNowModal').modal('show');
    });
});
</script>
