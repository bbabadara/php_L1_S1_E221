
<?php

require_once ("../views/filtre.html.php");

$rec=$bien;
if (isset($_POST["ok"])) {
            $db=explode("-",$_POST["date"]);         
            $zone=strtolower($_POST["zone"]);   
            $nomc=explode(" ",strtolower($_POST["client"]));     
            $eta=$_POST["dispo"]; 
            
            

            if ($db !=" " && $zone !=" " && $nomc !=" " && $eta !=" ") {

                $rec=[];
                foreach ($bien as $key => $value): 
                             if ($value["date_reser"]["j"]==$db[2] && $value["date_reser"]["m"]==$db[1] && $value["date_reser"]["a"]==$db[0] && $value["zone"]==$zone &&  $value["client"]["nom"]==$nomc[0] && $value["client"]["prenom"]==$nomc[1]):
                                $rec[]=$value;
                             endif;
                                         
                endforeach;              
                
             } 
            // else {
           

            //      if (!empty($db) ) {
            //         $rec=[];
            //         foreach ($bien as $key => $value): 
            //             if (!empty($value["date"])) {
            //                      if ($value["date"]["j"]==$db[2] && $value["date"]["m"]==$db[1] && $value["date"]["a"]==$db[0] && $value["zone"]==$zone &&  $value["client"]["nom"]==$nomc[0] && $value["client"]["prenom"]==$nomc[1]):
            //                         $rec[]=$value;
            //                      endif;
            //             }                     
            //         endforeach;              
            //     } else  if (!empty($zone) ) {
            //     $rec=[];
            //     foreach ($bien as $key => $value): 
                    
            //                  if ($value["zone"]==$zone):
            //                     $rec[]=$value;
            //                  endif;
                                       
            //     endforeach;              
            // } else if (!empty($nomc)) {
            //     foreach ($bien as $key => $value): 
            //     if ($value["client"]["nom"]==$nomc[0] && $value["client"]["prenom"]==$nomc[1] ):
            //        $rec[]=$value;
            //     endif;
            //      endforeach; 
            // } else if (!empty($eta)) {
            //     foreach ($bien as $key => $value): 
            //     if ($value["client"]==$nomc[1] ):
            //        $rec[]=$value;
            //     endif;
            //      endforeach; 
            // }                                    
              
            // }
                 
}            



// echo "<pre>";
//    var_dump($rec);
// echo "</pre>";

?>

<h1> Tous les biens </h1>
<div class="main col-12">
<?php foreach ($rec as $key => $value): ?>
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
endforeach; ?>
</div>