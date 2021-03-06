@extends('header') {{--ke thua lai thong tin cua file master --}}
@section('tittle','Show User') {{--fill content to @yield('tittle') --}}
@section('page-description','SHOW PAGE'){{--fill content to @yield('page-description') --}}
@section('table'){{--fill content to @yield('table') --}}
<table class="table table-hover table-bordered">
  <thead class="">
    <tr class="text-center">
      <th scope="col" class="">#</th>
      <th scope="col" class="">Name</th>
      <th scope="col" class="">Email</th>
      <!-- <th scope="col" class="">Created Date</th>
            <th scope="col" class="">Updated Date</th> -->
      <th scope="col" class="">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <th scope="row">{{ $users[0]->Id }}</th>
      <td>{{ $users[0]->Name }} </td>
      <td>{{ $users[0]->Email }}</td>
      <td class="d-flex border-0 align-items-center justify-content-around">
        <form action="{{ $users[0]->Id.'/edit' }}" method="get"><button class="btn btn-sm btn-warning mx-2 rounded-0">Edit</button></form>
        <form action="{{ $users[0]->Id.'/delete' }}" method="get"><button class="btn btn-sm btn-danger mx-2 rounded-0">Delete</button></form>
      </td>
    </tr>
  </tbody>
</table>
@endsection{{-- end section --}}