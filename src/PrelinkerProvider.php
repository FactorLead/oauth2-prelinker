<?php

namespace FL\OAuth2Prelinker;

use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Token\AccessToken;

class PrelinkerProvider extends GenericProvider
{
    /**
     * @param array $options
     * @param array $collaborators
     */
    public function __construct(array $options = [], array $collaborators = [])
    {
        if (!array_key_exists("baseUrl", $options)) {
            $baseUrl = "https://api.prelinker.com";
        } else {
            $baseUrl = rtrim($options["baseUrl"], "/");
        }
        $urls = [
            "urlAuthorize"            => "/auth/authorize",
            "urlAccessToken"          => "/auth/token",
            "urlResourceOwnerDetails" => "/users/me",
        ];
        foreach ($urls as $key => $url) {
            $options[$key] = $baseUrl.$url;
        }
        parent::__construct($options, $collaborators);
    }

    protected function createResourceOwner(array $response, AccessToken $token)
    {
        return new PrelinkerResourceOwner($response);
    }
}
