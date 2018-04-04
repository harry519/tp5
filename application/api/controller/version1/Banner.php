<?php
/**
 * Created by PhpStorm.
 * User: csh
 * Date: 18/4/4
 * Time: 下午10:43
 */

namespace app\api\controller\version1;


class Banner
{
    public function getBanner()
    {
        return json('ok');
    }
}