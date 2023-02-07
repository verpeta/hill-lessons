<?php


trait MadeBy
{
    use CreatedAtUpdatedAt;
    private $mandeBy;

    /**
     * @return mixed
     */
    public function getMandeBy()
    {
        return $this->mandeBy;
    }

    /**
     * @param mixed $mandeBy
     */
    public function setMandeBy($mandeBy): void
    {
        $this->mandeBy = $mandeBy;
    }
}

trait CreatedAtUpdatedAt {
    protected $updatedAt;

    protected $createdBy;

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy): void
    {
        $this->createdBy = $createdBy;
    } //admin ID
}

class Logs  {
use MadeBy, CreatedAtUpdatedAt;
}

class GG extends Logs{
    use MadeBy;
    public function getMandeBy()
    {
        return $this->mandeBy;
    }
}


class User extends MEgaBasic {
}


class Blog{
}
