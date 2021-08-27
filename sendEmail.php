<?php
 //$otp='123';
 //$name = $_GET['name'];
            //$email = $_GET['email'];
            $email = "harisramadhan2912@gmail.com";
            $subject = "Tes Email";
            $message = "Ini adalah tes email\n\nRegards,\nAdmin.";
            $from = "rasyid.haris@gmail.com";
            $headers = "From:" . $from;

            // Uncomment this line if you are using online server.
            mail($email,$subject,$message,$headers);
