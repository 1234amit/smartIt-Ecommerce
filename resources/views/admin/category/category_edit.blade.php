<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Category Edit</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
             @include('admin.body.sidebar')
            </div>
            <div class="col-md-8">
               <div class="card">
                 <div class="card-header">
                    <h4>Category Edit
                        <a href="{{ route('admin.cateogory.list') }}" class="btn btn-info" style="float: right;">Category List</a>
                    </h4>
                 </div>
                 <form action="{{ route('admin.category.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id"  value="{{ $category->id }}">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Category Name<span class="text-danger">*</span></label>
                      <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}">
                      @error('category_name')
                       <span class="text-danger">{{ $message }}</span>

                      @enderror
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
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
