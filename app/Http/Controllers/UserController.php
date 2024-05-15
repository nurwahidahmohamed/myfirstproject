<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        //query using ORm Eloquent tp get all task from Task Model
        $users = User::all();

        //return to view with $users
        //dalam resources/views/users/index.blade.php + $users
        return view('users.index', compact('users'));
        //compact tu maksud hantar data $user
    }
    public function create()
    {
        //nak tunjuk form create dalam folder task/create.blade
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store in db using Model Task
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();


        //return to index tasks
        return redirect()->route('users.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //Task $task adalah model binding
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //tak perlu masuk $task = new Task(); sebab update ni terus masuk db
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        //return to index tasks
        return redirect()->route('users.index');
    }
    public function destroy(User $user)
    {
        //
        $user->delete();

        return redirect()->route('users.index');
    }
}
