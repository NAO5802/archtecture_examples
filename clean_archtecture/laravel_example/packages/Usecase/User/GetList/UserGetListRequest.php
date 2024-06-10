<?php

namespace packages\Usecase\User\GetList;

class UserGetListRequest
{
    public function __construct(private int $page, private int $size)
    {

    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getSize(): int
    {
        return $this->size;
    }

}
