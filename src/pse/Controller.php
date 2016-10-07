<?php

namespace rad8329\placetopay\pse;

use rad8329\placetopay\common\models\Authentication;
use rad8329\placetopay\common\traits\SmartObject;

/**
 * Class Controller.
 *
 * @property Authentication $auth
 * @property string $wsdl
 */
abstract class Controller
{
    use SmartObject;

    private $auth;
    private $wsdl;

    /**
     * Controller constructor.
     *
     * @param Authentication $auth
     * @param string $wsdl
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(Authentication $auth, $wsdl)
    {
        $this->auth = $auth;

        if (empty($wsdl)) {
            throw new \InvalidArgumentException("'wsdl' is required");
        }

        $this->wsdl = $wsdl;
    }

    /**
     * @return Authentication
     */
    protected function getAuth()
    {
        return $this->auth;
    }

    /**
     * @return string
     */
    protected function getWsdl()
    {
        return $this->wsdl;
    }
}
