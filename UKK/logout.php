<?php
// Mulai session
session_start();

// Hapus semua variabel session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login atau halaman lainnya setelah logout
header("Location: index.php");
exit;
?>
