<?php

/**
 * User: Huijiewei
 * Date: 2015-03-31
 * Time: 15:29.
 */

namespace huijiewei\fontawesome;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public $sourcePath = '@npm/font-awesome';

    public $css = [
        'css/font-awesome.min.css',
    ];

    public $publishOptions = [
        'only' => [
            'fonts/',
            'css/',
        ]
    ];
}
