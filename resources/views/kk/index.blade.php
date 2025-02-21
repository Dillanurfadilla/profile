@extends("layouts.admin")
@section("main-content")


<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data kk</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data kk</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data kk</h5> 
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
            href="{{ route("kk.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif

             <!-- Import Excel -->
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="post" action="/kk/import_excel" enctype="multipart/form-data">
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
            
        <a href="{{ route('export.kk') }}" class="btn btn-sm btn-success px-2" style="margin-bottom:10px">
        <ion-icon name="download"></ion-icon> Export ke Excel</a>
       
            <table id="myTable" class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>KODE</th>
            <th>WILAYAH</th>
            <th>KK_LK</th>
            <th>KK_PR</th>
            <th>KK_JML</th>
            <th class="hidden-column">KEPEMILIKAN_LK</th>
            <th class="hidden-column">KEPEMILIKAN_PR</th>
            <th class="hidden-column">KEPEMILIKAN_JML</th>
            <th class="hidden-column">BELUM_MEMILIKI_LK</th>
            <th class="hidden-column">BELUM_MEMILIKI_PR</th>
            <th class="hidden-column">BELUM_MEMILIKI_JML</th>
            <th width="250px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kk as $data)
            <tr id="row-{{ $data->id }}" class="data-row">
                <td>{{ $data->id }}</td>
                <td>{{ $data->kode }}</td>
                <td>{{ $data->wilayah }}</td>
                <td>{{ $data->kk_lk }}</td>
                <td>{{ $data->kk_pr }}</td>
                <td>{{ $data->kk_jml }}</td>
                <td class="hidden-column">{{ $data->kepemilikan_lk }}</td>
                <td class="hidden-column">{{ $data->kepemilikan_pr }}</td>
                <td class="hidden-column">{{ $data->kepemilikan_jml }}</td>
                <td class="hidden-column">{{ $data->belum_memiliki_lk }}</td>
                <td class="hidden-column">{{ $data->belum_memiliki_pr }}</td>
                <td class="hidden-column">{{ $data->belum_memiliki_jml }}</td>
                <td>
                    <button class="btn btn-success btn-sm toggle-details" data-id="{{ $data->id }}">
                        Show all
                    </button>
                @if (Auth::user()->type == 1) 
                    <a class="btn btn-primary btn-sm" href="{{ route('kk.edit', $data->id) }}">
                    <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                         
                    </a>
                    <button class="btn btn-danger btn-sm delete-data" data-id="{{ $data->id }}">
                    <ion-icon name="trash-outline"></ion-icon> Delete</a>
                         
                    </button>
                @endif
                </td>
            </tr>
        @endforeach
    </tbody>
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