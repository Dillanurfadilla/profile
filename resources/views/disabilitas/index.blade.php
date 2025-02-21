@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data disabilitas</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data disabilitas</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data disabilitas</h5> 
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
            href="{{ route("disabilitas.create") }}">
            <ion-icon name="add"></ion-icon> Import</a>
        @endif

        <a href="{{ route('export.disabilitas') }}" class="btn btn-sm btn-success px-2" style="margin-bottom:10px">
        <ion-icon name="download"></ion-icon> Export ke Excel</a>
       
            <table id="myTable" class="table table-sm table-bordered">  
             <thead class="table-light">
                    <tr>
                        <th>id</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th class="hidden-column">DISABILITAS FISIK (LK)</th>
                        <th class="hidden-column">DISABILITAS FISIK (PR)</th>
                        <th>DISABILITAS FISIK (JML)</th>
                        <th class="hidden-column">DISABILITAS FISIK DAN MENTAL (LK)</th>
                        <th class="hidden-column">DISABILITAS FISIK DAN MENTAL (PR)</th>
                        <th class="hidden-column">DISABILITAS FISIK DAN MENTAL (JML)</th>
                        <th class="hidden-column">DISABILITAS NETRA BUKA (LK)</th>
                        <th class="hidden-column">DISABILITAS NETRA BUKA (PR)</th>
                        <th class="hidden-column">DISABILITAS NETRA BUKA (JML)</th>
                        <th class="hidden-column">DISABILITAS MENTAL JIWA (LK)</th>
                        <th class="hidden-column">DISABILITAS MENTAL JIWA (PR)</th>
                        <th>DISABILITAS MENTAL JIWA (JML)</th>
                        <th class="hidden-column">DISABILITAS RUNGU WICARA (LK)</th>
                        <th class="hidden-column">DISABILITAS RUNGU WICARA (PR)</th>
                        <th class="hidden-column">DISABILITAS RUNGU WICARA (JML)</th>
                        <th class="hidden-column">DISABILITAS LAINNYA (LK)</th>
                        <th class="hidden-column">DISABILITAS LAINNYA (PR)</th>
                        <th>LAINNYA (JML)</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($disabilitas as $disabilitas)
                <tr id="row-{{ $disabilitas->id }}">
                        <td>{{ $disabilitas->id }}</td>
                        <td>{{ $disabilitas->kode }}</td>
                        <td>{{ $disabilitas->wilayah }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_fisik_lk }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_fisik_pr }}</td>
                        <td>{{ $disabilitas->disabilitas_fisik_jml }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_fisik_dan_mental_lk }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_fisik_dan_mental_pr }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_fisik_dan_mental_jml }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_netra_buta_lk }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_netra_buta_pr }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_netra_buta_jml }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_mental_jiwa_lk }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_mental_jiwa_pr }}</td>
                        <td>{{ $disabilitas->disabilitas_mental_jiwa_jml }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_rungu_wicara_lk }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_rungu_wicara_pr }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_rungu_wicara_jml }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_lainnya_lk }}</td>
                        <td class="hidden-column">{{ $disabilitas->disabilitas_lainnya_pr }}</td>
                        <td>{{ $disabilitas->disabilitas_lainnya_jml }}</td>
                        <td>
                        <button class="btn btn-success btn-sm toggle-details" data-id="{{ $disabilitas->id }}">
                        Show all
                    </button>
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('disabilitas.edit',$disabilitas->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('disabilitas.show',$disabilitas->id) }}">
                                <ion-icon name="trash-outline"></ion-icon> Delete</a>
                        @endif
                        </td>
                    </tr>
                    @endforeach

                     <!-- Import Excel -->
            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="post" action="/disabilitas/import_excel" enctype="multipart/form-data">
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
