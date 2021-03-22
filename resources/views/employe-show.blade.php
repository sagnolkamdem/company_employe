@extends('layouts.app')
@section('content')
<div class="col-sm-offset-4 col-sm-4">
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">Création d'une compagnie</div>
        <div class="panel-body">
            <div class="col-sm-12">

                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Nom et prenom de l'employe : {{ $employe->prenom }} {{ $employe->nom_de_famille }}</p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <p>email : {{ $employe->email }}</p>
                            <hr>
                            <p>societe : {{ $employe->company_id }}</p>
                            <p>numero de telephone : {{ $employe->telephone }}</p>
                            <!-- <img src="{{url('$employe->site_web') }}" alt="fhcgvjhkb"> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <a href="javascript:history.back()" class="btn btn-primary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>
</div>
@endsection