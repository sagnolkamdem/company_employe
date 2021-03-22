@extends('layouts.app')

@section('content')
<div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">   
            <div class="panel-heading">Création d'un employe</div>
            <div class="panel-body"> 
                <div class="col-sm-12"><!-- 'route' => 'post.store' -->
                {!! Form::open(['route' => 'employe.store', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                        {!! Form::text('prenom', null, ['class' => 'form-control', 'placeholder' => 'prenom']) !!}
                        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('nom_de_famille') ? 'has-error' : '' !!}">
                        {!! Form::text ('nom_de_famille', null, ['class' => 'form-control', 'placeholder' => 'nom_de_famille']) !!}
                        {!! $errors->first('nom_de_famille', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('company_id') ? 'has-error' : '' !!}">
                        {!! Form::select('company_id', App\Company::lists('nom', 'id'), null, ['class' => 'form-control', 'placeholder' => 'company']) !!}
                        {!! $errors->first('company_id', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email ('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">
                        {!! Form::text ('telephone', null, ['class' => 'form-control', 'placeholder' => 'telephone']) !!}
                        {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection