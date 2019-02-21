<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
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
                    <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control mb-3" placeholder="Your Email" name="email">
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-light btn-block">Submit</button>
        </form>
    </div>
    <div class="container-fluid px-5 p-4 bg-danger">

    <!--GRAPHICS DESIGN DETAILS-->
    <!--GRAPHICS DESIGN DETAILS-->
    <section class="container-fluid p-2" id="graphics-designs">
        <h3 class=" text-center font-weight-bold">GRAPHICS DESIGNS/PRINTING</h3>
        <div class="row mx-auto">
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
        <div class="d-flex flex-row justify-content-center">
        <button type="button" class="btn btn-danger btn-md m-1"
        data-toggle="modal" data-target="#exampleModal2">ORDER NOW</button>
        </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FILL IN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="https://script.google.com/macros/s/AKfycbw-2AdbOXk4xk9ZdbJzgei2c6BOpFKOvDT_Sxqn/exec" method="POST" class="gform input-opacity">
            <div class="form-group p-2">
                <input type="email" class="form-control mb-3" placeholder="Your Email" name="email">
                <textarea class="form-control" rows="5" id="comment" name="message"
                placeholder="Your Message"></textarea>
            </div>
            <button type="submit" class="btn btn-danger m-2"
            data-toggle="modal" data-target="#exampleModal5"
            >SUBMIT</button>
            <div style="display:none" class="thankyou_message">
                <!-- You can customize the thankyou message by editing the code below -->
                <h2><em>Thanks</em> for contacting us! We will get back to you soon!
                </h2>
               </div>
            
        </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          MESSAGE SENT SUCCESSFULLY
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
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