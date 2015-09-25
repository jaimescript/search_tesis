<?php

namespace Tesis\BuscadorBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Usuario implements UserInterface
{
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;



    /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set passwordMd5
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /************************* OTRAS FUNCIONES ********************/

    function eraseCredentials()
    {
        return null;
    }
    function getRoles()
    {
        return array('ROLE_USUARIO');
    }
    public function getSalt()
    {
        return null;
    }
}
