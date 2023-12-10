<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Difference Of PHP & JS</title>
</head>
<body>
    <!-- PHP -->
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod fugit optio voluptate eveniet corporis accusamus eum voluptatibus dolor, voluptas suscipit ipsa quo asperiores ea laboriosam ex cumque earum vel?<?php echo " (" ,20+9, ") " ?> Perspiciatis!</p>

    <!-- JS -->
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod fugit optio voluptate eveniet corporis accusamus eum voluptatibus dolor, voluptas suscipit ipsa quo asperiores ea laboriosam ex cumque earum vel?<span id="add"></span> Perspiciatis!</p>
</body>
<script>
    document.getElementById("add").innerHTML=(50+7);
</script>
</html>