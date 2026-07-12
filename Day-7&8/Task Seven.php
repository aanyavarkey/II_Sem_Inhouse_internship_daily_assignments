<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg,#74ebd5,#9face6);
            margin:0;
            padding:0;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            background:white;
            padding:30px;
            border-radius:10px;
            width:420px;
            box-shadow:0 0 15px rgba(0,0,0,0.2);
            text-align:center;
        }

        h1{
            color:#2c3e50;
        }

        h2{
            color:green;
        }

        p{
            font-size:18px;
            margin:10px 0;
        }

        .result{
            margin-top:20px;
            padding:12px;
            border-radius:8px;
            color:white;
            font-weight:bold;
            font-size:18px;
        }

        .excellent{
            background:#28a745;
        }

        .verygood{
            background:#007bff;
        }

        .good{
            background:#ffc107;
            color:black;
        }

        .improve{
            background:#dc3545;
        }
    </style>

</head>
<body>

<div class="container">

   <h1><?php echo "Welcome"; ?></h1>
   <h2>Your registration was successful!</h2>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $college = $_POST['college'];
    $branch = $_POST['branch'];
    $cgpa = $_POST['cgpa'];   // Added CGPA
}

echo "<p><b>Name:</b> ".$name."</p>";
echo "<p><b>College:</b> ".$college."</p>";
echo "<p><b>Branch:</b> ".$branch."</p>";
echo "<p><b>CGPA:</b> ".$cgpa."</p>";

// Added Conditional Statements
if($cgpa >= 9){
    echo "<div class='result excellent'>Performance: Excellent</div>";
}
elseif($cgpa >= 8){
    echo "<div class='result verygood'>Performance: Very Good</div>";
}
elseif($cgpa >= 6.5){
    echo "<div class='result good'>Performance: Good</div>";
}
else{
    echo "<div class='result improve'>Performance: Needs Improvement</div>";
}
?>

</div>

</body>
</html>