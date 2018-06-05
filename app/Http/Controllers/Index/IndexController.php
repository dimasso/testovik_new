<?php

namespace App\Http\Controllers\Index;

use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Helpers;
use Illuminate\Support\Facades\Redirect;
use DB;
use Mail;
use Auth;
use Hash;
use Mcamara\LaravelLocalization\Exceptions\SupportedLocalesNotDefined;
use Mcamara\LaravelLocalization\Exceptions\UnsupportedLocaleException;
use Illuminate\Session;
use Illuminate\Contracts\Pagination;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
    }

    public function register(){
        return view('index.register');
    }

    public function tokensaleInfo(){
        return view('index.tokensale-info');
    }

    public function websiteDisclaimer(){
        return view('index.website-disclaimer');
    }

    public function login(Request $request){
		return view('index.login', [
			'email' => '',
			'email_error' => '',
			'auth_error' => ''
		]);
    }
}