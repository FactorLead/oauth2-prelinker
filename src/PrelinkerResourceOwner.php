<?php

namespace FL\OAuth2Prelinker;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class PrelinkerResourceOwner implements ResourceOwnerInterface
{
    /**
     * @var array
     */
    private $response;

    /**
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * Returns the identifier of the authorized resource owner.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->response["user"]["id"];
    }

    /**
     * Returns the raw resource owner response.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response["user"];
    }
}
