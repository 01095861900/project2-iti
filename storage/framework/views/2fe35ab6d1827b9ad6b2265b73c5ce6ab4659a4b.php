<!-- resources/views/recipes/edit.blade.php -->


<?php $__env->startSection('content'); ?>
<h1 class="Edit-Recipe">Edit Recipe</h1>
<form method="POST" action="<?php echo e(route('recipes.update', $recipe)); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <?php echo $__env->make('recipes.form', ['recipe' => $recipe], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-success">Update</button>
</form>
<?php $__env->stopSection(); ?>



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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\project2-iti\resources\views/recipes/edit.blade.php ENDPATH**/ ?>