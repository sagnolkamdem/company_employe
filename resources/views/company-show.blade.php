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
                        <p class="card-header-title">Nom de la compagnie : {{ $company->nom }}</p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <p>email : {{ $company->email }}</p>
                            <hr>
                            <p>{{ $company->site_web }}</p>
                            <!-- <img src="{{url('$company->site_web') }}" alt="fhcgvjhkb"> -->
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