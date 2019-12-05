@extends('app.table-layout')


@section('content')
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18"> </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Medicines</h4>
                                    <p class="card-subtitle mb-4">
                                        Manage your medicine
                                    </p>

                                    <table id="key-datatable" class="table display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Medicine Name</th>
                                                <th>Medicine Type</th>
                                                <th>Generic Name</th>
                                                <th>Pharmaceutical</th>

                                                <th>Strength</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($medicines as $key => $medicine)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$medicine->medicine_name}}</td>
                                                <td>{{$medicine->medicinetype->type_name}}</td>
                                                <td>{{$medicine->generic_name}}</td>
                                                <td>{{$medicine->manufacturer->manufacturer_name}}</td>
                                                <td>{{$medicine->strength}}</td>
                                                <td>{{$medicine->price}}</td>
                                                <td> .</td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection
