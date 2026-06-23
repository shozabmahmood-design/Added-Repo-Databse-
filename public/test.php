<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h3>Server Status Check</h3>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Current Directory: " . __DIR__ . "<br><br>";

// Test including Laravel autoload
$autoloadPath = __DIR__ . '/../carexllc/vendor/autoload.php';
echo "Checking autoload at: " . $autoloadPath . "<br>";
if (file_exists($autoloadPath)) {
    echo "✅ Autoload file exists!<br>";
} else {
    echo "❌ Autoload file DOES NOT exist!<br>";
}

$bootstrapPath = __DIR__ . '/../carexllc/bootstrap/app.php';
echo "Checking bootstrap app at: " . $bootstrapPath . "<br>";
if (file_exists($bootstrapPath)) {
    echo "✅ Bootstrap app file exists!<br>";
} else {
    echo "❌ Bootstrap app file DOES NOT exist!<br>";
}

// Print last 20 lines of error_log
if (file_exists('error_log')) {
    echo "<h4>Last 20 lines of public_html/error_log:</h4>";
    $lines = file('error_log');
    $last_lines = array_slice($lines, -20);
    echo "<pre style='background: #f4f4f4; padding: 10px; border: 1px solid #ccc; overflow: auto;'>" . htmlspecialchars(implode("", $last_lines)) . "</pre>";
} else {
    echo "<h4>No error_log file found in public_html.</h4>";
}
