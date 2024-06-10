<?php

namespace packages\Usecase\User\GetList;

use packages\Usecase\User\Commons\UserModel;

class UserGetListResponse
{
    /**
     * @param UserModel[] $users
     */
    public function __construct(public array $users)
    {

    }
}
