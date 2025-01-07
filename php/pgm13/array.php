<html>
<body>
<?php
$student=array('amal','midhun','aswin','nirmal','adarsh');
echo " <br><br>original array: ";
echo "<br><br>";
print_r($student);

echo " <br><br>array sorting in assending order:";
asort($student);
echo "<br><br>";
print_r($student);

echo " <br><br>array sorting in dessending order: ";
arsort($student);
echo "<br><br>";
print_r($student);

?>
</body>
</html>
