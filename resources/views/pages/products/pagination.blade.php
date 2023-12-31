@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>                    
    </div>
    <div>
        <form action="{{ route('products.index') }}" method='get'>
            <input type='text' name='search' placeholder='Type the name'>
            <a type='button' href="{{route('create.product')}}" class='btn btn-success float-end'>Add product</a>
            <button>Search</button>
        </form>
        <div class="table-responsive mt-4">
            @if($findProducts->isEmpty())
                <p>No data found</p>
            @else                 
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Quantity</th>
                        <th>Active</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($findProducts as $product)
                            <tr>
                                <td>{{$product->name}}</td>
                                <td>{{ '$' . number_format($product->value, 2, '.', ',')}}</td>
                                <td>{{$product->quantity}}</td>
                                <td>{{$product->active}}</td>
                                <td>
                                    <a href='' class='btn btn-primary'>Edit</a>
                                    <meta name='csrf-token' content='{{ csrf_token() }}'>
                                        <a onclick="updateRegisterPagination();" class='btn btn-danger'>Delete</a>
                                    </meta>
                                </td>
                            </tr> 
                        @endforeach
                        
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
