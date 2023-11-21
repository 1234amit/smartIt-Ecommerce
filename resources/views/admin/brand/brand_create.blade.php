<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Brand Create</title>
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
                    <h4>Brand Create
                        <a href="{{ route('admin.brand.list') }}" class="btn btn-info" style="float: right;">Brand List</a>
                    </h4>
                 </div>
                 <form action="{{ route('admin.brand.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label>Brand Name<span class="text-danger">*</span></label>
                      <input type="text" name="brand_name" class="form-control"  placeholder="Enter brand name">
                      @error('brand_name')
                       <span class="text-danger">{{ $message }}</span>

                      @enderror
                    </div>

                    <div class="form-group">
                        <label>Brand Logo<span class="text-danger">*</span></label>
                        <input type="file" name="brand_logo" class="form-control" onchange="logoImgUrl(this)">
                        @error('brand_logo')
                         <span class="text-danger">{{ $message }}</span>

                        @enderror
                        <br>
                        <img src="" id="logoImage" style="margin-top: 5px;">
                      </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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

    {{-- js for brand logo preview --}}
  <script type="text/javascript">
    function logoImgUrl(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
        $('#logoImage').attr('src',e.target.result).width(300).height(200);
        };
        reader.readAsDataURL(input.files[0]);
    }
    }
</script>
  {{-- js for brand logo preview end --}}
  </body>
</html>
