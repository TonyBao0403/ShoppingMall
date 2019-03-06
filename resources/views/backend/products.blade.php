@extends('layouts/app')

@section('script')
<script>

function getQueryParams(qs) {
    qs = qs.split('+').join(' ');

    var params = {},
        tokens,
        re = /[?&]?([^=]+)=([^&]*)/g;

    while (tokens = re.exec(qs)) {
        params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
    }

    return params;
}
var query = getQueryParams(document.location.search);

var page = '';
if(query.page != undefined){
    page = '?page=' + query.page;
}

    $(document).on('click','.btn-update',function(){
        console.log('test');
        $id = $(this).data('id');
        location.href = '/admin/products/update/id/'+$(this).data('id');
    });
    $(document).on('click','.btn-delete',function(){
        console.log('test123');
        $id = $(this).data('id');
        if(confirm('Delete '+ $id + ' 此筆訂單？')){
            location.href = '/admin/products/delete/id/'+ $id;
        }
    });

    $(function(){
        $.getJSON('/api/products/' + page , function(resp){
        
            for(var index in resp.data){
                var obj = resp.data[index];
                $('#tbody').append('<tr><td>'+ obj.id +'</td><td>'+ obj.customer +'</td><td>'+ obj.phone +'</td><td>'+ obj.product +'</td>'+
                                    '<td>'+ obj.amount +'</td><td>'+ obj.price +'</td><td>'+ obj.delivery_staff +'</td><td align="center"><b>'+ obj.approve +'</b></td>'+
                                    '<td><button id="'+ obj.id +'" data-id="'+ obj.id +'" class="btn btn-sm btn-primary btn-update" style="margin-left:10px">修改</button></td>'+
                                    '<td><button id="'+ obj.id +'" data-id="'+ obj.id +'" class="btn btn-sm btn-primary btn-delete" style="margin-left:10px;background-color:#B22222">刪除</button></td>/tr>');
            }
            if(resp.next_page_url != null && resp.prev_page_url != null){
                $('#btn-pre').attr('href',resp.prev_page_url.replace('api/','admin/'));
                $('#btn-next').attr('href',resp.next_page_url.replace('api/','admin/'));
            }
            else if(resp.next_page_url == null && resp.prev_page_url == null){
                $('#btn-next').hide();
                $('#btn-pre').hide();
            }
            else{
                if(resp.next_page_url == null){
                    $('#btn-next').hide();
                    $('#btn-pre').attr('href',resp.prev_page_url.replace('api/','admin/'));
                }
                else if(resp.prev_page_url == null){
                    $('#btn-pre').hide();
                    $('#btn-next').attr('href',resp.next_page_url.replace('api/','admin/'));
                }
            }
        });                         
    })
     
    
</script>
@endsection

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="">
                <h1>All Order</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:50px">#</th>
                            <th style="width:100px">顧客姓名</th>
                            <th style="width:100px">電話</th>
                            <th style="width:100px">產品</th>
                            <th style="width:100px">數量</th>
                            <th style="width:100px">價格</th>
                            <th style="width:100px">外送員</th>
                            <th style="width:48px">收款</th>
                            <th style="width:100px">修改訂單</th>
                            <th style="width:100px">刪除訂單</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        
                    </tbody>
                    
                </table>

                <div style="display:fiex">
                    <a href="" class="btn btn-primary" id="btn-pre" style="background-color:#F08080">Previous</a>
                    <a href="" class="btn btn-primary" id="btn-next" style="background-color:#F08080">Next</a>
                    <a href="/admin/products/insert/" class="btn btn-primary" id="btn-insert" style="float:right;background-color:#4CAF50">新增訂單</a>   
                </div>
            </div>
        </div>
    </div>
   
</div>


@endsection