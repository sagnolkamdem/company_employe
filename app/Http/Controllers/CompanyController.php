<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Company;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Company::paginate(10);
        return view('company-list', compact('company'));
    }

    //public function index()
    //{
        //$films = Film::paginate(5);
        //$films = Film::oldest('title')->paginate(5);
        //$films = Film::withTrashed()->oldest('title')->paginate(5);
        //return view('index', compact('films'));
    //}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $categories = Category::all();
    //     return view('create', compact('categories'));
    // }

    public function create()
    {
        return view('company-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $companyRequest)
    {
        // dd($companyRequest->all());
        $logo = $companyRequest->file('logo');
        $nom = $companyRequest->input('nom');
        $email = $companyRequest->input('email');
        $site_web = $companyRequest->input('site_web');

        if($logo->isValid())
        {
            $chemin = config('images.path');

            $extension = $logo->getClientOriginalExtension();

            do {
                $nome = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nome));

            if($logo->move($chemin, $nome)) {

                $absolu = getcwd();
                $logo = $absolu . "\'" . $chemin . "\'" . $nome;
                $logo = str_replace ("'", "", $logo);
                
            }
            
            Company::create([
                'nom' => $nom,
                'email' => $email,
                'logo' => $logo,
                'site_web' => $site_web,
            ]);
        }
        return redirect()->route('company.list')->with('info', 'La compagnie a bien été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Film $film)
    // {
    //     $category = $film->category->name;    
    //     return view('show', compact('film', 'category'));
    // }

    public function show(Company $company)
    {
        return view('company-show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company-edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $companyRequest, Company $company)
    {
        $logo = $companyRequest->file('logo');
        $nom = $companyRequest->input('nom');
        $email = $companyRequest->input('email');
        $site_web = $companyRequest->input('site_web');

        if($logo->isValid())
        {
            $chemin = config('images.path');

            $extension = $logo->getClientOriginalExtension();

            do {
                $nome = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nome));

            if($logo->move($chemin, $nome)) {

                $absolu = getcwd();
                $logo = $absolu . "\'" . $chemin . "\'" . $nome;
                $logo = str_replace ("'", "", $logo);
                
            }
            
            $company->update([
                'nom' => $nom,
                'email' => $email,
                'logo' => $logo,
                'site_web' => $site_web,
            ]);
        }
        return redirect()->route('company.list')->with('info', 'Le company a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return back()->with('info', 'Le film a bien été insere dans la corbeille.');
    }

    
}
