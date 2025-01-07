<html>
<title>student details</title>
<style>
table {
width: 50%;
margin: auto;
border-collapse: collapse;
}

th, td {
border: 3px solid black;
padding: 30px;
text-align: center;
}

th {
background-color: lightblue;
}

</style>

<body>
<h1><center>STUDENT DETAILS</center></h1>
<?php

$servername="localhost";
$username="root";
$password="";
$databasename="college";
$conn = new mysqli($servername,$username,$password,$databasename);

if($conn->connect_error)
{
die("connection failed: ".connect_error);
}

$sql="SELECT Rollno,Name,Age,Course FROM student";
$result = $conn->query($sql);

if($result->num_rows>0){
echo "<table border=1>";
echo
"<tr><th>Rollno</th><th>Name</th><th>Age</th><th>Course</th></tr>";

while($row=$result->fetch_assoc()){
echo
"<tr><td>".$row["Rollno"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["
Age"]."</td>"."<td>".$row["Course"]."</td></tr>";

}
echo"</table>";
}
else{
echo "No data found";
}
?>
</body>
</html>




























