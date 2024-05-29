<?php

namespace packages\Usecase\User\Create;

interface UserCreateUseCaseInterface
{
    /**
     * @param UserCreateRequest $request
     * @return UserCreateResponse
     */
    public function handle(UserCreateRequest $request): UserCreateResponse;
}
