@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data Kecamatan</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Kecamatan</li>
        </ol>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
        </div>
        @if ($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive mt-3">
            <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("kecamatan.create") }}"><ion-icon name="add"></ion-icon> Import Data</a>
              <!-- Import Excel -->
              <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="post" action="/kecamatan/import_excel" enctype="multipart/form-data">
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

            <table id="myTable" class="table table-bordered">  
                <thead class="table-light">
                    <tr>
                        <th>id</th>
                        <th>Nama Kecamatan</th>
                        <th width="160px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kecamatan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_kecamatan }}</td>
                        <td>
                        <a href="{{ url('kecamatan/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm" title="Edit">
                        <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                        </a>

                        <form action="{{ route('kecamatan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" style="display:inline;">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                         <ion-icon name="trash-outline"></ion-icon> Delete</a>
                        </button>
                        </form>
                          
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            </div>


            
        </div>
    </div>
</div>

@endsection