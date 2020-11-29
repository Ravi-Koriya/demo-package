<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Register Form</h2>
        @if (session('success'))
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            </div>
        @endif
        <div class="row">
        <form action="{{route('demo')}}" method="post">
            @csrf
            <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            <label for="">Message</label>
                <textarea rows="4" cols="50" name="message" placeholder="Message:-" class="form-control"></textarea>
                <input type="submit" class="btn btn-success mt-2" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>