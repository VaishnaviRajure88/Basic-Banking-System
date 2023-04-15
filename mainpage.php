 <!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sparks Trust Bank by Vaishnavi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <!-- AOS Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Bootstrap Scirpt -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>

    <!-- Importing Navbar -->
    <?php require_once './navbar.php' ?>

    <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators -->
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- Slideshow -->
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imgs/bankx.jpg" alt="Bank" class="d-block" style="width:100%" height="100%">
            <div class="carousel-caption">
            <h3>Sparks Trust Bank Bank</h3>
            <p>Your trust, our Responsibility!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imgs/atm2.jpg" alt="Chicago" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>World's Best Cashless Service</h3>
            <p>Domestic, International, Golden, Platinum? You name it!</p>
            </div> 
        </div>
        <div class="carousel-item">
            <img src="imgs/atmb.jpg" alt="New York" class="d-block" style="width:100%">
            <div class="carousel-caption">
            <h3>Seamless Internet Banking</h3>
            <p>Now perform your transactions at your own comfort!</p>
            </div>  
        </div>
        </div>

        <!-- Left and right controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        </button>
        </div>
    <!--End of the Carousel -->

    

    <!-- Services Section with Animation -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Services</h2>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <!-- Services Image -->
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="imgs/bankbe.jpg" class="img-fluid" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="100">
                </div>
                <!-- Services Buttons -->
                <div class="col-lg-6 col-md-6 col-12" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="400" data-aos-offset="100">
                    <br>
                    <h3>These are the Services we currently provide</h3>
                    <div class="container col my-5">
                        <p class="lead"> Our customer list: </p>
                        <a href="customers.php"><button class="btn btn-success" type="button" >Click here</button></a>
                    </div>
                    <div class="container col my-5">
                        <p class="lead"> Check out the transaction history here: </p>
                        <a href="transaction.php"><button class="btn btn-success" type="button" >Click here</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section END -->

    <!-- About Us Section with Animation -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About us</h2>
        </div>
        <!-- About Us Paragraph -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    
                    <div class="container col my-5" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="100">
                        <p class="lead">
                            
                        
                        
                            The Sparks Trust Bank is helping guide,advise and lead people along their road to financial security and wellness,
                            or as we call it, Lighting the Way to Financial Well-Being.This purpose is what drives the Sparks Trust Foundation in our actions,
                            investments, and goals in our communities and the country as a whole.With a wide range of products and services, 
                            including savings and checking accounts, loans, credit cards, and investment options, Sparks Trust  Bank is committed to 
                            helping its clients achieve their financial goals. Our team of experienced professionals is dedicated to delivering 
                            personalized, innovative, and reliable banking solutions that meet the unique needs of each customer. 
                            At Sparks Trust Bank, we are committed to providing exceptional customer service and maintaining the highest standards 
                            of integrity and professionalism.

                       </p> 
                    </div>
                </div>
            
                <!-- About Us Image -->
                <div class="col-lg-6 col-md-6 col-12" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="500" data-aos-offset="100">
                    <img src="imgs/bankkkk.png" height="100%" width="100%">
                </div>
                
            </div>
        </div>
    </section>
    <!-- About Us Section END -->

    <!-- Footer -->
    <?php require_once './footer.php' ?>
    
</body>
</html>