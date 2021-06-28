

<?php $__env->startSection('main-content'); ?>
<form action="save-edit-cate?id=<?php echo e($model->id); ?>" method="post">
    <div>
        <label for="">Tên danh mục</label>
        <input type="text" name="cate_name" value="<?php echo e($model->cate_name); ?>">
    </div>
    <div>
        <label for="">Mô tả</label>
        <textarea name="desc" cols="50" rows="5"><?php echo e($model->desc); ?></textarea>
    </div>
    <div>
    
        <label for="">Hiển thị ở menu?</label>
        <input type="checkbox"
            <?php if($model->show_menu == 1): ?>
            checked
            <?php endif; ?>
            name="show_menu" value="0">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views///cates/edit.blade.php ENDPATH**/ ?>