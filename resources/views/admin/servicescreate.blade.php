@extends('admin.admin_assets')
@section('content')
            <main>
                {{-- {{ $pet }} --}}
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Pembina</h1>
                    {{-- <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol> --}}
                    <div class="card mt-4 mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Table Example
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <form action="/services_create" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong > ID:</strong>
                                                <input type="text" name="id" class="form-control mt-2" placeholder="Services ID" required>
                                            @error('id')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-2">
                                            <strong >Name:</strong>
                                                <input type="text" name="name" class="form-control mt-2" placeholder="Services Name" required>
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group mt-2">
                                            <strong >Image Link:</strong>
                                                <input type="text" name="img_link" class="form-control mt-2" placeholder="Image Link" required>
                                        </div> --}}
                                        {{-- <div class="form-group mt-2">
                                            <strong >Price :</strong>
                                                <input type="text" name="price" class="form-control mt-2" placeholder="Price" required>
                                        </div>
                                        <div class="form-group mt-2">
                                            <strong >Routes:</strong>
                                                    <input type="text" name="routes" class="form-control mt-2" placeholder="Insert Routes" required> --}}
                                                @error('name')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </main>
@endsection
