<?php
function nxi_db(){static $m=null; if($m) return $m; $db=require __DIR__.'/../config/database.php'; $m=@new mysqli($db['host'],$db['user'],$db['pass'],$db['name']); if($m->connect_errno){http_response_code(500); die('DB error: '.$m->connect_error);} $m->set_charset('utf8mb4'); return $m;}
