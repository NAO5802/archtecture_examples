<?php

namespace packages\Domain\Domain\User;

class User
{

    /**
     * @param UserId $id
     * @param string $name
     */
    public function __construct(private UserId $id, private string $name)
    {
    }

    /**
     * @return UserId
     */
    public function getId(): UserId
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
