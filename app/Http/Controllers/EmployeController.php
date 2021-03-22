<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Employe;
use App\Company;
use App\Http\Requests\EmployeRequest;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employe = Employe::paginate(10);
        return view('employe-list', compact('employe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all();
        return view('employe-create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeRequest $employeRequest)
    {
        Employe::create($employeRequest->all());
        return redirect()->route('employe.list')->with('info', 'L employe a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        return view('employe-show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        return view('employe-edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeRequest $employeRequest, Employe $employe)
    {
        $prenom = $employeRequest->input('prenom');
        $email = $employeRequest->input('email');
        $company_id = $employeRequest->input('company_id');
        $telephone = $employeRequest->input('telephone');
        $nom_de_famille = $employeRequest->input('nom_de_famille');
        $employe->update([
            'prenom' => $prenom,
            'nom_de_famille' => $nom_de_famille,
            'company_id' => $company_id,
            'email' => $email,
            'telephone' => $telephone,
        ]);
        return redirect()->route('employe.list')->with('info', 'L employe a bien été modifie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        $employe->delete();
        return back()->with('info', 'Le film a bien été insere dans la corbeille.');
    }
}
