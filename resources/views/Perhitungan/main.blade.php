@extends('Layouts/Admin')

@section('title', 'Perhitungan')

@section('sidebar')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>Moora</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components</h6>
                <a class="collapse-item" href="/alternatif">Alternatif</a>
                <a class="collapse-item" href="/kriteria">Kriteria</a>
                <a class="collapse-item" href="/subkriteria">Sub Kriteria</a>
                <a class="collapse-item" href="/penilaian">Penilaian</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/perhitungan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Perhitungan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
@endsection

@section('topbar')
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <form class="form-inline">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </form>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                <img class="img-profile rounded-circle" src="{{ asset('style/img/undraw_profile.svg')}}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
@endsection

@section('page_heading')
<h1 class="h3 mb-2 text-gray-800">Data Perhitungan</h1>
@endsection

@section('header')
<h6 class="m-0 font-weight-bold text-primary">Dashboard Data Perhitungan</h6>
@endsection

@section('body')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Master</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th rowspan="2">NO</th>
                        <th rowspan="2">ALTERNATIF</th>
                        <th colspan="5">KRITERIA</th>
                    </tr>
                    <tr>
                        @foreach ($kriteria as $kr)
                        <th>C{{$loop->iteration}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="2">Jenis & Bobot</th>
                        @foreach ($kriteria as $kr)
                        <th>{{ $kr->jenis_kriteria }} ({{ $kr->bobot }}%)</th>
                        @endforeach
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($penilaian as $pen)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pen->alternatif->nama_alternatif}}</td>
                        <td>{{$pen->sub_kriteria1->nilai}}</td>
                        <td>{{$pen->sub_kriteria2->nilai}}</td>
                        <td>{{$pen->sub_kriteria3->nilai}}</td>
                        <td>{{$pen->sub_kriteria4->nilai}}</td>
                        <td>{{$pen->sub_kriteria5->nilai}}</td>
                        <td>{{$pen->sub_kriteria6->nilai}}</td>
                        <td>{{$pen->sub_kriteria7->nilai}}</td>
                        <td>{{$pen->sub_kriteria8->nilai}}</td>
                        <td>{{$pen->sub_kriteria9->nilai}}</td>
                        <td>{{$pen->sub_kriteria10->nilai}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Normalisasi --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Normalisasi Matriks</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th rowspan="2">NO</th>
                        <th rowspan="2">ALTERNATIF</th>
                        <th colspan="10">KRITERIA</th>
                    </tr>
                    <tr>
                        @foreach ($kriteria as $kr)
                        <th>C{{$loop->iteration}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th colspan="2">Jenis & Bobot</th>
                        @foreach ($kriteria as $kr)
                        <th>{{ $kr->jenis_kriteria }} ({{ $kr->bobot }}%)</th>
                        @endforeach
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($penilaian as $pen)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$pen->alternatif->nama_alternatif}}</td>
                        <td>{{round($pen->sub_kriteria1->nilai/$normalisasi[0],4)}}</td>
                        <td>{{round($pen->sub_kriteria2->nilai/$normalisasi[1],4)}}</td>
                        <td>{{round($pen->sub_kriteria3->nilai/$normalisasi[2],4)}}</td>
                        <td>{{round($pen->sub_kriteria4->nilai/$normalisasi[3],4)}}</td>
                        <td>{{round($pen->sub_kriteria5->nilai/$normalisasi[4],4)}}</td>
                        <td>{{round($pen->sub_kriteria6->nilai/$normalisasi[5],4)}}</td>
                        <td>{{round($pen->sub_kriteria7->nilai/$normalisasi[6],4)}}</td>
                        <td>{{round($pen->sub_kriteria8->nilai/$normalisasi[7],4)}}</td>
                        <td>{{round($pen->sub_kriteria9->nilai/$normalisasi[8],4)}}</td>
                        <td>{{round($pen->sub_kriteria10->nilai/$normalisasi[9],4)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Penentuan Skor Kinerja --}}
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nilai Optimasi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        @foreach ($kriteria as $kri)
                        <th>{{$kri->jenis_kriteria}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penilaian as $pen)
                    <tr>
                        <th>{{$pen->alternatif->nama_alternatif}}</th>
                        <td>{{round($pen->sub_kriteria1->nilai/$normalisasi[0] * ($pen->sub_kriteria1->kriteria->bobot/42), 4)}}</td>
                        <td>{{round($pen->sub_kriteria2->nilai/$normalisasi[1] * ($pen->sub_kriteria2->kriteria->bobot/42), 4)}}</td>
                        <td>{{round($pen->sub_kriteria3->nilai/$normalisasi[2] * ($pen->sub_kriteria3->kriteria->bobot/42), 4)}}</td>
                        <td>{{round($pen->sub_kriteria4->nilai/$normalisasi[3] * ($pen->sub_kriteria4->kriteria->bobot/42), 4)}}</td>
                        <td>{{round($pen->sub_kriteria5->nilai/$normalisasi[4] * ($pen->sub_kriteria5->kriteria->bobot/42), 4)}}</td>
                        <td>{{round($pen->sub_kriteria6->nilai/$normalisasi[5] * ($pen->sub_kriteria6->kriteria->bobot/42), 4)}}</td>
                        <td>{{round($pen->sub_kriteria7->nilai/$normalisasi[6] * ($pen->sub_kriteria7->kriteria->bobot/42), 4)}}</td>
                        <td>{{round($pen->sub_kriteria8->nilai/$normalisasi[7] * ($pen->sub_kriteria8->kriteria->bobot/42), 4)}}</td>
                        <td>{{round($pen->sub_kriteria9->nilai/$normalisasi[8] * ($pen->sub_kriteria9->kriteria->bobot/42), 4)}}</td>
                        <td>{{round($pen->sub_kriteria10->nilai/$normalisasi[9] * ($pen->sub_kriteria10->kriteria->bobot/42), 4)}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Rangking -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nilai Rangking</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Alternatif</th>
                        <th>Nama Mahasiswa</th>
                        <th>Benefit</th>
                        <th>Cost</th>
                        <th>Skor Peringkat</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Alternatif</th>
                        <th>Nama Mahasiswa</th>
                        <th>Benefit</th>
                        <th>Cost</th>
                        <th>Skor Peringkat</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($penilaian as $pen)
                    <tr>
                        <td>{{$pen->alternatif->kode}}</td>
                        <td>{{$pen->alternatif->nama_alternatif}}</td>
                        <td>
                            @php
                            $ben = 0;
                            if ($pen->sub_kriteria1->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria1->nilai/$normalisasi[0]) * ($pen->sub_kriteria1->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria2->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria2->nilai/$normalisasi[1]) * ($pen->sub_kriteria2->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria3->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria3->nilai/$normalisasi[2]) * ($pen->sub_kriteria3->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria4->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria4->nilai/$normalisasi[3]) * ($pen->sub_kriteria4->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria5->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria5->nilai/$normalisasi[4]) * ($pen->sub_kriteria5->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria6->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria6->nilai/$normalisasi[5]) * ($pen->sub_kriteria6->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria7->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria7->nilai/$normalisasi[6]) * ($pen->sub_kriteria7->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria8->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria8->nilai/$normalisasi[7]) * ($pen->sub_kriteria8->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria9->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria9->nilai/$normalisasi[8]) * ($pen->sub_kriteria9->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria10->kriteria->jenis_kriteria == 'Benefit') {
                            $ben += (($pen->sub_kriteria10->nilai/$normalisasi[9]) * ($pen->sub_kriteria10->kriteria->bobot/100));
                            }

                            echo round($ben, 4);
                            @endphp
                        </td>
                        <td>
                            @php
                            $cos = 0;
                            if ($pen->sub_kriteria1->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria1->nilai/$normalisasi[0]) * ($pen->sub_kriteria1->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria2->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria2->nilai/$normalisasi[1]) * ($pen->sub_kriteria2->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria3->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria3->nilai/$normalisasi[2]) * ($pen->sub_kriteria3->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria4->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria4->nilai/$normalisasi[3]) * ($pen->sub_kriteria4->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria5->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria5->nilai/$normalisasi[4]) * ($pen->sub_kriteria5->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria6->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria6->nilai/$normalisasi[5]) * ($pen->sub_kriteria6->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria7->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria7->nilai/$normalisasi[6]) * ($pen->sub_kriteria7->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria8->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria8->nilai/$normalisasi[7]) * ($pen->sub_kriteria8->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria9->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria9->nilai/$normalisasi[8]) * ($pen->sub_kriteria9->kriteria->bobot/100));
                            }
                            if ($pen->sub_kriteria10->kriteria->jenis_kriteria == 'Cost') {
                            $cos += (($pen->sub_kriteria10->nilai/$normalisasi[9]) * ($pen->sub_kriteria10->kriteria->bobot/100));
                            }

                            echo round($cos, 4);
                            @endphp
                        </td>
                        <td>
                            @php
                            $tot = 0;
                            if ($cos == 0) {
                            echo round($ben, 4);
                            } elseif ($ben == 0) {
                            echo round($cos, 4);
                            } else {
                            $tot = $ben-$cos;
                            echo round($tot, 4);
                            }
                            @endphp
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="container my-auto">
    <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2023</span>
    </div>
</div>
@endsection