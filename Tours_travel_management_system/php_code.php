<?php
    error_reporting(0);
    session_start();
    // register page php
    if(isset($_POST['register-btn'])){
        $server = "sql213.epizy.com";
        $username = "epiz_32624346";
        $password = "A4pfY7CS0q2eLK";
        $database = "epiz_32624346_travel_website_database";

        $conn = mysqli_connect ($server,$username,$password,$database);

        if($conn){
            $name = $_POST['re-name'];
            $email = $_POST['re-email'];
            $pass = $_POST['re-pass'];
            $cnpass = $_POST['re-cnpass'];
            if($pass==$cnpass){
                $sql = "INSERT INTO register(username,email,password) VALUES('$name','$email','$pass')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "<script>alert('Successfull');</script>";
                    echo "<script>location.href='login_register.php'</script>";
                }
            }
            else{
                echo "<script>alert('Password not equal');</script>";
            }
        }
    }

    //login page php
    if(isset($_POST['login-btn'])){
        $server = "sql213.epizy.com";
        $username = "epiz_32624346";
        $password = "A4pfY7CS0q2eLK";
        $database = "epiz_32624346_travel_website_database";

        $conn = mysqli_connect ($server,$username,$password,$database);

        if($conn){
            $email = $_POST['login-email'];
            $pass = $_POST['login-pass'];

            $cmt = "SELECT username, email, password FROM register WHERE email='$email' AND password='$pass'";
            $result = mysqli_query($conn,$cmt);

            if(mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
                $_SESSION['email']=$row['email'];
                $_SESSION['username']=$row['username'];
                ?>
                
                <script>
                alert("Welcome <?php echo $row['username'];?>");    
            location.href="index.php";
            
    
            </script>
                <?php
            }
            else{
                echo "<script>alert('Data not found');</script>";
                echo "<script>location.href='login_register.php'</script>";
            }
        }
    }

    //reset password page php
    if(isset($_POST['reset-btn'])){
        $server = "sql213.epizy.com";
        $username = "epiz_32624346";
        $password = "A4pfY7CS0q2eLK";
        $database = "epiz_32624346_travel_website_database";

        $conn=mysqli_connect($server,$username,$password,$database);

        if($conn) {
            $name = $_POST['username'];
            $email = $_POST['email'];
            $cmt = "SELECT username email FROM register WHERE username='$name' AND email='$email'";
            $result = mysqli_query($conn,$cmt);
            if(mysqli_num_rows($result)>0){
                $pass=$_POST['pass'];
                $cnpass=$_POST['cnpass'];
                if($pass==$cnpass){
                    $cmt = "UPDATE register SET password='$pass' WHERE username='$name' AND email='$email'";
                    $result = mysqli_query($conn,$cmt);
                    if($result){
                        echo "<script>alert('Password Changed');</script>";
                        echo "<script>location.href='password.php'</script>";
                    }
                    else{
                        echo "<script>alert('Something went wrong');</script>";
                        echo "<script>location.href='password.php'</script>";
                    }
                }
                else{
                    echo "<script>alert('Password not match');</script>";
                    echo "<script>location.href='password.php'</script>";
                }
            }
            else{
                echo "<script>alert('User not found');</script>";
                echo "<script>location.href='password.php'</script>";
            }
        }
    }

    //booking page details php
    if(isset($_POST['book-btn'])){
        
        if(isset($_SESSION['email'])){
            $server = "sql213.epizy.com";
            $username = "epiz_32624346";
            $password = "SA4pfY7CS0q2eLK";
            $database = "epiz_32624346_travel_website_database";

        $conn=mysqli_connect($server,$username,$password,$database);

        if($conn){
            // $name = $_POST['username'];
            // $email = $_POST['email'];
            $name = $_SESSION['username'];
            $email = $_SESSION['email'];
            $destination = $_POST['destination'];
            $number_of_people = $_POST['number_of_people'];
            $arrival = $_POST['arrival'];
            $leaving = $_POST['leaving'];
            $sql = "INSERT INTO booking_details(username,email,destination,number_of_people,arrival,leaving) VALUES('$name','$email','$destination','$number_of_people','$arrival','$leaving')";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script>alert('Booking Successfull');</script>";
                echo "<script>location.href='index.php';</script>";
            }
        }
        }
        else{
            error_reporting(0);
            echo "<script>alert('Please login first');</script>";
            echo "<script>location.href='login_register.php'</script>";
        }
        
    }
    

    //logout php code
    if(isset($_POST['logout-btn'])){
        $server = "sql213.epizy.com";
        $username = "epiz_32624346";
        $password = "A4pfY7CS0q2eLK";
        $database = "epiz_32624346_travel_website_database";

        $conn=mysqli_connect($server,$username,$password,$database);

        if($conn) {
            {
                session_destroy();
                
                echo "<script>location.href='index.php'</script>";
            }
        }
    }


?>