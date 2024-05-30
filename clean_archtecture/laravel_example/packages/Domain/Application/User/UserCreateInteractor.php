<?php

namespace packages\Domain\Application\User;

use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;
use packages\Usecase\User\Create\UserCreateRequest;
use packages\Usecase\User\Create\UserCreateResponse;
use packages\Usecase\User\Create\UserCreateUseCaseInterface;

class UserCreateInteractor implements UserCreateUseCaseInterface
{
    public function __construct(private UserRepositoryInterface $userRepository)
    {
    }

    /**
     * @param UserCreateRequest $request
     * @return UserCreateResponse
     */
    public function handle(UserCreateRequest $request): UserCreateResponse
    {
        $userId = new UserId(uniqid());
        $createdUser = new User($userId, $request->getName());
        $this->userRepository->save($createdUser);

        return new UserCreateResponse($userId->getValue());
    }
}
