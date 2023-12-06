@extends('index')

@section('content')
    <form class="row g-3" method="POST" action="{{ route ('create.product') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add new product</h1>                    
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required="required">
        </div>
        <div class="mb-3">
            <label class="form-label">Value</label>
            <input type="number" class="form-control" name="value" required="required">
        </div>
        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" min="0.00" step="0.05" value="1.00" class="form-control" name="quantity" required="required">
        </div>
        <div class="mb-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" checked name="active" required="required">
            <label class="form-check-label" >Active or not</label>
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" hidden>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Add Product</button>
        </div>
    </form>
@endsection