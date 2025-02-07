@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data penduduk</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data penduduk</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data penduduk</h5> 
        </div>
        @if ($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive mt-3">
        @if (Auth::user()->type == 1)
            <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("penduduk.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif
            <table id="myTable" class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>DKB</th>
                        <th>TAHUN</th>
                        <th>KECAMATANS_ID</th>
                        <th>KELUARGAS_ID</th>
                        <th>AGAMA</th>
                        <th>DISABILITAS</th>
                        <th>GOLONGAN_DARAH</th>
                        <th>KEPEMILIKAN_KK</th>
                        <th>PEKERJAAN</th>
                        <th>PENDIDIKAN</th>
                        <th>STATUS_KAWIN</th>
                        <th>UMUR_TUNGGAL</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($penduduk as $penduduk)
                    <tr>
                        <td>{{ $penduduk->id }}</td>
                        <td>{{ $penduduk->dkb }}</td>
                        <td>{{ $penduduk->tahun }}</td>
                        <td>{{ $penduduk->kecamatans_id }}</td>
                        <td>{{ $penduduk->desas_id }}</td>
                        <td>{{ $penduduk->agama }}</td>
                        <td>{{ $penduduk->disabilitas }}</td>
                        <td>{{ $penduduk->golongan_darah }}</td>
                        <td>{{ $penduduk->kepemilikan_kk }}</td>
                        <td>{{ $penduduk->pekerjaan }}</td>
                        <td>{{ $penduduk->pendidikan }}</td>
                        <td>{{ $penduduk->status_kawin }}</td>
                        <td>{{ $penduduk->umur_tunggal }}</td>
                        <td>
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('penduduk.edit',$penduduk->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('penduduk.show',$penduduk->id) }}">
                                <ion-icon name="trash-outline"></ion-icon> Delete</a>
                        @endif
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
            <div class="btn-group" style="margin-top:10px; float:right">
                @php
                    for($i=1;$i<=$totalpages;$i++){
                        echo("<a href='/penduduk?page=$i' class='btn btn-sm btn-outline-primary'>$i</a>");
                    }   
                @endphp
            </div>
        </div>
    </div>
</div>
@endsection