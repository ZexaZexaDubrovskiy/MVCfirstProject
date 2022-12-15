<?php


foreach ($data as $table => $items) {
    echo "<h3>$table</h3>";
    echo "<ul>";
    foreach ($items as $key => $value) {
        echo '<li>' . $value . "</li>";
    }
    echo "</ul>";
}

