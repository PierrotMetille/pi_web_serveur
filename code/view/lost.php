<?php
/**
 * @file    lost.php
 * @brief   Lost File
 * @author  Create by Pierrot Métille
 * @version 23.02.2023
*/
ob_start();
$title = "lost";
?>
<html>
	<body>
		<h1>You're lost ...</h1>
	</body>
</html>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
?>
