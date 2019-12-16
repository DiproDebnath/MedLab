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

                            <h3 class="card-title">Make a Purchase</h3>
                            <p class="card-subtitle mb-4">

                            </p>

                            <form class="needs-validation" >
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="pharmaceutical" class="col-md-3 col-form-label">Pharmaceutical :</label>
                                            <div class="col-md-8">
                                                <select class="form-control" data-toggle="select2">
                                                    <option>Select</option>
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>

                                                <div class="invalid-feedback">
                                                </div>
                                                <!-- checkbox if Pharmaceutical is not in the list -->

                                            </div>
                                        </div>

                                            <div class="form-group row">
                                                <label for="medicine_name" class="col-md-3 col-form-label">Invoice ID :</label>
                                                <div class="col-md-8">
                                                    <input type="text" name="medicine_name" id="medicine_name" class="form-control"/>
                                                    <div class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label for="medicine_type" class="col-md-3 col-form-label">Medicine Type :</label>
                                            <div class="col-md-8">
                                                <select name="medicine_type_id" id="medicine_type" class="form-control" data-toggle="select2">
                                                    <option value="0">Medicine Type</option>
                                                </select>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="medicine_type" class="col-md-3 col-form-label">Date :</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy">

                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <table id="add-purchase" class="table display" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Medicine Name</th>
                                                <th>Batch Code</th>
                                                <th>Expire Date</th>
                                                <th>Quantity</th>
                                                <th>In Stock</th>
                                                <th>Sell Price PQty</th>
                                                <th>Total Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                               <tr>
                                                   <td>#</td>
                                                   <td>
                                                       <div style="min-width: 200px">
                                                           <select class="form-control"  data-toggle="select2">
                                                               <option>Select</option>
                                                               <optgroup label="Alaskan/Hawaiian Time Zone">
                                                                   <option value="AK">Alaska</option>
                                                                   <option value="HI">Hawaii</option>
                                                               </optgroup>
                                                               <optgroup label="Pacific Time Zone">
                                                                   <option value="CA">California</option>
                                                                   <option value="NV">Nevada</option>
                                                                   <option value="OR">Oregon</option>
                                                                   <option value="WA">Washington</option>
                                                               </optgroup>
                                                               <optgroup label="Mountain Time Zone">
                                                                   <option value="AZ">Arizona</option>
                                                                   <option value="CO">Colorado</option>
                                                                   <option value="ID">Idaho</option>
                                                                   <option value="MT">Montana</option>
                                                                   <option value="NE">Nebraska</option>
                                                                   <option value="NM">New Mexico</option>
                                                                   <option value="ND">North Dakota</option>
                                                                   <option value="UT">Utah</option>
                                                                   <option value="WY">Wyoming</option>
                                                               </optgroup>
                                                               <optgroup label="Central Time Zone">
                                                                   <option value="AL">Alabama</option>
                                                                   <option value="AR">Arkansas</option>
                                                                   <option value="IL">Illinois</option>
                                                                   <option value="IA">Iowa</option>
                                                                   <option value="KS">Kansas</option>
                                                                   <option value="KY">Kentucky</option>
                                                                   <option value="LA">Louisiana</option>
                                                                   <option value="MN">Minnesota</option>
                                                                   <option value="MS">Mississippi</option>
                                                                   <option value="MO">Missouri</option>
                                                                   <option value="OK">Oklahoma</option>
                                                                   <option value="SD">South Dakota</option>
                                                                   <option value="TX">Texas</option>
                                                                   <option value="TN">Tennessee</option>
                                                                   <option value="WI">Wisconsin</option>
                                                               </optgroup>
                                                               <optgroup label="Eastern Time Zone">
                                                                   <option value="CT">Connecticut</option>
                                                                   <option value="DE">Delaware</option>
                                                                   <option value="FL">Florida</option>
                                                                   <option value="GA">Georgia</option>
                                                                   <option value="IN">Indiana</option>
                                                                   <option value="ME">Maine</option>
                                                                   <option value="MD">Maryland</option>
                                                                   <option value="MA">Massachusetts</option>
                                                                   <option value="MI">Michigan</option>
                                                                   <option value="NH">New Hampshire</option>
                                                                   <option value="NJ">New Jersey</option>
                                                                   <option value="NY">New York</option>
                                                                   <option value="NC">North Carolina</option>
                                                                   <option value="OH">Ohio</option>
                                                                   <option value="PA">Pennsylvania</option>
                                                                   <option value="RI">Rhode Island</option>
                                                                   <option value="SC">South Carolina</option>
                                                                   <option value="VT">Vermont</option>
                                                                   <option value="VA">Virginia</option>
                                                                   <option value="WV">West Virginia</option>
                                                               </optgroup>
                                                           </select>
                                                       </div>

                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy">

                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control">
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" disabled>
                                                   </td>
                                                   <td style = 'display: flex; align-items: center;'>
                                                       <div style = "margin-right: 10px">
                                                           <input type="checkbox" data-toggle="switchery" data-color="#ff5b5b" data-size="small"/>
                                                       </div>
                                                       <input type="text" class="form-control" >
                                                   </td>
                                                   <td>
                                                       <input type="text" class="form-control" disabled>
                                                   </td>
                                               </tr>
                                            </tbody>
                                            <tfooter>
                                                <tr>
                                                    <th colspan="6">
                                                        <button type="button" class="btn btn-info waves-effect waves-light">Add New</button>
                                                    </th>
                                                    <th >
                                                        Grand Total
                                                    </th>
                                                    <th >
                                                        <input type="text" class="form-control" disabled>
                                                    </th>
                                                </tr>
                                            </tfooter>
                                        </table>

                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect waves-light d-block ml-auto" type="submit"> Submit</button>
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

