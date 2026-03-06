@extends('adminpanel.master')

@section('content')

<style>
    body {
        background-color: rgb(255, 255, 255);
    }

    .contact-form {
        max-width: auto;
        margin: auto;
        border-radius: 5px;
        background-color: rgb(255, 255, 255);
        padding: 20px;
    }

    input[type=text], input[type=number], select, textarea {
        width: 100%;
        padding: 10px;
        margin: 9px 0;
        display: inline-block;
        border: 1px solid rgb(80, 75, 75);
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit], .btn-primary {
        width: 100%;
        background-color: rgb(5, 107, 44);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Entry Master</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="adminindex">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <center>
        @if(session('status'))
            <h3 style="color:green;">{{ session('status') }}</h3>
        @endif
    </center>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">E-bike / Scooters Entry</h3>
                        </div>

                        <form action="{{ url('insertproductentry') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="category" required>
                                        <option>Select Category</option>
                                        <option value="Electric Bike">Electric Bike</option>
                                        <option value="Scooter">Scooter</option>
                                    </select>
                                    <h6 style="color:red">@error('category'){{ $message }}@enderror</h6>
                                </div>

                                <div class="form-group">
                                    <label>Bike Model</label>
                                    <select class="form-control" name="pnameid" required>
                                        <option>Select Model</option>
                                        @foreach($data as $row)
                                            <option value="{{ $row->id }}">{{ $row->productname }}</option>
                                        @endforeach
                                    </select>
                                    <h6 style="color:red">@error('pnameid'){{ $message }}@enderror</h6>
                                </div>

                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" name="company" class="form-control" value="{{ old('company') }}" placeholder="Enter Company Name" required>
                                    <h6 style="color:red">@error('company'){{ $message }}@enderror</h6>
                                </div>

                                <div class="form-group">
                                    <label>Bike Color</label>
                                    <select class="form-control" name="color" required>
                                        <option>Select Color</option>
                                        <option value="Red">Red</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Blue">Green</option>
                                        <option value="Black">Black</option>
                                        <option value="Silver">Silver</option>
                                        <option value="White">White</option>
                                    </select>
                                    <h6 style="color:red">@error('color'){{ $message }}@enderror</h6>
                                </div>

                                <div class="form-group">
                                    <label>Build Material</label>
                                    <input type="text" name="material" class="form-control" value="{{ old('material') }}" placeholder="Enter Material Type" required>
                                    <h6 style="color:red">@error('material'){{ $message }}@enderror</h6>
                                </div>

                                <div class="form-group">
                                    <label>Size</label>
                                    <input type="text" name="size" class="form-control" value="{{ old('size') }}" placeholder="Enter Size" required>
                                    <h6 style="color:red">@error('size'){{ $message }}@enderror</h6>
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" placeholder="Enter Description" required>{{ old('description') }}</textarea>
                                    <h6 style="color:red">@error('description'){{ $message }}@enderror</h6>
                                </div>

                                <div class="form-group">
                                    <label>Upload Images</label>
                                    <input type="file" name="image" class="form-control" required>
                                    <input type="file" name="image1" class="form-control" required>
                                    <input type="file" name="image2" class="form-control" required>
                                    <input type="file" name="image3" class="form-control" required>
                                    <input type="file" name="image4" class="form-control" required>
                                    <h6 style="color:red">@error('image'){{ $message }}@enderror</h6>
                                </div>

                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="price" class="form-control" value="{{ old('price') }}" placeholder="Enter Price" required>
                                    <h6 style="color:red">@error('price'){{ $message }}@enderror</h6>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
