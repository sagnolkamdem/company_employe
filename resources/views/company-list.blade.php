@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Companies list</div>
                <div class="panel-body">
                    

                <div class="card-content">
                    <div class="content">
                        <table class="table is-hoverable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>site web</th>
                                    <th></th>
                                    <th><a class="btn btn-sm btn-success" href="{{ route('company.create') }}">Creer</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($company as $compani)
                                    <tr>
                                        <td>{{ $compani->id }}</td>
                                        <td><strong>{{ $compani->nom }}</strong></td>
                                        <td><strong>{{ $compani->email }}</strong></td>
                                        <td><strong>{{ $compani->site_web }}</strong></td>
                                        <td>
                                        <a class="btn btn-sm btn-warning" href="{{ route('company.show', $compani->id) }}">Voir</a>
                                        <a class="btn btn-sm btn-default" href="{{ route('company.edit', $compani->id) }}">Modifier</a>

                                        {!! Form::open(['method' => 'DELETE', 'route' => ['company.destroy', $compani->id]]) !!}
    {!! Form::submit('Supprimer', ['class' => 'btn btn-sm btn-danger', 'onclick' => 'return confirm(\'Vraiment supprimer cette entreprise ?\')']) !!}
                                        {!! Form::close() !!}
                                        
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <footer class="card-footer">
                    {{ $company->links() }}
                </footer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
