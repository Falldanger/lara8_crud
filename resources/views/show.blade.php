@extends('layout')

@section('title','User '.$user->name)

@section('content')
    <a class="btn btn-secondary" href="{{route('users.index')}}" role="button">Back to users</a>
    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID : {{$user->id}}</li>
            <li class="list-group-item">Name : {{$user->name}}</li>
            <li class="list-group-item">Email : {{$user->email}}</li>
            <li class="list-group-item">Created at : {{$user->created_at->format('d/m/Y H:i:s')}}</li>
            <li class="list-group-item">Updated at : {{$user->updated_at->format('d/m/Y H:i:s')}}</li>
        </ul>
    </div>
    <form class="mt-3" method="post" action="{{route('users.destroy',$user)}}">
        <a class="btn btn-warning" href="{{route('users.edit',$user)}}" role="button">Edit</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
@endsection
