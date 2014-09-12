<?php
//echo $data['page_link'];

//echo $data['tier_name'];

$images = $data['upload_media'];

foreach ($images as $img ) {
//echo '<p> test = ' . $img . '</p>';
}

?>
<img src="<?php echo wp_get_attachment_url($img) ?>"/>

