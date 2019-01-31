@extends('layouts/app')

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

            <div class="form-group row justify-content-end">
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary">更新</button>
                </div>
            </div>
            
        </form>
    
    </section>
    </div>
</div>
@endsection