<?php
$name = empty($_POST['name']) ? '' : $_POST['name'];
if (empty($name)) {
    echo "Name is empty";
} else {
    echo "Name is: " . $name;
}