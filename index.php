<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: Gadget Store.html');
} else {
    header('Location: login.html');
}
?>
