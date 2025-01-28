<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;


class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'company' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {

            //Start the Transaction
            DB::beginTransaction();
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'company' => $request->company,
                'email' => $request->email,
                'password' => Hash::make($request->string('password')),
            ]);

            //Assign user role to the users who newrly registerd
            $user->assignRole('user');

            //send verification email
            event(new Registered($user));

            //create auth token
            $token = $user->createToken('authToken'.$user->name)->plainTextToken;

            //store data n database when everything suuccess
            DB::Commit();

            return response()->json([
                'message' => 'User Registered successfullu. An Verification email sent to your email!',
                'token' => $token,
                'user' => $user,
                'role' => $user->getRoleNames(),
            ], 200);
        }
        catch(\Exeption $e){
            DB::rollBack();
            return response()->json([
                'message' => 'An error occure While registration proccess, please try again later!'
            ],500);
        }
        

        return response()->noContent();
    }
}
