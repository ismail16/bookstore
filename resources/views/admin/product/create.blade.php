@extends('admin.layouts.master')
@section('title','Create New Product')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/summernote/summernote-bs4.css')}}">
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
                        <div class="card-header pt-1 pb-1">
                            <a href="{{route('admin.product.index')}}" class="btn btn-sm btn-info float-right"> <i class="fa fa-list"></i> All Category</a>
                        </div>
                        <form method="POST" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body pt-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control form-control-sm w-100" placeholder="Product Title" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Slug <span class="text-danger">*</span></label>
                                            <input type="text" name="slug" class="form-control form-control-sm w-100" placeholder="Slug title (Use English Character/letter)" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Category <span class="text-danger">*</span></label>
                                            <select name="category_id" id="" class="form-control form-control-sm w-100">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Publisher <span class="text-danger">*</span></label>
                                            <select name="publisher_id" id="" class="form-control form-control-sm w-100">
                                                @foreach($publishers as $publisher)
                                                    <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Author <span class="text-danger">*</span></label>
                                            <select name="author_id" id="" class="form-control form-control-sm w-100">
                                                @foreach($authors as $author)
                                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Price <span class="text-danger">*</span></label>
                                            <input type="number" name="price" class="form-control form-control-sm w-100" placeholder="Price" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Discount</label>
                                            <input type="number"  name="discount" placeholder="Discount" class="form-control form-control-sm w-100">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Quantity <span class="text-danger">*</span></label>
                                            <input type="number"  name="quantity" class="form-control form-control-sm w-100" placeholder="Quantity" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Editor </label>
                                            <input type="text" name="editor" class="form-control form-control-sm w-100" placeholder="Editor">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Translator </label>
                                            <input type="number"  name="translator" class="form-control form-control-sm w-100" placeholder="Translator">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Page Number <span class="text-danger">*</span></label>
                                            <input type="number"  name="page_no" class="form-control form-control-sm w-100" placeholder="Page Number" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Edition</label>
                                            <input type="number"  name="edition" class="form-control form-control-sm w-100" placeholder="Edition">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">publish date <span class="text-danger">*</span></label>
                                            <input type="date"  name="publish_date" class="form-control form-control-sm w-100" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Language <span class="text-danger">*</span></label>
                                            <input type="text"  name="language" class="form-control form-control-sm w-100" placeholder="Language" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Descriptions <span class="text-danger">*</span></label>
                                            <textarea class="textarea"  name="description" rows="20" placeholder="Product Descriptions" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-1 row">
                                    <div class="col-md-4 ">
                                        <div class="form-group mb-1">
                                            <h5>Image 1 <span class="text-danger">*</span></h5>
                                            <input type="file" name="image[]" class="form-control form-control-sm w-100 p-0" id="myFile" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-1">
                                            <h5>Image 2</h5>
                                            <input type="file" name="image[]" class="form-control form-control-sm w-100 p-0" id="myFile">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-1">
                                            <h5>Image 3</h5>
                                            <input type="file" name="image[]" class="form-control form-control-sm w-100 p-0" id="myFile">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-1">
                                            <h5>Image 4</h5>
                                            <input type="file" name="image[]" class="form-control form-control-sm w-100 p-0" id="myFile">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-1">
                                            <h5>ISBN</h5>
                                            <input type="text" name="isbn" class="form-control form-control-sm w-100" placeholder="ISBN">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-1">
                                            <label class="mb-0">Status</label>
                                        </div>
                                        <div class="">
                                            <div class="form-check-inline ml-3">
                                                <label class="form-check-label">
                                                    <input type="radio" name="status" value="0" class="form-check-input">
                                                    <span class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</span>
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="status" value="1" checked class="form-check-input">
                                                    <span class="form-check-label text-success font-weight-bold">Active</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <a href="{{route('admin.category.index')}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Cancel</a>
                                <button type="submit" class="btn btn-sm btn-info float-right"><i class="fa fa-plus"></i> Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection


@push('scripts')
    <script src="{{asset('backend_assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endpush
