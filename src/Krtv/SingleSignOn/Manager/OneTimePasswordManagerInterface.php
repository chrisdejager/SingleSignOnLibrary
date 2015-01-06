<?php

namespace Krtv\SingleSignOn\Manager;

use Krtv\SingleSignOn\Model\OneTimePassword;

/**
 * Interface OneTimePasswordManagerInterface
 * @package FM\SingleSignOnBundle\Manager
 */
interface OneTimePasswordManagerInterface
{
    /**
     * Create OTP
     *
     * @param $hash
     * @param string $username
     * @param string $serviceUrl
     * @return OneTimePassword
     */
    public function create($hash, $username, $serviceUrl);

    /**
     * Fetch OTP
     *
     * @param $pass
     * @return OneTimePassword|null
     */
    public function get($pass);

    /**
     * @param OneTimePassword $otp
     * @return boolean
     */
    public function isValid(OneTimePassword $otp);

    /**
     * @param OneTimePassword $otp
     * @return void
     */
    public function invalidate(OneTimePassword $otp);
}