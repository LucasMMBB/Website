<!DOCTYPE HTML>
<html>

<head>
    <title>MAOXU LIU</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/mainV2.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>

<body>
<?php
    // Create connection
    $con = mysqli_connect("50.62.209.42","maoxul","Lmx248679","TestDatabase","3306");
    if ($con) {
        //echo "Successfully connect to server";
    } else{
        echo("Shit!! can't connect server right now. Try later");

    }

    $nameHTML = $_POST["name"];
    $emailHTML = $_POST["email"];
    if(!$nameHTML){
        echo "Can not get value name";
    } else{
        //echo "Yes,get the value name";
    }

    if(!$emailHTML){
        echo "Can not get value email";
    } else{
        //echo "Yes, get the value email ";
    }

    $sql = "INSERT INTO OworldContact (Name, Email)
    VALUES ('$nameHTML','$emailHTML')";

    if ($con->query($sql) === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error";
    }

    $con->close();
?>
    <!-- Header -->
    <section id="header">
        <header class="major">
            <h1>Welcome to my world</h1>
            <p>Oworld</p>
        </header>
        <div class="container">
            <ul class="actions">
                <li><a href="#one" class="button special scrolly">Begin</a></li>
            </ul>
        </div>
    </section>
    <!-- One -->
    <section id="one" class="main special">
        <div class="container">
            <span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span>
            <div class="content">
                <header class="major">
                    <h2>THANK YOU</h2>
                </header>
                <p>Thanks for your time on my website and i will contact you as soon as possible</p>
            </div>
            <a href="#two" class="goto-next scrolly">Next</a>
        </div>
    </section>
    <!-- Two -->
    
    <!-- Three -->
    <section id="three" class="main special">
        <div class="container">
            <h4>EMAIL</h4>
            <p>maoxul@umich.edu OR maoxummbb@gmail.com</p>
            <hr />
            <header>
                <h4>CELL</h4>
                <h5>3136156284</h5>
            </header>
            <a href="#footer" class="goto-next scrolly">Next</a>
        </div>
    </section>
    
    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <header class="major">
                <h2>Thanks for visiting</h2>
            </header>
            <!-- GET IN TOUCH FORM -->
        </div>
        <footer>
            <ul class="icons">
                <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon alt fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; MAOXU LIU </li>
                <li>Design reference: <a href="http://html5up.net">HTML5 UP</a></li>
                <li>Images Refs: <a href="http://unsplash.com">Unsplash</a></li>
            </ul>
        </footer>
    </section>
    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="assets/js/main.js"></script>
</body>

</html>
