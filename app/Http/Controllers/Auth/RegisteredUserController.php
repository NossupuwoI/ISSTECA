<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\Hotel;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'telephone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = new User();
        if (!empty($request->file('photo'))) {
            $url = $request->file('photo')->store('uploads/images/employer', 'public');
            $profile = url('storage/' . $url);
            $user['photo'] = $profile;
        }
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            // if($user)
            // {
            //     $user->notify(new Hotel);
            // }



        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'date_naiss' => $request->date_naiss,
        //     'photo' =>  url('storage/' . $request->file('photo')->store('uploads/images/employer', 'public')),
        // ]);

        // event(new Registered($user));

        Auth::login($user);

        return redirect('/');
        // return redirect(RouteServiceProvider::HOME);
    }
}
