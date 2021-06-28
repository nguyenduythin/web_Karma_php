



<?php $__env->startSection('title' , 'User'); ?>
<?php $__env->startSection('content'); ?>
<table>
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Name of Asset</th>
        <th>Status</th>
        <th>Subject</th>
        <th>Department</th>
        <th>Type</th>
        <th>Price</th>
        <th>Setting</th>
    </tr>
    <tr>
        <td>1</td>
        <td><img src="img/product/book-1.jpg" alt="" /></td>
        <td>Web Development Book</td>
        <td>
            <button class="pd-setting">Active</button>
        </td>
        <td>Html, Css</td>
        <td>CSE</td>
        <td>Book</td>
        <td>$1500</td>
        <td>
            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fas fa-trash-alt"></i></button>
        </td>
    </tr>
  
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin/user.blade.php ENDPATH**/ ?>