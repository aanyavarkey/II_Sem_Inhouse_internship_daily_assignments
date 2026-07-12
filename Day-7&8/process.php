<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> <?php echo "Welcome"?></h1> 
   <h2>Your registration was successful!</h2>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $college = $_POST['college'];
    $branch = $_POST['branch'];
}
echo $name."<br>";
echo $college."<br>";
echo $branch."<br>";
?>
</body>
</html>