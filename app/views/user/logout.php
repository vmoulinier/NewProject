<?php

session_start();
include_once 'C:/wamp/www/appmvc/app/models/db_connect.php';
logout();
redirect('home/index');
