<?php

session_start();

session_destroy();

header('Location: 05_get_post.php');
