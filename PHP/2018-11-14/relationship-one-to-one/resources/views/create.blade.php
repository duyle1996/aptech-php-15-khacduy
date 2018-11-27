@extends('header')
@section('tittle','Create User')
@section('page-description','CREATE PAGE')
@section('table')
    <form action="" method="get">
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="name">name</label>
            <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name">
          </div>
          
          <div class="form-group ">
            <label class="text-uppercase font-weight-bold" for="number">number</label>
            <input type="number" class="form-control rounded-0" id="number" placeholder="Number" name="number">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
              confirm
            </button>
           {{ csrf_field() }}
          </div>
        </form>
@endsection