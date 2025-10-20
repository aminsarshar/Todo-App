<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try {
            DB::beginTransaction();

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'cellphone' => $request->cellphone,

            ]);


            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            flash()->error('Profile updated error!', [
                'timeout' => 10000,       // Display for 10 seconds
                'position' => 'top-center ',
                'closeButton' => true,
            ]);
            return redirect()->back();
        }

        flash()->success('User updated successfully!', [
            'timeout' => 10000,       // Display for 10 seconds
            'position' => 'top-center ',
            'closeButton' => true,
        ]);
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
