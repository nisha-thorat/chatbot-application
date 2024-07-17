<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "bot";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("unable to connect");
}
if($stmt=$conn->query("select * from users"))
{
    echo "<table border='3'>";
    echo"<tr>
    <td>Id</td>
        <td>NAME</td>
            <td>E-MAIL</td>
                <td>PASSWORD</td>
</tr>";
while ($row=$stmt->fetch_assoc())
 {
    echo "<tr><td>".$row['id']."</td>";
        echo "<td>".$row['full_name']."</td>";
            echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td></tr>";
}
echo "</table>";
}
?>
<!DOCTYPE html>
