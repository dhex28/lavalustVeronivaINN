<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Room Management</title>
</head>
<body>

  <div class="container mt-5">
    <h2>Room Information</h2>
    <form>
      <div class="mb-3">
        <label for="room_name" class="form-label">Room Name</label>
        <input type="text" class="form-control" id="room" placeholder="Enter Room Name">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" placeholder="Enter Price">
      </div>
      <div class="mb-3">
        <label for="max_person" class="form-label">Max Persons</label>
        <input type="text" class="form-control" id="max_person" placeholder="Enter Max Persons">
      </div>
      <div class="mb-3">
        <label for="view" class="form-label">View</label>
        <input type="text" class="form-control" id="view" placeholder="Enter View">
      </div>
      <div class="mb-3">
        <label for="bed" class="form-label">Bed </label>
        <input type="text" class="form-control" id="bed" placeholder="Enter Bed ">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <hr>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add Room</title>
    <style>
        /* Custom CSS for slate theme */
        body {
            background-color: #000 !important;
            color: #fff;
        }
        .vh-100 {
            min-height: 100vh;
        }
        .gradient-custom {
            background: linear-gradient(45deg, #333, #555);
        }
        .card {
            background-color: #444;
            border: 1px solid #555;
        }
        .card-body {
            color: #fff;
        }
        .form-control {
            background-color: #555;
            color: #fff;
        }
        .form-control:focus {
            background-color: #444;
            color: #fff;
        }
        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body class="bg-dark">
    <section class="vh-100 gradient-custom">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Add Room Info</h3>
                            <form action="http://localhost:8080/add<?=$data['id'];?>" method="post">

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
                                <div class="form-group">
                                    <label for="bed">Bed</label>
                                    <input type="text" name="bed" id="bed" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="room_image">Image</label>
                                    <input type="file" name="room_image" id="room_image" class="form-control">
                                </div>
                                <div class="mt-4">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
