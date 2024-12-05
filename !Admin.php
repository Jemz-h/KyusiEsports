<!-- Add the latest id code from here ai! -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyusi Esports</title>
    <link rel="stylesheet" href="css/QCE.css">
</head>
<body>
    <div class="wrapper">
        <!-- Header Section -->
        <?php include "#Navbar.php"; ?>

        <!-- Main Section -->
        <?php 
            $message = "";
            $viewMessage = ""; 

            if(isset($_POST["submit"])){
                include "functions/Conn.php";

                $text = $_POST['text'];

                $sql = "INSERT INTO adminedit (Text) VALUES (?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $text);

                if ($stmt->execute()) {
                    $message = "Message submitted successfully!";
                    $_SESSION["newsText"] = htmlspecialchars($text); 
                } else {
                    $message = "Error: " . $stmt->error;
                }

                $stmt->close();


                $sql = "SELECT Text FROM adminedit ORDER BY ID DESC LIMIT 1"; 
                $result = $conn->query($sql);
                if ($result && $row = $result->fetch_assoc()) {
                    $viewMessage = htmlspecialchars($row['Text']);
                }

                $conn->close();
            }
        ?>
        <main class="main-content">

            <h2 class="sponsors-title">ADMIN MESSAGE</h2>
            <center>
                <h3>Current Message: <br><?php echo isset($_SESSION['newsText']) ? htmlspecialchars($_SESSION['newsText']) : ''; ?></h3> <!-- Display session message -->
            </center>

            <form action="" method="post">
                <center>
                    <textarea type="text" style="padding: 10px 10px; border-radius: 5px; height: 100px; width: 1000px;" name="text" id="text" placeholder="..." required></textarea>
                    <br>
                    <input type="submit" style="padding: 10px 10px; border-radius: 5px; width: 100px;" name="submit" value="Submit">
                </center> 
            </form>
        </main>
    </div>

    <!-- Footer Section -->
    <?php include "#Footer.php"; ?> 

    <script src="javascript/QCE.js"></script>
</body>
</html>