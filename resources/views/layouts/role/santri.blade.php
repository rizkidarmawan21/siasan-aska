@if(auth()->user()->role == 'siswa')

<!-- _______________________________________________________________________________ -->

<li class="nav-item">
  <a href="{{url('/home')}}" class="nav-link">
    <i class="nav-icon fas fa-home"></i>
    <p>
      Dashboard
    </p>
  </a>
</li>

<li class="nav-item">
  <a href="{{url('/profil_pendaftaran_online')}}" class="nav-link">
    <i class="nav-icon fas fa-user-tie"></i>
    <p>
      Profile
    </p>
  </a>
</li>

<!-- _______________________________________________________________________________ -->

@endif