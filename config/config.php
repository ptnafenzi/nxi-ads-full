<?php
return [
  'brand'=>['domain'=>getenv('APP_DOMAIN')?:'ads.nxi.or.id','color'=>getenv('BRAND_COLOR')?:'#E8B923','label'=>getenv('BRAND_LABEL')?:'Ads by NXI'],
  'xendit'=>['public'=>getenv('XENDIT_PUBLIC_KEY')?:'', 'secret'=>getenv('XENDIT_SECRET_KEY')?:''],
];
