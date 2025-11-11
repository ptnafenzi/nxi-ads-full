<?php require_once __DIR__.'/../core/ads.php'; $id=$_POST['id']??0; $ev=$_POST['ev']??'view'; $pub=$_POST['pub']??''; if($id) nxi_track((int)$id,$ev,$pub); echo 'ok';
