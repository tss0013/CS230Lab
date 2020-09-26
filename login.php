
<?php
require 'includes/header.php'
?>
<main>
<link rel="stylesheet" href="css/login.css">

    <div class="bg-cover">
        <div class="container" style="padding-top: 80px;">
            <div id="Slideshow" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#Slideshow" data-slide-to="0" class="active"></li>
                    <li data-target="#Slideshow" data-slide-to="1"></li>
                    <li data-target="#Slideshow" data-slide-to="2"></li>
                    <li data-target="#Slideshow" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block mx-auto" src="images/marioshoe.jpg" alt="First Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/sonicshoe.jpg" alt="Second Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/kanyeshoe.jpg" alt="Third Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto" src="images/narutoshoe.jpg" alt="Fourth Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#Slideshow" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#Slideshow" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="false"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>



        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post" style="background-color: white;">
                    <img class="mb-4" src="images/shoepic1.jpg" alt=""
                        width="100" height="72">
                    <h1 class="mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Username or Email Address</label>
                    <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username/ Email" required
                        autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3" style="text-align: left;">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-info btn-block" name="login-submit" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>
            </div>
        </div>

    </div>

</main>