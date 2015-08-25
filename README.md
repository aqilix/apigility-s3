aqilixapi-s3
============

#Amazon S3 Support for aqilix-apigility-image
This module add Amazon S3 support for aqilix-apigility-image module. The main tasks of this module are uploading and change the image name to S3 Object URL

Dependencies
------------
- [aws/aws-sdk-php-zf2](https://packagist.org/packages/aws/aws-sdk-php-zf2])
- [aqilixapi/image](https://github.com/aqilix/apigility-image)

Installation
------------
This is a ZF2/Apigility module, so to use it on your ZF2/Apigility project need to add `repositories` and `require` on `composer.json`. This modules is not registered to [packagist](http://packagist.org) yet. So, we must configure the `repositories`.

```
  "repositories": [
    {
      "type": "vcs",
      "url": "git@github.com:aqilix/apigility-s3"
    }
  ],
```

```
  "require": {
    .
    .
    .
    "aqilixapi/s3": "dev-master"
  }
```

Run `composer update` then enable the module on `config/application.config.php`

```
return array(
    'modules' => array(
       .
       .
       .
       'AqilixAPI\\S3', 
       'AwsModule',
    )
)
```


Configuration
-------------
Because of this module require aws/aws-sdk-php-zf2, we just need to configure AWS Credential from aws/aws-sdk-php-zf2 config file (`vendor/aws/aws-sdk-php-zf2/config/aws.local.php.dst`). Just copy this file to `config/autoload/aws.local.php` and change `credential` and `region` configuration.

After prepare AWS configuration, we need to configure Amazon S3 configuration (`config/s3.local.php.dist`)

```
    's3' => array(
        'bucket' => array(
            'name' => 'aqilix',
            'acl'  => 'public-read',
        ),
        'fields' => array(
            'path'  => array('key_prefix' => 'image'),
            'thumbPath' => array('key_prefix' => 'image/thumbs')
        )
    )
```
Adjust `bucket` and `fields`, then copy this file to `config/autoload/s3.local.php`. 
