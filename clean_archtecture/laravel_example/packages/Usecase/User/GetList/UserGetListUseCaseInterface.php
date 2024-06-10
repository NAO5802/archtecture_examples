<?php

namespace packages\Usecase\User\GetList;

interface UserGetListUseCaseInterface
{
    public function handle(UserGetListRequest $request): UserGetListResponse;
}
