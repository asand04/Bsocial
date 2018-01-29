<?php

class Comments extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
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
    public $comment;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("social");
        $this->setSource("comments");
        $this->belongsTo('id_post', '\Post', 'id_post', ['alias' => 'Post']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'comments';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Comments[]|Comments|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Comments|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }


}
