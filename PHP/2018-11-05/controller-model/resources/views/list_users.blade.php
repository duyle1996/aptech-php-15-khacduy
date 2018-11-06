@extends('header')
@section('table')
<table class="table table-bordered table-hover">
    <thead>
        <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr class="text-center">
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="d-flex justify-content-around align-items-center">
                <form action="{{ $user->id }}" method="get"><button class="btn btn-sm btn-primary rounded-0">Show</button>
                </form>
                <form action="{{ $user->id.'/edit' }}" method="get"><button class="btn btn-sm btn-warning rounded-0">Edit</button>
                </form>
                <form action="{{ $user->id.'/delete' }}" method="get"><button class="btn btn-sm btn-danger rounded-0">Delete</button></form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection