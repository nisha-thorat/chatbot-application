<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1>Admin Panel</h1>
    </header>

    <nav>
        <a href="admin.php">Dashboard</a>
        <a href="userDetail.php">Users</a>
        <a href="chat.php">Responses List</a>
        <a href="manage.html">Manage</a>
        <a href="adminlogout.php">Logout</a>
    </nav>

    <section>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input data
    $id = $_POST["id"]; // Assuming you have an ID for the record to be updated
    $updatedMessage = $_POST["queries"];
    $updatedReply = $_POST["replies"];

    // Database connection
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bot";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Prepare and execute the SQL query to update data
    $stmt = $conn->prepare("UPDATE chatbot SET queries=?, replies=? WHERE id=?");
    $stmt->bind_param("ssi", $updatedMessage, $updatedReply, $id);
    if ($stmt->execute()) {
        echo "Data updated successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
 </section>       
</body>
</html>
