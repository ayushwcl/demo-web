<?php
// Start the session if it's not already started
function startSession() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}
?>
