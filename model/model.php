<?php 
require_once("url.model.php");
$date = date('d-m-Y');
$dt=explode("-",$date);
?>


<?php
$bien=[

    [ 
        "idb"=>1,
        "type"=> "appartement",
        "description"=> "ceci est un bien",
        "image"=> "1.jpg",
        "zone"=> "thies",
        "client"=> ["Nom"=>"fall","Prenom"=>"modou"],
        "date_reser"=> ["j"=>5,"m"=>8,"a"=>2022],
    ],
   
    [ 
        "idb"=>2,
        "type"=> "studio",
        "description"=> "ceci est un bien",
        "image"=> "2.jpg",
        "zone"=> "louga",
        "client"=> ["Nom"=>"fall","Prenom"=>"modou"],
        "date_reser"=> ["j"=>15,"m"=>9,"a"=>2022],
    ],

   
    [ 
        "idb"=>3,
        "type"=> "maison",
        "description"=> "ceci est un bien",
        "image"=> "3.jpg",
        "zone"=> "thies",
        "client"=> ["Nom"=>"fall","Prenom"=>"modou"],
        "date_reser"=> ["j"=>5,"m"=>9,"a"=>2022],
    ],

   
    [ 
        "idb"=>4,
        "type"=> "appartement",
        "description"=> "ceci est un bien",
        "image"=> "4.jpg",
        "zone"=> "dakar",
        "client"=> ["Nom"=>" ","Prenom"=>" "],
        "date_reser"=> ["j"=>" ","m"=>" ","a"=>" "],
    ],

   
    [ 
        "idb"=>5,
        "type"=> "immeuble",
        "description"=> "ceci est un bien",
        "image"=> "5.jpg",
        "zone"=> "dakar",
        "client"=> ["Nom"=>"sonko","Prenom"=>"seydina"],
        "date_reser"=> ["j"=>$dt[0],"m"=>$dt[1],"a"=>$dt[2]]
    ],

   
    [ 
        "idb"=>6,
        "type"=> "appartement",
        "description"=> "ceci est un bien",
        "image"=> "6.jpg",
        "zone"=> "kaolack",
        "client"=> ["Nom"=>" ","Prenom"=>" "],
        "date_reser"=> ["j"=>" ","m"=>" ","a"=>" "],
    ],

   
    [ 
        "idb"=>7,
        "type"=> "appartement",
        "description"=> "ceci est un bien",
        "image"=> "7.jpg",
        "zone"=> "thies",
        "client"=> ["Nom"=>"fall","Prenom"=>"modou"],
        "date_reser"=> ["j"=>5,"m"=>9,"a"=>2022],
    ],

   
    [ 
        "idb"=>8,
        "type"=> "appartement",
        "description"=> "ceci est un bien",
        "image"=> "8.jpg",
        "zone"=> "thies",
        "client"=> ["Nom"=>"fall","Prenom"=>"modou"],
        "date_reser"=> ["j"=>5,"m"=>9,"a"=>2022],
    ],

   
    [ 
        "idb"=>9,
        "type"=> "immeuble",
        "description"=> "ceci est un bien",
        "image"=> "9.jpg",
        "zone"=> "tambacounda",
        "client"=> ["Nom"=>"diallo","Prenom"=>"ousmane"],
        "date_reser"=> ["j"=>$dt[0],"m"=>$dt[1],"a"=>$dt[2]],
    ],

   
    [ 
        "idb"=>10,
        "type"=> "appartement",
        "description"=> "ceci est un bien",
        "image"=> "10.jpg",
        "zone"=> "thies",
        "client"=> ["Nom"=>" ","Prenom"=>" "],
        "date_reser"=> ["j"=>" ","m"=>" ","a"=>" "],
    ],


                               
];



?>