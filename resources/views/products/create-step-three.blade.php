@extends('layout.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>

                    <div class="card-body">

                            <table class="table">
                                <tr>
                                    <td>Product Name:</td>
                                    <td><strong>{{$product->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Product Amount:</td>
                                    <td><strong>{{$product->amount}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Product status:</td>
                                    <td><strong>{{$product->status ? 'Active' : 'DeActive'}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Product Description:</td>
                                    <td><strong>{{$product->description}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Product Stock:</td>
                                    <td><strong>{{$product->stock}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('products.create.step.two') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection