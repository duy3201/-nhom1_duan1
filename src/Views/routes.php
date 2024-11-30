<?php

use App\Views\Components\Header;
use App\Views\Components\Notfound;

// ?? Là toán tử cho phép mình kiếm giá trị ở phía trước
$action = $_GET['act'] ?? '';

switch ($action) {
    case '':
            Header::render();
        break;

    default:
        Notfound::render();
        break;
}
