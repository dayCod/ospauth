<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Helpers\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Service\Login\LoginInterface;
use App\Validations\Login\LoginValidation;
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

    /**
     * Login Validation
     *
     * @return App\Validations\Login\LoginValidation
     */

    protected $loginValidation;

    /**
     * Login Service
     *
     * @return App\Service\Login\LoginService
     */

    protected $loginService;


    public function __construct(RegisterValidation $registerValidations, RegisterInterface $registerInterface, LoginValidation $loginValidations, LoginInterface $loginInterface)
    {
        // Register
        $this->registerValidation = $registerValidations;
        $this->registerService = $registerInterface;

        // Login
        $this->loginValidation = $loginValidations;
        $this->loginService = $loginInterface;
    }

    public function register(Request $request)
    {
        $this->registerValidation->validate($request);

        $createUser = $this->registerService->register($request->all());

        $success['token'] = $createUser->createToken('MyApp')->accessToken;
        $success['name'] = $createUser->name;

        return BaseResponse::sendResponse($success, 'User Berhasil Teregistrasi');
    }

    public function login(Request $request)
    {
        $validation = $this->loginValidation->validate($request);

        $authenticate = $this->loginService->login($request);

        if($authenticate->status) {
            // $request->session()->regenerate();
            $authUser = Auth::user();
            $success['token'] =  $authUser->createToken('MyApp')->accessToken;
            $success['name'] =  $authUser->name;

            return BaseResponse::sendResponse($success, 'Login User Berhasil');
        } else {
            return BaseResponse::sendError('Unauthorized', ['error' => 'Unauthorized']);
        }
    }
}
