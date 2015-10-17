<?php

require 'searchbossClass.php';
require 'updatesemaphoresClass.php';
require 'searchchangeClass.php';

if (isset($_REQUEST["tipo"])) {
    if( $_REQUEST["tipo"] ==="searchBoss"){
        searchBoss();
    }
}
if (isset($_REQUEST["tipo"])) {
    if( $_REQUEST["tipo"] === "updateSemaphores"){
        updateSemaphores();
    }
}
if (isset($_REQUEST["tipo"])) {
    if( $_REQUEST["tipo"] === "searchChange"){
        searchChange();
    }
}

function searchBoss(){
    $p1 = new searchbossClass();
    $p1->searchBoss($_REQUEST[ "val1" ]);
    unset( $p1 );
}

function updateSemaphores(){
    $p2 = new updatesemaphoresClass();
    $p2->updateSemaphores();
    unset( $p2 );
}

function searchChange(){
    $p3 = new searchchangeClass();
    $p3->searchChange($_REQUEST[ "val2" ]);
    unset( $p3 );
}

