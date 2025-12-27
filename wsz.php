<?php
echo "<table border='1'>";
echo "<tr><th>Label</th><th>Data</th></tr>";
echo "<tr><td>First Name</td><td>" . $_POST['fname'] . "</td></tr>";
echo "<tr><td>Last Name</td><td>" . $_POST['lname'] . "</td></tr>";
echo "<tr><td>Gender</td><td>" . $_POST['gender'] . "</td></tr>";
echo "<tr><td>Father's Name</td><td>" . $_POST['faname'] . "</td></tr>";
echo "<tr><td>Mother's Name</td><td>" . $_POST['maname'] . "</td></tr>";
echo "<tr><td>Blood Group</td><td>" . $_POST['bg'] . "</td></tr>";
echo "<tr><td>Religion</td><td>" . $_POST['religion'] . "</td></tr>";
echo "<tr><td>Email</td><td>" . $_POST['email'] . "</td></tr>";
echo "<tr><td>Phone</td><td>" . $_POST['phone'] . "</td></tr>";
echo "<tr><td>Website</td><td>" . $_POST['website'] . "</td></tr>";
echo "<tr><td>Country / City</td><td>" . $_POST['country'] . "</td></tr>";
echo "<tr><td>Address</td><td>" . $_POST['address2'] . "</td></tr>";
echo "<tr><td>Postal Code</td><td>" . $_POST['postalcode'] . "</td></tr>";
echo "<tr><td>Username</td><td>" . $_POST['uname'] . "</td></tr>";
echo "<tr><td>Password</td><td>" . $_POST['password'] . "</td></tr>";
echo "<tr><td>Confirm Password</td><td>" . $_POST['cpassword'] . "</td></tr>";
echo "</table>";
?>