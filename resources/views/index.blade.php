
@extends('app.layout')


@section('content')
    <!-- Begin page -->


            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Medlab</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">


                        <div class="col-xl-7">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sales Analytics</h4>
                                    <p class="card-subtitle mb-4">From date of 1st Jan 2019 to continue</p>
    
                                    <div id="morris-bar-example" class="morris-chart" style="height: 304px;"></div>

                                </div>
                            </div>
                        </div> <!-- end col-->

                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="card-title">Recent Stock</h4>
    
                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                               data-fgColor="#31cb72" value="80" data-skin="tron" data-angleOffset="180"
                                               data-readOnly=true data-thickness=".1"/>
    
                                        <div class="clearfix"></div>
                                        <a href="#" class="btn btn-sm btn-light mt-2">View All Data</a>
                                        <ul class="list-inline row mt-4 mb-0">
                                            <li class="col-6">
                                                <h5>7,541</h5>
                                                <p class="mb-0">Mobile Phones</p>
                                            </li>
                                            <li class="col-6">
                                                <h5>125</h5>
                                                <p class="mb-0">Desktops</p>
                                            </li>
                                        </ul>
    
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-3">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="card-title">Purchase Order</h4>
    
                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                               data-fgColor="#ff5b5b" value="68" data-skin="tron" data-angleOffset="180"
                                               data-readOnly=true data-thickness=".1"/>
    
                                        <div class="clearfix"></div>
                                        <a href="#" class="btn btn-sm btn-light mt-2">View All Data</a>
                                        <ul class="list-inline row mt-4 mb-0">
                                            <li class="col-6">
                                                <h5>2,541</h5>
                                                <p class="mb-0">Mobile Phones</p>
                                            </li>
                                            <li class="col-6">
                                                <h5>874</h5>
                                                <p class="mb-0">Desktops</p>
                                            </li>
                                        </ul>
    
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-3">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="card-title">Shipped Orders</h4>
    
                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                               data-fgColor="#f1c31c" value="39" data-skin="tron" data-angleOffset="180"
                                               data-readOnly=true data-thickness=".1"/>
    
                                        <div class="clearfix"></div>
                                        <a href="#" class="btn btn-sm btn-light mt-2">View All Data</a>
                                        <ul class="list-inline row mt-4 mb-0">
                                            <li class="col-6">
                                                <h5>1,154</h5>
                                                <p class="mb-0">Mobile Phones</p>
                                            </li>
                                            <li class="col-6">
                                                <h5>89</h5>
                                                <p class="mb-0">Desktops</p>
                                            </li>
                                        </ul>
    
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-3">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <h4 class="card-title">Cancelled Orders</h4>
    
                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="120" data-height="120" data-linecap=round
                                               data-fgColor="#19c0ea" value="95" data-skin="tron" data-angleOffset="180"
                                               data-readOnly=true data-thickness=".1"/>
    
                                        <div class="clearfix"></div>
                                        <a href="#" class="btn btn-sm btn-light mt-2">View All Data</a>
                                        <ul class="list-inline row mt-4 mb-0">
                                            <li class="col-6">
                                                <h5>95</h5>
                                                <p class="mb-0">Mobile Phones</p>
                                            </li>
                                            <li class="col-6">
                                                <h5>25</h5>
                                                <p class="mb-0">Desktops</p>
                                            </li>
                                        </ul>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- end row -->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


@endsection

