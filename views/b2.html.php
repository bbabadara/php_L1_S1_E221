<h1> Les biens de la region de thies</h1>
<div class="main col-12">
<?php foreach ($bien as $key => $value): 
    if ($value["zone"]=="Thies"):
    ?>
<div class="child col-xs-10 col-sm-5 col-md-4">
    <div class="childc">
    <a href="<?= $url?>/?page=detail&&voir=<?= $value["idb"]; ?>"><img src="image/<?= $value["image"];?>" alt=""> </a>    
    <h1>Type: <?= $value["type"]; ?></h1> 
    <h3>Zone: <?= $value["zone"]; ?></h3>
    <h3>Description: <?= $value["description"]; ?></h3>
    <h4>Etat: <?php if(empty($value["client"]) && empty($value["date_reser"])){ echo"Disponible";} else { echo " Non disponible";} ?></h4>
    </div>
    
</div>
<?php 
endif;
endforeach; ?>
</div>