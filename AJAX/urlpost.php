<?php // urlpost.php
if (isset($_POST['url']))
{

header('Content-Type: text/xml');
echo file_get_contents("http://".sanitizeString($_POST['url']));
}
function SanitizeString($var)
{
$var = strip_tags($var);
$var = htmlentities($var);

return stripslashes($var);
}
?>