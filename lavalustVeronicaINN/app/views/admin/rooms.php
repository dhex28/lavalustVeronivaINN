<div class="page-wrapper">
			<div class="content container-fluid">

					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">All Rooms</h4> <a href="/addroompage" class="btn btn-primary float-right veiwbutton">Add Room</a> </div>
					
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
                                <table class="datatable table table-stripped table table-hover table-center mb-0">
    <tr>
        <th>Room Name</th>
        <th>Price</th>
        <th>Max Person</th>
        <th>View</th>
        <th>Bed</th>
        <th>Image</th>
        

        
        
    </tr>
    <?php foreach ($data as $info) : ?>
        <tr>
            <td><?= $info['room_name'] ?></td>
            <td><?= $info['price'] ?></td>
            <td><?= $info['max_person'] ?></td>
            <td><?= $info['view'] ?></td>
            <td><?= $info['bed'] ?></td>
            <td><?= $info['roomimage'] ?></td>
            <td class="text-right">
			<div class="dropdown dropdown-action"> <a href="" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
			<div class="dropdown-menu dropdown-menu-right"> 
				<a class="dropdown-item" href="<?= site_url('edit/' . $info['id']) ?>"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
				<a class="dropdown-item" href="<?= site_url('delete/' . $info['id']); ?>"><i class="fas fa-trash-alt m-r-5"></i> Delete</a> </div>

		</div>
		</td>

        </tr>
    <?php endforeach; ?>
</table>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>