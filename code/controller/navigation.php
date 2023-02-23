<?php 

/**
 * @file    navigation.php
 * @brief   This file create fonction for the index.php file 
 * @author  Create by Pierrot Métille
 * @version 22.02.2023
 */

/**
 * @return void
 */
function home($homeOrLost)
{
    if($homeOrLost==true)
	{
		require "view/lost.php";
    }
    else
    {
		require "view/home.php";
    }
}	 
	 
	 
	 
