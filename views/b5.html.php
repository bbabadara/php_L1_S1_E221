
<div class=" detail col-12 flex ">
<?php
foreach ($bien as $key => $value): 
    if ($_GET["voir"]==$value["idb"]):
        $mzone=$value["zone"];

    ?>
    
    <div class="seccontain col-10 flex ndt">
        <div class="seca col-xs-12 col-sm-5 col-md-7">
            <img src="image/<?= $value["image"];?>" class="col-xs-12 col-sm-11 col-md-10" alt="" >    
        </div>
        <div class="secb col-xs-12 col-sm-5 col-md-5">
        <h3>Type: <?= $value["type"]; ?></h3> 
        <h3>Zone: <?= $value["zone"]; ?></h3>
        <h3>Description: <?= $value["description"]; ?></h3>
        <h3>Etat: <?php if(empty($value["client"]) && empty($value["date_reser"])){ echo"Disponible";} else { echo " Non disponible";} ?></h3>          
        
        </div>
    </div>

<?php 
endif;
endforeach; ?>
</div>



<h1> Les biens disponibles dans la meme zone </h1>
<div class="main col-12">
<?php foreach ($bien as $key => $value):
    if ($value["zone"]==$mzone  && empty($value["client"]) && empty($value["date_reser"])):
    ?>
<div class="child col-xs-10 col-sm-5 col-md-3">
    <div class="childc">
    <a href="<?= $url?>/?page=detail&&voir=<?= $value["idb"]; ?>"><img src="image/<?= $value["image"];?>" alt=""> </a>    
    <h3>Type: <?= $value["type"]; ?></h3> 
    <h3>Zone: <?= $value["zone"]; ?></h3>
    <h3>Description: <?= $value["description"]; ?></h3>
    <h4>Etat: <?php if(empty($value["client"]) && empty($value["date_reser"])){ echo"Disponible";} else { echo " Non disponible";} ?></h4>
    </div>
    
</div>
<?php 
endif;
endforeach; ?>
</div>