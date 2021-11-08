<?php 
if (!isset($_GET['action'])) {
	$_GET['action'] = '';
}
session_start();

switch($_GET['action']){

	case 'addTopping': 
		$result = array();
		$result['errormsg'] = '';
		$result['success'] = 0;

		if (isset($_GET['topping']) && strlen(str_replace(' ', '', $_GET['topping'])) > 0 ) {
			if (!isset($_SESSION['toppings'])) {
				$_SESSION['toppings'] = array();
			}
			$_SESSION['toppings'][] = $_GET['topping'];
			$result['success'] = 1;
		} else {
			$result['success'] = 0;
			$result['errormsg'] = 'No Topping Entered';
		}

		echo json_encode($result);
		exit;
	break;

	case 'getToppings'; 
		$result = array();
		$result['errormsg'] = '';
		$result['success'] = 1;
		$result['toppings'] = array();

		if (isset($_SESSION['toppings'])) {
			$result['toppings'] = $_SESSION['toppings'];
			$result['success'] = 1;
		}

		echo json_encode($result);
		exit;
	break;

	case 'deleteTopping':

		$result = array();
		$result['errormsg'] = '';
		$result['success'] = 0;

		$toppingsBefore = count($_SESSION['toppings']);
		$toppings = $_SESSION['toppings'];

		if(sizeof($_SESSION['toppings']) > 1){
			array_splice($_SESSION['toppings'], $_GET['toppingId'], 1);
		}else{
			unset($_SESSION['toppings']);
		}

		if(!isset($_SESSION['toppings'])){
			$result['success'] = 1;
			echo json_encode($result);
			return;
		}

		if(count($_SESSION['toppings']) < $toppingsBefore){
			$result['success'] = 1;
		}else{
			$result['errormsg'] = "The topping was not removed";
		}
		echo json_encode($result);
		exit;
	break;

	default: 
		# printForm();
}