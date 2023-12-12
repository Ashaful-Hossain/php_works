<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function</title>
</head>
<body>
    <!-- Function Name, Call , Echo ,  Parameter-->
    <?php
            function fName(){
                echo "Welcome to PHP Function <br> <br>";
            }
            fName();
    //  Function ArgumentAdd, Parameter,
            function data($f) {
                echo $f,"<br>";
            }
            data(20);
    
    //  Function Muti Argument Add, Multi Parameter Add by ",,," ,
            function add($a,$b,$c) {
                echo $a+$b-$c ,"<br>";
            }
            add(8,5,3);

            function sum ($d,$c,$g){
                $w= $d+$c*$g;
                echo $w ,"<br>";
            }
            sum(2,3,5);
        ?>
    <!-- Function Return And Default Data -->
            <h1>Function Return And Default Data</h1>
        <?php
            function ret($r,$t=1) {
                $f = $r-$t;
                return $f;
            }
            
             $y=ret(17,5);
            $m=ret(17);
            echo $m." , ".$y,"<br>";
        ?>
    <!-- Position Wise Array Assign by List() Function -->
        <h1>Position Wise Array Assign by List() Function</h1>
            <?php

                function arr($f,$h) {
                    $z = $f+$h;
                    return array($f,$h,$z);
                }
                list($first,$second,$result)=arr(5,20);
                echo $first."+",$second."=",$result;

            ?>

    <!-- Function Type Hinting  -->
        <h1>Function Type Hinting  and Recurcive Function</h1>
        <?php
            function typ(string $k,int $v) {
                    return $k." : ".$v;
            }
            $q=typ("Roll",5725);
            // $q=typ(5725,"Roll");
            echo $q,"<br>";

            function f($i) {
                if($i>=1){
                    return $i*f($i-1) ;
                }else{
                    return 1;
                }
            }
            $p=f(5);
            echo $p;
        ?>
        


    
</body>
</html>