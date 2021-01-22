<?php 
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $comment=$_POST['comment'];

        $to='cshoppy007@gmail.com';
        $subject='Form Submission';
        $message="Name: ".$name."\n"."Wrote the following: "."\n\n".$comment;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<script>
				   location.replace('index.html');
				   </script>";
        } else {
            echo "<script>
            alert('Oops!Something went wrong. Try again.');
				   location.replace('index.html');
				   </script>";
        }
    }
?>