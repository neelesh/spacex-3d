
<?php include "app/view/templates/navigation.php";?>
<?php include "app/view/templates/contact.php";?>
    <div id="home" class="container">
            <div class="row">
            <!-- COROUSEL -->
            <div class="col-sm-12">
                <br>

                <h1 class="heading">OCCUPY MARS</h1>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/<?php echo $slide1 ?>" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5> 1 </h5>
                                <p> ... </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/<?php echo $slide2 ?>" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5> 2 </h5>
                                <p> ... </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/<?php echo $slide3 ?>" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5> 3 </h5>
                                <p> ... </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/<?php echo $slide4 ?>" alt="Fo slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5> 4 </h5>
                                <p> ... </p>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>

        </div>



        <br>

        <div id="home" class="jumbotron">

            <h5>"You want to wake up in the morning and think the future is going to be great - and that's what being a spacefaring civilization is all about. It's about believing in the future and thinking that the future will be better than the past. And I can't think of anything more exciting than going out there and being among the stars."
            </h5>

            <hr class="my-4">
            <h6> - ELON MUSK, SPACEX</h6>
            <!-- <p class="lead">
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p> -->
          </div>

        <br>


        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="img/rockets/starhopper.jpg" class="img-rounded main-image pad-v" alt="STANDBY">
                <h5 class="top-left">STARHOPPER</h5>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="img/16x9.jpg" class="img-rounded main-image pad-v" alt="STANDBY">
                <h5 class="bottom-left">STARSHIP</h5>

            </div>
            <div class="col-md-6 col-sm-12">
                <img src="img/16x9.jpg" class="img-rounded main-image pad-v" alt="STANDBY">
                <h5 class="bottom-left">SUPER HEAVY</h5>

            </div>
            <div class="col-md-6 col-sm-12">
                <img src="img/16x9.jpg" class="img-rounded main-image pad-v" alt="STANDBY">
                <h5 class="bottom-left">BIG FALCON ROCKET</h5>

            </div>
        </div>
        </div>