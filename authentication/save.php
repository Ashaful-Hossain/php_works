<pre>
<?php
session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];
    // print_r($_POST);

    $f=fopen('user.csv','r');
    
    // print_r($dd);
    while ($data=fgetcsv($f)) {
        // print_r($data);
        if($data[0]==$email && $data[1]==$password){
                   print_r ($_SESSION['username']=$data[2]);
                    header('Location: news.php');
        }else{
                header('Location: index.php');
            
        }
    }    
         ?>
           
    