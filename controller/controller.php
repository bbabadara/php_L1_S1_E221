<?php
require_once ("../model/model.php");



$date = date('d-m-Y');
$dt=explode("-",$date);

?>



<?php
require_once ("../views/menu.html.php");
 if (isset($_GET["page"])) {
          if ($_GET["page"]==1) { require_once ("../views/b1.html.php"); }
          if ($_GET["page"]==2) { require_once ("../views/b2.html.php"); }
          if ($_GET["page"]==3) { require_once ("../views/b3.html.php"); }
          if ($_GET["page"]==4) { require_once ("../views/b4.html.php"); }
          if ($_GET["page"]=="detail") { require_once ("../views/b5.html.php"); }     
 }else {
    require_once ("../views/b1.html.php");
 }
// require_once ("../views/footer.html.php");
?>