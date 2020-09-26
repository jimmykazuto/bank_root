<!-- // function get_accounts() { -->
<?php
    $return = [
        [
            "name" => "Compte courant",
            "number" => "N:0132520024 fr 45",
            "owner" => "Mr Gossart Thomas",
            "amount" => 250,
            "last_operation" => "auchan -97.36€",
        ],
        [
            "name" => "Livret A",
            "number" => "N:0132520024 fr 45",
            "owner" => "Mr Gossart Thomas",
            "amount" => 1500,
            "last_operation" => "depot +45€",
        ],
        [
            "name" => "PEL",
            "number" => "N:0132520024 fr 45",
            "owner" => "Mr Gossart Thomas",
            "amount" => 480,
            "last_operation" => "depot +150€",
        ],
    ];

    foreach ($return as $key => $value) {
        echo $value["name"] ."<br> ". $value["number"] . "<br>" . $value["owner"] . "<br>" . $value ["amount"] . "<br>" . $value["last_operation"] . "<br>" ; 
    }
?>