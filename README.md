# 
Конвертирует nullable и отсутствующие в Request поля в указанные значения.

### Примеры
```php
 ConvertNullableInput::convert([
    'bio' => '',
    "is_blocked" => 0
]);
```
или
```php
 ConvertNullableInput::convert(Post::$convertNullable);
```
