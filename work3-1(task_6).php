<?php
$menu = array(
    "Home" => "index.php",
    "About" => "about.php",
    "Contact" => "contact.html"
);

echo "<ul>";
foreach ($menu as $item => $link) {
    echo "<li><a href='$link'>$item</a></li>";
}
echo "</ul>";
?>