<?php

use \Hcode\Model\User;
use \Hcode\Model\Address;

function formatPrice($vlPrice){

	if(!$vlPrice > 0) $vlPrice = 0;

	return number_format($vlPrice, 2, ",", ".");

}

function checkLogin($inadmin = true){

	return User::checkLogin($inadmin);

}

function getUserName(){

	$user = User::getFromSession();

	return $user->getdesperson();

}

?>