<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
Blanditiis veritatis repellat quisquam facilis laudantium,
quibusdam dicta laboriosam ea nam dolor ut aliquid vero cum quaerat,
sequi numquam, rerum molestias. Debitis.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>