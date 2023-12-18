<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Dark Slate theme CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Your custom CSS -->
  <style>
    body {
      background-color: #2c3e50; /* Dark slate background color */
      color: #ecf0f1; /* Text color */
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      align-items: center;
    }

    .auth-form-light {
      background-color: #34495e; /* Darker slate form background color */
      color: #ecf0f1; /* Form text color */
      border-radius: 10px; /* Optional: Rounded corners for the form */
      padding: 20px; /* Optional: Add padding for better appearance */
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1), 0 0 40px rgba(0, 0, 0, 0.1); /* Enhanced box shadow */
      margin-top: 50px; /* Adjust margin-top to lower the form */
    }

    .auth-form-light h4,
    .auth-form-light h6 {
      color: #ecf0f1; /* Heading text color */
    }

    .auth-form-light .btn-primary {
      background-color: #3498db; /* Button background color */
      border-color: #3498db; /* Button border color */
    }

    .auth-form-light .btn-primary:hover {
      background-color: #2980b9; /* Button background color on hover */
      border-color: #2980b9; /* Button border color on hover */
    }

    .create-account-link {
      text-align: center;
      margin-top: 20px;
      color: #ecf0f1;
    }

    .create-account-link a {
      color: #3498db; /* Adjust the color of the create account link */
    }
  </style>
  <!-- End inject -->
  <link rel="shortcut icon" href="../public/images/favicon.png" />
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
          <h4 class="text-center">Hello! let's get started</h4>
          <h6 class="font-weight-light text-center">Sign in to continue.</h6>
          <?php $LAVA =& lava_instance(); ?>
          <?php echo $LAVA->form_validation->errors(); ?>    
          <?php if (isset($error_message)) { ?>
             <div class="alert alert-danger"><?php echo $error_message; ?></div>
            <?php } ?>
            <?php if (isset($success_message)) { ?>
             <div class="alert alert-success"><?php echo $success_message; ?></div>
            <?php } ?>
          <form action="<?= site_url('validate_login'); ?> " method="post">
            <div class="form-group">
              <input type="email" class="form-control form-control-lg" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" >
            </div>
            <div class="mt-3 d-flex justify-content-center">
              <div><input type="submit" value="Login" class="btn btn-primary" /></div>
            </div>
            <div class="text-center mt-4 font-weight-light create-account-link">
              Don't have an account? <a href="register" class="text-light">Create</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
