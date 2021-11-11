<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}} :: {{ now()->year }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/main.css')}}">

</head>
<body>
    <div class="container">
        <form action="{{ route('search')}}" method="POST">
            @csrf
        <div class="row height d-flex justify-content-center align-items-center">

            <div class="col-md-8">
                <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" name="search" placeholder="Search with Roll Number..."> <button type="submit" class="btn btn-primary">Search</button> </div>

                @if (!empty($student))
                 @if (count($student) ==1)

                 @foreach($student as $students)

                 <h5 style="margin-top: 5px; color:white;"> Hi {{$students->name}} <a style="color: white;" href="{{route('download',$students->id)}}">Download your Certificate</a> </h5>

   @endforeach
           @else

           <h5 style="margin-top: 5px; color:white;">Sorry No Record Found...</h5>

                 @endif
  @endif

            </div>



            {{-- @if (count($students) == 1)
            @foreach ($students as $student)

            <h1> {{ $student->name }}</h1>

            @endforeach
            @endif --}}


        </div>
    </form>


    </div>
</body>
</html>
