<?php
function insert($id,$name,$pwd){
	$columns=array("id","name","pwd");
	$data=array('id' => $id,'name' => $name ,'pwd'=>$pwd);
	foreach($data as $key => $value){
		$k[]=$key;
		$v[]="'".$value."'";
		}
		$k=implode(",",$k);
		$v=implode(",",$v);
		$conn=mysqli_connect("localhost","root","","svrn");
		if($value==="")
		{
			echo "no data";
			}
			else
			{
				$sql="INSERT INTO insertst ($k) VALUES ($v)";
				$exe=mysqli_query($conn,$sql);
				echo "sucessfully saved";
				return "successfully added";
				}
}
	
function select($name){
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svrn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM insertst where name='$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["pwd"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
}
function update($name,$id){
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svrn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE insertst SET name='$name' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	return "updated";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
}
function delete1($id){
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "svrn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM insertst WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	return "deleted $sql";
} else {
    echo "Error deleting record: "	. $conn->error;
}

$conn->close();

return $id;
}
echo insert(16,'kushi','856p');

		
?>