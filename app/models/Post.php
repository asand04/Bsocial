<?php

class Post extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_post;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_user;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $title;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $content;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $createDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $postedDate;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("social");
        $this->setSource("post");
        $this->belongsTo('id_user', '\User', 'id_user', ['alias' => 'User']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'post';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Post[]|Post|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Post|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    function getId_post() {
        return $this->id_post;
    }

    function getId_user() {
        return $this->id_user;
    }

    function getTitle() {
        return $this->title;
    }

    function getContent() {
        return $this->content;
    }

    function getCreateDate() {
        return $this->createDate;
    }

    function getPostedDate() {
        return $this->postedDate;
    }

    function setId_post($id_post) {
        $this->id_post = $id_post;
    }

    function setId_user($id_user) {
        $this->id_user = $id_user;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setCreateDate($createDate) {
        $this->createDate = $createDate;
    }

    function setPostedDate($postedDate) {
        $this->postedDate = $postedDate;
    }


}
