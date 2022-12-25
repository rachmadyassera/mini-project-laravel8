@extends('layouts.main')
@section('content')
<div class="container">
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h3> Data User</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    {{-- Table clientside --}}
                    <table id="datatables" class="table table-hover ">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Role</td>
                                <td>Email</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($datauser as $user )
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <ul class="nav">
                                        <a href="{{route ('user.show', $user->id)}}" class="btn btn-success mr-2">Show</a> &nbsp;
                                        <a href="{{route ('user.edit', $user->id)}}" class="btn btn-primary mr-2">Edit</a> &nbsp;
                                        <form action="{{route ('user.destroy', $user->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-warning">Delete</button>
                                        </form>
                                    </ul>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {{-- Table jika menggunakan serverside --}}
                    {{-- <table id="datatables" class="table table-hover ">
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Role</td>
                                <td>Email</td>
                            </tr>
                        </thead>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
