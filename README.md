# odtphp-bundle

## Installation
Add to your composer.json the git repo for the bundle as follows :
```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/krisstwo/odtphp-bundle"
    }
],
```

Now you can use composer to require the package :
```bash
composer require krisstwo/odtphp-bundle
```

The bundle exposes a service named `odtphp.factory` that you can use to get an Odf instance. Odf usage is documented here : https://github.com/james2001/odtphp
```php
// Factory service usage :
$odfFactory->fromFilename('test.odt');
```
