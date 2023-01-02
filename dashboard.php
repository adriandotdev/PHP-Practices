<?php

session_start();

if (isset($_SESSION['username'])) {
    echo '<h1>Welcome, User</h1>';
    echo '<a href="logout.php">Logout</a>';
} else {
    echo '<h1>Welcome, Guest</h1>';
    echo '<a href="05_get_post.php">Home</a>';
}
