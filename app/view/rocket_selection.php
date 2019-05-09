<div class="row">

    <?php
    unset($data['mars']);
    unset($data['elon']);
    foreach($data as $key=>$value):?>

        <div class="col-md-6 col-sm-12 pointer" onclick="rockets()">
            <img onclick="<?php echo substr_replace( $value['fileName'] ,"", -4);?>();" src="img/rockets/<?php echo $value['fileName'];?>" class="img-rounded main-image pad-v" alt="STANDBY">
            <h5 class="top-left"><?php echo strtoupper( $value['title'] ); ?></h5>
        </div>


    <?php endforeach; ?>


</div>

