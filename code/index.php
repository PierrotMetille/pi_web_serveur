<?php 

/**
 * @file    index.php
 * @brief   This is the redirection file of the website
 * @author  Create by Pierrot Métille
 * @version 22.02.2023
*/
	 
	require 'controller/navigation.php'
	 
	session_start();
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
		lost();	
	}