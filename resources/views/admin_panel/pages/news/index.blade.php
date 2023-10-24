@extends('admin_panel.layout.master')
@section('page_title', 'Categories')
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
                            <h5 class="card-title">News List</h5>
                            <div class="ml-auto">
                                <a class="btn btn-sm btn-info" href="{{ route('admin.news.create') }}"
                                    role="button">Create new</a>
                            </div>
                        </div>
                        <div style="overflow-x: auto">
                            <div class="card-body">

                                <table id="myTable" class="table table-bordered table-striped display">
                                    <thead>
                                        <tr class="">
                                            <th>Image</th>
                                            <th>Name</th>
                                            {{-- <th>Description</th> --}}
                                            <th>Status</th>
                                            <th>Popular</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: #2474b2">
                                        @foreach ($all_news as $data)
                                            <tr>
                                                <td>

                                                    @if ($data->image)
                                                        <img src="{{ asset($data->image) }}" class="rounded" alt=""
                                                            width="80" height="60">
                                                    @endif

                                                </td>
                                                <td>{{ $data->name }}
                                                </td>
                                                {{-- <td><span title="{!! $data->description !!}"
                                                        class="text-truncate table-truncate d-inline-block">{!! $data->description !!}
                                                    </span>
                                                </td> --}}
                                                <td>
                                                    @if ($data->status == 1)
                                                        <a
                                                            href="{{ route('admin.news.status-update', $data->id) }}">
                                                            <button class="btn btn-success btn-xs"
                                                                style="width:80px">Active</button>
                                                        </a>
                                                    @elseif ($data->status == 0)
                                                        <a
                                                            href="{{ route('admin.news.status-update', $data->id) }}">
                                                            <button class="btn btn-danger btn-xs"
                                                                style="width:80px">In-active</button>
                                                        </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($data->is_popular == 1)
                                                        <a
                                                            href="{{ route('admin.news.popularity-status-update', $data->id) }}">
                                                            <button class="btn btn-success btn-xs"
                                                                style="width:80px">Yes</button>
                                                        </a>
                                                    @elseif ($data->is_popular == 0)
                                                        <a
                                                            href="{{ route('admin.news.popularity-status-update', $data->id) }}">
                                                            <button class="btn btn-danger btn-xs"
                                                                style="width:80px">No</button>
                                                        </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="top" title="Edit"
                                                        href="{{ route('admin.news.edit', $data->id) }}"
                                                        type="button" class="btn btn-warning btn-xs mb-1">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <form class="d-inline"
                                                        action="{{ route('admin.news.destroy', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button data-toggle="tooltip" data-placement="top" title="Delete"
                                                            type="submit"
                                                            onclick="return confirm('Are you sure you want to delete?');"
                                                            type="button" class="btn btn-danger btn-xs mb-1">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection

@section('custom_js')

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": false,
            });
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>

    @if (Session::has('error_message'))
        <script>
            var message = {!! json_encode(Session::get('error_message')) !!};
            toastr.warning(message, {
                timeOut: 5000
            });
        </script>
    @endif

@endsection
