<aside class="sidebar">
  @if(Auth::check())
  <div class="scroll-wrapper scrollbar-inner" style="position: relative;">
    <div class="scrollbar-inner scroll-content" style="height: 566.5px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
      <div class="user">
        <div class="user__info" data-toggle="dropdown">
          <img class="user__img" src="{{asset('demo/img/profile-pics/4.jpg')}}" alt="">
          <div>
            <div class="user__name">{{Auth::user()->name}}</div>
            <div class="user__email" style="font-size:10px;">{{Auth::user()->email}}</div>
          </div>
        </div>
        <div class="dropdown-menu">
          {{-- <a class="dropdown-item" href="#">View Profile</a>
          <a class="dropdown-item" href="#">Settings</a> --}}
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();$('#logout-form').submit();">
          Keluar
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
      <ul class="navigation">
        <li class="{{ Request::is('home') ? 'navigation__active' : '' }}"><a href="{{url('home')}}"><i class="zmdi zmdi-home"></i> Beranda</a></li>
        <li class="{{ Request::is('anggota') ? 'navigation__active' : '' }}"><a href="{{url('admin/anggota')}}"><i class="zmdi zmdi-accounts"></i> Anggota</a></li>
        <li class="{{ Request::is('barang') ? 'navigation__active' : '' }}"><a href="{{url('admin/barang')}}"><i class="zmdi zmdi-wrench"></i> Barang</a></li>
        <li class="{{ Request::is('peminjaman') ? 'navigation__active' : '' }}"><a href="{{url('admin/peminjaman')}}"><i class="zmdi zmdi-assignment"></i> Peminjaman</a></li>
        <li class="{{ Request::is('pengembalian') ? 'navigation__active' : '' }}"><a href="{{url('admin/pengembalian')}}"><i class="zmdi zmdi-assignment-check"></i> Pengembalian</a></li>
        @php
        $active_parent_1 = Request::is('laporan/anggota') || 
        Request::is('laporan/barang') || 
        Request::is('laporan/peminjaman') || 
        Request::is('laporan/pengembalian') ? 'navigation__sub--active' : '';

        $active_parent_2 = Request::is('pengunjung/tentang_program') || 
        Request::is('pengunjung/testimoni') || 
        Request::is('pengunjung/kontak') || 
        Request::is('pengunjung/aturan') || 
        Request::is('pengunjung/industri') ? 'navigation__sub--active' : '';                   
        @endphp
        <li class="navigation__sub {{$active_parent_1}} navigation__sub--toggled">
          <a href="#"><i class="zmdi zmdi-assignment-o"></i> Laporan</a>
          <ul>
            <li class="{{ Request::is('laporan/anggota') ? 'navigation__active' : '' }}"><a href="{{url('admin/laporan/anggota')}}">Anggota</a></li>
            <li class="{{ Request::is('laporan/barang') ? 'navigation__active' : '' }}"><a href="{{url('admin/laporan/barang')}}">Barang</a></li>
            <li class="{{ Request::is('laporan/peminjaman') ? 'navigation__active' : '' }}"><a href="{{url('admin/laporan/peminjaman')}}">Peminjaman</a></li>
            <li class="{{ Request::is('laporan/pengembalian') ? 'navigation__active' : '' }}"><a href="{{url('admin/laporan/pengembalian')}}">Pengembalian</a></li>
          </ul>
        </li>
        <li class="navigation__sub {{$active_parent_2}} navigation__sub--toggled">
          <a href="#"><i class="zmdi zmdi-folder"></i> Pengunjung</a>
          <ul>
            <li class="{{ Request::is('pengunjung/tentang_program') ? 'navigation__active' : '' }}"><a href="{{url('admin/pengunjung/tentang_program')}}">Tentang Program</a></li>
            <li class="{{ Request::is('pengunjung/testimoni') ? 'navigation__active' : '' }}"><a href="{{url('admin/pengunjung/testimoni')}}">Testimoni</a></li>
            <li class="{{ Request::is('pengunjung/kontak') ? 'navigation__active' : '' }}"><a href="{{url('admin/pengunjung/kontak')}}">Kontak</a></li>
            <li class="{{ Request::is('pengunjung/aturan') ? 'navigation__active' : '' }}"><a href="{{url('admin/pengunjung/aturan')}}">Aturan</a></li>
            <li class="{{ Request::is('pengunjung/industri') ? 'navigation__active' : '' }}"><a href="{{url('admin/pengunjung/industri')}}">Industri</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="scroll-element scroll-x">
      <div class="scroll-element_outer">
        <div class="scroll-element_size"></div>
        <div class="scroll-element_track"></div>
        <div class="scroll-bar" style="width: 100px;"></div>
      </div>
    </div>
    <div class="scroll-element scroll-y">
      <div class="scroll-element_outer">
        <div class="scroll-element_size"></div>
        <div class="scroll-element_track"></div>
        <div class="scroll-bar" style="height: 99px; top: 0px;"></div>
      </div>
    </div>
  </div>
  @endif
</aside>