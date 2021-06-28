


<?php $__env->startSection('main-content'); ?>
<form action="save-cate" method="post">
<div>
<label for="">tên danh mục</label>
<input type="text" name="cate_name">

</div>
<div>
<label for="">mô tả</label>
<textarea type="text" name="desc" cols="50" rows="5"> </textarea>

</div>
<div>
<label for="">hiển thị ở menu</label>
<input type="checkbox" name="show_menu" value="1">

</div>
<div><button type="submit">luuu</button></div>


</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\mvc\app\views/cates/add-new.blade.php ENDPATH**/ ?>