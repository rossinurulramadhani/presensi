<?php

namespace App\Http\Controllers;
use App\Models\Presensi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();

        if ($user->role_id == 1) {
            $presensis = Presensi::where('user_id', $user->id)->get();
            return view('presensi.index', compact('presensis'));
        };

        if ($user->role_id == 2 || $user->role_id == 3){
            $presensis = Presensi::all();
            return view('presensi.index', compact('presensis'));
        };

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Presensi $presensi, User $user)
    {
        //
        $user = User::all();
        return view('presensi.create', compact('presensi', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'required',
            'nis' => 'required',
            'kelas' => 'required',
            'tanggal_masuk' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'keterangan' => 'required',
        ]);

        $presensi = new Presensi;
        $presensi->user_id = $request->user_id;
        $presensi->nis = $request->nis;
        $presensi->kelas = $request->kelas;
        $presensi->tanggal_masuk = $request->tanggal_masuk;
        $presensi->jenis_kelamin = $request->jenis_kelamin;
        $presensi->jurusan = $request->jurusan;
        $presensi->keterangan = $request->keterangan;
        $presensi->save();
    
        return redirect()->route('presensi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Presensi $presensi)
    {
        //SELECT * FROM siswas WHERE id = $id
        return view('presensi.show', Compact('presensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presensi $presensi)
    {
        //
        return view('presensi.edit', compact('presensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presensi $presensi)
    {
        //
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal_masuk' => 'required',
            'jenis_kelamin' => 'required',
            'jurusan' => 'required',
            'keterangan' => 'required',
        ]);

        $presensi->update($request->all());

        return redirect()->route('presensi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presensi $presensi)
    {
        //
        $presensi = Presensi::where('id', $presensi->id)->delete();
        return redirect()->route('presensi.index');
    }
}