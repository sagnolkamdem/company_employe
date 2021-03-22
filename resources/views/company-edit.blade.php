@extends('layouts.app')

@section('content')
<div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">   
            <div class="panel-heading">Modification d'une compagnie</div>
            <div class="panel-body"> 
                <div class="col-sm-12">
                {!! Form::model($company, ['route' => ['company.update', $company->id], 'method' => 'put', 'class' => 'form-horizontal panel', 'files' => true]) !!}
                        {!! csrf_field() !!}   
                    <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('logo') ? 'has-error' : '' !!}">
                        {!! Form::file('logo', ['class' => 'form-control', 'placeholder' => 'Logo']) !!}
                        {!! $errors->first('logo', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('site_web') ? 'has-error' : '' !!}">
                        {!! Form::text('site_web', null, ['class' => 'form-control', 'placeholder' => 'Site web']) !!}
                        {!! $errors->first('site_web', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection