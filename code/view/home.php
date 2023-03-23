<?php
/**
 * @file      home.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pierrot Métille
 * @version   22.02.2023
 */

ob_start();
$title = "home";
include 'gabarit.php';
?>
<html>
	<body>
		<h1>This is a home</h1>
	</body>
</html>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>