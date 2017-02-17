<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Http\Requests\RoleRequest;

class RolesController extends Controller
{
	public function index(){
		$roles = Role::orderBy('id','ASC')->paginate(5);
		return view('roles.index')->with('roles',$roles);
	}
	public function create(){
		return view('roles.create');
	}
	public function store(RoleRequest $request){    	
		$role = new Role($request->all());
		$role->save();
		flash('Rol creado exitosamente', 'success');
		return redirect()->route('roles.index');
	}
	public function edit($id){
		$role = Role::find($id);
		return view('roles.edit')->with('role',$role);
	}
	public function update(RoleRequest $request,$id){
		$role = Role::find($id);
		$role->fill($request->all());
		$role->save();
		flash('Rol actualizado exitosamente', 'success');
		return redirect()->route('roles.index');
	}
	public function destroy($id){
		$role = Role::find($id);
		$role->delete();
		flash('Rol eliminado exitosamente', 'danger');
		return redirect()->route('roles.index');
	}
}
