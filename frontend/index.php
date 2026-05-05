<?php
/**
 * Smart Router / Front Controller
 * 
 * This file handles all incoming requests and routes them to the 
 * appropriate template in the src/pages/ directory.
 */

$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);
$path = trim($path, '/');

// If the request is for an existing file (CSS, JS, Image), serve it directly
if ($path && file_exists(__DIR__ . '/' . $path) && !is_dir(__DIR__ . '/' . $path)) {
    return false;
}

// Handle home page
if ($path === '' || $path === 'index.php') {
    require __DIR__ . '/src/pages/home.php';
    exit;
}

// Clean the path (remove .php extension if user typed it)
$page = str_replace('.php', '', $path);
$target_file = __DIR__ . "/src/pages/$page.php";

// Route to the target page if it exists
if (file_exists($target_file)) {
    require $target_file;
} else {
    // 404 Fallback: For now, we redirect to home. 
    // In production, you might want a dedicated 404 page.
    require __DIR__ . '/src/pages/home.php';
}
