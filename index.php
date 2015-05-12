<?php

include_once 'Router.php';
include_once 'profile.routes.php';
include_once 'home.routes.php';
include_once 'contactUs.routes.php';
//modules_load_routes();//call {module}.routes.php
$r = Router::Instances();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);


function home(){
	print('Welcome to the home page.');
}

function profile_memberName($profName){
	print('I\'m viewing ' . $profName[1][0] . '\'s profile.');
}
function itr ($prSur){
	print($prSur[1][0]. '\'s sur=' . $prSur[2][0]);
}

function abr ($matches){
	print('d=' . $matches[2][0] . '</br>f=' . $matches[3][0]);
}

function contact_us(){
	print('This action will be fired only if a POST request will occure');
}
?> 
