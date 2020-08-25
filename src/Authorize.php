<?php
namespace Sawala\Authorize;

class Authorize
{
    private $clientId;
    private $clientSecret;

    /**
     * Authorize constructor.
     */
    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    /**
     * OAuth type token or code
     * 1. Token if you want to execute implicit OAuth
     * 2. Code if you want to execute Authorization Code
     * Visit https://accurate.id/api-integration/oauth for more information
     * @param $OauthType
     */
    public function OAuthRequest($OauthType)
    {
        if(!empty($OauthType))
        {
            //OAuth not empty
        }
        else
        {
            //OAuth empty
            echo "Error in Authorize request, OAuth type not provided. 
            Please visit https://accurate.id/api-integration/oauth for more information";
        }
    }
}