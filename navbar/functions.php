<?php
if (!function_exists('isActive')) {
    function isActive($page) {
        return basename($_SERVER['PHP_SELF']) === $page ? 'active' : '';
    }
}
?>