<?php
session_start();
require_once "Equation.php";

if (!empty($_POST)) {
	$a = !empty($_POST["a"]) ? $_POST["a"] : 0;
	$b = !empty($_POST["b"]) ? $_POST["b"] : 0;
	$c = !empty($_POST["c"]) ? $_POST["c"] : 0;
	
	$equation = new Equation($a, $b, $c);
	$_SESSION["result"] = $equation->result();
	
	$r = $_SERVER["HTTP_REFERER"];
	header("Location: $r");
	exit;
}