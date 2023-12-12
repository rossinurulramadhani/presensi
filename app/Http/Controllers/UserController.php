<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Presensi;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user, Presensi $presensi)
    {
        //
        $users = User::where('role_id', 1)->get();
        $presensi = Presensi::all();
        return view('presensi.data', compact('users', 'presensi'));
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
    public function show($id, User $user, Presensi $presensi)
    {
        //
        $user = Auth::user();

        if ($user->role_id == 1) {
            $presensis = Presensi::where('user_id', $user->id)->get();
            return view('presensi.index', compact('presensis'));
        };

        if ($user->role_id == 2) {
            // $presensis = Presensi::all();
            $presensis = Presensi::where('user_id', $id)->get();
            return view('presensi.index', compact('presensis'));
        };

        if ($user->role_id == 3) {
            $presensis = Presensi::where('user_id', $id)->get();
            return view('presensi.index', compact('presensis'));
        };

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
