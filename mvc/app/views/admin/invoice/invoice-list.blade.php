

@extends('admin\layouts.main')

@section('title' , 'Đơn Hàng')
@section('content')
<div class="add-product">
    {{-- <a href="{{BASE_URL}}admin/invoice/add">Add New</a> --}}
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
    @php
        $stt = 1;
    @endphp
@foreach ($invoice as $item)
    

    <tr>
        <td> {{$offset + $loop->iteration}} </td>
        <td> {{$item->customer_name}} </td>
        <td>{{$item->customer_phone_number}}  </td>
        <td> {{$item->customer_email}} </td>
        <td> {{$item->customer_address}} </td>
        <td> ${{number_format($item->total_price)}} </td>
        <td> {{$item->payment_method == 1 ?'Cash' : 'Visit Card'}} </td>
        <td> {!!$item->note!!} </td>
        <td> @if ($item->confirm == 1)
            <button type="button" class="btn btn-danger">Chưa Xác Nhận</button>
        @else
           <button type="button" class="btn btn-success">Xác Nhận</button>
        @endif  
         </td>
     
       
        <td>
        <a  href="{{BASE_URL}}admin/invoice/editcart/{{$item->id}}" ><button  data-toggle="tooltip" type="button" class="btn btn-info" title="Detail"  >Chi Tiết</button></a> 
        <a href="{{BASE_URL}}admin/invoice/edit/{{$item->id}}"><button  data-toggle="tooltip" type="button" class="btn btn-warning" title="Edit"  ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a> 
        <a class="btn-del"  href="{{BASE_URL}}admin/invoice/{{$item->id}}" >    <button   data-toggle="tooltip" type="button" class="btn btn-danger" title="Delete"   > <i class="fas fa-trash-alt"></i></button></a> 
         
        </td>
    </tr>

    @endforeach
</table>
@endsection
@section('pagination')
<div class="custom-pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trước</a></li>
   @for ($i = 1; $i <=  $totalPage ; $i++)
           <li class="page-item"><a class="page-link" href="?page={{$i}}">{{$i}}</a></li>
   @endfor
        <li class="page-item"><a class="page-link" href="#">Sau</a></li>
    </ul>
</div>

@endsection