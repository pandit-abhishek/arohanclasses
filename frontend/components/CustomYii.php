<?php
namespace frontend\components;

use Yii;


class CustomYii extends Yii
{
    public static function powered()
    {
        echo "zuggads.com";
    }
}