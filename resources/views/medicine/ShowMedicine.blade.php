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
                                                <th>Medicine Name</th>
                                                <th>Pharmaceutical</th>
                                                <th>Medicine Type</th>
                                                <th>Generic Name</th>
                                                <th>Strength</th>
                                                <th>Unit</th>
                                                <th>Unit Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
        $("#key-datatable").DataTable({
            keys: !0,
            scrollX: true,
            // buttons: ["copy", "print", "pdf"],
            processing: true,
            serverSide: true,
            deferRender: true,
            ajax: window.location.href,
            columns: [
                { data: "id", name:'medicines.id', searchable: false },
                { data: "medicine_name", name: 'medicine_name' },
                { data: "manufacturer_name", name: 'manufacturers.manufacturer_name' },
                { data: "type_name", name: 'medicine_types.type_name' },
                { data: "generic_name" },
                { data: "strength" },
                { data: "unit" },
                { data: "unit_price" },
                { data: "action", name: 'action', orderable: false, searchable: false }
            ],


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
    </script>
@endsection
