@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Procuts</h1>                    
    </div>
    <div>
        <form action='' method='get'>
            <input type='text' name='search' placeholder='Type the name'>
            <a type='button' href='' class='btn btn-success float-end'>Add product</a>
            <button>Search</button>
        </form>
        <div class="table-responsive mt-4">                        
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
                            <a href='' class='btn btn-danger'>Delete</a>
                        </td>
                    </tr> 
                @endforeach
                
            </tbody>
            </table>
        </div>
    </div>
@endsection
