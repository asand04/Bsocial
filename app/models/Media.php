<?php

class Media extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id_med;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $title;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", length=45, nullable=false)
     */
    public $fileURI;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("social");
        $this->setSource("media");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'media';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Media[]|Media|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Media|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
    function getId_med() {
        return $this->id_med;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    function getFileURI() {
        return $this->fileURI;
    }

    function setId_med($id_med) {
        $this->id_med = $id_med;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setFileURI($fileURI) {
        $this->fileURI = $fileURI;
    }


}
