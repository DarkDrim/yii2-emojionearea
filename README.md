# yii2-emojionearea  
Yii2 widget for EmojiOne Area  
Fixed asset  
Base library: https://github.com/mervick/emojionearea  
Not for use!

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
