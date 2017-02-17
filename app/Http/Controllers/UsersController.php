<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UsersController extends Controller
{
	public function index(){
		$users = User::orderBy('id','ASC')->paginate(5);
		return view('users.index')->with('users',$users);
	}
	public function create(){
		$roles = Role::orderBy('id','ASC')->pluck('name','id');
		return view('users.create')->with('roles',$roles);
	}
	public function store(Request $request){    	
		$user = new User($request->all());
		$user->password = bcrypt($request->password);
		$user->save();
		flash('Usuario creado exitosamente', 'success');
		return redirect()->route('users.index');
	}
	public function edit($id){
		$user = User::find($id);
		return view('users.edit')->with('user',$user);
	}
	public function update(Request $request,$id){
		$user = User::find($id);
		$user->fill($request->all());
		$user->save();
		flash('Usuario actualizado exitosamente', 'success');
		return redirect()->route('users.index');
	}
	public function destroy($id){
		$user = User::find($id);
		$user->delete();
		flash('Usuario eliminado exitosamente', 'danger');
		return redirect()->route('users.index');
	}
}
