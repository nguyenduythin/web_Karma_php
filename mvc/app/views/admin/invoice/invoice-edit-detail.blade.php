

@extends('admin\layouts.main')

@section('title' , 'Chi Tiết Đơn Hàng')
@section('content')

<!-- End Banner Area -->
<!-- Start Banner Area -->
<section class="order_details section_gap">
<div class="container">
  

    
    <div class="order_details_table">
        <h2>Chi Tiết Hóa Đơn</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Sản Phẩm</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col"></th>
                        <th scope="col">Số Lượng</th>
                        <th scope="col">Tổng</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="{{BASE_URL .'admin/invoice/edit-quantity'}}" method="get">
                    @foreach ($invoiceDetail as $item)
                           <tr>
                        <td style="line-height: 51px;">
                            <p style="margin-bottom: 0px;">{{$item->product->name}}</p>
                        </td>
                        <td>
                            <img width="50px" src="{{PUBLIC_URL.$item->product->image}}" alt="">
                        </td>
                        <td style="line-height: 51px;">
                           <strong>X</strong>
                        </td>
                        <td style="padding-top: 14px;">
                        
                            <input type="hidden"name="id" value="{{$item->id}}">
                            <input type="hidden" name="idinvoice" value="{{$invoiceDetailone->id}}">
                            <input type="hidden" name="unitprice" value="{{$item->unit_price }}">

                            <h5 style="position: relative">
                                <input class="ip-edit-detail"  name="quantity" type="number" value="{{$item->quantity}}">
                                <button class="btn-update-detail"><i class="fas fa-undo-alt"></i></button>
                            </h5>
                        
                        </td>
                        <td>
                            <p>${{number_format($item->unit_price )}}</p>
                        </td>
                    </tr>
                    @endforeach
                 
                  
                    <tr>
                        <td>
                            <h4>Shipping</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <p>Phí ship: $35.000</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Tổng</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                           <strong><p>$ {{number_format($invoiceDetailone->total_price)}}</p></strong> 
                        </td>
                    </tr>
                </form>
                </tbody>
            </table>
        </div>
    </div>
   
</div>
</section>
@endsection