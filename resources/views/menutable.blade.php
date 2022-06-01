<ul class="nav">
    <li class="nav-item" >
      <a href="{{ url('dashboard')}}">
        <i class="nc-icon nc-bank"></i>
        <p onclick="active">Dashboard</p>
      </a>
    </li>
    <li class="nav-item" >
      <a class="nav-link" href="{{ url('notifications')}}">
        <i class="nc-icon nc-bell-55"></i>
        <p>Notifications</p>
      </a>
    </li>
    <li class="nav-item" >
      <a href="{{ url('user')}}">
        <i class="nc-icon nc-single-02"></i>
        <p>User Profile</p>
      </a>
    </li>
    <li class="active">
      <a href="{{ url('table')}}">
        <i class="nc-icon nc-tile-56"></i>
        <p>Table List</p>
      </a>
    </li>
</ul>