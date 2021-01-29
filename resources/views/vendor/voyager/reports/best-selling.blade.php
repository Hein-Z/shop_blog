@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-credit-cards"></i> Best Selling Products
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid" id="app">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="products-table" class="display">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Sold Quantity</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td><img src="{{productImage($product->image)}}" width="120px"></td>
                                        <td>{{$product->details}}</td>
                                        <td>{{$product->quantity_sold}}</td>
                                        <td>${{$product->price}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#products-table').DataTable({
                searching: false,
                ordering: false,
                paging: false
            });
        });
    </script>

@stop
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
@stop



