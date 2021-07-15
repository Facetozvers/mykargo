<?php

include __DIR__ . "/../../../../phpqrcode/phpqrcode.php";

echo QRcode::png($_GET['code_to_generate']);
