<?php
// app/Http/Controllers/AuthController.php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Controller;
class AuthController extends Controller
{
    // ...

    public function showLogoutConfirmation()
    {
        return view('logout');
    }

    public function logout()
    {
        Auth::logout();

        // Redirect to a different page after logout if needed
        return redirect('/');
    }
}
