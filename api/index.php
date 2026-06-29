<?php

// Suppress error display and deprecation warnings in production
ini_set('display_errors', '0');
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// Forward the Vercel serverless request to Laravel's entry index file
require __DIR__ . '/../public/index.php';
