<?php
echo "Hello World" ;
echo date("l") . "\n";
echo $_SERVER['REMOTE_ADDR'];
$name="Aanya";
echo$name;
$student=["Jijee","Abhishek","Manoj"];
echo $student[0];
echo $student[1];
echo $student[2];
print_r($student);
//Associate array 
$student =[
"Jijee"=>50,
"Abhishek"=>40,
"Manoj"=>30,
];
print_r($student);

?>