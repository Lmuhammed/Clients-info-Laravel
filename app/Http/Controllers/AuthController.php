<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login_view()
    {
        return view('login_system.login');
    }
    public function register_view()
    {
        return view('login_system.register');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('clients.index')
            ->with('msg-color','success')
            ->with('message','تم تسجيل الدخول بنجاح ، أهلا بك');
        }
        return redirect()->route('login')
        ->with('msg-color','danger')
        ->with('message','معلومات الدخول غير صحيحة ، المرجوا التحقق من المعطيات');
    }
    
    public function new_user(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->only('full_name','username', 'password');
        $check = $this->create($data);
        return redirect()->route('clients.index')
        ->with('msg-color','success')
        ->with('message','تم إنشاء الحساب بنجاح ، أهلا بك');
    }
    public function create(array $data)
    {
        return User::create([
            'full_name' => $data['full_name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function sing_out()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login')
        ->with('msg-color','warning')
        ->with('message','تم تسجيل الخروج بنجاح');
    }
}
