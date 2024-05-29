<?php

namespace packages\Usecase\User\Create;

class UserCreateResponse
{
    /**
     * @param string $createdUserId
     */
    public function __construct(private string $createdUserId)
    {
    }

    /**
     * @return string
     */
    public function getCreatedUserId(): string
    {
        return $this->createdUserId;
    }

}
