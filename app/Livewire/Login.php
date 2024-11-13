<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $showModalLogin = false;
    public $showModalRegistro = false;

    public $nome;
    public $email;
    public $password;

    protected $rules = [
        'nome' => 'required|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8'
    ];

    public function messages(){
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.min' => 'O nome deve ter pelo menos 3 caracteres.',

            'email.required' => 'A email do colaborador é obrigatório.',
            'email.email' => 'O email deve ser Válido!',
            'email.unique' => 'Este email já está em uso!',

            'password.required' => 'A senha é obrigatório!',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres.'
        ];
    }

    public function openModalLogin(){
        $this->showModalLogin = true;
    }

    public function login(Request $request){
        $data = ['email' => $this->email, 'password' => $this->password];

        if(Auth::attempt($data)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
    }

    public function openModalRegistro(){
        $this->showModalLogin = false;
        $this->showModalRegistro = true;
    }

    public function registrar(Request $request){
        $this->validate();
        $data = ['name' => $this->nome, 'email' => $this->email, 'password' => $this->password];
        $registrar = User::query()->create($data);

        if($registrar){
            $credenciais = ['email' => $this->email, 'password' => $this->password];

            if(Auth::attempt($credenciais)){
                $request->session()->regenerate();
                return redirect()->route('index');
            }
        }
    }

    public function closeModalLogin(){
        return redirect()->route('index');
    }

    public function closeModalRegistro(){
        return redirect()->route('index');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
