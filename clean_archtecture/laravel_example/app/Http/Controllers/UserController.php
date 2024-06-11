<?php

namespace app\Http\Controllers;

use app\Models\User\Commons\UserViewModel;
use app\Models\User\Create\UserCreateViewModel;
use app\Models\User\Index\UserIndexViewModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use packages\Usecase\User\Create\UserCreateRequest;
use packages\Usecase\User\Create\UserCreateUseCaseInterface;
use packages\Usecase\User\GetList\UserGetListRequest;
use packages\Usecase\User\GetList\UserGetListUseCaseInterface;

class UserController extends BaseController
{

    public function index(UserGetListUseCaseInterface $interactor)
    {
        $request = new UserGetListRequest(1, 10);
        $response = $interactor->handle($request);

        $users = array_map(
            function ($x) {
                return new UserViewModel($x->id, $x->name);
            },
            $response->users
        );

        $viewModel = new UserIndexViewModel($users);

        return view('user.index', compact('viewModel'));
    }

    public function create(UserCreateUseCaseInterface $interactor, Request $request)
    {
        $name = $request->input('name');
        $request = new UserCreateRequest($name);
        $response = $interactor->handle($request);

        $viewModel = new UserCreateViewModel($response->getCreatedUserId(), $name);
        return view('user.create', compact('viewModel'));
    }
}
