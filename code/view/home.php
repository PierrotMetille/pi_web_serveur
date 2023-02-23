<?php
/**
 * @file      home.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pierrot Métille
 * @version   22.02.2023
 */

ob_start();
$title = "Home";
?>
<h1> test </h1>
<a href="gabarit.php">this is a gabarit</a>
<?php
$content = ob_get_clean();

>