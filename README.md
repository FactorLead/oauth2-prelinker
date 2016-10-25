# Prelinker Provider for the PHP League's OAuth 2.0 Client

This package provides Prelinker OAuth 2.0 support for the PHP League's OAuth 2.0 Client.

## Installation

To install, use composer:

```sh
composer require fl/oauth2-prelinker
```

## Usage

You need to initialize the OAuth 2.0 Client with `\FL\OAuth2Prelinker\PrelinkerProvider`.

```php
$provider = new \FL\OAuth2Prelinker\PrelinkerProvider([
    'clientId'          => '{prelinker-client-id}',
    'clientSecret'      => '{prelinker-client-secret}',
    'redirectUri'       => 'https://example.com/callback-url',
]);
```

You can then use `$provider` [to request access tokens and make authenticated requests](https://github.com/thephpleague/oauth2-client#usage)
