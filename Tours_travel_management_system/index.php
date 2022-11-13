<?php
    error_reporting(0);
    session_start();
    $server="sql213.epizy.com";
    $username="epiz_32624346";
    $password="A4pfY7CS0q2eLK";
    $database="epiz_32624346_travel_website_database";

    $conn=mysqli_connect($server,$username,$password,$database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito">
    <title>Travel and Tourism</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            /* font-family:'Roboto'; */
            font-family: 'Nunito';
            scroll-behavior: smooth;
        }
        body{
            background-color:#F7F6DC;
        }
        .container{
            width: 100%;
            height: 100vh;
            background-image: url("images/header-bg.png");
            background-position: center;
            background-size: cover;
            padding: 10% 10%;
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
        }
        .navbar{
            position: absolute;
            top: 0%;
            left: 0%;
            display: flex;
            width: 100%;
            justify-content: space-between;
            padding: 20px;
            color: white;
        }
        ul{
            list-style: none;
            margin-right:60px;
        }
        .nav-links{
            display: flex;
            align-items: center;
        }
        .nav-links li{
            margin: 0 30px;
        }
        .link{
            color: rgb(196, 191, 191);
            position: relative;
            padding: 0px 10px;
        }
        .link:hover{
            color: #FFF;
        }
        .link::after{
            content: "";
            position: absolute;
            background-color: #ff3c78;
            height: 3px;
            width: 0%;
            left: 0%;
            bottom: -7px;
            transition: 0.5s;
        }
        .link:hover::after{
            width: 100%;
        }
        .logo{
            font-family: 'Roboto';
            margin-left: 8%;
        }
        .T-style{
            font-family:'Courier New', Courier, monospace;
            font-size: 40px;
            color: #FF9F29;
        }
        .A-style{
            font-family: cursive;
            font-size: 80px;
            color: #FF9F29;
        }
        .tooltip-login,.tooltip-logout{
            background-color:white;
            color:black;
            box-shadow:0px 10px 10px rgba(0,0,0,0.1);
            font-size:20px;
            padding: 5px 10px ;
            margin-top:13px;
            border-radius:25px;
            margin-left:-25px;
            position:absolute;
            display:none;
        }
        .tooltip-login::before,.tooltip-logout::before{
            position:absolute;
            content:"";
            height:15px;
            width:15px;
            background-color:#fff;
            top:-8px;
            left:28px;
            transform: rotate(45deg);
        }
        #login-icon{
            font-size: 20px;
            color: rgb(196, 191, 191);; 
        }
        
        #logout-icon{
            font-size: 20px;
            color: rgb(196, 191, 191);
        }
        #login-icon:hover,#logout-icon:hover{
            color: white;
        }
        #login-icon:hover .tooltip-login{
            display: block;
        }
        #logout-icon:hover .tooltip-logout{
            display: block;
        }
        .row{
            text-align: center;
            display: flex;
            height: 88%;
            align-items: center;
        }
        .col{
            width: 50%;
            margin: 30px;
        }
        .heading1{
            font-family: cursive;
            color: white;
            font-size: 50px;
        }
        hr{
            border: none;
            height: 5px;
            background-color: #ff3c78;
            width: 40%;
            margin: 5px auto 20px auto;
            border-radius: 20px
        }
        .row p{
            color: white;
            font-size: 11px;
            line-height: 15px;
        }
        .col1 p{
            font-family: cursive;
            margin-top: 10px;
            font-size: 18px
        }
        .explore{
            width: 180px;
            color: black;
            font-size: 15px;
            padding: 12px 0px;
            background-color:#ff3c78;
            border-radius: 20px;
            border: none;
            outline: none;
            margin-top: 30px;
        }
        .explore:hover{
            background-color: rgb(207, 203, 203);
        }
        .card{
            width: 200px;
            height: 230px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            margin: 10px 15px;
            background-position: center;
            background-size: cover;
            transition: transform 0.5s;
        }
        .card1{
            background-image: url(images/p-1.jpg);
        }
        .card2{
            background-image: url(images/p-2.jpg);
        }
        .card3{
            background-image: url(images/p.jfif);
        }
        .card4{
            background-image: url(images/p-4.jpg);
        }
        .card:hover{
            transform: translateY(-10px)
        }
        .card h5{
            font-size: 18px;
            color: white;
            text-shadow: 0 0 5px black;
            margin-top: 20px;
        }
        .card p{
            text-shadow: 0 0 15px black;
            font-size: 8px;
        }
        .about{
            height: 100%;
            padding: 2% 5%;
            text-align: center;   
        }
        .heading{
            text-align: center;
            padding: 40px 0 10px 0px;
        }
        .heading span{
            font-size: 35px;
            background-color: rgba(239, 91, 12, 0.2);
            color: rgba(239, 91, 12, 1);
            border-radius: 4px;
            padding: 2px 12px;
            box-shadow:3px 3px;
        }
        .heading span.space{
            background: none;
        }
        .about-explain{    
            display: flex;
            text-align: center;
            align-items: center;
            margin: 3% auto;
        }
        .about-para{
            font-family:cursive;
            font-size: 20px;
            margin: auto 10%; 
            line-height: 35px;  
            text-shadow: 0px 0px 20px rgb(222, 219, 219);
        }
        .about-video{
            width: 30%;
            border-radius: 20px;
        }
        .services{
            height: 100%;
            padding: 2% 5%;
            text-align: center;
        }
        .service-provided{
            margin-top: 30px;
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
        }
        .service-provided .box{
            text-align: center;
            padding: 15px;
            margin: 20px;
            width: 20%;
            background-color: #9DD6DF;
            border-radius: 20px;
            box-shadow: 2px 2px 10px ;
        }
        .service-provided .box img{
            width: 100%;
            height: 70%;
            margin-bottom: 10px;
        }
        .service-provided .box h3{
            margin-bottom: 5px;
        }
        .photos{
            margin-top: 30px;
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
        }
        .photos img{
            width: 20%;
            margin: 20px;
            transition: 0.5s;
            box-shadow: 2px 2px 10px ;
        }
        .photos img:hover{
            transform: scale(1.2);
        }
        .review-contents{
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .review-display{
            width: 60%;
            height:550px;
            margin: 2% 5%;
            box-shadow:2px 2px 10px #999;
            padding: 0px 0px 0px 10px;
            background-color:#0AA1DD; 
        }
        .review-display .cmnt-head{
            text-align:center;
            font-size:35px;
            margin:10px auto;
            text-decoration: underline;
            background-color: #0AA1DD;
        }
        .review-display .all-cmnts{
            height:85%;
            width:98%;
            padding:10px;
            overflow-y:scroll;
            background-color:white;
            box-shadow:2px 2px 3px inset #555,-2px -2px 3px inset #555; 
        }
        .review-write{
            width:40%;
            text-align:center;
            margin: 2% 5%;  
        }
        .review-txt{
            resize:none;
            height:120px;
            width:500px;
            padding: 3% 3%;
            font-size:18px;
            border-radius:10px;
            border:1px solid #111;
            margin-top:30%;
            margin-bottom:10px;
            box-shadow:3px 3px 3px inset #555,-1px -1px 3px inset #555;
        }
        .review-btn{
            cursor: pointer;
            font-size:18px;
            padding: 7px 15px;
            border-radius:10px;
            border:1px solid #111;
            box-shadow:2px 2px 5px;
        }
        .review-btn:hover{
            background-color:#D2DAFF;
        }
        #display_review{
            background-color:rgba(10, 161, 221, 0.2);
            margin: 20px;
            padding:10px;
            border-radius:10px;
            box-shadow:3px 3px 5px;
            display: flex;
        }
        #display_review .img-div img{
            height:30px;
            margin-top:5px;
            border-radius:50%;
            background-color:white;
        }
        .review-name{
            align-items:center;
            font-size:22px;
            text-transform:Capitalize;
            margin-left:10px;
        } 
        .review-email{
            font-size:12px;
            margin-left:10px;
            margin-bottom:5px;
        } 
        .review-para{
            font-size:18px;
            margin-left:10px;
            margin-bottom:5px;
        }        
    </style>
</head>
<body>
    <!-- Main Page -->
    <div class="container">
        <nav class="navbar">
            <h1 class="logo"><span class="T-style">T</span>OURISM</h1>
            <ul class="nav-links">
                <li><a class="link" href="index.php">HOME</a></li>
                <li><a class="link" href="#services">SERVICES</a></li>
                <li><a class="link" href="tour.php">TOURS</a></li>
                <li><a class="link" href="book.php">BOOK</a></li>
                <li><a class="link" href="#review-contents">REVIEWS</a></li>
                <li>
                <div class="wrapper"><a href="login_register.php"><i id="login-icon" class="fas fa-user"><div class="tooltip-login">Login</div></i></a></div>
                    <form action="php_code.php" method="post"><div class="wrapper"><button id="logout-icon" style="background: transparent;border:none;outline:none;" type="submit" name="logout-btn" onclick="logoutfun()"><i class="fa-solid fa-right-from-bracket"><div class="tooltip-logout">Logout</div></i></button></div></form>
                </li>
            </ul>
        </nav>
        
        <div class="row">
            <div class="col col1">
                <h1 class="heading1"><span class="A-style">A</span>DVENTURE IS WORTHWHILE</h1>
                <hr>
                <p>DISCOVER MORE PLACES WITH US, ADVENTURE AWAITS</p>
                <a href="#about"><button type="button" class="explore">Explore</button></a>
            </div>
            <div class="col">
                <div class="card card1">
                    <h5>Mumbai</h5>
                </div>
                <div class="card card2">
                    <h5>Hawaii</h5>
                </div>
                <div class="card card3">
                    <h5>Sydney</h5>
                </div>
                <div class="card card4">
                    <h5>Paris</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section -->
    <div class="about" id="about">
        <h2 class="heading">
            <span>A</span>
            <span>B</span>
            <span>O</span>
            <span>U</span>
            <span>T</span>
        </h2>
        <div class="about-explain">
            <p class="about-para">
                Travelling exposes us to different cultures and ancient traditions and through these authentic encounters, we learn to
                embrace and celebrate both our similarities and our differences. Travelling teaches us about humanity and gives us an 
                appreciation understanding and respect for different points of view and ways of life.
            </p>
            <video src="images/vid-1.mp4" loop autoplay muted class="about-video"></video>
        </div>
    </div>
    <!-- Services section -->
    <div class="services" id="services">
        <h2 class="heading">
            <span>S</span>
            <span>E</span>
            <span>R</span>
            <span>V</span>
            <span>I</span>
            <span>C</span>
            <span>E</span>
            <span>S</span>
        </h2>
        <div class="service-provided">
            <div class="box">
                <img src="images/hotel-icon.png">
                <h3>Affordable Hotels</h3>
                <p>Low rate, Enjoy more! Kids friendly beach resort, our lowest prices at various locations.</p>
            </div>
            <div class="box">
                <img src="images/flight-icon.png">
                <h3>Fast Travel</h3>
                <p>Check flight offers and book tickets to your favourite destinations.</p>
            </div>
            <div class="box">
                <img src="images/utensils-icon.png">
                <h3>Food and Drinks</h3>
                <p>Find best food and drinks offers</p>
            </div>
            <div class="box">
                <img src="images/guide.png">
                <h3>Safety guide</h3>
                <p>Posing as a tour guide and offering to show you the sights of the city.</p>
            </div>
            <div class="box">
                <img src="images/hiking.png">
                <h3>Adventures</h3>
                <p>One way to get the most out of life to look upon it is an adventure.</p>
            </div>
            <div class="box">
                <img src="images/globe.png">
                <h3>Around the world</h3>
                <p>Around the world travel is possible, you just have to decide.</p>
            </div>
            
        </div>
    </div>
    <!-- Gallery section -->
    <div class="gallery">
        <h2 class="heading">
            <span>G</span>
            <span>A</span>
            <span>L</span>
            <span>L</span>
            <span>E</span>
            <span>R</span>
            <span>Y</span>
        </h2>
        <div class="photos">
            <img src="images/g-1.jpg">
            <img src="images/g-2.jpg">
            <img src="images/g-3.jpg">
            <img src="images/g-4.jpg">
            <img src="images/g-5.jpg">
            <img src="images/g-7.jpg">
            <img src="images/g-8.jpg">
        </div>
    </div>
    <!-- Review section -->
    <div class="review">
            <h2 class="heading">
                <span>R</span>
                <span>E</span>
                <span>V</span>
                <span>I</span>
                <span>E</span>
                <span>W</span>
                <span>S</span>
            </h2>
            <div class="review-contents" id="review-contents">
                <div class="review-write">
                    <form action="" method="post">
                        <textarea name="review-txt" class="review-txt"></textarea>
                        <button type="submit" name="review-btn" class="review-btn">SUBMIT</button>
                    </form>
                </div>
                <div class="review-display">
                    <h2 class="cmnt-head">All Reviews</h2>
                    <div class="all-cmnts">
                    <?php
                        if($conn) {
                            if(isset($_POST['review-btn'])){
                                if(isset($_SESSION['email'])){
                                    $name = $_SESSION['username'];
                                    $email = $_SESSION['email'];
                                    $cmnts=$_POST['review-txt'];
                                    $sql = "INSERT INTO review_table(username,email,reviews) VALUES('$name','$email','$cmnts')";
                                    $result = mysqli_query($conn,$sql);
                                    if($result){
                                        echo "<script>alert('Review added succesfully');</script>";
                                    }
                                }
                                else{
                                    echo "<script>alert('Please login first');</script>";
                                    echo "<script>location.href='login_register.php';</script>";
                                }
                            }
                            $cmt = "SELECT username,email,reviews FROM review_table";
                            $rslt=mysqli_query($conn,$cmt);
                            if(mysqli_num_rows($rslt)>0){
                                while($row = mysqli_fetch_assoc($rslt)){
                        ?>
                        <div id="display_review">
                            <div class="img-div">
                                <img src="images/user.png">
                            </div>
                            <div >
                                <h3 class="review-name"><?php echo $row['username'];?></h3>
                                <h4 class="review-email"><?php echo $row['email'];?></h4>
                                <p class="review-para"><?php echo $row['reviews'];?></p>
                            </div>
                        </div>
                        <script>
                            const login = document.getElementById("login-icon");
                            const logout = document.getElementById("logout-icon");
                            login.style.display='block ';
                            logout.style.display='none';       

                            function loginfun(){
                                login.style.display='none';
                                logout.style.display='block';
                            }
                            function logoutfun(){
                                login.style.display='block ';
                                logout.style.display='none';
                            }
                        </script>
                        <?php
                                }
                            }
                        }
                        if($conn){
                            if(isset($_SESSION['email'])){
                                ?>
                                <script>loginfun();</script>
                                <?php
                            }
                            else{
                                ?>
                                <script>logoutfun();</script>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>