@extends("layouts.app")
@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Students</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"> Add</li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Settings</button>
                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                            <a class="dropdown-item" href="javascript:;">Another action</a>
                            <a class="dropdown-item" href="javascript:;">Something else here</a>
                            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-10 mx-auto">
                    {{-- <h6 class="mb-0 text-uppercase">Drivers Details</h6> --}}
                    <hr/>
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div>
                                    @if (Session::has('success'))

                                    <div class="alert alert-success" role="alert">
                                      {{ Session::get('success') }}
                                    </div>
                                    @endif
                                    @if (Session::has('failure'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ Session::get('failure') }}
                                    </div>
                                 @endif
                                </div>
                             </div>
                            <hr>
                            {{-- action="{{route('students.update',$driver->driver_id)}}" --}}
                            <form class="row g-3" method="POST"
                            action="{{ route('students.store')}}"
                            >

                            @csrf

                            <div class="col-md-6">
                                <label for="roleNumber" class="form-label">Role Number</label>
                                <input type="text" class="form-control" id="roleNumber" name="role_number" required>
                            </div>

                            <div class="col-md-6">
                                <label for="studentName" class="form-label">Student Name</label>
                                <input type="text" class="form-control" id="studentName" name="studentName" required>
                            </div>

                            <div class="col-md-6">
                                <label for="class" class="form-label">Class</label>
                                <input type="text" class="form-control" id="class" name="class" required>
                            </div>
                            <div class="col-md-6">
                                <label for="school" class="form-label">School</label>
                                <textarea class="form-control" id="school" name="school" placeholder="School..." rows="3" required></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="class" class="form-label">District</label>
                                <input type="text" class="form-control" id="district" name="class" required>
                            </div>
































                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <!--end row-->

            <!--end row-->
        </div>
    </div>
@endsection



