<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $cursos = Curso::paginate();
        $users = User::orderBy('id','desc')->paginate();

        return view('users/index',compact('users'));
        //return view('users/index',compact('cursos'));
    }
    public function create(){
        return view('users/create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contraseña' => 'required',

        ]);
        
        
        $user =new User();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->contraseña;

        $user->save();

        return redirect()->route('users.show',$user);
    }

    /*
    public function show($id){
        return view('users/show', ['_id'=>$id]);//_id es la variable q debe estar en la vista
    }
    */
    public function show($id){
        //$curso = Curso::find($id);
        $user = User::find($id);
        //return $curso;
        //return view('users/show',compact('curso') ); // compact('id') = ['id'=>$id]
        return view('users/show',compact('user') ); // compact('id') = ['id'=>$id]
    }
}
