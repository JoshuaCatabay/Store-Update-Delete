<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-utilities.rtl.min.css">
</head>
<body>
    <div>
        <div clas="container" >
            <div class="row">  
                <div class="col-12">
                    <table class="table table-hover table-stripped">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Province</th>
                                <th>Zip</th>
                                <th>Birthdate</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $Student)
                            <tr>
                                <td>{{ $students->Fullname }}</td>
                                <td>{{ $students->Email }}</td>
                                <td>{{ $students->Phone }}</td>
                                <td>{{ $students->Address }}</td>
                                <td>{{ $students->City }}</td>
                                <td>{{ $students->Province }}</td>
                                <td>{{ $students->zip }}</td>
                                <td>{{ $students->Birthday }}</td>
                                <td>
                                <a href="{{ url('student', $student->id)}}/edit" class="btn btn-outline-seccess btn-sm">Edit</a>
                                <form action="{{ url('student', $student->id)}" method="post">
                                     @method('delete')
                                     @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm" onlick="return confirm('Are you sure, U want to Delete?? ')">Delete</button>
                                </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>