<!DOCTYPE html>
<html lang="en">

<head>
    <title>::HAZKEN DIGITAL::</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <style>
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }
 
        .input-opacity {
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <!--NAVIGATION HOME-->
    <div class="container-fluid bg-light" id="home-navigation">
        <div class="container">
            <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top"
            style="border-bottom: 4px solid #7E2726">
                <a class="navbar-brand" href="#home-navigation">
                    <img src="src/img/HAZ-KEN GRAPHICS.png" alt="HAZKEN GRAPHICS" style="width: 190px; height:50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto font-weight-bold text-capitalize"
                        style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                        <li class="nav-item">
                            <a class="nav-link" href="#home-navigation">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ourfeatures">FEATURES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">ABOUT US</a>
                        </li>
                        <li class="nav-item"> <a href="https://www.instagram.com/hazken_graphics/" target="_blank">
                                <img src="src/img/instagram_icon.png" class="m-1 mt-2"
                                    style="widows: 23px;height: 23px;"></a></li>
                        <li class="nav-item"><a href="https://www.facebook.com/hazkengraphics/" target="_blank">
                                <img src="src/img/facebook.png" class="m-1 mt-2" style="widows: 23px;height: 23px;"></a>
                        </li>
                        <li class="nav-item"><a href="https://wa.me/2348176246387" target="_blank">
                                <img src="src/img/whatsapp.png" class="m-1 mt-2" style="widows: 23px;height: 23px;"></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--Image Slides-->

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/src/img/hazken-image.png" alt="Hazken Graphics" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                        I am <span class="font-weight-bold">Modiu Kenny</span></h3>
                    <p class="font-weight-bold">A Graphics Artist and <br>A Intermediate Web Developer</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/src/img/hazken-image-printing-wedo.png" alt="Hazken-Graphics" width="1100" height="500">
                <div class="carousel-caption">
                    <p>|GRAPHICS DESIGNS| |JAVASCRIPT FOR WEB & MOBILE| |BRANDING| |PRINTING|</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="src/img/hazken-image-printing.png" alt="Hazken" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Call us today</h3>
                    <p class="text-uppercase">We give out the best</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!--SEND TO E-MAIL-->
    <div class="container-fluid px-5 p-4 bg-danger">
        <form action="/action_page.php" class="input-opacity">
            <div class="form-group">
                <input type="email" class="form-control mb-3" placeholder="Your-Email" name="email">
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-light btn-block">Submit</button>
        </form>
    </div>






    <!--DETAILS ABOUT HAZKEN GRAPHICS-->
    <div class="container-fluid bg-warning" id="ourfeatures">
        <div class="container p-5">
            <div>
                <h3 class="text-center font-weight-bold">SERVICE WE PROVIDE</h3>
            </div>
            <div class="row justify-content-center">
                <a href="#graphics-designs" class="col-lg-3 p-3 m-3 rounded 
                        shadow shadow-small border border-4 bg-light
                        text-dark" style="text-decoration: none">
                    <div class="text-center">
                        <img src="src/img/graphics artist.png" alt="graphics_icon" style="width:48px; height:48px;">
                        <h5 class="font-weight-bold">GRAPHICS DESIGN</h5>
                        <p><span class="text-uppercase">Logos, Light-Packaging,
                                Megazines, Office Stationaries Designs, etc...</span></p>
                    </div>
                </a>

                <a href="#web-designs" class="col-lg-3 p-3 m-3 rounded 
                    shadow shadow-small border border-4 bg-light
                    text-dark" style="text-decoration: none">
                    <div class="text-center">
                        <img src="src/img/webdesign_icon.png" alt="webdesign_icon" style="width:48px; height:48px;">
                        <h5 class="font-weight-bold">WEB DESIGNS</h5>
                        <p><span class="text-uppercase">JAVASCRIPT FOR <br>WEB & MOBILE</span></p>
                    </div>
                </a>
                <a href="#graphics-designs" class="col-lg-3 p-3 m-3 rounded 
                shadow shadow-small border border-4 bg-light
                text-dark" style="text-decoration: none">
                    <div class="text-center">
                        <img src="src/img/printing.png" alt="printing_icon" style="width:48px; height:48px;">
                        <h5 class="font-weight-bold">GENERAL PRINTING</h5>
                        <p>WEDDING PROGRAM,
                            OFFICE STATIONARIES, BOOK PUBLISHING,
                            LIGHT-PACKAGING, ETC...</p>
                    </div>
                </a>

                <a href="#branding-designs" class="col-lg-3 p-3 m-3 rounded 
            shadow shadow-small border border-4 bg-light
            text-dark" style="text-decoration: none">
                    <div class="text-center">
                        <img src="src/img/branding.png" alt="branding_icon" style="width:48px; height:48px;">
                        <h5 class="font-weight-bold">CREATIVE BRANDING</h5>
                        <p>CAR BRANDING, BOOK BRANDING, ETC...</p>
                    </div>
                </a>

                <a href="https://www.instagram.com/hazken_graphics/" target="_blank" class="col-lg-3 p-3 m-3 rounded 
         shadow shadow-small border border-4 bg-light
        text-dark" style="text-decoration: none">
                    <div class="text-center">
                        <img src="src/img/porfolio.png" alt="graphics_icon" style="width:48px; height:48px;">
                        <h5 class="font-weight-bold">MY PORTFOLIO</h5>
                        <p>Go to our link on<br><strong>INSTAGRAM</strong></p>
                    </div>
                </a>

            </div>



        </div>
    </div>

    <!--GRAPHICS DESIGN DETAILS-->
    <section class="cotainerfluid p-2" id="graphics-designs">
        <h3 class=" text-center font-weight-bold">GRAPHICS DESIGNS/PRINTING</h3>
        <div class="row">
            <div class="col-4">
                <img src="src/img/1.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/2.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/3.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/5.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/6.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/7.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/8.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/9.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/10.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/11.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/12.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/13.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/14.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/15.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/16.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/17.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/18.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/19.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/20.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/21.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/22.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/23.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/24.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/25.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/26.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/27.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/28.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/29.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/30.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/31.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/32.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/33.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/34.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/35.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/36.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/37.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/38.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/39.png" class="img-fluid m-1">
            </div>
            <div class="col-4">
                <img src="src/img/40.png" class="img-fluid m-1">
            </div>
        </div>
    </section>
    <!--WEBD-ESIGNS DESIGN DETAILS-->
    <section class="cotainerfluid p-2 bg-warning" id="web-designs">
        <h3 class=" text-center font-weight-bold">WEB DESIGNS</h3>
        <p class="text-center">For your Web Designs & Mobile
            Your can send us a mail<br><strong>hazkengraphics@gmail.com</strong>
        </p>
        <img src="src/img/responsive web.jpg" class="img-fluid m-1">
        <img src="src/img/responsive web1.jpg" class="img-fluid m-1">
        </div>
    </section>
</body>

<!--BRANDING DESIGN DETAILS-->
<article class="cotainerfluid p-2 bg-danger">
    <div id="branding-designs">
        <h3 class=" text-center text-white font-weight-bold">CREATIVE BRANDING</h3>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="src/img/41.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/42.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/43.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/45.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/46.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/47.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/48.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/49.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/50.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/51.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/52.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/53.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/54.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/55.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/56.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/57.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/58.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/59.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/60.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/61.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/62.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/63.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/64.png" class="img-fluid m-1">
        </div>
        <div class="col-4">
            <img src="src/img/65.png" class="img-fluid m-1">
        </div>
</article>

<!--ABOUT US-->
<footer class="cotainerfluid p-2 bg-light" id="about-us">
    <h3 class=" text-center font-weight-bold">ABOUT US</h3>
    <p class="text-center">
        We do Graphics Design for Your Printing, Book Publishing, Light-Packaging,<br>
        Creative Branding, Business Cards, Office Stationaries, Handbill,<br>
        Creative Logo, General Printing and Creative Branding.<br>
        We do Web Reponsive Designs for mobile Phone, Tablets, Mini Laptops,
        and Large Screens and for Applications. <br>
        <strong>E-mail: hazkengraphics@gmail.com<br>
            Contact: +234 817 6246 387</strong>
    </p>
    <div class="d-flex flex-row justify-content-center">
        <a href="https://www.instagram.com/hazken_graphics/" target="_blank">
            <img src="src/img/instagram_icon.png" class="m-1" style="widows: 23px;height: 23px;"></a>
        <a href="https://www.facebook.com/hazkengraphics/" target="_blank">
            <img src="src/img/facebook.png" class="m-1" style="widows: 23px;height: 23px;"></a>
        <a href="https://wa.me/2348176246387" target="_blank">
            <img src="src/img/whatsapp.png" class="m-1" style="widows: 23px;height: 23px;"></a>
    </div>

    <div class="d-flex flex-row justify-content-center text-secondary">
        &copy; Hazken 2019
    </div>
</footer>
</body>

</html>