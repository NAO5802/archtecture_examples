<?php

namespace packages\InMemoryInfrastructure\User;

use packages\Domain\Domain\User\User;
use packages\Domain\Domain\User\UserId;
use packages\Domain\Domain\User\UserRepositoryInterface;

class InMemoryUserRepository implements UserRepositoryInterface
{
    private $db = [];

    /**
     * @param User $user
     * @return void
     */
    public function save(User $user): void
    {
        $this->db[$user->getId()->getValue()] = $user;
        var_dump($this->db);
    }

    /**
     * @param UserId $id
     * @return User
     */
    public function find(UserId $id): User
    {
        $found = $this->db[$id->getValue()];
        return $this->clone($found);
    }

    private function clone(User $user): User
    {
        return new User($user->getId(), $user->getName());
    }

    /**
     * @param int $page
     * @param int $size
     * @return array
     */
    public function findByPage(int $page, int $size): array
    {
        $start = ($page - 1) + $size;
        return array_slice($this->db, $start, $size);
    }
}
