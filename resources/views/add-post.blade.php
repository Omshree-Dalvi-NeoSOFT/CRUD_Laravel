<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-dark p-4">
        <div class="row bg-light p-4">
            <div class="col-md-4">
                <!-- success Msg -->
                @if (Session::has('success'))
                    <span class="alert alert-success mb-3">{{ Session::get('success') }}</span>
                @endif
                <!-- Error Msg -->
                @if (Session::has('error'))
                    <span class="alert alert-danger mb-3">{{ Session::get('error') }}</span>
                @endif
                <form method="post" action="{{route('save.post')}}" class="mt-4">
                @csrf
                <div class="form-group">
                    <label for="title">Title : </label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="desc">Description : </label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-success" value="Add Post">
                <a href="{{route('post.list')}}" class="btn btn-warning" role="button">View List</a>
                </form>
            </div>
            <div class="col-md-8">
                @yield('table')
            </div>
        </div>
    </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>