@extends('usuarios.layout')
@section('content')

<div class="container p4">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ARTICULOS REVISTAS</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($revistas as $i => $revi)
                                    
                                <tr>
                                    <th>{{$i+1}}</th>
                                    <th scope="row">{{$revi->article}}</th>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('revistas.edit', $revi->id) }}">Editar</a>
                                        <form action="{{ url('revistas', [$revi->id])}}" method="POST">
                                            <input type="hidden" name="method" value="DELETE">
                                            <input type="hidden" name="token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="delete"/>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection