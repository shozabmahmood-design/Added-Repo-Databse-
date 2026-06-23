<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h3>Server Status & Auto-Fix Script</h3>";
echo "PHP Version: " . phpversion() . "<br>";
echo "Current Directory: " . __DIR__ . "<br><br>";

$sourceVendor = '/home/wdsx06wuqljx/public_html/carexllc/vendor';
$destVendor = '/home/wdsx06wuqljx/carexllc/vendor';

echo "<h4>Vendor Folder Fix:</h4>";
if (file_exists($destVendor . '/autoload.php')) {
    echo "✅ Vendor is already present in the target folder: $destVendor<br>";
} else {
    if (file_exists($sourceVendor)) {
        echo "Found source vendor folder at: $sourceVendor<br>";
        echo "Copying vendor folder to target destination...<br>";
        
        // Use system cp command for instant copy
        $output = shell_exec("cp -r " . escapeshellarg($sourceVendor) . " " . escapeshellarg($destVendor) . " 2>&1");
        if ($output) {
            echo "Command output: <pre>$output</pre>";
        }
        
        if (file_exists($destVendor . '/autoload.php')) {
            echo "✅ Success! Vendor folder copied successfully!<br>";
        } else {
            echo "Copy failed. Trying PHP rename...<br>";
            @rename($sourceVendor, $destVendor);
            if (file_exists($destVendor . '/autoload.php')) {
                echo "✅ Success! Vendor folder moved/renamed successfully!<br>";
            } else {
                echo "❌ Auto-fix failed. Please check folder permissions or copy 'vendor' folder to '/home/wdsx06wuqljx/carexllc/vendor' manually.<br>";
            }
        }
    } else {
        echo "❌ Source vendor folder NOT found at $sourceVendor<br>";
    }
}

echo "<h4>Checking Paths:</h4>";
$autoloadPath = '/home/wdsx06wuqljx/carexllc/vendor/autoload.php';
echo "Autoload path: " . $autoloadPath . "<br>";
if (file_exists($autoloadPath)) {
    echo "✅ Autoload file exists!<br>";
} else {
    echo "❌ Autoload file DOES NOT exist!<br>";
}

$bootstrapPath = '/home/wdsx06wuqljx/carexllc/bootstrap/app.php';
echo "Bootstrap path: " . $bootstrapPath . "<br>";
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
}
