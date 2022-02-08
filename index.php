<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Contact Us Form In Php</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php
                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $msg = $_POST['message'];
                            $FromName = "Harsh Mavani";
                            $FromEmail = "info@harshmavani.com";
                            $ReplyTo = $email;
                            $toemail = "harshmavani000786@gmail.com";
                            $subject = "Harsh Mavani Contact form";
                            $message = 'Name:-' . $name . '<br>Email :-' . $email . '<br> Message:-' . $msg;
                            $headers  = "MIME-Version: 1.0\n";
                            $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                            $headers .= "From: " . $FromName . " <" . $FromEmail . ">\n";
                            $headers .= "Reply-To: " . $ReplyTo . "\n";
                            $headers .= "X-Sender: <" . $FromEmail . ">\n";
                            $headers .= "X-Mailer: PHP\n";
                            $headers .= "X-Priority: 1\n";
                            $headers .= "Return-Path: <" . $FromEmail . ">\n";
                            if (mail($toemail, $subject, $message, $headers, '-f' . $FromEmail)) {
                                $hide = 1;

                                echo '<div class="success"><center><span style="font-size:100px;">&#9989;</span></center> <br> Thank you <strong>' . $name . ',</strong> Your message has been sent. We will reply soon as possible. </div> ';
                            } else {
                                echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
                            }
                        }

                        ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="Subject" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>