@extends('admin_panel.layout.master')
@section('page_title', 'Profile')
@section('profile_menu_active', 'active')
@section('custom_style')
    <style>
        .route_flow a {
            color: #2474b2 !important;
            text-decoration: none !important;
            background-color: transparent;
        }
    </style>
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <h1 class="m-0" style="color:#2474b2;">Profile</h1>
                </div>
                <div class="col-sm-6 route_flow">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <section class="content">
        <div class="container-fluid">


            <div class="card" style="width: 100%">
                <div class="card-body">
                    <form action="{{ route('admin.profile-update', $user_info->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row g-3  justify-content-center text-center mb-2">
                            <div class="col-3">
                                <label for="name" class="col-form-label">Name</label>
                            </div>
                            <div class="col-6">
                                <input type="name" id="name" name="name"
                                    @if ($user_info->name) value="{{ $user_info->name }}" @endif
                                    class="form-control">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3  justify-content-center text-center mb-2">
                            <div class="col-3">
                                <label for="email" class="col-form-label">Email</label>
                            </div>
                            <div class="col-6">
                                <input type="email" id="email" name="email"
                                    @if ($user_info->email) value="{{ $user_info->email }}" @endif
                                    class="form-control" disabled>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3  justify-content-center text-center mb-2">
                            <div class="col-3">
                                <label for="phone" class="col-form-label">Phone</label>
                            </div>
                            <div class="col-6">
                                <input type="text" id="phone" name="phone"
                                    @if ($user_info->phone) value="{{ $user_info->phone }}" @endif
                                    class="form-control">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3  justify-content-center text-center mb-2">
                            <div class="col-3">
                                <label for="address" class="col-form-label">Address</label>
                            </div>
                            <div class="col-6">
                                <input type="text" id="address" name="address"
                                    @if ($user_info->address) value="{{ $user_info->address }}" @endif
                                    class="form-control">
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-3  justify-content-center text-center mb-2">
                            <div class="col-3">
                                <label for="profile_image" class="col-form-label">Profile image</label>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            <input type="file" class="custom-file-input" id="profile_image"
                                                name="profile_image">
                                        </div>
                                    </div>
                                </div>
                                @if ($user_info->profile_image)
                                    <img src="{{ asset($user_info->profile_image) }}" alt=""
                                        style="height: 150px; width:150px;">
                                @endif
                            </div>
                        </div>
                        <div class="row g-3  justify-content-center mt-1 mb-2">

                            <div class="col-3">

                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <button type="submit" class="btn btn-dark">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

@endsection

@section('custom_js')

    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    @if (Session::has('message'))
        <script>
            var message = {!! json_encode(Session::get('message')) !!};
            toastr.success(message, {
                timeOut: 5000
            });
        </script>
    @endif
@endsection
