<?php

session_start();
session_unset();
header("Location: ../jurnal/login/login.php");