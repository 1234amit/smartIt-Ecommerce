<ul class="list-group">
    <li class="list-group-item"><a href="{{ url('admin/dashboard') }}" class="btn btn-success">Dashboard</a></li>
    <li class="list-group-item"><a href="{{ route('admin.cateogory.list') }}" class="btn btn-info">Category</a></li>
    <li class="list-group-item"><a href="{{ route('admin.brand.list') }}" class="btn btn-info">Brand</a></li>
    <li class="list-group-item"><a href="{{ route('logout') }}" class="btn btn-danger"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
        >Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
  </ul>
