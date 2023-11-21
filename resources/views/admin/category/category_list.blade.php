<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Category List</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
               @include('admin.body.sidebar')
            </div>
            <div class="col-md-8">
                @if (Session('message'))
                    <div class="alert alert-success">
                    <h4 class="text-center">{{ Session::get('message') }}</h4>
                    </div>
                @endif
               <div class="card">
                 <div class="card-header">
                    <h4>Category List
                        <a href="{{ route('admin.cateogory.create') }}" class="btn btn-info" style="float: right;">Add New</a>
                    </h4>
                 </div>

                 <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sl.</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                           @foreach ($categories as $key => $category)
                               <tr>
                                 <td>{{ $key+1 }}</td>
                                 <td>{{ $category->category_name }}</td>
                                 <td>
                                    <a href="{{ route('admin.category.edit',$category->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ route('admin.category.delete',$category->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure to delete this item permanently???');">Delete</a>
                                 </td>
                               </tr>
                           @endforeach
                        </tbody>
                    </table>
                 </div>
               </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
