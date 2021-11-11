@extends("layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

    @section("wrapper")
    <!--start page wrapper -->
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
                            <li class="breadcrumb-item active" aria-current="page">List</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">


                    <a href="{{ route('students.create')}}" class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded">
                        <div class="font-22 text-primary">	<i class="lni lni-circle-plus"></i>
                        </div>
                        <div class="ms-2">	<span>Add New</span>
                        </div>
                    </div>
                </a>
            </div>
            <!--end breadcrumb-->

            <form method="POST" enctype="multipart/form-data" action="{{route('import')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                         <input class="form-control form-control-lg" id="formFileLg" name="select_file" type="file">
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                </div>




            </form>

            <h6 class="mb-0 text-uppercase">DataTable Import</h6>

            <hr/>
            <div class="card">
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Role Number</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>School</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->role_id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->school }}</td>
                                     {{-- <td> <a href="{{ url('ride-details/'.$driver->driver_id) }}"> Ride Details </a></td>

                                    <td> <a href="{{route('drivers.edit', $driver->driver_id)}}">View </a></td> --}}


                                    <td>   <a href="{{ route('students.edit',$student->id)}}" class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded btn">
                                        <div class="font-22 text-primary">	<i class="lni lni-pencil-alt"></i>
                                        </div>
                                        <div class="ms-2">	<span>Edit</span>
                                        </div>
                                    </div>
                                </a></td>
                                    <td>


                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="d-flex align-items-center theme-icons shadow-sm p-2 cursor-pointer rounded btn  ">
                                                <div class="font-22 text-danger">
                                                        <i class="lni lni-trash"></i>
                                                </div>
                                                <div class="ms-2">	<span>Delete  </span>
                                                </div>
                                                </button>
                                        </form>




                                </td>
                                </tr>
                                @endforeach





                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Role Number</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>School</th>

                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper -->
    @endsection

@section("script")
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>
@endsection
