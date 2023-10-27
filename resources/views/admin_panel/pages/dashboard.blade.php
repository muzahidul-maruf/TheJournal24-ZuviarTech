@extends('admin_panel.layout.master')
@section('page_title', 'Dashboard')
@section('dashboard_menu_active', 'active')
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
                    <h1 class="m-0" style="color:#2474b2;">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 route_flow">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        {{-- <li class="breadcrumb-item active">Starter Page</li> --}}
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>



    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3 style="font-size: 20px; padding-top: 15px">Lorem</h3>
                            <p style="font-size: 20px">Lorem</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box  text-white " style="background-color: #0b395dd6">
                        <div class="inner">
                            {{-- <h3>53<sup style="font-size: 20px">%</sup></h3> --}}
                            <h3 style="font-size: 20px; padding-top: 15px">Lorem</h3>
                            <p style="font-size: 20px">Lorem</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box text-white bg-success">
                        <div class="inner">
                            <h3 style="font-size: 20px; padding-top: 15px">Lorem</h3>
                            <p style="font-size: 20px">Lorem</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box text-white" style="background-color: #00b5b5">
                        <div class="inner">
                            <h3 style="font-size: 20px; padding-top: 15px">Lorem</h3>
                            <p style="font-size: 20px;font-weight:bold">Lorem</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box text-white" style="background-color: #5353d3">
                        <div class="inner">
                            <h3 style="font-size: 20px; padding-top: 15px">Lorem</h3>
                            <p style="font-size: 20px;font-weight:bold">Lorem</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">

                    <div class="small-box text-white" style="background-color: #00a388">
                        <div class="inner">
                            <h3 style="font-size: 20px; padding-top: 15px">Lorem</h3>
                            <p style="font-size: 20px;font-weight:bold">Lorem</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div>


        </div>
    </section>

@endsection

@section('custom_js')

@endsection
