<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito">
        <title>Book Now</title>
        <style>
            *{
                margin: 0%;
                padding: 0%;
                font-family: 'Nunito';
            }
            .heading{
                text-align: center;
                padding: 40px 0;
            }
            .heading span{
                font-size: 40px;
                background-color: rgba(55, 27, 88, 0.2);
                color: rgba(55, 27, 88, 1);
                border-radius: 4px;
                padding: 2px 12px;
                box-shadow:3px 3px;
            }
            .heading span.space{
                background: none;
                box-shadow:none;
            }
            .row{
                padding: 10px 40px;
                display: flex;
                height: 88%;
                align-items: center;
            }
            .col{
                width: 50%;
                margin: 20px 50px;
                align-items: center;
                
            }
            img{
                margin-left: 5%;
                border-radius: 30px;
                width: 90%;
            }
            .input-box{
                padding: 8px 0px;
            }
            .input-box input{
                width: 100%;
                padding: 16px;
                border: 1px solid rgba(0, 0, 0, 0.3);
                font-size: 20px;
                color: #333;
            }
            #destination{
                width: 105%;
                padding: 16px;
                border: 1px solid rgba(0, 0, 0, 0.3);
                font-size: 20px;
                color: #333;
            }
            .btn{
                width: 30%;
                padding: 12px;
                margin-top: 10px;
                border: 1px solid rgba(0, 0, 0, 0.5);
                font-size: 20px;
                color: #333;
            }
            .btn:hover{
                background-color: orange;
            }
            form .input-box h3{
                font-size: 25px;
                color: #555;
            }
        </style>
    </head>
    <body>
        <div class="book" id="book">
            <h1 class="heading">
                <span>B</span>
                <span>O</span>
                <span>O</span>
                <span>K</span>
                <span class="space"></span>
                <span>N</span>
                <span>O</span>
                <span>W</span>
            </h1>
        <div class="row">
            <div class="col">
                <form action="php_code.php" method="post">
                    <div class="input-box">
                        <h3>Where to</h3>
                        <select name="destination" id="destination" required>
                            <option value="" selected>Select destination</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Sydney">Sydney</option>
                            <option value="Paris">Paris</option>
                            <option value="Tokyo">Tokyo</option>
                            <option value="Egypt">Egypt</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Great Barrier Reef">Great Barrier Reef</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <h3>How many</h3>
                        <input type="number" placeholder="Number of people" name="number_of_people" required>
                    </div>
                    <div class="input-box">
                        <h3>Arrivals</h3>
                        <input type="date" name="arrival" required>
                    </div>
                    <div class="input-box">
                        <h3>Leaving</h3>
                        <input type="date" name="leaving" required>
                    </div>
                    <input type="submit" class="btn" value="Book Now" name="book-btn">
                </form>
            </div>
            <div class="col">
                <img src="images/g-6.jpg">
            </div>
        </div>
    </div>
    </body>
</html>