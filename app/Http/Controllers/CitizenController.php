<?php
namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CitizenController extends Controller
{


    public function home()
    {

        if (! Session::has('citizen_id')) 
        {
            return redirect()->route('login')->with('message', 'You must log in first');
        }

        $data = [];
        $data["citizen_id"] = Session::get('citizen_id');
        $data["citizen_phone"] = Session::get('citizen_phone');
        $data["citizen_igama"] = Session::get('citizen_igama');
        $data["citizen_active"] = Session::get('citizen_active');
        $data["citizen_name"] = Session::get('citizen_name');
 
      echo "Hissro";
      return view('citizen/home' , $data);  

    }


    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required',
            'igama_number' => 'required|unique:citizens|max:255',
            'password' => 'required|string|min:6',
            
        ]);

        $citizen = Citizen::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'igama_number' => $request->igama_number,
            'password' => Hash::make($request->password),
            
            'active' => true, // Optional if you want to set it to active by default
        ]);

        // Respond with success
        return response()->json(['message' => 'تم التسجيل بنجاح'], 201);
    }

    public function login(Request $request)
    {

        if (Session::has('citizen_id')) 
        {
            return redirect()->route('dashboard')->with('message', 'You must log in first');
        }

        $request->validate([
            'igama_number' => 'required|exists:citizens,igama_number',
            'password' => 'required|string',
        ]);

        $citizen = Citizen::where('igama_number', $request->igama_number)->first();

        if ($citizen && Hash::check($request->password, $citizen->password)) 
        {
            // return response()->json(['message' => 'تم تسجيل الدخول بنجاح'], 200);
             // If login is successful, store citizen information in the session
             Session::put('citizen_id', $citizen->id);
             Session::put('citizen_name', $citizen->name);
             Session::put('citizen_phone', $citizen->phone_number);
             Session::put('citizen_igama', $citizen->igama_number);
 
             // Optionally, store if the citizen is active
             Session::put('citizen_active', $citizen->active);
 
             // Redirect to the home or dashboard page
             return redirect()->route('dashboard')->with('message', 'تم تسجيل الدخول بنجاح');

        }
         else 
        {
            // return response()->json(['message' => 'خطا في رقم الاقامة او كلمة المرور'], 401);
            return back()->withErrors(['message' => 'خطا في رقم الاقامة او كلمة المرور' ])->withInput();

        }

    }

    public function logout()
    {
        // Clear all session data
        Session::flush();

        // Redirect to the login page with a logout message
        return redirect()->route('/')->with('message', 'You have been logged out successfully');
    }

    public function somePage()
    {
        
        if (Session::has('citizen_id')) 
        {
            // Citizen is logged in, you can access session data like:
            $citizenName = Session::get('citizen_name');
            echo "".$citizenName;
            // return view('some_page', compact('citizenName'));
        } else {
            echo " Citizen is not logged in " ; 
            // Citizen is not logged in, redirect to login page
            // return redirect()->route('login')->with('message', 'You must log in first');
        }
    }
 

}
