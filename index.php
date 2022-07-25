<!DOCTYPE html>
<html>
    <head>
    <style>
    input[type=submit]{
        padding:5px 15px; 
        background:#ffff; 
        color: #D64933;
        border:0 none;
        cursor:pointer;
        -webkit-border-radius: 5px;
        border-radius: 5px; 
        width: 100px;
        margin-top: 1%;
    }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:wght@700&family=Lato:wght@900&display=swap" rel="stylesheet">
    <title>auctiON</title>
    <!-- bootstrap file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="mainBody">
            <!-- NAVIGATION BAR -->
            <nav class="navbar navbar-light" >
                <a class="navbar-brand" style="color: #ffff; font-size:33px;">aucti<b>ON</b></a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search anything!" aria-label="Search">
                    <button type="button" class="btn btn-light" style="color: #ffff">Search</button>
                </form>
            </nav>
            <!-- main body -->
            
                <div class="row">
                    <div class="col-7 innerBody">
                        <p class="innerBody-text">
                            Welcome <br> To <br>
                            Graphic Era <br>Online Auction System
                        </p>
                        <form method="POST" action="login.php">
                            <input type="submit" value="Sign In" />
                        </form>
                        
                        <form method="POST" action="add_buyer.php">
                            <input type="submit" value="Sign Up"/>
                        </form>

                       

                    </div>
                    <div class="col-5 ">
                        <img src="auctionlogo.png" alt="college logo" class="auctionlogo" >
                    </div>
                </div> 
            </div>
        </div>

        <section id="features">

            <div class="row ">
              <div class="col-lg-4 col-md-4 feature-box" >
                <i class="fas fa-check-circle icon fa-4x"></i>
                <h3>Easy to use.</h3>
                <p>Buy/Sell in the easiest way possible</p>
              
              </div>
              <div class="col-lg-4 col-md-4 feature-box"  >
                <i class="fas fa-bullseye icon fa-4x "></i>
                <h3>Car</h3>
                <p>Resell or purchase Car in few clicks</p>
              </div>
              <div class="col-lg-4 col-md-4 feature-box">
                <i class="fas fa-heart icon fa-4x"></i>
                <h3>Best Price</h3>
                <p>Get/Sell the item at its best price</p>
              </div>
            </div>
            <!-- end of row -->
          
        </section>

        <!-- Footer -->

        <footer id="footer" style="text-align: center; background-color: #D64933;">
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook"></i>
            
            <i class="fab fa-instagram"></i>
            <i class="fas fa-envelope"></i>
            <br>
            <p style="margin-top: 15px;">© Copyright 2022 auctiON</p>

        </footer>

       

    </body>
</html>