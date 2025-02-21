@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data agama</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data agama</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data agama</h5> 
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
            href="{{ route("agama.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif 
       
        <a href="{{ route('export.agama') }}" class="btn btn-sm btn-success px-2" style="margin-bottom:10px">
        <ion-icon name="download"></ion-icon> Export ke Excel</a>
        
        <table id="myTable" class="table table-bordered">
                <thead class="table-light">
                <tr>
                        <th>id</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th class="hidden-column">ISLAM (LK)</th>
                        <th class="hidden-column">ISLAM (PR)</th>
                        <th>ISLAM (JML)</th>
                        <th class="hidden-column">KRISTEN (LK)</th>
                        <th class="hidden-column">KRISTEN (PR)</th>
                        <th>KRISTEN (JML)</th>
                        <th class="hidden-column">KATHOLIK (LK)</th>
                        <th class="hidden-column">KATHOLIK (PR)</th>
                        <th class="hidden-column">KATHOLIK (JML)</th>
                        <th class="hidden-column">HINDU (LK)</th>
                        <th class="hidden-column">HINDU (PR)</th>
                        <th class="hidden-column">HINDU (JML)</th>
                        <th class="hidden-column">BUDHA (LK)</th>
                        <th class="hidden-column">BUDHA (PR)</th>
                        <th class="hidden-column">BUDHA (JML)</th>
                        <th class="hidden-column">KHONGHUCU (LK)</th>
                        <th class="hidden-column">KHONGHUCU (PR)</th>
                        <th class="hidden-column">KHONGHUCU (JML)</th>
                        <th class="hidden-column" >KEPERCAYAAN (LK)</th>
                        <th class="hidden-column">KEPERCAYAAN (PR)</th>
                        <th>KEPERCAYAAN (JML)</th>
                        <th width="250px" >Action</th> 
                    </tr>
                </thead>
                <tbody>
                @foreach ($agama as $agama)
                    <tr id="row-{{ $agama->id }}">
                        <td>{{ $agama->id }}</td>
                        <td>{{ $agama->kode }}</td>
                        <td>{{ $agama->wilayah }}</td>
                        <td class="hidden-column">{{ $agama->islam_lk }}</td>
                        <td class="hidden-column">{{ $agama->islam_pr }}</td>
                        <td>{{ $agama->islam_jml }}</td>
                        <td class="hidden-column">{{ $agama->kristen_lk }}</td>
                        <td class="hidden-column">{{ $agama->kristen_pr }}</td>
                        <td>{{ $agama->kristen_jml }}</td>
                        <td class="hidden-column">{{ $agama->katholik_lk }}</td>
                        <td class="hidden-column">{{ $agama->katholik_pr }}</td>
                        <td class="hidden-column">{{ $agama->katholik_jml }}</td>
                        <td class="hidden-column">{{ $agama->hindu_lk }}</td>
                        <td class="hidden-column">{{ $agama->hindu_pr }}</td>
                        <td class="hidden-column">{{ $agama->hindu_jml }}</td>
                        <td class="hidden-column">{{ $agama->budha_lk }}</td>
                        <td class="hidden-column">{{ $agama->budha_pr }}</td>
                        <td class="hidden-column">{{ $agama->budha_jml }}</td>
                        <td class="hidden-column">{{ $agama->khonghucu_lk }}</td>
                        <td class="hidden-column">{{ $agama->khonghucu_pr }}</td>
                        <td class="hidden-column">{{ $agama->khonghucu_jml }}</td>
                        <td class="hidden-column">{{ $agama->kepercayaan_lk }}</td>
                        <td class="hidden-column">{{ $agama->kepercayaan_pr }}</td>
                        <td>{{ $agama->kepercayaan_jml}}</td>
                        <td>
                        <button class="btn btn-success btn-sm toggle-details" data-id="{{ $agama->id }}">
                            Show all
                        </button>                 
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('agama.edit',$agama->id) }}">
                            <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('agama.show',$agama->id) }}">
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
                                <form method="post" action="/agama/import_excel" enctype="multipart/form-data">
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