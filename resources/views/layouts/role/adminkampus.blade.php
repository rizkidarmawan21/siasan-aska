@if(auth()->user()->role == 'Admin Kampus')


<!-- _______________________________________________________________________________ -->

<li class="nav-item" class="{{ request()->is('/home') ? 'active' : ''}}">
  <a href="{{url('/home')}}" class="nav-link">
    <i class="far fa-circle nav-icon"></i>
    <p>Dashboard</p>
  </a>
</li>

<!-- _______________________________________________________________________________ -->

<li class="nav-item" class="{{ request()->is('/siswa') ? 'active' : ''}}">
  <a href="{{url('/siswa')}}" class="nav-link">
   <i class="far fa-circle nav-icon"></i>
   <p>Data Semua Santri </p>
 </a>
</li>

<!-- ______________________________________________________________________________ -->

<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Data Gedung
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Kampus 1
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      @include('layouts.gedung.kampussatu')
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Kampus 2
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      @include('layouts.gedung.kampusdua')
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Kampus 3
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      @include('layouts.gedung.kampustiga')
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Kampus 4
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      @include('layouts.gedung.kampusempat')
    </li>
  </ul>
</li>

<!-- __________________________________________________________________________________________ -->

<li class="nav-item" >
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Data Kelas
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          SMP 1
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          SMP 2
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          MTs
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          SMK
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" >
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          MA
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
    </li>
  </ul>
</li>

<!-- _______________________________________________________________________________ -->

<li class="nav-item" >
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Aktivitas
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/rankingprestasi') ? 'active' : ''}}">
      <a href="{{url('/rankingprestasi')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Data Prestasi
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/rankingpelanggaran') ? 'active' : ''}}">
      <a href="{{url('/rankingpelanggaran')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Data Pelanggaran
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/perizinan') ? 'active' : ''}}">
      <a href="{{url('/perizinan')}}" target="blank" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Data Perizinan
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/titip') ? 'active' : ''}}">
      <a href="{{url('/titip')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Data Penitipan Uang
        </p>
      </a>
    </li>
  </ul>
</li>

<!-- _______________________________________________________________________________ -->

<li class="nav-item" >
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Pindah Data
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/pindahkelas') ? 'active' : ''}}">
      <a href="{{url('/pindahkelas')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Pindah Kelas
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/pindahkamar') ? 'active' : ''}}">
      <a href="{{url('/pindahkamar')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Pindah Kamar
        </p>
      </a>
    </li>
  </ul>
</li>

<!-- _______________________________________________________________________________ -->

<li class="nav-item" >
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Master
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/jenjang') ? 'active' : ''}}">
      <a href="{{url('/jenjang')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Jenjang
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/kelas') ? 'active' : ''}}">
      <a href="{{url('/kelas')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Kelas
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/ruang') ? 'active' : ''}}">
      <a href="{{url('/ruang')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Ruang
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/kampus') ? 'active' : ''}}">
      <a href="{{url('/kampus')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Kampus
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/gedung') ? 'active' : ''}}">
      <a href="{{url('/gedung')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Gedung
        </p>
      </a>
    </li>
  </ul>
  <ul class="nav nav-treeview">
    <li class="nav-item" class="{{ request()->is('/kamar') ? 'active' : ''}}">
      <a href="{{url('/kamar')}}" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Kamar
        </p>
      </a>
    </li>
  </ul>
</li>



@endif