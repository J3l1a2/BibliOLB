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
                                <th scope="col">AFICHES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($afiche as $i => $afi)
        
                                <tr>
                                    <th>{{$i+1}}</th>
                                    <th scope="row">{{$afi->afiches}}</th>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('afiches.edit', $afi->id) }}">Editar</a>
                                        <form action="{{ url('afiches', [$afi->id])}}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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