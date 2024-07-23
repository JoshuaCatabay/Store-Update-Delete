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
    <div class="container my-5">
        <div>
            <a href="{{ url ('studnet')}}" class="btn tbn-primary">Student List</a>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto d-grid gap-2">
            <form action="{{ url('Student', $student->id) }}" mathod=POST>
            @csrf
            @method('PUT')
            <div><label for="">Fname</label>
            <input type="text" name="fname" class="form-control">
            </div>

            <div><label for="">Lname</label>
            <input type="text" name="lname" class="form-control">
            </div>

            <div><label for="">email</label>
            <input type="email" name="email" class="form-control">
            </div>

            <div><label for="">Phone</label>
            <input type="text" name="phone" class="form-control">   
            </div>

            <div><label for="">Address</label>
            <input type="text" name="address" class="form-control">
            </div>

            <div><label for="">City</label>
            <input type="text" name="city" class="form-control">
            </div>

            <div><label for="">Zip Code</label>
            <input type="text" name="zip" class="form-control">
            </div>

            <div><label for="">Birthday</label>
            <input type="date" name="birthday" class="form-control">
            </div>
            <div class="form-group mb-3">
            <button class="btn btn-primary">Save Changes</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>
</div>  
</body>
</html>
