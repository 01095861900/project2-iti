<!-- resources/views/recipes/create.blade.php -->
@extends('layouts.app')

@section('content')
<h1 align="center" class="Create-New-Recipe">Create New Recipe</h1>
<form method="POST" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
    @csrf
    @include('recipes.form')
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection

<style>
    .create-new-recipe {
    border: 2px solid #000;
    background-color: #0d6efd;
    border-radius: 10px;
    padding: 8px;
    }
    .Create-New-Recipe:hover {
  cursor: pointer;
  background-color: #2a3a7c;
  box-shadow: #2a3a7c 0px 5px 15px;
}
.btn.btn-success {
  position: relative;
  display: inline-block;
  cursor: pointer;
  font-size: 18px;
  font-weight: bold;
  color: #333;
  padding: 8px 12px;
  border: 2px solid #28a745;
  border-radius: 10px;
  transition: 0.3s;
}
</style>
