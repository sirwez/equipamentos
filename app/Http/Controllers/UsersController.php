<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Test;
use App\Models\Usuario;
use App\Models\Pessoa;


class UsersController extends Controller
{
    public function index(){

        $usuario = Pessoa::all();

        return view('welcome', ['usuario'=>$usuario]);

    }
}
