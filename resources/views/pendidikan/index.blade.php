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
            href="{{ route("agama.create") }}"><ion-icon name="add"></ion-icon> Input</a>
          
             <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
             href="{{ route("pendidikan.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif  
        
        <a href="{{ route('export.pendidikan') }}" class="btn btn-sm btn-success px-2" style="margin-bottom:10px">
        <ion-icon name="download"></ion-icon> Export ke Excel</a>
       
             <table id="myTable" class="table table-bordered">
             <thead class="table-light">
                    <tr>
                        <th>id</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th class="hidden-column">BELUM SEKOLAH (LK)</th>
                        <th class="hidden-column">BELUM SEKOLAH (PR)</th>
                        <th>BELUM SEKOLAH (JML)</th>
                        <th class="hidden-column">BELUM TAMAT SD SEDERAJAT (LK)</th>
                        <th class="hidden-column">BELUM TAMAT SD SEDERAJAT (PR)</th>
                        <th class="hidden-column">BELUM TAMAT SD SEDERAJAT (JML)</th>
                        <th class="hidden-column">TAMAT SD SEDERAJAT (LK)</th>
                        <th class="hidden-column">TAMAT SD SEDERAJAT (PR)</th>
                        <th>TAMAT SD SEDERAJAT (JML)</th>
                        <th class="hidden-column">SLTP SEDERAJAT (LK)</th>
                        <th class="hidden-column">SLTP SEDERAJAT (PR)</th>
                        <th class="hidden-column">SLTP SEDERAJAT (JML)</th>
                        <th class="hidden-column">SLTA SEDERAJAT (LK)</th>
                        <th class="hidden-column">SLTA SEDERAJAT (PR)</th>
                        <th class="hidden-column">SLTA SEDERAJAT (JML)</th>
                        <th class="hidden-column">DIPLOMA I II (LK)</th>
                        <th class="hidden-column">DIPLOMA I II (PR)</th>
                        <th class="hidden-column">DIPLOMA I II (JML)</th>
                        <th class="hidden-column">AKADEMI DIPLOMA III SMUDA (LK)</th>
                        <th class="hidden-column">AKADEMI DIPLOMA III SMUDA (PR)</th>
                        <th class="hidden-column">AKADEMI DIPLOMA III SMUDA (JML)</th>
                        <th class="hidden-column">DIPLOMA IV STRATA I (LK)</th>
                        <th class="hidden-column">DIPLOMA IV STRATA I (PR)</th>
                        <th class="hidden-column">DIPLOMA IV STRATA I (JML)</th>
                        <th class="hidden-column">STRATA II (LK)</th>
                        <th class="hidden-column">STRATA II (PR)</th>
                        <th class="hidden-column">STRATA II (JML)</th>
                        <th class="hidden-column">STRATA III (LK)</th>
                        <th class="hidden-column">STRATA III (PR)</th>
                        <th>STRATA III (JML)</th>
                        <th width="250px" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($pendidikan as $pendidikan)
                <tr id="row-{{ $pendidikan->id }}">
                        <td>{{ $pendidikan->id }}</td>
                        <td>{{ $pendidikan->kode }}</td>
                        <td>{{ $pendidikan->wilayah }}</td>
                        <td class="hidden-column">{{ $pendidikan->tidak_belum_sekolah_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->tidak_belum_sekolah_pr }}</td>
                        <td>{{ $pendidikan->tidak_belum_sekolah_jml }}</td>
                        <td class="hidden-column">{{ $pendidikan->belum_tamat_sd_sederajat_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->belum_tamat_sd_sederajat_pr }}</td>
                        <td class="hidden-column">{{ $pendidikan->belum_tamat_sd_sederajat_jml }}</td>
                        <td class="hidden-column">{{ $pendidikan->tamat_sd_sederajat_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->tamat_sd_sederajat_pr }}</td>
                        <td>{{ $pendidikan->tamat_sd_sederajat_jml }}</td>
                        <td class="hidden-column">{{ $pendidikan->sltp_sederajat_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->sltp_sederajat_pr }}</td>
                        <td class="hidden-column">{{ $pendidikan->sltp_sederajat_jml }}</td>
                        <td class="hidden-column">{{ $pendidikan->slta_sederajat_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->slta_sederajat_pr }}</td>
                        <td class="hidden-column">{{ $pendidikan->slta_sederajat_jml }}</td>
                        <td class="hidden-column">{{ $pendidikan->diploma_i_ii_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->diploma_i_ii_pr }}</td>
                        <td class="hidden-column">{{ $pendidikan->diploma_i_ii_jml }}</td>
                        <td class="hidden-column">{{ $pendidikan->akademi_diploma_iii_smuda_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->akademi_diploma_iii_smuda_pr }}</td>
                        <td class="hidden-column">{{ $pendidikan->akademi_diploma_iii_smuda_jml }}</td>
                        <td class="hidden-column">{{ $pendidikan->diploma_iv_strata_i_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->diploma_iv_strata_i_pr }}</td>
                        <td class="hidden-column">{{ $pendidikan->diploma_iv_strata_i_jml }}</td>
                        <td class="hidden-column">{{ $pendidikan->strata_ii_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->strata_ii_pr }}</td>
                        <td class="hidden-column">{{ $pendidikan->strata_ii_jml }}</td>
                        <td class="hidden-column">{{ $pendidikan->strata_iii_lk }}</td>
                        <td class="hidden-column">{{ $pendidikan->strata_iii_pr }}</td>
                        <td>{{ $pendidikan->strata_iii_jml }}</td>
                        <td>
                        <button class="btn btn-success btn-sm toggle-details" data-id="{{ $pendidikan->id }}">
                        Show all
                        </button>
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
            
        </div>
    </div>
</div>
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src= "/css/tbl.css"></script>
<!-- Pastikan file JavaScript TIDAK di-cache -->
<script src="/js/tabel.js"></script>
