<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('CSS/custom.css')}}" />
    <title>Laravel</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 student">
                <div>
                    @if(Session::has('message'))
                        <p>{{Session::get('message')}}</p>
                    @endif
                </div>
                <h1>Student Registration</h1>
                <form method="post" action="{{route('student.save')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="studentName" name="studentName"
                            placeholder="Student Name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                            placeholder="nam@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Student DOB</label>
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="date of birth">
                    </div>

                    <input type="submit" class="btn btn-success" value="add Student" />
                </form>


            </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>