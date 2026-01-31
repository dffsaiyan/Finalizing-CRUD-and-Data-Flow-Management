<?php
require 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\StudentController;

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    (new HomeController())->index();
} elseif ($page === 'students') {
    (new StudentController())->index();
} else {
    echo "404 - Page Not Found";
}
