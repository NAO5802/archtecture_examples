<?php

namespace packages\Domain\Domain\User;

interface UserRepositoryInterface
{
    /**
     * @param User $user
     * @return void
     */
    public function save(User $user): void;

    /**
     * @param UserId $id
     * @return User
     */
    public function find(UserId $id): User;

    /**
     * @param int $page
     * @param int $size
     * @return array
     */
    public function findByPage(int $page, int $size): array;
}
