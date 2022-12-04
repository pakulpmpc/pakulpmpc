<?php
include 'mail.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Send SMS using PHP</title>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 mx-auto bg-white shadow border p-4 rounded">
                <h2 class="text-center fw-bold mb-3">SMS Sender</h2>
                <form action="" method="POST">
                <div class="form-group mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" required name="name" id="name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="text" class="form-control" placeholder="Enter email" required name="email" id="email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="text" class="form-control" placeholder="Enter phone" required name="phone" id="phone">
                    </div>
                    <div class="form-group mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" placeholder="Enter subject" required name="subject" id="subject">
                    </div>
                    <div class="form-group mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea rows="5" class="form-control" placeholder="Enter message" required name="message" id="message"></textarea>
                    </div>
                    <div class="col md-12"><?php $alert; ?></div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="submit">Send email</button>
                        <button type="reset" class="btn btn-danger">Reset form</button>
                    </div>
   
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>