<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\UserContent;
use App\Http\Requests\Work\UserRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, UserContent $userContent)
    {
        //他人のプロフィール閲覧
        $user = $userContent->getUser($id);
        return view('Work.User.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, UserContent $userContent)
    {
        //
        $check = $userContent->checkAuth($id);
        $user = $userContent->getUser($id);
        return view('Work.User.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id, UserContent $userContent)
    {
        //
        $check = $userContent->checkAuth($id);
        $user = $userContent->getUser($id);
        DB::transaction(function ()use ($user,$request) {
          $user->name = $request->name;
          $user->address = $request->address;
          $user->comment = $request->comment;
          $user->save();
        });
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
