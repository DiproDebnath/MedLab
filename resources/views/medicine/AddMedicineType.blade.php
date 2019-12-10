@extends('app.layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="card-title">Add Medicine Type</h3>
                            <p class="card-subtitle mb-4">

                            </p>

                            <form class="needs-validation" >

                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="medicine_type" class="col-md-4 col-form-label">Medicine Type <i class="text-danger font-size-18">*</i> </label>
                                            <div class="col-md-8">
                                                <input name="type_name" id="medicine_type" class="form-control" placeholder="Medicine Type">
                                                <div class="invalid-feedback">

                                                </div>
                                                <!-- checkbox if Pharmaceutical is not in the list -->

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect waves-light" type="submit"> Save</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
