<?php
function nxi_cfg(){static $c=null; if(!$c){$c=require __DIR__.'/../config/config.php';} return $c;}
function nxi_label(){ $c=nxi_cfg(); return $c['brand']['label'] ?? 'Ads by NXI';}
function e($s){return htmlspecialchars($s??'',ENT_QUOTES,'UTF-8');}
function nxi_session(){ if(session_status()!==PHP_SESSION_ACTIVE){ session_start(); }}
function nxi_require_login(){ nxi_session(); if(empty($_SESSION['user'])){ header('Location: /dashboard/login.php'); exit; }}
