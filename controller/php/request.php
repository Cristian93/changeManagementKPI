<?php

require 'searchbossClass.php';

if (isset($_REQUEST["tipo"])) {
    if( $_REQUEST["tipo"] ==="searchBoss"){
        searchBoss();
    }
}

function searchBoss(){
    $p1 = new searchbossClass();
    
    $p1->searchBoss($_REQUEST[ "val1" ]);
    
    unset( $p1 );
}


