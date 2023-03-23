<?php 
/**
 * @file    index.php
 * @brief   This is the redirection file of the website
 * @author  Create by Pierrot Métille
 * @version 22.02.2023
*/
		 
	session_start();
	require 'controller/navigation.php';
	$title = "index";
	if (isset($_GET['action']))
	{
		$action=$_GET['action'];
		switch ($action)
		{
			case 'home':
				home();
			break;
			
			default:
				home();
			break;
		}
	}
	else
	{
		home(); //must be lost when i found how to launch home by default  
	}

?>