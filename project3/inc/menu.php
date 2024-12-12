<?php 
function renderMenu($menuItems) {

    $current_page = basename($_SERVER['PHP_SELF']);

    echo '<nav>';
    echo '<ul class="main-menu">';
    foreach ($menuItems as $label => $url) {

        $page_filename = basename($url);

        //Add active if the current page matches the menu item's page
        $active_class = ($current_page == $page_filename) ? ' class="active"' : '';

        echo "<li><a href=\"$url\"$active_class>$label</a></li>";
    }
    echo '</ul>';
    echo '</nav>';
}

$menuItems = [
    "Champions League" => "./champions-league.php",
    "Life is Strange" => "./life-is-strange.php",
    "Organoid Intelligence" => "./organoid-intel.php",
    "Ultimate Fighting Championship (UFC)" => "./ufc.php"
];

renderMenu($menuItems)
?>