<!-- resources/views/recipes/edit.blade.php -->
@extends('layouts.app')

@section('content')
<h1 class="Edit-Recipe">Edit Recipe</h1>
<form method="POST" action="{{ route('recipes.update', $recipe) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('recipes.form', ['recipe' => $recipe])
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection

<style>
    .Edit-Recipe {
    border: 2px solid #000;
    background-color: #0d6efd;
    border-radius: 10px;
    padding: 8px;
    text-align: center;
    }
    .Edit-Recipe:hover {
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
