@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data statuskawin</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data statuskawin</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data statuskawin</h5> 
        </div>
        @if ($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive mt-3">
        @if (Auth::user()->type == 1)
            <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("statuskawin.create") }}"><ion-icon name="add"></ion-icon> Import</a>
         @endif
            <table id="myTable" class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>id</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th>BELUM KAWIN (LK)</th>
                        <th>BELUM KAWIN (PR)</th>
                        <th>BELUM KAWIN (JML)</th>
                        <th>KAWIN (LK)</th>
                        <th>KAWIN (PR)</th>
                        <th>KAWIN (JML)</th>
                        <th>CERAI HIDUP (LK)</th>
                        <th>CERAI HIDUP (PR)</th>
                        <th>CERAI HIDUP (JML)</th>
                        <th>CERAI MATI (LK)</th>
                        <th>CERAI MATI (PR)</th>
                        <th>CERAI MATI (JML)</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($statuskawin as $statuskawin)
                    <tr>
                        <td>{{ $statuskawin->id }}</td>
                        <td>{{ $statuskawin->kode }}</td>
                        <td>{{ $statuskawin->wilayah }}</td>
                        <td>{{ $statuskawin->belum_kawin_lk }}</td>
                        <td>{{ $statuskawin->belum_kawin_pr }}</td>
                        <td>{{ $statuskawin->belum_kawin_jml }}</td>
                        <td>{{ $statuskawin->kawin_lk }}</td>
                        <td>{{ $statuskawin->kawin_pr }}</td>
                        <td>{{ $statuskawin->kawin_jml }}</td>
                        <td>{{ $statuskawin->cerai_hidup_lk }}</td>
                        <td>{{ $statuskawin->cerai_hidup_pr }}</td>
                        <td>{{ $statuskawin->cerai_hidup_jml }}</td>
                        <td>{{ $statuskawin->cerai_mati_lk }}</td>
                        <td>{{ $statuskawin->cerai_mati_pr }}</td>
                        <td>{{ $statuskawin->cerai_mati_jml }}</td>
                        <td>
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('statuskawin.edit',$statuskawin->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('statuskawin.show',$statuskawin->id) }}">
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
            <div class="btn-group" style="margin-top:10px; float:right">
                @php
                    for($i=1;$i<=$totalpages;$i++){
                        echo("<a href='/statuskawin?page=$i' class='btn btn-sm btn-outline-primary'>$i</a>");
                    }   
                @endphp
            </div>
        </div>
    </div>
</div>
@endsection






