<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login-Register</title>
        <style>
            *{
                margin: 0%;
                padding: 0%;
            }
            .hero{
                height: 100%;
                width: 100%;
                background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("images/banner.jpg");
                background-position: center;
                background-size: cover;
                position: absolute;
            }
            .form-box{
                width: 380px;
                height: 480px;
                margin: 8% auto;
                background-color: #fff;
                padding: 5px;
                position: relative;
                overflow: hidden;
                border-radius: 30px;
            }
            .button-box{
                width: 220px;
                margin: 35px auto;
                box-shadow: 0 0 20px 9px #ff61241f;
                border-radius: 30px;
                position: relative;
            }
            .toggle-btn{
                padding: 10px 30px;
                background: transparent;
                border: 0;
                outline: none;
                position: relative;
            }
            a{
                text-decoration: none;
            }
            #btn{
                top:0;
                left: 0;
                position: absolute;
                width: 110px;
                height: 100%;
                background: linear-gradient(to right,#ff105f,#ffad06);
                border-radius: 30px;
                transition: 0.5s;
            }
            .social-icons{
                margin: 30px auto;
                text-align: center;
            }
            .social-icons img{
                width: 30px;
                margin: 0 12px;
                box-shadow: 0 0 20px 0 #7f7f7f3d;
                border-radius: 50%;
            }
            .input-group{
                top:180px;
                position: absolute;
                width: 280px;
                transition: 0.5s;
            }
            .input-field{
                width: 100%;
                padding: 10px 0;
                margin: 5px 0;
                border: none;
                outline: none;
                border-bottom: 1px solid #999;
                background: transparent;
            }
            .submit-btn{
                width: 85%;
                padding: 10px 30px;
                display: block;
                margin:30px auto;
                background: linear-gradient(to right,#ff105f,#ffad06);
                border: 0;
                outline: none;
                border-radius: 30px;
            }
            #submit-btn{
                margin-top: 50px;
            }
            #login{
                left: 50px;
            }
            #register{
                left: 450px;
            }
            .forgot{
                margin-top: 10px;
                position: absolute;
            }
            .forgot a{
                color: #777;
                text-decoration: none;
            }
            .forgot a:hover{
                color: blue;
            }
        </style>
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <img src="images/fb.png">
                    <img src="images/tw.png">
                    <img src="images/gp.png">
                </div>
                <!-- login page -->
                <form id="login" class="input-group" action="php_code.php" method="post">
                    <input type="email" class="input-field" placeholder="Email" name="login-email" required>
                    <input type="password" class="input-field" placeholder="Password" name="login-pass" required>
                    <br><span  class="forgot"><a href="password.php">Forgot Password?</a></span>
                    <button type="submit" class="submit-btn" id="submit-btn" name="login-btn">Login</button>
                </form>
                <!-- Register page -->
                <form id="register" class="input-group" action="php_code.php" method="post">
                    <input type="text" class="input-field" placeholder="Username" name="re-name" required>
                    <input type="email" class="input-field" placeholder="Email" name="re-email" required>
                    <input type="password" class="input-field" placeholder="Password" name="re-pass" required>
                    <input type="password" class="input-field" placeholder="Confirm Password" name="re-cnpass" required>
                    <button type="submit" class="submit-btn" name="register-btn">Register</button>
                </form>
            </div> 
        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }

            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
                
            }
        </script>
    </body>
</html>