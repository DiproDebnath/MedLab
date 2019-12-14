@extends('app.form-layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="card-title">Add Medicine</h3>
                            <p class="card-subtitle mb-4">

                            </p>

                            <form class="needs-validation" >

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="pharmaceutical" class="col-md-3 col-form-label">Pharmaceutical :</label>
                                            <div class="col-md-8">
                                                <select name="manufacturer_id" id="pharmaceutical" class="form-control">
                                                    <option value="0">Pharmaceutical</option>
                                                </select>
                                                <div class="invalid-feedback">

                                                </div>
                                                <!-- checkbox if Pharmaceutical is not in the list -->
                                                <a href="#" class="form-link"><i class="mdi mdi-shield-plus-outline"></i> Add Pharmaceutical</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group row">
                                            <label for="medicine_type" class="col-md-3 col-form-label">Medicine Type :</label>
                                            <div class="col-md-8">
                                                <select name="medicine_type_id" id="medicine_type" class="form-control">
                                                    <option value="0">Medicine Type</option>
                                                </select>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="medicine_name" class="col-md-3 col-form-label">Medicine Name :</label>
                                            <div class="col-md-8">
                                                <input type="text" name="medicine_name" id="medicine_name" class="form-control"/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group row">
                                            <label for="generic_name" class="col-md-3 col-form-label">Generic Name :</label>
                                            <div class="col-md-8">
                                                <input type="text" name="unit" id="unit" class="form-control"/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="unit" class="col-md-3 col-form-label">Unit :</label>
                                            <div class="col-md-8">
                                                <input type="text" name="unit" id="unit" class="form-control"/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group row">
                                            <label for="strength" class="col-md-3 col-form-label">Strength :</label>
                                            <div class="col-md-8">
                                                <input type="text" name="strength" id="strength" class="form-control"/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="unit_price" class="col-md-3 col-form-label">Unit Price :</label>
                                            <div class="col-md-8">
                                                <input type="text" name="unit_price" id="unit_price" class="form-control"/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">

                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect waves-light" type="submit"> Add Medicine</button>
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
