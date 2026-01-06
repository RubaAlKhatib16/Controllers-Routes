#!/usr/bin/env php
<?php

// Manually include required files
define('LARAVEL_START', microtime(true));

// Load Laravel Application
require __DIR__ . '/vendor/laravel/framework/src/Illuminate/Foundation/Application.php';

// Load helpers
require __DIR__ . '/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php';
require __DIR__ . '/vendor/laravel/framework/src/Illuminate/Support/helpers.php';

// Create application
$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

// Load the actual artisan bootstrap
require __DIR__ . '/bootstrap/app.php';
