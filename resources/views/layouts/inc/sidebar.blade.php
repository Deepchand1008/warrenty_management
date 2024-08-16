<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  
  <div class="logo"><a href="{{ url('/home')}}" class="simple-text logo-normal">
     Service Support
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{ Request::is('dashboard')? 'active':'';}}  ">
        <a class="nav-link" href="{{ url('/dashboard')}}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('upload_products')? 'active':'';}} ">
        <a class="nav-link" href="{{ url('upload_products')}}">
          <i class="material-icons">shop</i>
          <p>Product Upload Request </p>
        </a>
      </li>
      <li class="nav-item {{ Request::is('add-product')? 'active':'';}}  ">
        <a class="nav-link" href="{{ url('add-product')}}">
          <i class="material-icons">add to cart</i>
          <p>Add Products</p> 
        </a>
      <li class="nav-item {{ Request::is('register_Product')? 'active':'';}} ">
        <a class="nav-link" href="{{ url('register_Product')}}">
          <i class="material-icons">add to cart</i>
          <p>Register Products</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('/')}}">
          <i class="material-icons">man</i>
          <p>My Tickets</p>
        </a>
      </li>
    </ul>
  </div>
</div>