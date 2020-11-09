<?php
session_start();
session_destroy();
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Logout');
    window.location.href='login.html';
    </script>");
?>