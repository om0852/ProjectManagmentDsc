<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="Styles\All.css" />
    <link rel="stylesheet" href="Styles\Typography.css" />

    <title>Logs</title>

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

        <!-- Home page body -->
        <!-- <div class="container"> -->

            <!-- Project and Staff tab -->
            <div class="tab-container">
                <div class="tabs" id="tabs">
                    <button class="tab active" data-tab="all">All</button>
                    <button class="tab" data-tab="approved">Approved</button>
                    <button class="tab" data-tab="disapproved">Disapproved</button>
                    <button class="tab" data-tab="action">Action Required</button>
                    <button class="tab" data-tab="updated">Updated</button>
                </div>
            </div>

            <script src="JavaScript\dragtabs.js"></script>

            <!-- Project Overview Container -->
        <a href="Details.php">
            <div class="wrapper">
                <div class="container-row">
                    <div class="small-logo">
                        <img src="images/dcslogo.png" alt="dsc_logo" class="container-img">
                    </div>
                    <div class="clientname"  style="margin-bottom: 10px;">
                        <p class="container-subhead">Developer Students Club</p>
                    </div>
                </div>
                <div class="track">
                    <h3>
                        <p class="container-subhead">Staff and Project Management</p>
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
                            <p class="container-body">26-08-2023</p>
                        </h3>
                    </div>
                    <div class="container-row space">

                        <h3>
                            <p class="container-body">Estimated completion -</p>
                        </h3>
                        <h3>
                            <p class="container-body">23-10-2023</p>
                        </h3>
                    </div>
                    <div class="container-row space">

                        <h3>
                            <p class="container-body">Cost -</p>
                        </h3>
                        <h3>
                            <p class="container-body">5000₹</p>
                        </h3>
                    </div>

                </div>
            </div>
        </a>

            <!-- Bottom Navigation Bar -->
            <div class="bnav-wrapper">
                <div class="bnav">
                    <a href="Home.php"><img src="images/home.svg" alt="Home"></a>
                    <a href="Logs.php">Logs</a>
                    <a href="Notification.php"><img src="images/Notification.svg" alt="Notifications"></a>
                    <a href="Profile.php"><img src="images/Profile.svg" alt="Profile"></a>
                </div>
            </div>


        <!-- </div> -->
    </div>

</body>

</html>