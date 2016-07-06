Log collector on Yii2
=====================

This extension provides the logging service on the [Yii framework 2.0](http://www.yiiframework.com).

[![Latest Stable Version](https://poser.pugx.org/nfedoseev/yii2-logman/v/stable)](https://packagist.org/packages/nfedoseev/yii2-logman)
[![Total Downloads](https://poser.pugx.org/nfedoseev/yii2-logman/downloads)](https://packagist.org/packages/nfedoseev/yii2-logman)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)
[![License](https://poser.pugx.org/nfedoseev/yii2-logman/license)](https://packagist.org/packages/nfedoseev/yii2-logman)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist nfedoseev/yii2-logman
```

or add

```
"nfedoseev/yii2-logman": "*"
```

to the require section of your composer.json.


Configuring application
-----------------------

After extension is installed you need to setup log target class:

```php
[
    'modules' => [
        'logman' => [
            'class' => 'nfedoseev\yii2\logman',
        ],
        ...
    ],
    ...
]
```