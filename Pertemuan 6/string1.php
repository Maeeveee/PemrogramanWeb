<?php
    $loremIpsum = "lorem ipsum dolor sit amet";
    echo "<p>{$loremIpsum}</p>";
    echo "Panjang Karakter : ".strlen($loremIpsum)."<br/>";
    echo "Panjang kata: ".str_word_count($loremIpsum);
    echo "<p>".strtoupper($loremIpsum)."</p>";
    echo "<p>".strtolower($loremIpsum)."</p>";
?>