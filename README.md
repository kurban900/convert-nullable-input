# 
Конвертирует nullable и отсутствующие в Request поля в указанные значения.

### Примеры
```php
 ConvertNullableInput::convert([
    'soundtrack_frame' => '',
    'trailer_frame' => '',
    'about_frame' => '',
    "hide_series_season_from_title" => 0
]);
```
или
```php
 ConvertNullableInput::convert(Post::$convertNullable);
```
