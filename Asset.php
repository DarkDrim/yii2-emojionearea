<?php

namespace darkdrim\emojionearea;

/**
 * Class Asset
 * @package darkdrim\emojionearea
 */
class Asset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/mervick/emojionearea';

    public $depends = [
        'yii\web\JqueryAsset',
        'darkdrim\emojionearea\EmojiOneAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->js = [!YII_DEBUG ? 'dist/emojionearea.min.js' : 'dist/emojionearea.js'];
        $this->css = [!YII_DEBUG ? 'dist/emojionearea.min.css' : 'dist/emojionearea.css'];

        parent::init();
    }
}