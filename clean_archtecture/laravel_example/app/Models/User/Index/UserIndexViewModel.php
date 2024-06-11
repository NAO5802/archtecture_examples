<?php

namespace app\Models\User\Index;

use app\Models\User\Commons\UserViewModel;

class UserIndexViewModel
{
    /**
     * @param UserViewModel[] $users
     */
    public function __construct(public array $users)
    {

    }

}
