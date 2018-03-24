<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', [
            'users'=>$users
            ]);
    }


    public function create()
    {
        return view('users.create');
    }

    public function store(UsersRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->save();

        return redirect(route ('users.index'));

    }

   // public function show($id)
    //{
//
   // }

    public function edit(UsersRequest $request)
    {
        $users = User::all();
        return view('users.edit',[
            'user'=> $users]);

    }

    public function update(UsersRequest $request, $id)
    {
        return redirect (route('users.index'));

    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'));

    }
}
