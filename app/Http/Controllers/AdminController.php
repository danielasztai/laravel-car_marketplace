<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'cars' => Car::all(),
            'users' => User::all()
        ]);
    }

    public function give_admin(User $user) {
        dd($user->id);

        // User::where($user->id);

        return redirect('/admin');
    }
}
