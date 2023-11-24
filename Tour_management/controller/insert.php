<?php
    session_start();
    if(isset($_POST['insert'])){
        $data = file_get_contents('../Model/donorlist.json');
        $json = json_decode($data);
        $donor = $_POST['donorname'];
        $mobile = $_POST['mobilenumber'];
        $amount = $_POST['amount'];
       if(empty($donor)||empty($mobile)||empty($amount))
       {
         echo "<script>alert('Please fillup all the forms')</script>";
   			 echo "<script>window.open('../View/Donate.php', '_self')</script>";
         exit();
       }
       else{
         $array = array(
             'donorname' => $_POST['donorname'],
             'mobilenumber' => $_POST['mobilenumber'],
             'amount' => $_POST['amount']
         );

         $json[] = $array;

         $json = json_encode($json, JSON_PRETTY_PRINT);
         file_put_contents('../Model/donorlist.json', $json);
         echo "<script>alert('Data inserted successfully')</script>";
   			 echo "<script>window.open('../View/Donate.php', '_self')</script>";
       }

    }


?>
