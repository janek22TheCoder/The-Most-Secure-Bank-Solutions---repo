<?php
// Created by: janek22TheCoder
// Created on: 2022-07-14

http_response_code(401);
include('header.php');
?>

<h2>Error 401 - Unauthorized</h2>
<p>Access to this resource requires proper authentication.</p>

<?php
include('footer.php');
?>
