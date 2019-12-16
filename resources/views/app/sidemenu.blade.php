<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="/" class="waves-effect"><i class="feather-airplay"></i>
                        {{--<span class="badge badge-pill badge-info float-right">3</span>--}}
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="feather-list">
                        </i><span>Manufracturers</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('manufacturer/create')}}">Add Manufacturer</a></li>
                        <li><a href="{{url('manufacturer')}}">Show Manufacturers</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="feather-bar-chart-2"></i>
                        <span>Medicine Type</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('medicine_type/create')}}">Add Medicine Type</a></li>
                        <li><a href="{{url('medicine_type')}}">Show Medicine Types</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="feather-book"></i>
                        <span>Medicine</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('medicine/create')}}">Add Medicine </a></li>
                        <li><a href="{{url('medicine')}}">Show Medicines </a></li>

                    </ul>
                </li>



                <li class="menu-title">More</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect"><i class="feather-copy"></i><span>Pages</span></a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="pages-invoice.html">Invoice</a>
                        </li>
                    </ul>
                </li>


            </ul>
            </li>

            </ul>

            <div class="help-box">
                <h5 class="text-muted font-size-15 mb-3">For Help & Support</h5>
                <p class="font-size-13"><span class="font-weight-bold">Email:</span> <br> info@medlab.com</p>
                <p class="mb-0 font-size-13"><span class="font-weight-bold">Call:</span> <br> (+123) 123 456 789</p>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
