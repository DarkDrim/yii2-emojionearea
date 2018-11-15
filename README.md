# yii2-emojionearea
Yii2 widget for EmojiOne Area  
Fixed asset  
Base library: https://github.com/mervick/emojionearea  

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist darkdrim/yii2-emojionearea "*"
```

or add

```
"darkdrim/yii2-emojionearea": "*"
```

to the require section of your `composer.json` file.

Using
------------
With ActiveForm:
```php
<?= $form->field($model, 'name')->widget(\darkdrim\emojionearea\Widget::className(), []); ?>
```
Alone:
```php
<?= \darkdrim\emojionearea\Widget::widget(['name' => 'example']); ?>
```
