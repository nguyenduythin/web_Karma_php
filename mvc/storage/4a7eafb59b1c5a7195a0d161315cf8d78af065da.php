



<?php $__env->startSection('title' , 'Đơn Hàng'); ?>
<?php $__env->startSection('content'); ?>
<div class="add-product">
    
</div>
<table>
    <tr >
        <th>No</th>
        <th>Tên</th>
        <th>Số Điện Thoại</th>
        <th>Email</th>
        <th>Địa Chỉ</th>
      
        <th>Tổng giá</th>
        <th>Kiểu Thanh Toán</th>
        <th>Ghi Chú</th>
        <th>Tình Trạng</th>

       
        <th>Hàng Động</th>
    </tr>
    <?php
        $stt = 1;
    ?>
<?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    

    <tr>
        <td> <?php echo e($offset + $loop->iteration); ?> </td>
        <td> <?php echo e($item->customer_name); ?> </td>
        <td><?php echo e($item->customer_phone_number); ?>  </td>
        <td> <?php echo e($item->customer_email); ?> </td>
        <td> <?php echo e($item->customer_address); ?> </td>
        <td> $<?php echo e(number_format($item->total_price)); ?> </td>
        <td> <?php echo e($item->payment_method == 1 ?'Cash' : 'Visit Card'); ?> </td>
        <td> <?php echo $item->note; ?> </td>
        <td> <?php if($item->confirm == 1): ?>
            <button type="button" class="btn btn-danger">Chưa Xác Nhận</button>
        <?php else: ?>
           <button type="button" class="btn btn-success">Xác Nhận</button>
        <?php endif; ?>  
         </td>
     
       
        <td>
        <a  href="<?php echo e(BASE_URL); ?>admin/invoice/editcart/<?php echo e($item->id); ?>" ><button  data-toggle="tooltip" type="button" class="btn btn-info" title="Detail"  >Chi Tiết</button></a> 
        <a href="<?php echo e(BASE_URL); ?>admin/invoice/edit/<?php echo e($item->id); ?>"><button  data-toggle="tooltip" type="button" class="btn btn-warning" title="Edit"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> 
        <a class="btn-del"  href="<?php echo e(BASE_URL); ?>admin/invoice/<?php echo e($item->id); ?>" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
         
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
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin\invoice/invoice-list.blade.php ENDPATH**/ ?>