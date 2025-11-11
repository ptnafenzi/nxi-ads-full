<?php
require_once __DIR__.'/db.php'; require_once __DIR__.'/helper.php';
function nxi_get_random_ad($device='all',$size='responsive',$tags='',$pub=''){
  $db = nxi_db(); $where="status='active'"; $q=$db->query("SELECT id,type,title,html,image,click_url FROM ads WHERE $where ORDER BY RAND() LIMIT 1"); if(!$q) return null; $ad=$q->fetch_assoc(); if(!$ad) return null; if($ad['type']==='html'){ $html='<div class="nxi-adcard"><span class="nxi-ads-badge tl">Ad</span><div class="nxi-inner">'.$ad['html'].'</div></div>'; } else { $img=e($ad['image']); $href=e($ad['click_url']?:'#'); $html='<a class="nxi-adcard" href="'.$href.'" target="_blank" rel="sponsored noopener" data-nxi-click="'.$ad['id'].'"><span class="nxi-ads-badge tl">Ad</span><img class="nxi-img" src="'.$img.'" alt="'.e($ad['title']).'"></a>'; }
  return ['id'=>$ad['id'],'html'=>$html]; }
function nxi_track($id,$ev,$pub=''){ $db=nxi_db(); $ev=$ev==='click'?'clicks':'views'; $id=(int)$id; $db->query("UPDATE ads SET $ev=COALESCE($ev,0)+1 WHERE id=$id"); }
