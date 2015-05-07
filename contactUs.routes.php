<?php
$r = Router::Instances();
/*$r->get('^\/pocket(\/?)$', 'pockets_list');
$r->get('^\/pocket\/(\d+)$', 'pocket_view');*/

/*$r->post('^\/pocket\/(\d+)\/sum$', 'pocket_sum');
$r->post('^\/pocket\/(\d+)\/divide$', 'pocket_divide');
$r->post('^\/pocket\/(\d+)\/subtract$', 'pocket_subtract');
$r->post('^\/pocket\/(\d+)\/multiply$', 'pocket_multiply');*/
$r->post('\/ContactUs(\/?)$','contact_us');
?>
