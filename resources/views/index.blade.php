@extends('layout')

@section('title','Users')

@section('content')
    <a class="btn btn-primary" href="{{route('users.create')}}" role="button">Create user</a>
    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>
                    <a href="{{route('users.show',$user)}}">{{$user->name}}</a>
                </td>
                <td>{{$user->email}}</td>
                <td>
                    <form method="post" action="{{route('users.destroy',$user)}}">
                        <a class="btn btn-warning" href="{{route('users.edit',$user)}}" role="button">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$users->links()}}
@endsection
