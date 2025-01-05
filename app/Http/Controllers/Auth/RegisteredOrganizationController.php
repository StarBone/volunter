<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredOrganizationController extends Controller
{
    /**
     * Display the registration view.
     */
    public function createStepOne(Request $request): View
    {
        $user = $request->session()->get('user');

        return view('auth.register-organization-one', compact('user'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function postCreateStepOne(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'regex:/^8[0-9]{9,10}$/', 'unique:users,phone'],
            'address' => ['required', 'string', 'max:500'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if(empty($request->session()->get('user'))){
            $user = new User();
            $user->fill($validatedData);
            $user->role = 'admin';
            $request->session()->put('user', $user);
        }else{
            $user = $request->session()->get('user');
            $user->fill($validatedData);
            $user->role = 'admin';
            $request->session()->put('user', $user);
        }

        return redirect()->route('register.organization.step.two');
    }

    public function createStepTwo(Request $request): View
    {
        $user = $request->session()->get('user');

        return view('auth.register-organization-two', compact('user'));
    }

    public function postCreateStepTwo(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'category' => ['required', 'string', 'max:255'],
            'website' => ['required', 'url', 'max:255'],
        ]);

        $user = $request->session()->get('user');
        $user->fill($validatedData);
        $user->save();

        event(new Registered($user));
        
        Auth::login($user);
        
        $request->session()->forget('user');

        return redirect()->route('dashboard.organization');
    }
}
