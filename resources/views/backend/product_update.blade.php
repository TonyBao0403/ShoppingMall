@extends('layouts/app')

@section('script')
<script>
    

    $(function(){
        $val = $("input[name='approve']").val();
        console.log($val);
        if($val==1){
            $('#box').attr("checked",true);
            console.log($("input[name='approve']").is(":checked"));  //取得checkbox是否有被打勾的值。
        }
        else{
            $('#box').attr("checked",false);
            console.log($("input[name='approve']").is(":checked"));
        }
        
        
        $("input[type='checkbox']").on('click',function(){
           console.log($("input[name='approve']").is(":checked"));

           if( $("input[name='approve']").is(":checked") == true){
                $("input[name='approve']").val("1");
                $val = $("input[name='approve']").val();
                console.log($val);
            }
            else{
                $("input[name='approve']").val("0");
            }
          });  
        
    })
        
    
</script>
@endsection

@section('content')
<div class="container">
<div class="col-md-15 col-md-offset-3">
<h1>Update Order</h1><br>
    <section class="page-section my-5 p-5">
    
        <form method="POST" action="{{ route('product.update', $product->id) }}" >

            {{ csrf_field() }}

            <!--{{ method_field('PUT') }}-->

            <!--<input class="form-control" type="hidden" name="id" value="{{ $product->id}}"> -->
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title">顧客姓名</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="customer" value="{{$product->customer}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">電話</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="phone" value="{{$product->phone}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">產品</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="product" value="{{$product->product}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">數量</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="amount" value="{{$product->amount}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">金額</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="price" value="{{$product->price}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">外送員</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="delivery_staff" value="{{$product->delivery_staff}}">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">收款</label>
                <div class="col-sm-6">
                    <input  type="checkbox" id="box" name="approve" value="{{$product->approve}}">
                </div>
            </div><br>

            <div class="form-group row justify-content-end" style="display:block">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary" style="float:right;background-color:#4CAF50">更新</button>
                    <a href="/" class="btn btn-primary" id="btn-cancel" style="background-color:#F08080">取消</a>
                </div>
            </div>
            
        </form>
              
    </section>
     
    </div>
</div>
@endsection