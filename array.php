<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Numeric Array</h1>
    <?php
    $student1 =array("karim","565166","CSE");
    echo $student1[1];
    ?>
    <h1>Associative Array</h1>
    <?php
            $student = array(
                "name" => "Jamal",
                "roll" =>   5545,
                "dept" => "CSE",
            );
            echo $student["name"];
    ?>


            <h1>Foreach Loop For Assosiative Array</h1>
    <?php
        foreach ($student as $key => $value) {
            //  echo $value."   ,  ";
             echo $key." : ".$value."<br>";
        }
    ?>
    <h1>IF condition OR,AND,Not</h1>
    <?php
    $data = " ";
    if ($data=="Bhola" || $data=="Borishal"){
            echo "Welcome To Borishal Division";
            
    }elseif($data!="Gajipur" && $data=="Dhaka"){
            echo "Welcome To Dhaka District";
        }else{
            echo "Welcome To BD";
    };

    ?>
<h1>Switch Condition</h1>
    <?php
        $dd=10;
        switch ($dd) {
            case '8':
                echo "Eight";
                break;
            case '7':
                echo "seven";
                break;
            case '5':
                echo "Five";
                break;
            
            default:
                echo "Not Valid Data = ".$dd;
            
        }
    ?>
</body>
</html>