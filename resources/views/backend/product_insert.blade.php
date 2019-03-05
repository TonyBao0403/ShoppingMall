@extends('layouts/app')

@section('content')
<div class="container">
<div class="col-md-15 col-md-offset-3">
<h1>Insert Order</h1><br>
    <section class="page-section my-5 p-5">
    
        <form method="POST" action="{{ route('product.insert') }}" >

            {{ csrf_field() }}

        
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title">顧客姓名</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="customer" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">電話</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="phone" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">產品</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="product" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">數量</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="amount" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">金額</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="price" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">外送員</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" name="delivery_staff" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="subtitle">收款</label>
                <div class="col-sm-6">
                    <input type="checkbox" name="approve" value="1">
                </div>
            </div>

            <div class="form-group row justify-content-end" style="display:block;">
                <div class="col-sm-8">
                    <a href="/" class="btn btn-primary" id="btn-cancel" style="background-color:#F08080">取消</a>
                    <button type="submit" class="btn btn-primary" style="float:right;background-color:#4CAF50">新增</button>
                </div>
            </div>
            
            
        </form>
    
    </section>
    </div>
</div>
@endsection