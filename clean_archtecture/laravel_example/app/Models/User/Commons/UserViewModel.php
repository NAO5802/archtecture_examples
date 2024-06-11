<?php

namespace app\Models\User\Commons;

class UserViewModel
{
    public function __construct(public int $id, public string $name)
    {
    }

}
