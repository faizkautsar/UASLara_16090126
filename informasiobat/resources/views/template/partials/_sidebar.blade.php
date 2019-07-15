<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <p class="centered"><a href="profile.html"><img src="{{asset('assets/img/profile_obat.jpg')}}" class="img-circle" width="80"></a></p>
      <h5 class="centered"></h5>
      <li class="mt">
        <a href="">
          <i class="fa fa-dashboard"></i>
          <span>HOME</span>
          </a>

      <li class="sub-menu">
                 <a href="javascript:;">
                   <i class="fa fa-th"></i>
                   <span>Obat</span>
                   </a>
                 <ul class="sub">
                   <li><a href="{{route('obat')}}">Obat </a></li>
                   <li><a href="{{route('kategori')}}">Kategori </a></li>

                 </ul>

               </li>
          <li class="sub-menu dcjq-parent-li">
            <a href="javascript:;" class="dcjq-parent active">
              <i class="fa fa-tasks"></i>
              <span>Tambah</span>
              <span class="dcjq-icon"></span></a>
            <ul class="sub" style="display: block;">
              <li>
                <li><a href="{{route('obat.tambah')}}">Tambah Obat</a></li>
              </li>
              <li>
                  <li><a href="{{route('kategori.tambah')}}">Tambah Kategori</a></li>
              </li>

            </ul>
          </li>




    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>
