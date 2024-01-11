<?php
    $db =new PDO('mysql:host=localhost;dbname=test','root','');
        //  $data=$db->query("select * from student");
        // foreach ($data as $p) {
        //     echo "<pre>";
        //     print_r($p);
        //     echo "</pre>";
        // }

    
        // $st=$db->prepare("select * from student");
        // $st->execute();
        // while ($k = $st->fetch(PDO::FETCH_ASSOC)) {
        //     echo "<pre>";
        //      print_r($k);
        //      echo "</pre>";
        // }

        $st=$db->prepare("INSERT INTO `student` (`id`, `name`, `roll`, `fee`) VALUES (NULL, :name, :roll, :fee)");

        $st->bindParam(':name',$name);
        $st->bindParam(':roll',$roll);
        $st->bindParam(':fee',$fee);

        // $name = "Korim";
        // $roll = 420;
        // $fee = 420;
        // $st->execute();
        if(isset($_POST['name'])){

            $name = $_POST['name'];
            $roll = $_POST['roll'];
            $fee = $_POST['fee'];
            $st->execute();
        }
        
?>

<form action="" method="post">
    1<input type="text" name="name"><br>
    2<input type="text" name="roll"><br>
    3<input type="text" name="fee"><br>
    <input type="submit" value="Save"><br>
</form>