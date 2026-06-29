<?php

// Enable error display temporarily to diagnose 500 error
ini_set('display_errors', '1');
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// Forward the Vercel serverless request to Laravel's entry index file
require __DIR__ . '/../public/index.php';
