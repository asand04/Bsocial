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
     * @Column(type="string", length=255, nullable=false)
     */
    public $title;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
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
        $this->hasMany('id_post', 'Comments', 'id_post', ['alias' => 'Comments']);
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

    /**
     * @return string
     */
    public function getPostedDate()
    {
        return $this->postedDate;
    }

    /**
     * @param string $postedDate
     */
    public function setPostedDate($postedDate)
    {
        $this->postedDate = $postedDate;
    }

    /**
     * @return int
     */
    public function getIdPost()
    {
        return $this->id_post;
    }

    /**
     * @param int $id_post
     */
    public function setIdPost($id_post)
    {
        $this->id_post = $id_post;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param int $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param string $createDate
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

}
