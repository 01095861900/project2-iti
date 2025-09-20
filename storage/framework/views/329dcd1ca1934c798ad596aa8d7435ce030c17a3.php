<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo e(old('title', $recipe->title ?? '')); ?>" required>
</div>

<div class="mb-3">
    <label class="form-label">Ingredients</label>
    <textarea name="ingredients" class="form-control" rows="3"><?php echo e(old('ingredients', $recipe->ingredients ?? '')); ?></textarea>
</div>

<div class="mb-3">
    <label class="form-label">Instructions</label>
    <textarea name="instructions" class="form-control" rows="4"><?php echo e(old('instructions', $recipe->instructions ?? '')); ?></textarea>
</div>

<div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="image" class="form-control">
    <?php if(isset($recipe) && $recipe->image): ?>
        <img src="<?php echo e(asset('storage/' . $recipe->image)); ?>" width="100" class="mt-2">
    <?php endif; ?>
</div>
<?php /**PATH D:\laravel\project2-iti\resources\views/recipes/form.blade.php ENDPATH**/ ?>