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

                                    <table id="key-datatable" class="table dt-responsive" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Type Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($medicinetypes as  $medicinetype)
                                            <tr>
                                                <td>{{$medicinetype->id}}</td>
                                                <td>{{$medicinetype->type_name}}</td>
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

@section('script')
    <script>
        var b  = $("#key-datatable").DataTable({
            keys: !0,
            scrollX: true,
            buttons: ["copy", "print", "pdf"],

            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>"
                }
            },

            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            }
        });
         b.buttons().container().appendTo("#key-datatable_wrapper .col-md-6:eq(0)");
    </script>
@endsection
