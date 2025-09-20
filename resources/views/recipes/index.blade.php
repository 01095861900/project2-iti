<!-- resources/views/recipes/index.blade.php -->
@extends('layouts.app')

@section('content')
<h1 class="All-Recipes" align="center">All Recipes</h1>
<a href="{{ route('recipes.create') }}" class="btn btn-primary mb-3">Add New Recipe
    <span class="tooltiptext">Click to add a new recipe</span>
</a>
 <style>
    body{
        background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
     .All-Recipes {
  border: 2px solid #000;
  background-color: #0d6efd;
  border-radius: 10px;
  padding: 8px;
}

.All-Recipes:hover {
  cursor: pointer;
  background-color: #2a3a7c;
  box-shadow: #2a3a7c 0px 5px 15px;
}

.btn.btn-primary.mb-3 {
  position: relative;
  display: inline-block;
  cursor: pointer;
  font-size: 18px;
  font-weight: bold;
  color: #333;
  padding: 8px 12px;
  border: 2px solid #6c63ff;
  border-radius: 10px;
  transition: 0.3s;
}

.btn.btn-primary.mb-3:hover {
  background-color: #6c63ff;
  color: #fff;
}

/* Tooltip */
.btn.btn-primary.mb-3 .tooltiptext {
  visibility: hidden;
  width: 120px;            /* أصغر من 160px */
  background: linear-gradient(135deg, #6c63ff, #00c9a7);
  color: #fff;
  text-align: center;
  border-radius: 6px;      /* أصغر شوية */
  padding: 6px;            /* أقل من 8px */
  position: absolute;
  z-index: 1;

  top: 50%;                /* في نص الزرار عمودياً */
  left: 105%;              /* يطلع على اليمين */
  transform: translateY(-50%) scale(0.8);

  opacity: 0;
  transition: all 0.3s ease;
  box-shadow: 0px 4px 10px rgba(0,0,0,0.3);
}

.btn.btn-primary.mb-3 .tooltiptext::after {
  content: "";
  position: absolute;
  top: 50%;
  right: 100%; /* يخلي السهم ناحية الزرار */
  margin-top: -6px;
  border-width: 6px;
  border-style: solid;
  border-color: transparent #6c63ff transparent transparent;
}

.btn.btn-primary.mb-3:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
  transform: translateY(-50%) scale(1);
}



     table {
         margin: 0 auto;
         width: 80%;
         border-collapse: collapse;
     }

     th, td {
         padding: 12px 15px;
         text-align: left;
         border-bottom: 1px solid #ddd;
     }

     th {
         background-color: #f2f2f2;
     }

     tr:hover {
         background-color: #f5f5f5;
     }
 </style>

<table class="table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($recipes as $recipe)
        <tr>
            <td>{{ $recipe->title }}</td>
            <td>
                <a href="{{ route('recipes.edit', $recipe) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
