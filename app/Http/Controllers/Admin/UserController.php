<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
    public function show(user $user)
    {
        $userStatus=Cache::get("user-{$user->id}-status");

        return view('admin.user.show', compact('user','userStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
