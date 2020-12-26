<?php


namespace Shanto\Dashboard\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard::dashboard');
    }

    protected function users()
    {
        $users = User::simplePaginate(5);
        return view('dashboard::users', [
            'users' => $users,
        ]);
    }
}
