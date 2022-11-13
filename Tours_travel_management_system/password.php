<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Reset Password</title>
        <style>
            *{
                margin: 0%;
                padding: 0%;
            }
            .hero{
                height: 100%;
                width: 100%;
                background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url("Login_image/banner.jpg");
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
                margin: 40px auto 35px auto;
                box-shadow: 0 0 20px 9px #ff61241f;
                border-radius: 30px;
                position: relative;
            }
            .toggle-btn{
                padding: 10px 30px;
                background: transparent;
                text-align: center;
                width: 220px;
                border: 0;
                outline: none;
                position: relative;
            }
            #btn{
                top:0;
                left: 0;
                position: absolute;
                width: 220px;
                height: 100%;
                background: linear-gradient(to right,#ff105f,#ffad06);
                border-radius: 30px;
                transition: 0.5s;
            }
            .input-group{
                margin-top:10px;
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
                margin:30px auto 30px auto;
                background: linear-gradient(to right,#ff105f,#ffad06);
                border: 0;
                outline: none;
                border-radius: 30px;
            }
            #login{
                left: 50px;
            }
            .forgot{
                margin-left: 30px;
                color: rgb(82, 80, 80);
                position: absolute;
            }
            .forgot a{
                color: rgb(72, 71, 71);
                margin-left: 10px;
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
                    <button class="toggle-btn">Reset Password</button>
                </div>
                <form id="login" class="input-group" action="php_code.php" method="post">
                    <input type="text" class="input-field" placeholder="Username" name="username" required>
                    <input type="email" name="email" class="input-field" placeholder="Email" required>
                    <input type="password" class="input-field" placeholder="Password" name="pass" required>
                    <input type="password" class="input-field" placeholder="Confirm Password" name="cnpass" required>
                    <button type="submit" class="submit-btn" name="reset-btn">Reset</button>
                    <span  class="forgot">Already have an account?<a href="login_register.php">Login</a></span>
                </form>
            </div>
        </div>
    </body>
</html>