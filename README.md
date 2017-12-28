# Meta Tags Php

## Instação Composer
```$ composer require kelvysmoura/mtp```

## Como usar
```php
use MetaTagsPhp\Mtp;
$metatags = new Mtp();
```

## Gerando tags open graph (facebook)
```php
use MetaTagsPhp\Mtp;
$metatags = new Mtp();

# Gerando tags html
$metatags->OpenGraph([
  "title" => "Meu Site"
]);

# Mostrando Tags
$metatags->showTags(); 
// resultado: <meta property="og:title" content="Meu Site" />
```
