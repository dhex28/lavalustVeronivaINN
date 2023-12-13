<!DOCTYPE html>
<html>

<head>
    <title>Gmail Account Verification</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Dark Slate theme CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/slate/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #2c3e50; /* Dark slate background color */
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background-color: #34495e; /* Darker slate form background color */
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1), 0px 0px 20px rgba(0, 0, 0, 0.1); /* Enhanced box shadow */
            color: #ecf0f1; /* Form text color */
            max-width: 400px; /* Optional: Limit the maximum width of the form */
            width: 100%; /* Make sure the form takes full width */
        }

        .submit {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <h2 class="mb-4 text-center">Email Verification</h2>
            <?php $LAVA =& lava_instance(); ?>
            <?php echo $LAVA->form_validation->errors(); ?>    
            <?php if (isset($success_message)) { ?>
                <div class="alert alert-success"><?php echo $success_message; ?></div>
            <?php } ?>
            <?php if (isset($error_message)) { ?>
                <div class="alert alert-danger"><?php echo $error_message; ?></div>
            <?php } ?>
            <form action="<?= site_url('check'); ?>" method="post">
                <div class="form-group">
                    <label for="to">Verification code</label>
                    <input type="text" class="form-control" id="to" name="verify" placeholder="Enter verification code" required>
                    <input type="hidden" name="email" value="<?= $email ?>">
                </div>
                <div class="mt-3 submit">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
