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
                <!-- <div id="paypal-button-container"></div> -->
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
                    <div class="form-group">
                    <label for="payment">Payment:</label>
                    <input name="payment" placeholder=" payment" type="text" class="form-control" id="payment" readonly required>
                    </div>
                    <div class="form-group">
    <label for="paymentMethod">Payment Method:</label>
    <select name="paymentMethod" id="paymentMethod" class="form-control" required>
        <option value="paypal">PayPal</option>
        <option value="cash">Cash on Delivery</option>
        <option value="gcash">GCash</option> <!-- Add GCash option -->
    </select>
</div>
                    <h4>Payment</h4>
                    <div id="paypal-button-container"></div>
                    <br>
                    <button id="submitBtn" type="submit" class="btn btn-primary" disabled>Book Now</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                                        </div>
                <!-- End Booking Form -->

            </div>
            </form>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AanR1xv4KbxqbPuHi4hSXJUV7qHoiUAYJbXpmO1wDZQ5nzxrLbUdNrIhhoO6iwe7RgnltiiM2b9TYFpD&disable-funding=credit,card&currency=PHP"></script>

<script>
$(document).ready(function () {
    $('.bookNowBtn').click(function () {
        // Get the room name from the clicked button
        var roomName = $(this).data('room_name');
        var paymentMethod = $('#paymentMethod').val();

        if (paymentMethod === 'gcash') {
        var totalAmount = 5000; // Replace with your logic to get the total amount
        $('#payment').val('₱' + totalAmount.toFixed(2)).prop('required', true);
        $('#submitBtn').prop('disabled', false);
        $('#payment_status').val('Pending'); // Update payment status if needed
    }

        // Display the room name in the modal
        $('#roomName').val(roomName);

        // Show the modal
        $('#bookNowModal').modal('show');
    });

    paypal.Buttons({
        createOrder: function (data, actions) {
            // Get the total amount from your logic or variable (totalAmount)
            var totalAmount = 5000;

            return actions.order.create({
                purchase_units: [{
                    amount: {
                        currency_code: "PHP", // Change USD to PHP here
                        value: totalAmount
                    }
                }]
            });
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (details) {
                console.log(details);
                alert('Transaction completed by ' + details.payer.name.given_name);
                // document.querySelector('form').submit(); // Submit the form after successful payment
                var paidAmount = parseFloat(details.purchase_units[0].amount.value);

// Get the total amount from your logic or variable
var totalAmount = 5000; // Replace this with your logic to get the total amount

// Calculate the remaining balance
var remainingBalance = totalAmount - paidAmount;
var totalAmount = <?= $info['price']; ?>;


// Update the 'Payment' field with the remaining balance
$('#payment').val('₱' + remainingBalance.toFixed(2)).prop('required', true); // Update the 'Payment' field and set it as required
$('#submitBtn').prop('disabled', false);
$('#payment_status').val('Completed');
            });
        },onError: function (err) {
            console.error('Error:', err);
        },
    }).render('#paypal-button-container'); // Replace 'paypal-button-container' with your button container ID
});
</script>