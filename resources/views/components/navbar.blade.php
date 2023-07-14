<nav class="navbar navbar-expand-lg bg-light" >
  <div class="container-fluid">
     <button class='btn' onclick="toggleSidebar()">
        <i class="fa-solid fa-bars fs-3"></i>
     </button>
     <form action='/' class="d-flex m-auto" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name='search'>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

      <ul class='profile d-flex flex-row p-2 my-2 justify-content-end gap-4'>
        @auth
       <li>
        <div class="dropdown">
           <a href="#" class="btn py-0" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="fa-solid fa-person fs-4"></i>
           </a>
            <ul class="dropdown-menu">
               <li><a class='dropdown-item' href="#">Settings</a></li>
               <li><a class='dropdown-item' href="#">Edit Profile</a></li>
                <li><hr class="dropdown-divider"></li>
               <li>
                 <form action="/sign-out" method='post'>
                    @csrf
                    <button type='submit' class='dropdown-item text-danger'>Sign Out</button>
                 </form>
               </li>
            </ul>
        </div>
       </li>
       <li>{{ auth()->user()->name }}</li>
       @endauth
      </ul>
  </div>
</nav>
