<?php
require './db_connection.php';
require './authchecker.php';
$query = "SELECT * FROM Project";
$result = $conn->query($query);
$username;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="Styles\All.css" />
    <link rel="stylesheet" href="Styles\Typography.css" />

    <title>Home</title>

</head>

<body>
    <div class="container">
        <!-- App Name -->
        <nav class="top">
            <div class="large-head">
                <div name="title">Project</div>
            </div>
            <div class="small-circle">
                <img src="img\search.png" alt="Back arrow">
            </div>
        </nav>
    </div>

    <!-- Home page body -->
    <div class="container">

        <!-- Project and Staff tab -->
        <div class="top_btn">
            <button class="active_btn" id="btn1" onclick="window.location.href='home.php'">Project</button>
            <button class="inactive_btn" id="btn2" onclick="window.location.href='Staff.php'">Staff</button>
        </div>

        <!-- Project Overview Container -->
<<<<<<< HEAD
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Access individual fields by column name
                    $pid = $row["Project_ID"];
                    $title = $row["Title"];
                    $cost = $row["Cost"];
                    $estimated_completion = $row["Estimated_Completion"];
                    $startedDate = $row["Started_Date"];
                    ?>
                    <a href="Details.php?pid=<?php echo $pid?>">
           <div class="wrapper">
=======
        <a href="Details.php">
            <div class="wrapper">
>>>>>>> 1ce98e610d5d17b7f04d8d40bc0eea3f5416caad
                <div class="container-row">
                    <div class="small-logo">
                        <img src="images/dcslogo.png" alt="dsc_logo" class="container-img">
                    </div>
                    <div class="clientname" style="margin-bottom: 10px;">
                        <p class="container-subhead">Developer Students Club</p>
                    </div>
                </div>
                <div class="track">
                    <h3>
                        <p class="container-subhead">
                        <?php echo "<p>$title</p>"?>
                    </h3>
                </div>
                <div class="track">
                    <div class="container-row space">

                        <h3>
                            <p class="container-body">Status -</p>
                        </h3>
                        <h3>
                            <p class="container-body">On-Going</p>
                        </h3>
                    </div>
                    <div class="container-row space">

                        <h3>
                            <p class="container-body">Started on -</p>
                        </h3>
                        <h3>
                            <p class="container-body"> <?php echo $startedDate?></p>
                        </h3>
                    </div>
                    <div class="container-row space">

                        <h3>
                            <p class="container-body">Estimated completion -</p>
                        </h3>
                        <h3>
                            <p class="container-body"> <?php echo $estimated_completion?></p>
                        </h3>
                    </div>
                    <div class="container-row space">

                        <h3>
                            <p class="container-body">Cost -</p>
                        </h3>
                        <h3>
                            <p class="container-body"> <?php echo " $cost ₹"?></p>
                        </h3>
                    </div>

                </div>
            </div>
            <?php
                }
            }
            ?>
        </a>

<<<<<<< HEAD

=======
>>>>>>> 1ce98e610d5d17b7f04d8d40bc0eea3f5416caad
        <a href="Submission_form.php">
            <div class="container">
                <button id="fab" class="fab">+</button>
            </div>
        </a>

        <!-- Bottom Navigation Bar -->
        <div class="bnav-wrapper">
            <div class="bnav">
                <a href="">Home</a>
                <a href="Logs.php"><img src="images/Logs.svg" alt="Logs"></a>
                <a href="Notification.php"><img src="images/Notification.svg" alt="Notifications"></a>
                <a href="Profile.php"><img src="images/Profile.svg" alt="Profile"></a>
            </div>
        </div>


    </div>


</body>

</html>