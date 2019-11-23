<?php

namespace App\Http\Controllers;

use App\Pais;
use App\RoleUser;
use App\User;
use Illuminate\Support\Facades\Hash;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function performValidation($request)
    {
        $rules = [
            'nombre' => 'required',
            'email' => 'required',
            'code_cliente' => 'required',
            'id_pais' => 'required',
            'direccion' => 'nullable|min:5',
            'telefono' => 'required',
            'fax' => 'nullable|min:5',
        ];
        $this->validate($request, $rules);
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact(['users']));
    }

    public function create()
    {
        $roles = Role::get();
        $paises = Pais::all();

        return view('users.create', compact('roles','paises'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->performValidation($request);

        $user = User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'email_verified_at' => date("Y-m-d"),
            'password' => Hash::make($request->password),
            'code_cliente' => $request->code_cliente,
            'id_pais' => $request->id_pais,
            'estado' => $request->estado,
            'ciudad' => $request->ciudad,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'fax' => $request->fax
        ]);
        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.index')
            ->with('info','Usuario Creado con exito');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::get();
        $selected = RoleUser::where('user_id_cliente', '=', $user->id_cliente)->get()->pluck('role_id')->toArray();

        return view('users.show', compact('user', 'roles', 'selected'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get();
        $paises = Pais::all();

        return view('users.edit', compact('user', 'roles', 'paises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->performValidation($request);

        $data = $request->only('nombre', 'email', 'code_cliente', 'id_pais', 'estado', 'ciudad', 'direccion', 'telefono', 'fax');
        $password = $request->input('password');

        if($password) {
            $data['password'] = bcrypt($password);
        }

        $user->fill($data);
        $user->save();

        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.index')
            ->with('info','Guardado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
