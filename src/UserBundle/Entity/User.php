<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

   
    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255)
     */
    private $company_name;

    /**
     * @var string
     *
     * @ORM\Column(name="ico", type="string", length=255)
     */
    private $ico;

    /**
     * @var string
     *
     * @ORM\Column(name="dic", type="string", length=255)
     */
    private $dic;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="street_number", type="string", length=255)
     */
    private $street_number;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    private $city;

    /**
     *
     * @var type 
     * 
     * @ORM\Column(name="roles", type="json_array")
     */
    private $roles = array();

    /**
     *
     * @var bool 
     * 
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive = true;

    /**
     *
     * @var bool 
     * 
     * @ORM\Column(name="company", type="boolean")
     */
    private $company = true;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    public function eraseCredentials() {
        //pozdeji
    }

    public function getRoles() {
        $roles = $this->roles;

        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles) {
        $this->roles = $roles;

        return $this;
    }

    function getIsActive(): bool {
        return $this->isActive;
    }

    function setIsActive(bool $isActive) {
        $this->isActive = $isActive;
    }

    public function getSalt() {
        return null;
    }

    public function isAccountNonExpired(): bool {
        return true;
    }

    public function isAccountNonLocked(): bool {
        return true;
    }

    public function isCredentialsNonExpired(): bool {
        return true;
    }

    public function isEnabled(): bool {
        return $this->getIsActive();
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password
        ));
    }

    /**
     * 
     * @param string $serialized
     */
    public function unserialize($serialized) {
        list(
                $this->id,
                $this->username,
                $this->password
                ) = unserialize($serialized);
    }

}
