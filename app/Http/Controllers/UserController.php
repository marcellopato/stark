<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest();
        if (!request()->hasFile('photo')){
            if (request('busca')){
                $users
                    ->where('name', 'like', '%'.request('busca').'%')
                    ->orWhere('cpf', 'like', '%'.request('busca').'%')
                    ->orWhere('rg', 'like', '%'.request('busca').'%');
            }
        }
        return view('dashboard')->with('users', $users->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $input = $request->validated();
        $user = User::create($input);
        if ($request->hasFile('photo')) {
            $avatar = $request->file('photo');
            $nome = time().'_'.$avatar->getClientOriginalName();
            $path = public_path('/images/');
            $avatar->move($path, $nome);
            $this->gravaImagem($nome, $user->id);
        }
        $users = User::latest();
        return view('dashboard')->with('users', $users->get());
    }

    protected function gravaImagem($nome, $user)
    {
        User::where('id', $user)
            ->update(['photo' => $nome]);
    }
}
