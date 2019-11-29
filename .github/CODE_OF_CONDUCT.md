# Code of Conduct Guide

We require that all contributions meet at least the following guidelines:

* Follow the phpcs configuration file
* Use camelCase for variables and methods/functions.
* Don't use functions for casting like `intval`, `boolval` and etc, We are using `(int) $a`.
* Avoid aliases for functions: `sizeof`, `join` and etc.
* Avoid global variables.
* Avoid strict comparisons if not necessary.
* Use `$v === null` instead of 'is_null()' for null checking.
* Avoid "Yoda conditions", where constants are placed first in comparisons:

```php
if (true == $someParameter) {
}
```

* Don't forget about empty lines after logical blocks:

```php
public function simpleMethod($a)
{
    $result = 1 + 2;
                                // $result is not related to if block, please write empty line
    $b = $a;
    if ($b) {
        $result = 1;
    }
                                // Empty line is needed there
    return $result;
}
```

## Testing

```bash
composer phpunit
composer phpcs
composer phpstan
```
