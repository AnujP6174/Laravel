<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/adminlogin');
    }

    public function login(LoginFormRequest $request)
    {
        try {
            if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
                return redirect()->route('admin.dashboard')->with('success', 'Login Successfull');
            }
            dd("fail");
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Temporary server error.');
        }
    }

    public function getdashboard()
    {
        return view('admin/dashboard');
    }

    public function adminlogout()
    {
        try {
            if (Auth::guard('admin')->check()) {
                Session::flush();
                Auth::guard('admin')->logout();
                // dd("logout done");
                return redirect()->route('login');
            } else {
                dd("fail");
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Temporary server error.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
