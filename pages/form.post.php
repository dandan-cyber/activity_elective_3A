<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE LAYOUT STRUCTURE</title>
    <link rel="stylesheet" href="../css/customstyle.css">
</head> 
<body>
    <!-- STARTING HEADER --> 
    <header>
        <h1>College of Information and Computing Sciences</h1>
        <h3>Bachelor of Science in Information Systems</h3>
        <div class="container">
            <a href="../index.html">Home</a> |
            <a href="about.html">About</a> |
            <a href="contactUs.html">Contact us</a> |
            <a href="inquiry.html">Inquiry</a> |
            <a href="profile.html">Profile</a> |
        </div>
    </header>
    <!-- ENDING HEADER-->
    <!-- STARTING SECTION -->
    <section>
        <nav>
            <ul class="navigation_menu">
                <li><a href="heading.html">Heading</a></li>
                <li><a href="tables.html">Tables</a></li>
                <li><a href="list.html">HTML linkss</a></li>
                <li><a href="forms.html">Forms</a></li>
                <li><a href="form.post.php">Form Post Method</a></li>
                <li><a href="images.html">Images</a></li>
                <li><a href="videos.html">Videos</a></li>
            </ul>
        </nav>
        <article>
        <h2>Form Method Post Action</h2>
            <?php 
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $fullname = htmlspecialchars($_POST['name']);
                $yourAge = htmlspecialchars($_POST['age']);
                $datamonth = htmlspecialchars($_POST['datamonth']);
                $weekdata = htmlspecialchars($_POST['weekdata']);
                $timedata = htmlspecialchars($_POST['timedata']);

                echo "<h2>Your name is: " . $fullname . "</h2>";
                echo "<h2>Your age is: " . $yourAge . "</h2>";
                echo "<h2>Input Month: " . $datamonth . "</h2>";
                echo "<h2>Week: " . $weekdata . "</h2>";
                echo "<h2>Time: " . $timedata . "</h2>";
            }
            ?>
                    
        </article>      
    </section>
    <!-- END SECTION -->
    
    <!-- START FOOTER -->
    <footer>
        <h2>MarSU</h2>
        <div class="footer_menu">
            <a href="about.html">About</a> |
            <a href="">Policy</a> |
            <a href="">Terms of Use</a> |
            <a href="">Policy</a> |
            <a href="">Privacy</a> |
            <a href="contactUs.html">Contact</a> |
        </div>
        <div>
            <p><b>Copyright © 2024. </b>MarSu Sta Cruz Campus, BSIS Students</p>
        </div>
    </footer>
    <!-- END FOOTER-->
    </body>
</html>
