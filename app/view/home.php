
<?php include "app/view/templates/navigation.php";?>
<?php include "app/view/templates/contact.php";?>
    <div id="home" class="container">
            <div class="row">
            <!-- COROUSEL -->
            <div class="col-sm-12">
                <br>

                <h1 class="heading"><?php echo strtoupper( $data['mars']['title']);?></h1>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/slides/<?php echo $data['starhopper']['fileName'].= '.jpg';?>" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5> <?php echo strtoupper( $data['starhopper']['title'])?> </h5>
                                <!-- <p> ... </p> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/slides/<?php echo $data['starship']['fileName'].= '.jpg';?>" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5> <?php echo strtoupper( $data['starship']['title'])?> </h5>
                                <!-- <p> ... </p> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/slides/<?php echo $data['booster']['fileName'].= '.jpg';?>" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5> <?php echo strtoupper( $data['booster']['title'])?> </h5>
                                <!-- <p> ... </p> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/slides/<?php echo $data['capsule']['fileName'].= '.jpg';?>" alt="Fo slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5> <?php echo strtoupper( $data['capsule']['title'])?></h5>
                                <!-- <p> ... </p> -->
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

            <h5>"<?php echo $data['mars']['description']?>"</h5>

            <hr class="my-4">
            <h6> - <?php echo strtoupper( $data['mars']['subtitle'])?></h6>
            <!-- <p class="lead">
              <a class="btn btn-primary btn-lg"  role="button">Learn more</a>
            </p> -->
          </div>

        <br>


    <?php include "app/view/rocket_selection.php";?>
        
    </div>