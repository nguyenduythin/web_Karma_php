



<?php $__env->startSection('title' , 'Comment'); ?>
<?php $__env->startSection('content'); ?>
<div class="add-product">
  
</div>
<table>
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Content</th>
        <th>User</th>
        <th>Product</th>
        <th>Action</th>
    </tr>
    <?php
        $stt = 1;
    ?>
<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    

    <tr>
        <td> <?php echo e($offset + $loop->iteration); ?> </td>
        <td> <?php echo e($item->title); ?> </td>
     
        <td> <?php echo e($item->content); ?> </td>
        <td> <?php echo e($item->users->name); ?> </td>
        <td> <?php echo e($item->products->name); ?> </td>
        
       
        <td>
            <a href=""><button  data-toggle="tooltip" type="button" class="btn btn-info" title="Detail"  >Detail</button></a> 
            <a class="btn-del"  href="<?php echo e(BASE_URL); ?>admin/comment/<?php echo e($item->id); ?>" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
         
        </td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagination'); ?>
<div class="custom-pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
   <?php for($i = 1; $i <=  $totalPage ; $i++): ?>
           <li class="page-item"><a class="page-link" href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a></li>
   <?php endfor; ?>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin\comment/comment-list.blade.php ENDPATH**/ ?>