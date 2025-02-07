@extends("layouts.admin")
@section("main-content")

<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data Desa</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Desa</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data Desa</h5> 
        </div>
        @if ($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive mt-3">
        @if (Auth::user()->type == 1)
            <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("desaa.create") }}"><ion-icon name="add"></ion-icon> Import</a>
            @endif
            <table id="myTable" class="table table-bordered">  
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>DESA ID</th>
                        <th>KECAMATAN ID</th>
                        <th>NAMA DESA</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($desaa as $desaa)
                    <tr>
                        <td>{{ $desaa->id }}</td>
                        <td>{{ $desaa->desas_id }}</td>
                        <td>{{ $desaa->kecamatans_id }}</td>
                        <td>{{ $desaa->nama_desa }}</td>
                        <td>
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('desaa.edit',$desaa->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('desaa.show',$desaa->id) }}">
                                <ion-icon name="trash-outline"></ion-icon> Delete</a>
                        @endif
                        </td>
                    </tr>
                    @endforeach

            <!-- Import Excel -->
            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form method="post" action="/pekerjaan/import_excel" enctype="multipart/form-data">
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
            <div class="btn-group" style="margin-top:10px; float:right">
                @php
                    for($i=1;$i<=$totalpages;$i++){
                        echo("<a href='/desaa?page=$i' class='btn btn-sm btn-outline-primary'>$i</a>");
                    }   
                @endphp
            </div>
        </div>
    </div>
</div>
@endsection