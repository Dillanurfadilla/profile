@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data pendidikan</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data pendidikan</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data pendidikan</h5> 
        </div>
        @if ($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive mt-3">
        @if (Auth::user()->type == 1)   
             <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
             href="{{ route("pendidikan.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif   
             <table id="myTable" class="table table-bordered">
        <thead class="table-light">
                    <tr>
                        <th>id</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th>BELUM SEKOLAH (LK)</th>
                        <th>BELUM SEKOLAH (PR)</th>
                        <th>BELUM SEKOLAH (JML)</th>
                        <th>BELUM TAMAT SD SEDERAJAT (LK)</th>
                        <th>BELUM TAMAT SD SEDERAJAT (PR)</th>
                        <th>BELUM TAMAT SD SEDERAJAT (JML)</th>
                        <th>TAMAT SD SEDERAJAT (LK)</th>
                        <th>TAMAT SD SEDERAJAT (PR)</th>
                        <th>TAMAT SD SEDERAJAT (JML)</th>
                        <th>SLTP SEDERAJAT (LK)</th>
                        <th>SLTP SEDERAJAT (PR)</th>
                        <th>SLTP SEDERAJAT (JML)</th>
                        <th>SLTA SEDERAJAT (LK)</th>
                        <th>SLTA SEDERAJAT (PR)</th>
                        <th>SLTA SEDERAJAT (JML)</th>
                        <th>DIPLOMA I II (LK)</th>
                        <th>DIPLOMA I II (PR)</th>
                        <th>DIPLOMA I II (JML)</th>
                        <th>AKADEMI DIPLOMA III SMUDA (LK)</th>
                        <th>AKADEMI DIPLOMA III SMUDA (PR)</th>
                        <th>AKADEMI DIPLOMA III SMUDA (JML)</th>
                        <th>DIPLOMA IV STRATA I (LK)</th>
                        <th>DIPLOMA IV STRATA I (PR)</th>
                        <th>DIPLOMA IV STRATA I (JML)</th>
                        <th>STRATA II (LK)</th>
                        <th>STRATA II (PR)</th>
                        <th>STRATA II (JML)</th>
                        <th>STRATA III (LK)</th>
                        <th>STRATA III (PR)</th>
                        <th>STRATA III (JML)</th>

                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pendidikan as $pendidikan)
                    <tr>
                        <td>{{ $pendidikan->id }}</td>
                        <td>{{ $pendidikan->kode }}</td>
                        <td>{{ $pendidikan->wilayah }}</td>
                        <td>{{ $pendidikan->tidak_belum_sekolah_lk }}</td>
                        <td>{{ $pendidikan->tidak_belum_sekolah_pr }}</td>
                        <td>{{ $pendidikan->tidak_belum_sekolah_jml }}</td>
                        <td>{{ $pendidikan->belum_tamat_sd_sederajat_lk }}</td>
                        <td>{{ $pendidikan->belum_tamat_sd_sederajat_pr }}</td>
                        <td>{{ $pendidikan->belum_tamat_sd_sederajat_jml }}</td>
                        <td>{{ $pendidikan->tamat_sd_sederajat_lk }}</td>
                        <td>{{ $pendidikan->tamat_sd_sederajat_pr }}</td>
                        <td>{{ $pendidikan->tamat_sd_sederajat_jml }}</td>
                        <td>{{ $pendidikan->sltp_sederajat_lk }}</td>
                        <td>{{ $pendidikan->sltp_sederajat_pr }}</td>
                        <td>{{ $pendidikan->sltp_sederajat_jml }}</td>
                        <td>{{ $pendidikan->slta_sederajat_lk }}</td>
                        <td>{{ $pendidikan->slta_sederajat_pr }}</td>
                        <td>{{ $pendidikan->slta_sederajat_jml }}</td>
                        <td>{{ $pendidikan->diploma_i_ii_lk }}</td>
                        <td>{{ $pendidikan->diploma_i_ii_pr }}</td>
                        <td>{{ $pendidikan->diploma_i_ii_jml }}</td>
                        <td>{{ $pendidikan->akademi_diploma_iii_smuda_lk }}</td>
                        <td>{{ $pendidikan->akademi_diploma_iii_smuda_pr }}</td>
                        <td>{{ $pendidikan->akademi_diploma_iii_smuda_jml }}</td>
                        <td>{{ $pendidikan->diploma_iv_strata_i_lk }}</td>
                        <td>{{ $pendidikan->diploma_iv_strata_i_pr }}</td>
                        <td>{{ $pendidikan->diploma_iv_strata_i_jml }}</td>
                        <td>{{ $pendidikan->strata_ii_lk }}</td>
                        <td>{{ $pendidikan->strata_ii_pr }}</td>
                        <td>{{ $pendidikan->strata_ii_jml }}</td>
                        <td>{{ $pendidikan->strata_iii_lk }}</td>
                        <td>{{ $pendidikan->strata_iii_pr }}</td>
                        <td>{{ $pendidikan->strata_iii_jml }}</td>
                        <td>
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('pendidikan.edit',$pendidikan->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('pendidikan.show',$pendidikan->id) }}">
                                <ion-icon name="trash-outline"></ion-icon> Delete</a>
                        @endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>

             
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <!-- Import Excel -->
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form method="post" action="/pendidikan/import_excel" enctype="multipart/form-data">
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





            </table>
            <div class="btn-group" style="margin-top:10px; float:right">
                @php
                    for($i=1;$i<=$totalpages;$i++){
                        echo("<a href='/pendidikan?page=$i' class='btn btn-sm btn-outline-primary'>$i</a>");
                    }   
                @endphp
            </div>
        </div>
    </div>
</div>
@endsection