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
     * @Column(type="string", length=255, nullable=false)
     */
    public $title;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
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

    /**
     * @return int
     */
    public function getIdMed()
    {
        return $this->id_med;
    }

    /**
     * @param int $id_med
     */
    public function setIdMed($id_med)
    {
        $this->id_med = $id_med;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getFileURI()
    {
        return $this->fileURI;
    }

    /**
     * @param string $fileURI
     */
    public function setFileURI($fileURI)
    {
        $this->fileURI = $fileURI;
    }

}
