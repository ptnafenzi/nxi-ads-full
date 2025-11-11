<?php
require_once __DIR__.'/../core/helper.php'; nxi_require_login(); $u=$_SESSION['user']; header('Location: /dashboard/'.($u['role']=='admin'?'admin':'publisher').'.php');
