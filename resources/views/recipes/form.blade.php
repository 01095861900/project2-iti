<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $recipe->title ?? '') }}" required>
</div>

<div class="mb-3">
    <label class="form-label">Ingredients</label>
    <textarea name="ingredients" class="form-control" rows="3">{{ old('ingredients', $recipe->ingredients ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Instructions</label>
    <textarea name="instructions" class="form-control" rows="4">{{ old('instructions', $recipe->instructions ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="image" class="form-control">
    @if(isset($recipe) && $recipe->image)
        <img src="{{ asset('storage/' . $recipe->image) }}" width="100" class="mt-2">
    @endif
</div>
