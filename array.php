<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
     <h1>Numeric Array</h1><hr>
    <pre>
    <?php
    $data=[14,15,16,17,18,122,144,133,15,17];
    
       $f=array_chunk($data,3);
    //    $f=array_sum($data);
       print_r($f); 
       echo "<hr>";
    // $d=array_unique($data);
    // sort($d);
    // rsort($d);
    $d=shuffle($data);
    // $d=array_rand($data);
    print_r ($data);
    // echo ($d[$data[0]]);
echo "<hr>";
    $a=[11,12,13];
    $b=[1,2,3];
    $q=array_merge($b,$a); 
    print_r($q);

    // $student1 =array("karim","565166","CSE","karim","CSE","EEE");
    // $student4 =['alim',"65554","EEE"];

    $student = array(
                    "name" => "Jamal",
                     "roll" =>   5545,
                    "dept" => "CSE",
                    "dist" => "Dhaka",
                 );

    // asort($student);
    arsort($student);
    ksort($student);
    krsort($student);
    print_r($student);

    // while ($k =key($student)) {
    //     echo $k.'<br>';
    //      echo $student [$k],"<br>";
        
    //      next($student);
    // }

    // echo $student1[0];
    // echo next($student1);
    // echo prev($student1);
    // echo end($student1);
    // echo reset($student1);
    // $d=array_count_values($student1);
    //         print_r($d);
    // array_push($student1,"Dhaka");
    // array_push($student4,"Rangpur");
    // array_pop($student1);
    // array_shift($student4);
    // array_unshift($student4,"Abdullah");
    // print_r($student1);
    // print_r($student4);

    // ?>
     <h1>Associative Array  array_combine(); </h1><hr>
     <?php
     $a=["Bangla","English","Math"];
    $b=[70,65,85];
    $q=array_combine($a,$b);
    print_r($q);
    //         $student = array(
    //             "name" => "Jamal",
    //             "roll" =>   5545,
    //             "dept" => "CSE",
    
    //         );
            
    //         // echo $student["name"];
    // ?>


             <h1>Foreach Loop For Assosiative Array</h1><hr>
     <?php
    //     foreach ($student as $key => $value) {
    //         //  echo $value."   ,  ";
    //          echo $key." : ".$value."<br>";
    //     }
    // ?>
    

    
</body>
</html>