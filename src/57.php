<?php
// Simple PHP code to demonstrate basic file operations.
// This example is meant as a starting point and may need modification for your specific needs.

$filePath = "path/to/your/file.txt";
$content = file_get_contents($filePath);

echo "File content:\n" . $content;
