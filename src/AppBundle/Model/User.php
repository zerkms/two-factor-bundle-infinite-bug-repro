<?php

namespace AppBundle\Model;


use Scheb\TwoFactorBundle\Model\Google\TwoFactorInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class User implements TwoFactorInterface, UserInterface
{
    private $username;
    private $roles;

    public function __construct($username, array $roles = array())
    {
        $this->username = $username;
        $this->roles = $roles;
    }

    public function __toString()
    {
        return $this->getUsername();
    }

    /**
     * {@inheritdoc}
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return 'bar';
    }

    /**
     * {@inheritdoc}
     */
    public function getSalt()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * {@inheritdoc}
     */
    public function isAccountNonExpired()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function eraseCredentials()
    {
    }

    /**
     * Return the Google Authenticator secret
     * When an empty string or null is returned, the Google authentication is disabled.
     *
     * @return string|null
     */
    public function getGoogleAuthenticatorSecret()
    {
        return '123456';
    }

    /**
     * Set the Google Authenticator secret.
     *
     * @param int $googleAuthenticatorSecret
     */
    public function setGoogleAuthenticatorSecret($googleAuthenticatorSecret)
    {
    }
}
