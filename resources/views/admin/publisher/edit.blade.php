@extends('admin.layouts.master')
@section('title','Create New publisher')

@push('css')

@endpush

@section('content')
    <section class="content">
            <div class="row">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{$error}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{route('admin.publisher.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All publisher</a>
                        </div>
                        <form method="POST" action="{{route('admin.publisher.update', $publisher->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Name</label>
                                        <div class="">
                                            <input type="text" name="name" value="{{ $publisher->name }}" class="form-control" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Poprietor Name</label>
                                        <div class="">
                                            <input type="text" name="proprietor_name" value="{{ $publisher->proprietor_name }}" class="form-control" placeholder="Poprietor Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Mobile</label>
                                        <div class="">
                                            <input type="text" name="phone" value="{{ $publisher->phone }}" class="form-control" placeholder="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Details</label>
                                        <div class="">
                                            <textarea rows="2" cols="" name="description" class="form-control">{{ $publisher->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Email</label>
                                        <div class="">
                                            <input type="text" name="email" value="{{ $publisher->email }}" class="form-control" id="email" placeholder="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name" class="control-label">Address</label>
                                        <div class="">
                                            <input type="text" name="address" value="{{ $publisher->address }}" class="form-control" id="address" placeholder="address">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                   <div class="form-group">
                                       <label for="status" class="control-label">Status</label>
                                        <div class="row pl-4 pr-4">
                                            <div class="col-md-3">
                                                <input type="radio" name="status" value="1" class="form-check-input" id="active" {{ $publisher->status == 1 ? 'checked':'' }}>
                                                <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="radio" name="status" value="0" class="form-check-input" id="deactive" {{ $publisher->status == 0 ? 'checked':'' }}>
                                                <label class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                

                            </div>
                            <div class="card-footer">
                                <a href="{{route('admin.publisher.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-sm btn-info float-right"><i class="fa fa-sync"></i> Update</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </section>
@endsection


@push('scripts')

@endpush
