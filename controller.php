<?php 

$date = date('d-m-Y');
$dt=explode("-",$date);
// var_dump($dt);
// var_dump($date);
// die;
 ?>






<h1> Tous les biens </h1>
<div class="main col-12">
<?php foreach ($bien as $key => $value): 
    
    ?>
<div class="child col-xs-10 col-sm-5 col-md-4">
    <div class="childc">
    <?php echo $value["image"];?>
    <h1>Type: <?php echo $value["type"]; ?></h1> 
    <h3>Description: <?php echo $value["description"]; ?></h3>
    <h4>Etat: <?php if(empty($value["client"]) && empty($value["date_reser"])){ echo"Disponible";} else { echo " Non disponible";} ?></h4>
    </div>
    
</div>
<?php 
endforeach; ?>
</div>


<h1> Les biens de la region de thies</h1>
<div class="main col-12">
<?php foreach ($bien as $key => $value): 
    if ($value["zone"]=="Thies"):
    ?>
<div class="child col-xs-10 col-sm-5 col-md-4">
    <div class="childc">
    <?php echo $value["image"];?>
    <h1>Type: <?php echo $value["type"]; ?></h1> 
    <h3>Description: <?php echo $value["description"]; ?></h3>
    <h4>Etat: <?php if(empty($value["client"]) && empty($value["date_reser"])){ echo"Disponible";} else { echo " Non disponible";} ?></h4>
    </div>
    
</div>
<?php 
endif;
endforeach; ?>
</div>


<h1> Les biens du client Modou fall</h1>
<div class="main col-12">
<?php foreach ($bien as $key => $value): 
    if (!empty($value["client"])):
    if ($value["client"]["Nom"]=="fall" && $value["client"]["Prenom"]=="Modou"):
    ?>
<div class="child col-xs-10 col-sm-5 col-md-4">
    <div class="childc">
    <?php echo $value["image"];?>
    <h1>Type: <?php echo $value["type"]; ?></h1> 
    <h2>Description: <?php echo $value["description"]; ?></h2>
    <h2>Etat: <?php if(empty($value["client"]) && empty($value["date_reser"])){ echo"Disponible";} else { echo " Non disponible";} ?></h2>
    </div>
    
</div>
<?php 
endif;
endif;
endforeach; ?>
</div>

<h1> Les biens reserver à la date du jour </h1>
<div class="main col-12">
<?php foreach ($bien as $key => $value): 
    if (!empty($value["date_reser"])):
    if ($value["date_reser"]["j"]==$dt[0] && $value["date_reser"]["m"]==$dt[1] &&$value["date_reser"]["a"]==$dt[2] ):
    ?>
<div class="child col-xs-10 col-sm-5 col-md-4">
    <div class="childc">
    <?php echo $value["image"];?>
    <h1>Type: <?php echo $value["type"]; ?></h1> 
    <h2>Description: <?php echo $value["description"]; ?></h2>
    <h2>Etat: <?php if(empty($value["client"]) && empty($value["date_reser"])){ echo"Disponible";} else { echo " Non disponible";} ?></h2>
    </div>
    
</div>
<?php 
endif;
endif;
endforeach; ?>
</div>