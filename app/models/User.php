<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $nom;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $prenom;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $passwordHash;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $birthdate;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $email;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $telephone;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $joinDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $lastLogin;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("social");
        $this->setSource("user");
        $this->hasMany('id_user', 'Post', 'id_user', ['alias' => 'Post']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    function getId_user() {
        return $this->id_user;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getPasswordHash() {
        return $this->passwordHash;
    }

    function getBirthdate() {
        return $this->birthdate;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getJoinDate() {
        return $this->joinDate;
    }

    function getLastLogin() {
        return $this->lastLogin;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setPasswordHash($passwordHash) {
        $this->passwordHash = $passwordHash;
    }

    function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setJoinDate($joinDate) {
        $this->joinDate = $joinDate;
    }

    function setLastLogin($lastLogin) {
        $this->lastLogin = $lastLogin;
    }


}
