<?php

 namespace AppBundle\Entity;
 use FOS\UserBundle\Model\User as BaseUser;
 use Doctrine\ORM\Mapping as ORM;

 /**
  * Class User
  *
  * @package AppBundle\Entity
  *
  * @ORM\Entity
  * @ORM\Table(name="User")
  *
  *
  */
 class User extends BaseUser
 {
   /**
    *  @var integer
    *
    *
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $email;

    /**
     * Encrypted password. Must be persisted.
     *
     * @var string
     */
    protected $password;

    /**
     * Plain password. Used for model validation. Must not be persisted.
     *
     * @var string
     */
    protected $plainPassword;

    /**
     * @var array
     */
    protected $roles;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->enabled = false;
        $this->roles = array();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getUsername();
    }

    /**
     * {@inheritdoc}
     */
    public function addRole($role)
    {
        $role = strtoupper($role);
        if ($role === static::ROLE_DEFAULT) {
            return $this;
        }

        if (!in_array($role, $this->roles, true)) {
            $this->roles[] = $role;
        }

        return $this;
    }


 }




 ?>
