<?php
	/**
	* Participant JSON's
	*/
	include_once 'interface.php';
	
	if(isset($_GET['search'])){
		echo participantSearch($_GET['search']);
	}
	
	if(isset($_GET['confirm'])){
		participantConfirm($_GET['confirm']);
	}
	
	if(isset($_GET['participantevent'])){
		echo participantEvents($_GET['participantevent']);
	}
	
	if(isset($_GET['participantinfo'])){
		echo participantInfo($_GET['participantinfo']);
	}
	if(isset($_POST['pname'])&&
		isset($_POST['pemail'])&&
		isset($_POST['pclg'])&&
		isset($_POST['pcntct'])&&
		isset($_POST['pstate'])&&
		isset($_POST['pgender'])&&
		isset($_POST['preq'])){
		echo newUser($_POST['pname'],$_POST['pemail'],$_POST['pclg'],$_POST['pcntct'],$_POST['pstate'],$_POST['pgender'],$_POST['preq']);
	}
	
?>
