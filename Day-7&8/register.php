<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f06a95;
            font-family: Arial, sans-serif;
            color: #333;
        }
        button{
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="process.php" method="post">
        <input type="text" id="name" name="name" placeholder="Enter your name"><br>
        <input type="college" id="college" name="college" placeholder="Enter your college"><br>
        <input type="branch" id="branch" name="branch" placeholder="Enter your branch"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>