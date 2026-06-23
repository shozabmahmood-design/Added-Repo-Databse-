<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h3>Server Status & Auto-Fix Script</h3>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Current Directory: " . __DIR__ . "<br><br>";

$sourceEnv = '/home/wdsx06wuqljx/public_html/carexllc/.env';
$destEnv = '/home/wdsx06wuqljx/carexllc/.env';

echo "<h4>Env File Fix:</h4>";
if (file_exists($destEnv)) {
    echo "✅ .env file already exists in target destination!<br>";
} else {
    if (file_exists($sourceEnv)) {
        echo "Found .env file at: $sourceEnv. Copying to target...<br>";
        if (copy($sourceEnv, $destEnv)) {
            echo "✅ Successfully copied .env file!<br>";
        } else {
            echo "❌ Failed to copy .env file.<br>";
        }
    } else {
        echo "❌ Source .env file NOT found at $sourceEnv<br>";
    }
}

echo "<h4>Laravel Log Check:</h4>";
$logPath = '/home/wdsx06wuqljx/carexllc/storage/logs/laravel.log';
if (file_exists($logPath)) {
    echo "Found laravel.log file. Last 15 lines:<br>";
    $lines = file($logPath);
    $last_lines = array_slice($lines, -15);
    echo "<pre style='background: #fee; padding: 10px; border: 1px solid #ecc; overflow: auto; max-height: 400px;'>" . htmlspecialchars(implode("", $last_lines)) . "</pre>";
} else {
    echo "No laravel.log file found at $logPath<br>";
}

echo "<h4>Checking Paths:</h4>";
$autoloadPath = '/home/wdsx06wuqljx/carexllc/vendor/autoload.php';
if (file_exists($autoloadPath)) {
    echo "✅ Autoload file exists!<br>";
} else {
    echo "❌ Autoload file DOES NOT exist!<br>";
}

$bootstrapPath = '/home/wdsx06wuqljx/carexllc/bootstrap/app.php';
if (file_exists($bootstrapPath)) {
    echo "✅ Bootstrap app file exists!<br>";
} else {
    echo "❌ Bootstrap app file DOES NOT exist!<br>";
}
