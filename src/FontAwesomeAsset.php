<?php

namespace huijiewei\fontawesome;

use yii\web\AssetBundle;

class FontAwesomeAsset extends AssetBundle
{
    public string $sourcePath = '@npm/font-awesome';

    public array $css = [
        'css/font-awesome.min.css',
    ];

    public array $publishOptions = [
        'only' => [
            'fonts/*',
            'css/*',
        ]
    ];
}
