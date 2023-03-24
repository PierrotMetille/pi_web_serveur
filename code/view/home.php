<?php
/**
 * @file      home.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pierrot Métille
 * @version   22.02.2023
 */

ob_start();
$title = "home";
?>
<html>
	<body>
		<div class="home">
			<div class="container">
				<span>Welcome to Pierrot Website</span>
			</div>
			</div>
	</body>
</html>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>