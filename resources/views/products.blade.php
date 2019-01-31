@extends('layouts/app')

@section('script')
<script>
    $(document).on('click','.btn-update',function(){
        console.log('test');
        $id = $(this).data('id');
        location.href = '/products/update/id/'+$(this).data('id');
    });
    $(document).on('click','.btn-delete',function(){
        console.log('test123');
        $id = $(this).data('id');
        if(confirm('Delete '+ $id + ' 此筆訂單？')){
            location.href = '/products/delete/id/'+ $id;
        }
    });

    $.getJSON('/api/products',function(resp){
        
        for(var index in resp){
            var obj = resp[index];
            $('#tbody').append('<tr><td>'+ obj.id +'</td><td>'+ obj.customer +'</td><td>'+ obj.phone +'</td><td>'+ obj.product +'</td>'+
                                '<td>'+ obj.amount +'</td><td>'+ obj.price +'</td><td>'+ obj.delivery_staff +'</td><td>'+ obj.approve +'</td>'+
                                '<td><button id="'+ obj.id +'" data-id="'+ obj.id +'" class="btn btn-sm btn-primary btn-update" style="margin-left:10px">修改</button></td>'+
                                '<td><button id="'+ obj.id +'" data-id="'+ obj.id +'" class="btn btn-sm btn-primary btn-delete" style="margin-left:10px">刪除</button></td>/tr>');
        }
    });                          
    
</script>
@endsection

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <h1>All Order</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:50px">#</th>
                    <th style="width:100px">顧客姓名</th>
                    <th style="width:100px">電話</th>
                    <th style="width:100px">產品</th>
                    <th style="width:100px">數量</th>
                    <th style="width:100px">價格</th>
                    <th style="width:100px">外送員</th>
                    <th style="width:100px">收款</th>
                    <th style="width:100px">修改訂單</th>
                    <th style="width:100px">刪除訂單</th>
                </tr>
            </thead>
            <tbody id="tbody">
                
            </tbody>
            
        </table>
        
        <a href="/products/insert/" class="btn btn-primary" id="btn-insert">新增訂單</a>   
        
        
    </div>
</div>

@endsection