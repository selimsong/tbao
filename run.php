<?php
$content = file_get_contents('http://mei94.com/index_data.php');

file_put_contents('index.html', $content);
?>