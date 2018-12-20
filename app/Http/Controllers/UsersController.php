<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comments = auth()->user()->comments;

        return view('Theme2.my-profile.content.comment')->with('comments', $comments);
    }

    public function addressindex()
    {
        $address = auth()->user()->address;
//        return dd($addresses);

        return view('Theme2.my-profile.content.addresses')->with('address', $address);
    }
    public function addressupdate(Request $request)
    {
        $address = auth()->user()->address;
        $input = $request->except('');

     //   dd($request);


        $address->fill($input)->save();

        return back()->with('success_message', 'تغییرات آدرس با موفقیت انجام شد');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('Theme2.my-profile.content.profile')->with('users', auth()->user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
            'password' => ['sometimes', 'nullable', 'string', 'min:6', 'confirmed'],
        ]);
        $user = auth()->user();
        $input = $request->except('password', 'password_confirmation');
        if (!$request->filled('password')) {
            $user->fill($input)->save();
            return back()->with('success_message', 'Profile updated');
        }
        $user->password = bcrypt($request->password);
        $user->fill($input)->save();
        return back()->with('success_message', 'Profile and password updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
