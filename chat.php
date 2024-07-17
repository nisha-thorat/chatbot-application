<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Admin Panel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('images/b1.jpg'); /* Replace 'background-image.jpg' with your actual image file */
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: #ffffff; /* Text color on the background */
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Background color with transparency */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5); /* Background color with transparency */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            padding: 10px;
        }

        nav a {
            margin: 0 20px;
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            font-size: 16px;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7); /* Background color with transparency */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1, h2 {
            color: #ffffff; /* Text color inside the section */
        }
    </style>
</head>

<body>
    <header>
                <img src="images\bt1.jpg" alt="logo" height="80">

        <h1>Admin Panel</h1>
    </header>

    <nav>
        <a href="admin.php"><i class="fa-solid fa-bars" aria-hidden="true"></i> Dashboard</a>
        <a href="userDetail.php"><i class="fa-solid fa-users" aria-hidden="true"></i> Users</a>
        <a href="chat.php"><i class="fa-solid fa-comments" aria-hidden="true"></i> Responses List</a>
        <a href="manage.html"><i class="fa-solid fa-gear" aria-hidden="true"></i> Manage</a>
        <a href="home.html"><i class="fa-solid fa-right-from-bracket" aria-hidden="true"></i>Logout</a>
    </nav>

    <section>
        <h1>Responses List</h1>
        <?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "bot";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("unable to connect");
}
if($stmt=$conn->query("select * from chatbot"))
{
    echo "<table border='3'>";
    echo"<tr>
    <td>Id</td>
        <td>Questions</td>
            <td>Answers</td>
                
</tr>";
while ($row=$stmt->fetch_assoc())
 {
    echo "<tr><td>".$row['id']."</td>";
        echo "<td>".$row['queries']."</td>";
            echo "<td>".$row['replies']."</td></tr>";
            
}
echo "</table>";
}
?>
    </section>
        
</body>

</html>
