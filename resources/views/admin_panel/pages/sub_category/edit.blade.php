@extends('admin_panel.layout.master')
@section('page_title', 'Sub Category Update')
@section('news_subcategory_menu_active', 'active')
@section('custom_style')
    <style>

    </style>
@endsection
@section('content')
    <div class="content-header">

    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title">Edit SubCategory Details</h5>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-danger" href="{{ route('admin.news.subcategory.index') }}"
                                    role="button">Back</a>
                            </div>
                        </div>

                        <form action="{{ route('admin.news.subcategory.update', $subcat->id) }}" method="POST"
                            enctype="multipart/form-data" class="add_form">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-5">
                                        <label for="name">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter name" value="{{ $subcat->name }}" required>
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="category_id">Category<span class="text-danger">*</span></label>
                                        <select class="form-control select2bs4" style="width: 100%;" name="category_id"
                                            id="category_id" required>
                                            <option selected="selected">Select category</option>
                                            @foreach ($all_cat as $item)
                                                <option value="{{ $item->id }}"
                                                    @if ($subcat->category_id == $item->id) selected @endif>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="image">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="image">
                                                <label class="custom-file-label" for="image" name="image">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror


                                        @if ($subcat->image)
                                            <img src="{{ asset($subcat->image) }}" alt="" class="mt-2"
                                                style="height: 100px; width:100px; object-fit:cover;">
                                        @endif
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="description">Description</label>
                                        <textarea class="form-control summernote" id="description" name="description" placeholder="Optional">{{ $subcat->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm text-white"
                                    style="background-color: #3f6791;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')


    <script>
        $(function() {
            bsCustomFileInput.init();
            $('.summernote').summernote({
                placeholder: 'Optional',
                tabsize: 2,
                height: 200
            })
        });
    </script>

@endsection
