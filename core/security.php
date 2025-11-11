<?php
function nxi_csrf_token(){ if(session_status()!==PHP_SESSION_ACTIVE) session_start(); if(empty($_SESSION['csrf'])) $_SESSION['csrf']=bin2hex(random_bytes(16)); return $_SESSION['csrf'];}
function nxi_csrf_check($t){ if(session_status()!==PHP_SESSION_ACTIVE) session_start(); return isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'],$t);} 
