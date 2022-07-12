


<?php

   $connection = mysqli_connect('localhost','root','','book_db');
   
   


   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $arrivals = $_POST['arrivals'];
      $service=$_POST['service'];

      $request = " insert into book_form(name, email, phone, address, arrivals,service) values('$name','$email','$phone','$address','$arrivals','$service') ";
      mysqli_query($connection, $request);

      header('location:booking.html'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>
