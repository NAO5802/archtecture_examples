<?php

namespace packages\Infrastructure\User;

use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;
use packages\Domain\Domain\User\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @param User $user
     * @return void
     */
    public function save(User $user): void
    {
        DB::table('users')->updateOrInsert(
            ['id' => $user->getId()],
            ['name' => $user->getName()]
        );
    }

    /**
     * @param UserId $id
     * @return User
     */
    public function find(UserId $id): User
    {
        $user = DB::table('users')->where('id', $id->getValue()->first());
        return new User($id, $user->name);
    }

    /**
     * @param int $page
     * @param int $size
     * @return array
     */
    public function findByPage(int $page, int $size): array
    {
        // TODO: Implement findByPage() method.
        return [];
    }
}
