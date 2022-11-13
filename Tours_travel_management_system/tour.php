<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito">
        <title>Packages</title>
        <style>
            *{
                margin: 0%;
                padding: 0%;
                font-family: 'Nunito';
            }
            body{
                background-image:url("images/tours-background.webp");
                background-size:cover;
                background-position:center;
                box-sizing:border-box;
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
            }
            
            .pack{
                display: flex;
                flex-flow:row wrap;
                justify-content: center;
                padding-bottom:50px;
            }
            .box{
                text-align: center;
                padding: 10px;
                margin: 10px;
                width: 20%;
                background-color: #EEF1FF;
                border-radius: 20px;
                box-shadow: 2px 2px 10px ;
                
            }
            .box img{
                width: 100%;
                transition: 1s;
                border-radius: 20px;
            }
            .box img:hover{
                transform: scale(1.15);
                z-index: 2;
            }
            h3{
                font-size: 25px;
            }
            h3 i{
                color: orange;
                margin: 0px 10px;
            }
            p{
                margin: 5px auto;
                text-align: center;
                font-size: 16px;
            }
            .stars i{
                color: orange;
                font-size: 18px;
                margin: 10px auto;
            }
            .price{
                text-align: center;
                color: green;
                font-size: 20px;
            }
            .price .dis{
                margin-left: 10px;
                color: #666;
                text-decoration: line-through;
            }
            button{
                background-color: #F7F6DC;
                margin: 10px auto;
                padding:8px 12px ;
                border: 1px solid;
            }
            button:hover{
                background-color: rgb(250, 57, 57);
            }      
        </style>
    </head>
    <body>
        <div class="tours" id="tours">
            <h1 class="heading">
                <span>P</span>
                <span>A</span>
                <span>C</span>
                <span>K</span>
                <span>A</span>
                <span>G</span>
                <span>E</span>
                <span>S</span>
            </h1>
            <div class="pack">
                <div class="box">
                    <img src="images/p-1.jpg">
                    <div class="content">
                        <h3><i class="fa-solid fa-location-dot"></i>Mumbai</h3>
                        <p>The India Gate, facing the Bay of Mumbai, is the facade and iconic building of India, very popular tourist attraction</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <dive class="price">$90.00 <span class="dis">$120.00</span></dive>
                        <br><a href="book.php"><button type="submit">Book Now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-2.jpg">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i>Hawaii</h3>
                        <p>The Islands of Hawaii Offer Something for Every Traveler. Find the Perfect Place for a Peaceful Hawaii Getaway.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <dive class="price">$90.00 <span class="dis">$120.00</span></dive>
                        <br><a href="book.php"><button type="submit">Book Now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p.jfif">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i>Sydney</h3>
                        <p>Sip your way through Australia’s most premium wine country in the Margaret River Region.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <dive class="price">$90.00 <span class="dis">$120.00</span></dive>
                        <br><a href="book.php"><button type="submit">Book Now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-4.jpg">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i>Paris</h3>
                        <p>Paris, the city of romance, is the most visited place in the world. Paris is the centre of art, fashion, architecture</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <dive class="price">$90.00 <span class="dis">$120.00</span></dive>
                        <br><a href="book.php"><button type="submit">Book Now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-5.jpg">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i>Tokyo</h3>
                        <p>Tokyo is an incredibly urbanized city. It has an unbelievable amount of magnificent shrines and gardens located in he city.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <dive class="price">$90.00 <span class="dis">$120.00</span></dive>
                        <br><a href="book.php"><button type="submit">Book Now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/p-6.jpg">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i>Egypt</h3>
                        <p>Beautiful pyramids, mysterious mummies and lots of gold. Tourist places in Egypt comprises of temples, tombs.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <dive class="price">$90.00 <span class="dis">$120.00</span></dive>
                        <br><a href="book.php"><button type="submit">Book Now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/maldives.jpg">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i>Maldives</h3>
                        <p>The Maldives has one of the most delicate environments. Coral reefs are the foundation of the islands.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <dive class="price">$90.00 <span class="dis">$120.00</span></dive>
                        <br><a href="book.php"><button type="submit">Book Now</button></a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/great-barrier-reef.jfif">
                    <div class="content">
                        <h3><i class="fas fa-map-marker-alt"></i>Great Barrier Reef</h3>
                        <p>The Great Barrier Reef is the world's largest coral reef system with vibrant coral, stunning islands to be explored.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <dive class="price">$90.00 <span class="dis">$120.00</span></dive>
                        <br><a href="book.php"><button type="submit">Book Now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>