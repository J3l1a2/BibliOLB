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
                                <th scope="col">EBOOKS</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($electronico as $i => $electro)
                                    
                                <tr>
                                    <th>{{$i+1}}</th>
                                    <th scope="row">{{$electro->ebooks}}</th>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('electronicos.edit', $electro->id) }}">Editar</a>
                                        <form action="{{ url('electronico', [$electro->id])}}" method="POST">
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