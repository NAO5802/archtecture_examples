<?php

namespace packages\MockInteractor\User;

use packages\Usecase\User\Create\UserCreateRequest;
use packages\Usecase\User\Create\UserCreateResponse;
use packages\Usecase\User\Create\UserCreateUseCaseInterface;

class MockUserCreateInteractor implements UserCreateUseCaseInterface
{

    public function handle(UserCreateRequest $request): UserCreateResponse
    {
        return new UserCreateResponse('test-id');

//        例外のテストをしたいときは直接mockが例外を投げるようにすると便利
//        throw new ComplexException();
    }
}
