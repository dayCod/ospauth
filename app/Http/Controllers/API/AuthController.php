<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\BaseResponse;
use App\Service\Register\RegisterInterface;
use App\Validations\Register\RegisterValidation;

class AuthController extends Controller
{

    /**
     * Register Validation
     *
     * @return App\Validations\Register\RegisterValidation
     */

    protected $registerValidation;

    /**
     * Register Service
     *
     * @return App\Service\Register\RegisterService
     */

    protected $registerService;


    public function __construct(RegisterValidation $registerValidations, RegisterInterface $registerInterface)
    {
        $this->registerValidation = $registerValidations;
        $this->registerService = $registerInterface;
    }

    public function register(Request $request)
    {
        $this->registerValidation->validate($request);

        $createUser = $this->registerService->register($request->all());

        $success['token'] = $createUser->createToken('MyApp')->accessToken;
        $success['name'] = $createUser->name;

        return BaseResponse::sendResponse($success, 'User Berhasil Teregistrasi');
    }
}
