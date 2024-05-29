<?php

namespace packages\Usecase\User\Create;

class UserCreateRequest
{
    /**
     * @param string $name
     */
    public function __construct(private string $name)
    {

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
