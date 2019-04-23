<div id="rockets" class="container" style="display: none;">


    <?php foreach($data as $key=>$value):?>
        <div id="<?php echo $value['fileName']; ?>" class="row">


            <div class="col-sm-12">  
                <h2> <?php echo str_replace( "_", " ", strtoupper($value['title'])); ?> </h2>
            </div>

            <div class="col-sm-10">

                <div >
                    <x3d id="model3D" width='100%' height='100%' class="x3dmodel">
                        <scene>
                            <inline  nameSpaceName="<?php echo $value['fileName']; ?>"  mapDEFToID="true" url="x3d/<?php echo $value['fileName']; ?>.x3d"> </inline>
                        </scene>
                    </x3d>
                </div>

            </div>

            <div class="col-sm-2">
                    <button onclick="wireframe('<?php echo $value['fileName']; ?>')"  type="button" class="x3d-button btn btn-secondary btn-block">WIREFRAME</button>
                    <button onclick="spin('<?php echo $value['fileName']; ?>')"  type="button" class="x3d-button btn btn-secondary btn-block">SPIN</button>
                    <button onclick="lighting('<?php echo $value['fileName']; ?>')"  type="button" class="x3d-button btn btn-secondary btn-block">LIGHTING</button>
                    <button onclick="front('<?php echo $value['fileName']; ?>')"  type="button" class="x3d-button btn btn-secondary btn-block">FRONT</button>
                    <button onclick="back('<?php echo $value['fileName']; ?>')"  type="button" class="x3d-button btn btn-secondary btn-block">BACK</button>
            </div>
        


            <div class="jumbotron">

            <h5><?php echo $value['description']?></h5>


        </div>
    </div>

    <?php endforeach; ?>


    


</div>
           