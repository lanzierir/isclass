<?php
require 'pdo.php';
class User
	function displayAll()
	{
		$sql = "select * from accounts";
		$results = runQuery($sql);
		if(count($results) > 0)
		{
			echo "<table border=\"2\">
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone</th>
				<th>Gender</th>
				<th>Birthday</th>
				<th>Password</th>
			</tr>";
			foreach ($results as $row) {
				echo "<tr>
						<td>".$row["id"]."</td>
						<td>".$row["email"]."</td>
						<td>".$row["fname"]."</td>
						<td>".$row["lname"]."</td>
						<td>".$row["phone"]."</td>
						<td>".$row["gender"]."</td>
						<td>".$row["birthday"]."</td>
						<td>".$row["password"]."</td>
					</tr>";
			}
			
		}
		else{
		    echo '0 results';
		}
	}
	function removeUser($id)
	{	
		$this->id = $id;
		$sql = "delete from accounts where id = ".$this->id;
		$results = runQuery($sql);
	}
	function addUser($email, $fname, $lname, $phone, $birthday, $gender, $password)
	{
		$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$email', 
		'$fname', '$lname', '$phone', '$birthday', '$gender', '$password')";
		$results = runQuery($sql);
	}
	function editUser($id, $password)
	{
		$this->id = $id;
		$this->password = $password;
		$sql = "update accounts set password = ".$this->password." where id = ".$this->id;
		$results = runQuery($sql);
	}
}
$user1 = new User;
$user1->removeUser(9);
$user1->addUser('as12@njit.edu', 'Al', 'Smith', '5555555555', '1991-05-09', 'male', 'password123');
$user1->editUser(11, '245690');
$user1->displayAll();
?>