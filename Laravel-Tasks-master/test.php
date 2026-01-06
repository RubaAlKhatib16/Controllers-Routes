<?php
// Include the Application class directly
require __DIR__ . '/vendor/laravel/framework/src/Illuminate/Foundation/Application.php';

// Create application
$app = new Illuminate\Foundation\Application(__DIR__);

// Include other required files
require __DIR__ . '/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php';
require __DIR__ . '/vendor/laravel/framework/src/Illuminate/Support/helpers.php';

echo "Laravel Application created successfully!\n";
echo "Version: " . $app->version() . "\n";

// Now include artisan
require __DIR__ . '/artisan';
