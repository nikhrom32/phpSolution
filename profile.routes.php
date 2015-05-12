<?php
$r = Router::Instances();

//$r->get('^\/profile(\/?)$', 'profile_list');
//$r->get('^\/profile\/(\d+)$', 'profile_view');
//$r->get('^\/profile\/(\:[^0-9]*)$', 'profile_memberName');
$r->get('\/profile\/([^\/]+)$', 'profile_memberName');
$r->get('\/profile\/([^\/]+)\/sur=([^=]+)$', 'itr');
$r->get('\/profile\/([^\/]+)\/d=([^=]+)\/f=([^=]+)$', 'abr');


//$r->post('^\/profile\/(\d+)\/sum$', 'profile_sum');
//$r->post('^\/profile\/(\d+)\/divide$', 'profile_divide');
//$r->post('^\/profile\/(\d+)\/subtract$', 'profile_subtract');
//$r->post('^\/profile\/(\d+)\/multiply$', 'profile_multiply');
?>
