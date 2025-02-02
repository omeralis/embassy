<?php
namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CitizenController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required',
            'igama_number' => 'required|unique:citizens',
            'password' => 'required|string|min:6',
            'date' => 'required|date',
        ]);

        $citizen = Citizen::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'igama_number' => $request->igama_number,
            'password' => Hash::make($request->password),
            'date' => $request->date,
            'active' => true, // Optional if you want to set it to active by default
        ]);

        // Respond with success
        return response()->json(['message' => 'Citizen registered successfully'], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'igama_number' => 'required|exists:citizens,igama_number',
            'password' => 'required|string',
        ]);

        $citizen = Citizen::where('igama_number', $request->igama_number)->first();

        if ($citizen && Hash::check($request->password, $citizen->password)) {
            // Successful login
            return response()->json(['message' => 'Login successful'], 200);
        } else {
            // Invalid credentials
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }


}
