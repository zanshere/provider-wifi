<?php
require __DIR__ . '/../vendor/autoload.php'; // Pastikan sesuai dengan struktur proyek

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../'); // Pastikan path benar
$dotenv->load();