@extends('admin_panel.layout.master')
@section('page_title', 'Add')
@section('news_menu_active', 'active')
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
                            <h5 class="card-title">Create News</h5>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-danger" href="{{ route('admin.news.index') }}"
                                    role="button">Back</a>
                            </div>
                        </div>

                        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data"
                            class="add_form">
                            @csrf
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="title">Title<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter title" value="" required>
                                        @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="category_id">Category<span class="text-danger">*</span></label>
                                        <select class="form-control select2bs4" style="width: 100%;" name="category_id"
                                            id="category_id">
                                            <option selected="selected">Select category</option>
                                            @foreach ($all_cat as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="writter">Writter</label>
                                        <input type="text" class="form-control" id="writter" name="writter"
                                            placeholder="Enter writter" value="">
                                        @error('writter')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label for="image">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image"
                                                    name="image" required>
                                                <label class="custom-file-label" for="image" name="image">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="description">Description</label>
                                        <textarea class="form-control summernote" id="description" name="description" placeholder="Optional" required></textarea>
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

@endsection
