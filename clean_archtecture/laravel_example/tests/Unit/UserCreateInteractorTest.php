<?php

namespace tests\Unit;

use packages\Domain\Application\User\UserCreateInteractor;
use packages\Domain\Domain\User\UserId;
use packages\InMemoryInfrastructure\User\InMemoryUserRepository;
use packages\Usecase\User\Create\UserCreateRequest;
use Tests\TestCase;

class UserCreateInteractorTest extends TestCase
{
    /*
     *  正常にユーザーを生成する
     */
    public function testValidCreate()
    {
        $repository = new InMemoryUserRepository();
        $interactor = new UserCreateInteractor($repository);
        $request = new UserCreateRequest('test-name');
        $response = $interactor->handle($request);

        $this->assertNotNull($response);
        $this->assertNotNull($response->getCreatedUserId());

        $userId = new UserId($response->getCreatedUserId());
        $saved = $repository->find($userId);

        $this->assertEquals($saved->getName(), 'test-name');
    }

}
