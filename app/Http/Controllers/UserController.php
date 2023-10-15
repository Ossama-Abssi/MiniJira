<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('components/Admin/Users/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profils = Profil::all();
        return view('components/Admin/Users/create', compact('profils'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userN = new User();
        
        //  $imagename = time() . '.' . $request->photo->extension();

        // $request->photo->move(public_path('images') , $imagename);
        $userN->nom = $request->nom;
        $userN->prenom = $request->prenom;
        $userN->About = $request->About;
        $userN->Age = $request->Age;
        $userN->photo = $request->photo;
        $userN->Adresse = $request->Adresse;
        $userN->telephone = $request->telephone;
        $userN->profil_id = $request->profil_id;
        $userN->email = 'qsw@efer.com';
        $userN->password = '123456789';
        $userN->save();


       
        
        return view('components/Admin/Users/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $users = User::where('id',$id)->get();
       return view('components/Admin/Compts/index', compact('users'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profils = Profil::all();

        $user = User::find($id);
        return view('components/Admin/Users/edit', compact('user', 'profils'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


       $userU = User::find($id);
       $userU->nom = $request->nom;
       $userU->prenom = $request->prenom;
       $userU->About = $request->About;
       $userU->Age = $request->Age;
       $userU->Adresse = $request->Adresse;
       $userU->telephone = $request->telephone;
       $userU->profil_id = $request->profil_id;
       $userU->email = 'qsw@efer.com';
       $userU->photo = $request->photo;

       $userU->password = '123456789';
       
    //    if ($request->photo != null)
    //    {
    //        $photoname = time() . '.' . $request->photo->extension();
    //        $request->photo->move(public_path('photos') , $photoname);

    //        $userU->photo = $photoname;
    //    }
    //    else
    //    {
    //        $userU->photo = $photo;
    //    }
       $userU->save();

       return redirect()->to('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $userD = User::findOrFail($id)->delete();

        return redirect()->to('user');
    }
}
