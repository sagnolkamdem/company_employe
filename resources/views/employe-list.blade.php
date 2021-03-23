@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Employees list</div>
                <div class="panel-body">
                    

                <div class="card-content">
                    <div class="content">
                        <table class="table is-hoverable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Prenom</th>
                                    <th>nom de famille</th>
                                    <th>Societe</th>
                                    <th>email</th>
                                    <th>telephone</th>
                                    <th></th>
                                    <th><a class="btn btn-sm btn-success" href="{{ route('employe.create') }}">Creer</a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employe as $employ)
                                    <tr>
                                        <td>{{ $employ->id }}</td>
                                        <td><strong>{{ $employ->prenom }}</strong></td>
                                        <td><strong>{{ $employ->nom_de_famille }}</strong></td>
                                        <td><strong>{{ $employ->company->nom }}</strong></td>
                                        <td><strong>{{ $employ->email }}</strong></td>
                                        <td><strong>{{ $employ->telephone }}</strong></td>
                                        <td>
                                        <a class="btn btn-sm btn-warning" href="{{ route('employe.show', $employ->id) }}">Voir</a>
                                        <a class="btn btn-sm btn-default" href="{{ route('employe.edit', $employ->id) }}">Modifier</a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['employe.destroy', $employ->id]]) !!}
    {!! Form::submit('Supprimer', ['class' => 'btn btn-sm btn-danger', 'onclick' => 'return confirm(\'Vraiment supprimer cet employe ?\')']) !!}
                                        {!! Form::close() !!}

                                        
                                        
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <footer class="card-footer">
                    {{ $employe->links() }}
                </footer>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
