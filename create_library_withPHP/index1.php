<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use PHP Library</title>
</head>
<body>
    <pre>
        <?php
        include 'library.php';

        ?>
            <h1>Php Library </h1>
            <?php
            echo add(9,8)."<br>";
            echo sub(9,8)."<br>";
        
            $r=getData("news.txt","^");
            print_r($r);



       ?>

</body>
</html>