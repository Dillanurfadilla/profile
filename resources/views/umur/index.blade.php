@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data umur</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data umur</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data umur</h5> 
        </div>
        @if ($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive mt-3">
        @if (Auth::user()->type == 1) 
        <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("agama.create") }}"><ion-icon name="add"></ion-icon> Input</a>
        
            <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("umur.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif

        <a href="{{ route('export.umur') }}" class="btn btn-sm btn-success px-2" style="margin-bottom:10px">
        <ion-icon name="download"></ion-icon> Export ke Excel</a>
       
            <table id="myTable" class="table table-bordered">
            <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th>0 TAHUN (LK)</th>
                        <th>0 TAHUN (PR)</th>
                        <th class="hidden-column">1 TAHUN (LK)</th>
                        <th class="hidden-column">1 TAHUN (PR)</th>
                        <th class="hidden-column">2 TAHUN (LK)</th>
                        <th class="hidden-column">2 TAHUN (PR)</th>
                        <th class="hidden-column">3 TAHUN (LK)</th>
                        <th class="hidden-column">3 TAHUN (PR)</th>
                        <th class="hidden-column">4 TAHUN (LK)</th>
                        <th class="hidden-column">4 TAHUN (PR)</th>
                        <th class="hidden-column">5 TAHUN (LK)</th>
                        <th class="hidden-column">5 TAHUN (PR)</th>
                        <th class="hidden-column">6 TAHUN (LK)</th>
                        <th class="hidden-column">6 TAHUN (PR)</th>
                        <th class="hidden-column">7 TAHUN (LK)</th>
                        <th class="hidden-column">7 TAHUN (PR)</th>
                        <th class="hidden-column">8 TAHUN (LK)</th>
                        <th class="hidden-column">8 TAHUN (PR)</th>
                        <th class="hidden-column">9 TAHUN (LK)</th>
                        <th class="hidden-column">9 TAHUN (PR)</th>
                        <th class="hidden-column">10 TAHUN (LK)</th>
                        <th class="hidden-column">10 TAHUN (PR)</th>
                        <th class="hidden-column">11 TAHUN (LK)</th>
                        <th class="hidden-column">11 TAHUN (PR)</th>
                        <th class="hidden-column">12 TAHUN (LK)</th>
                        <th class="hidden-column">12 TAHUN (PR)</th>
                        <th class="hidden-column">13 TAHUN (LK)</th>
                        <th class="hidden-column">13 TAHUN (PR)</th>
                        <th class="hidden-column">14 TAHUN (LK)</th>
                        <th class="hidden-column">14 TAHUN (PR)</th>
                        <th class="hidden-column">15 TAHUN (LK)</th>
                        <th class="hidden-column">15 TAHUN (PR)</th>
                        <th class="hidden-column">16 TAHUN (LK)</th>
                        <th class="hidden-column">16 TAHUN (PR)</th>
                        <th class="hidden-column">17 TAHUN (LK)</th>
                        <th class="hidden-column">17 TAHUN (PR)</th>
                        <th class="hidden-column">18 TAHUN (LK)</th>
                        <th class="hidden-column">18 TAHUN (PR)</th>
                        <th class="hidden-column">19 TAHUN (LK)</th>
                        <th class="hidden-column">19 TAHUN (PR)</th>
                        <th class="hidden-column">20 TAHUN (LK)</th>
                        <th class="hidden-column">20 TAHUN (PR)</th>
                        <th class="hidden-column">21 TAHUN (LK)</th>
                        <th class="hidden-column">21 TAHUN (PR)</th>
                        <th class="hidden-column">22 TAHUN (LK)</th>
                        <th class="hidden-column">22 TAHUN (PR)</th>
                        <th class="hidden-column">23 TAHUN (LK)</th>
                        <th class="hidden-column">23 TAHUN (PR)</th>
                        <th class="hidden-column">24 TAHUN (LK)</th>
                        <th class="hidden-column">24 TAHUN (PR)</th>
                        <th class="hidden-column">25 TAHUN (LK)</th>
                        <th class="hidden-column">25 TAHUN (PR)</th>
                        <th class="hidden-column">26 TAHUN (LK)</th>
                        <th class="hidden-column">26 TAHUN (PR)</th>
                        <th class="hidden-column">27 TAHUN (LK)</th>
                        <th class="hidden-column">27 TAHUN (PR)</th>
                        <th class="hidden-column">28 TAHUN (LK)</th>
                        <th class="hidden-column">28 TAHUN (PR)</th>
                        <th class="hidden-column">29 TAHUN (LK)</th>
                        <th class="hidden-column">29 TAHUN (PR)</th>
                        <th class="hidden-column">30 TAHUN (LK)</th>
                        <th class="hidden-column">30 TAHUN (PR)</th>
                        <th class="hidden-column">31 TAHUN (LK)</th>
                        <th class="hidden-column">31 TAHUN (PR)</th>
                        <th class="hidden-column">32 TAHUN (LK)</th>
                        <th class="hidden-column">32 TAHUN (PR)</th>
                        <th class="hidden-column">33 TAHUN (LK)</th>
                        <th class="hidden-column">33 TAHUN (PR)</th>
                        <th class="hidden-column">34 TAHUN (LK)</th>
                        <th class="hidden-column">34 TAHUN (PR)</th>
                        <th class="hidden-column">35 TAHUN (LK)</th>
                        <th class="hidden-column">35 TAHUN (PR)</th>
                        <th class="hidden-column">36 TAHUN (LK)</th>
                        <th class="hidden-column">36 TAHUN (PR)</th>
                        <th class="hidden-column">37 TAHUN (LK)</th>
                        <th class="hidden-column">37 TAHUN (PR)</th>
                        <th class="hidden-column">38 TAHUN (LK)</th>
                        <th class="hidden-column">38 TAHUN (PR)</th>
                        <th class="hidden-column">39 TAHUN (LK)</th>
                        <th class="hidden-column">39 TAHUN (PR)</th>
                        <th class="hidden-column">40 TAHUN (LK)</th>
                        <th class="hidden-column">40 TAHUN (PR)</th>
                        <th class="hidden-column">41 TAHUN (LK)</th>
                        <th class="hidden-column">41 TAHUN (PR)</th>
                        <th class="hidden-column">42 TAHUN (LK)</th>
                        <th class="hidden-column">42 TAHUN (PR)</th>
                        <th class="hidden-column">43 TAHUN (LK)</th>
                        <th class="hidden-column">43 TAHUN (PR)</th>
                        <th class="hidden-column">44 TAHUN (LK)</th>
                        <th class="hidden-column">44 TAHUN (PR)</th>
                        <th class="hidden-column">45 TAHUN (LK)</th>
                        <th class="hidden-column">45 TAHUN (PR)</th>
                        <th class="hidden-column">46 TAHUN (LK)</th>
                        <th class="hidden-column">46 TAHUN (PR)</th>
                        <th class="hidden-column">47 TAHUN (LK)</th>
                        <th class="hidden-column">47 TAHUN (PR)</th>
                        <th class="hidden-column">48 TAHUN (LK)</th>
                        <th class="hidden-column">48 TAHUN (PR)</th>
                        <th class="hidden-column">49 TAHUN (LK)</th>
                        <th class="hidden-column">49 TAHUN (PR)</th>
                        <th class="hidden-column">50 TAHUN (LK)</th>
                        <th class="hidden-column">50 TAHUN (PR)</th>
                        <th class="hidden-column">51 TAHUN (LK)</th>
                        <th class="hidden-column">51 TAHUN (PR)</th>
                        <th class="hidden-column">52 TAHUN (LK)</th>
                        <th class="hidden-column">52 TAHUN (PR)</th>
                        <th class="hidden-column">53 TAHUN (LK)</th>
                        <th class="hidden-column">53 TAHUN (PR)</th>
                        <th class="hidden-column">54 TAHUN (LK)</th>
                        <th class="hidden-column">54 TAHUN (PR)</th>
                        <th class="hidden-column">55 TAHUN (LK)</th>
                        <th class="hidden-column">55 TAHUN (PR)</th>
                        <th class="hidden-column">56 TAHUN (LK)</th>
                        <th class="hidden-column">56 TAHUN (PR)</th>
                        <th class="hidden-column">57 TAHUN (LK)</th>
                        <th class="hidden-column">57 TAHUN (PR)</th>
                        <th class="hidden-column">58 TAHUN (LK)</th>
                        <th class="hidden-column">58 TAHUN (PR)</th>
                        <th class="hidden-column">59 TAHUN (LK)</th>
                        <th class="hidden-column">59 TAHUN (PR)</th>
                        <th class="hidden-column">60 TAHUN (LK)</th>
                        <th class="hidden-column">60 TAHUN (PR)</th>
                        <th class="hidden-column">61 TAHUN (LK)</th>
                        <th class="hidden-column">61 TAHUN (PR)</th>
                        <th class="hidden-column">62 TAHUN (LK)</th>
                        <th class="hidden-column">62 TAHUN (PR)</th>
                        <th class="hidden-column">63 TAHUN (LK)</th>
                        <th class="hidden-column">63 TAHUN (PR)</th>
                        <th class="hidden-column">64 TAHUN (LK)</th>
                        <th class="hidden-column">64 TAHUN (PR)</th>
                        <th class="hidden-column">65 TAHUN (LK)</th>
                        <th class="hidden-column">65 TAHUN (PR)</th>
                        <th class="hidden-column">66 TAHUN (LK)</th>
                        <th class="hidden-column">66 TAHUN (PR)</th>
                        <th class="hidden-column">67 TAHUN (LK)</th>
                        <th class="hidden-column">67 TAHUN (PR)</th>
                        <th class="hidden-column">68 TAHUN (LK)</th>
                        <th class="hidden-column">68 TAHUN (PR)</th>
                        <th class="hidden-column">69 TAHUN (LK)</th>
                        <th class="hidden-column">69 TAHUN (PR)</th>
                        <th class="hidden-column">70 TAHUN (LK)</th>
                        <th class="hidden-column">70 TAHUN (PR)</th>
                        <th class="hidden-column">71 TAHUN (LK)</th>
                        <th class="hidden-column">71 TAHUN (PR)</th>
                        <th class="hidden-column">72 TAHUN (LK)</th>
                        <th class="hidden-column">72 TAHUN (PR)</th>
                        <th class="hidden-column">73 TAHUN (LK)</th>
                        <th class="hidden-column">73 TAHUN (PR)</th>
                        <th class="hidden-column">74 TAHUN (LK)</th>
                        <th class="hidden-column">74 TAHUN (PR)</th>
                        <th class="hidden-column">75 TAHUN (LK)</th>
                        <th class="hidden-column">75 TAHUN (PR)</th>
                        <th class="hidden-column">76 TAHUN (LK)</th>
                        <th class="hidden-column">76 TAHUN (PR)</th>
                        <th class="hidden-column">77 TAHUN (LK)</th>
                        <th class="hidden-column">77 TAHUN (PR)</th>
                        <th class="hidden-column">78 TAHUN (LK)</th>
                        <th class="hidden-column">78 TAHUN (PR)</th>
                        <th class="hidden-column">79 TAHUN (LK)</th>
                        <th class="hidden-column">79 TAHUN (PR)</th>
                        <th class="hidden-column">80 TAHUN (LK)</th>
                        <th class="hidden-column">80 TAHUN (PR)</th>
                        <th class="hidden-column">81 TAHUN (LK)</th>
                        <th class="hidden-column">81 TAHUN (PR)</th>
                        <th class="hidden-column">82 TAHUN (LK)</th>
                        <th class="hidden-column">82 TAHUN (PR)</th>
                        <th class="hidden-column">83 TAHUN (LK)</th>
                        <th class="hidden-column">83 TAHUN (PR)</th>
                        <th class="hidden-column">84 TAHUN (LK)</th>
                        <th class="hidden-column">84 TAHUN (PR)</th>
                        <th class="hidden-column">85 TAHUN (LK)</th>
                        <th class="hidden-column">85 TAHUN (PR)</th>
                        <th class="hidden-column">86 TAHUN (LK)</th>
                        <th class="hidden-column">86 TAHUN (PR)</th>
                        <th class="hidden-column">87 TAHUN (LK)</th>
                        <th class="hidden-column">87 TAHUN (PR)</th>
                        <th class="hidden-column">88 TAHUN (LK)</th>
                        <th class="hidden-column">88 TAHUN (PR)</th>
                        <th class="hidden-column">89 TAHUN (LK)</th>
                        <th class="hidden-column">89 TAHUN (PR)</th>
                        <th class="hidden-column">90 TAHUN (LK)</th>
                        <th class="hidden-column">90 TAHUN (PR)</th>
                        <th class="hidden-column">91 TAHUN (LK)</TH>
                        <th class="hidden-column">91 TAHUN (PR)</TH>
                        <th class="hidden-column">92 TAHUN (LK)</th>
                        <th class="hidden-column">92 TAHUN (PR)</th>
                        <th class="hidden-column">93 TAHUN (LK)</th>
                        <th class="hidden-column">93 TAHUN (PR)</th>
                        <th class="hidden-column">94 TAHUN (LK)</th>
                        <th class="hidden-column">94 TAHUN (PR)</th>
                        <th class="hidden-column">95 TAHUN (LK)</th>
                        <th class="hidden-column">95 TAHUN (PR)</th>
                        <th class="hidden-column">96 TAHUN (LK)</th>
                        <th class="hidden-column">96 TAHUN (PR)</th>
                        <th class="hidden-column">97 TAHUN (LK)</th>
                        <th class="hidden-column">97 TAHUN (PR)</th>
                        <th class="hidden-column">98 TAHUN (LK)</th>
                        <th class="hidden-column">98 TAHUN (PR)</th>
                        <th class="hidden-column">99 TAHUN (LK)</th>
                        <th class="hidden-column">99 TAHUN (PR)</th>
                        <th class="hidden-column">100 TAHUN (LK)</TH>
                        <th class="hidden-column">100 TAHUN (PR)</TH>
                        <th class="hidden-column">101 TAHUN (LK)</th>
                        <th class="hidden-column">101 TAHUN (PR)</th>
                        <th class="hidden-column">102 TAHUN (LK)</th>
                        <th class="hidden-column">102 TAHUN (PR)</th>
                        <th class="hidden-column">103 TAHUN (LK)</th>
                        <th class="hidden-column">103 TAHUN (PR)</th>
                        <th class="hidden-column">104 TAHUN (LK)</th>
                        <th class="hidden-column">104 TAHUN (PR)</th>
                        <th class="hidden-column">105 TAHUN (LK)</th>
                        <th class="hidden-column">105 TAHUN (PR)</th>
                        <th class="hidden-column">106 TAHUN (LK)</th>
                        <th class="hidden-column">106 TAHUN (PR)</th>
                        <th class="hidden-column">107 TAHUN (LK)</th>
                        <th class="hidden-column">107 TAHUN (PR)</th>
                        <th class="hidden-column">108 TAHUN (LK)</th>
                        <th class="hidden-column">108 TAHUN (PR)</th>
                        <th class="hidden-column">109 TAHUN (LK)</th>
                        <th class="hidden-column">109 TAHUN (PR)</th>
                        <th class="hidden-column">110 TAHUN (LK)</th>
                        <th class="hidden-column">110 TAHUN (PR)</th>
                        <th class="hidden-column">111 TAHUN (LK)</th>
                        <th class="hidden-column">111 TAHUN (PR)</th>
                        <th class="hidden-column">112 TAHUN (LK)</th>
                        <th class="hidden-column">112 TAHUN (PR)</th>
                        <th class="hidden-column">113 TAHUN (LK)</th>
                        <th class="hidden-column">113 TAHUN (PR)</th>
                        <th class="hidden-column">114 TAHUN (LK)</th>
                        <th class="hidden-column">114 TAHUN (PR)</th>
                        <th class="hidden-column">115 TAHUN (LK)</th>
                        <th class="hidden-column">115 TAHUN (PR)</th>
                        <th class="hidden-column">116 TAHUN (LK)</th>
                        <th class="hidden-column">116 TAHUN (PR)</th>
                        <th class="hidden-column">117 TAHUN (LK)</th>
                        <th class="hidden-column">117 TAHUN (PR)</th>
                        <th class="hidden-column">118 TAHUN (LK)</th>
                        <th class="hidden-column">118 TAHUN (PR)</th>
                        <th class="hidden-column">119 TAHUN (LK)</th>
                        <th class="hidden-column">119 TAHUN (PR)</th>
                        <th class="hidden-column">120 TAHUN (LK)</th>
                        <th class="hidden-column">120 TAHUN (PR)</th>
                        <th>121 TAHUN (LK)</th>
                        <th>121 TAHUN (PR)</th>
                        <th width="350px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($umur as $umur)
                <tr id="row-{{ $umur->id }}">
                        <td>{{ $umur->id }}</td>
                        <td>{{ $umur->kode }}</td>
                        <td>{{ $umur->wilayah }}</td>
                        <td>{{ $umur->nol_tahun_lk }}</td>
                        <td>{{ $umur->nol_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sepuluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sepuluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sebelas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sebelas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->dua_puluh_sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tiga_puluh_sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->empat_puluh_sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->lima_puluh_sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->enam_puluh_sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->tujuh_puluh_sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->delapan_puluh_sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->sembilan_puluh_sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_satu_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_satu_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_dua_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_dua_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tiga_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tiga_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_empat_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_empat_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_lima_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_lima_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_enam_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_enam_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tujuh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tujuh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_delapan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_delapan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_sembilan_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_sembilan_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_sepuluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_sepuluh_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_sebelas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_sebelas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_dua_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_dua_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tiga_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tiga_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_empat_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_empat_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_lima_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_lima_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_enam_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_enam_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tujuh_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_tujuh_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_delapan_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_delapan_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_sembilan_belas_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_sembilan_belas_tahun_pr }}</td>
                        <td class="hidden-column">{{ $umur->seratus_dua_puluh_tahun_lk }}</td>
                        <td class="hidden-column">{{ $umur->seratus_dua_puluh_tahun_pr }}</td>
                        <td>{{ $umur->seratus_dua_puluh_satu_tahun_lk }}</td>
                        <td>{{ $umur->seratus_dua_puluh_satu_tahun_pr }}</td>
                        <td>                    
                        <button class="btn btn-success btn-sm toggle-details" data-id="{{ $umur->id }}">
                            Show all
                        </button>                 
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('umur.edit',$umur->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('umur.show',$umur->id) }}">
                                <ion-icon name="trash-outline"></ion-icon> Delete</a>
                        @endif
                    </td>
                </tr>
                    @endforeach

                    <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <!-- Import Excel -->
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form method="post" action="/statuskawin/import_excel" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{ csrf_field() }}
                                            <label>Pilih file excel</label>
                                            <div class="form-group">
                                                <input type="file" name="file" required="required">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Import</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </thead>
                </table>
            </tbody>   






                </tbody>
            </table>
           
        </div>
    </div>
</div>
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src= "/css/tbl.css"></script>
<!-- Pastikan file JavaScript TIDAK di-cache -->
<script src="/js/tabel.js"></script>
