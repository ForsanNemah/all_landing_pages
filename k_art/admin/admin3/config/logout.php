<!--العودة الى صفحة تسجيل الدخول -->
<?php
session_start();

session_unset();

session_destroy();

header('location:new_login.php');
