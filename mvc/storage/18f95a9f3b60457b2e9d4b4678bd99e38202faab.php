



<?php $__env->startSection('title' , 'Blog'); ?>
<?php $__env->startSection('content'); ?>
<div class="add-product">
    <a href="<?php echo e(BASE_URL); ?>admin/blog/add">Thêm Mới</a>
</div>
<table>
    <tr>
        <th>No</th>
        <th>Tiêu Đề Bài Viết</th>
        <th>Ảnh Bài viết</th>
        <th>Nội Dung</th>
        <th>Người tạo</th>
        <th>Kiểu Loại</th>
        <th>Ngày Tạo</th>
        <th>Hành Động</th>
    </tr>
    <?php
        $stt = 1;
    ?>
<?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    

    <tr>
        <td> <?php echo e($offset + $loop->iteration); ?> </td>
        <td> <?php echo e($item->title_blog); ?> </td>
        <td><img width="50px" src="<?php echo e(PUBLIC_URL.$item->avatar_blog); ?>" alt="" /> </td>
        <td> <?php echo e($item->content_blog); ?> </td>  
         <td> <?php echo e($item->id_user); ?> </td>
        <td> <?php echo e($item->type_blog); ?> </td>
     
        <td> <?php echo e($item->created_at); ?> </td>
       
        <td>
       <a href="<?php echo e(BASE_URL); ?>admin/blog/edit/<?php echo e($item->id); ?>"><button  data-toggle="tooltip" type="button" class="btn btn-warning" title="Edit"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> 
       <a class="btn-del"  href="<?php echo e(BASE_URL); ?>admin/blog/<?php echo e($item->id); ?>" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
         
        </td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagination'); ?>
<div class="custom-pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trước</a></li>
   <?php for($i = 1; $i <=  $totalPage ; $i++): ?>
           <li class="page-item"><a class="page-link" href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a></li>
   <?php endfor; ?>
        <li class="page-item"><a class="page-link" href="#">Sau</a></li>
    </ul>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin\blog/blog-list.blade.php ENDPATH**/ ?>