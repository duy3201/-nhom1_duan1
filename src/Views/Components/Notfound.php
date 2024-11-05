<?php

namespace App\Views\Components;

use App\Views\BaseView;

class Notfound extends BaseView
{
    public static function render()
    { ?>
        <h1>Trang không tồn tại <a href="?act=Home">Trở lại</a></h1>
    <?php }
}