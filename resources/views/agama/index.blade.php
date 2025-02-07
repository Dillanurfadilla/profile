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
            href="{{ route("agama.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif
            <table id="myTable" class="table table-bordered">  
            <thead class="table-light">
                    <tr>
                        <th>id</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th>ISLAM (LK)</th>
                        <th>ISLAM (PR)</th>
                        <th>ISLAM (JML)</th>
                        <th>KRISTEN (LK)</th>
                        <th>KRISTEN (PR)</th>
                        <th>KRISTEN (JML)</th>
                        <th>KATHOLIK (LK)</th>
                        <th>KATHOLIK (PR)</th>
                        <th>KATHOLIK (JML)</th>
                        <th>HINDU (LK)</th>
                        <th>HINDU (PR)</th>
                        <th>HINDU (JML)</th>
                        <th>BUDHA (LK)</th>
                        <th>BUDHA (PR)</th>
                        <th>BUDHA (JML)</th>
                        <th>KHONGHUCU (LK)</th>
                        <th>KHONGHUCU (PR)</th>
                        <th>KHONGHUCU (JML)</th>
                        <th>KEPERCAYAAN (LK)</th>
                        <th>KEPERCAYAAN (PR)</th>
                        <th>KEPERCAYAAN (JML)</th>

                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($agama as $agama)
                    <tr>
                    <td>{{ $agama->id }}</td>
                    <td>{{ $agama->kode }}</td>
                    <td>{{ $agama->wilayah }}</td>
                    <td>{{ $agama->islam_lk }}</td>
                    <td>{{ $agama->islam_pr }}</td>
                    <td>{{ $agama->islam_jml }}</td>
                    <td>{{ $agama->kristen_lk }}</td>
                    <td>{{ $agama->kristen_pr }}</td>
                    <td>{{ $agama->kristen_jml }}</td>
                    <td>{{ $agama->katholik_lk }}</td>
                    <td>{{ $agama->katholik_pr }}</td>
                    <td>{{ $agama->katholik_jml }}</td>
                    <td>{{ $agama->hindu_lk }}</td>
                    <td>{{ $agama->hindu_pr }}</td>
                    <td>{{ $agama->hindu_jml }}</td>
                    <td>{{ $agama->budha_lk }}</td>
                    <td>{{ $agama->budha_pr }}</td>
                    <td>{{ $agama->budha_jml }}</td>
                    <td>{{ $agama->khonghucu_lk }}</td>
                    <td>{{ $agama->khonghucu_pr }}</td>
                    <td>{{ $agama->khonghucu_jml }}</td>
                    <td>{{ $agama->kepercayaan_lk }}</td>
                    <td>{{ $agama->kepercayaan_pr }}</td>
                    <td>{{ $agama->kepercayaan_jml }}</td>
                    <td>
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
            <div class="btn-group" style="margin-top:10px; float:right">
                @php
                    for($i=1;$i<=$totalpages;$i++){
                        echo("<a href='/agama?page=$i' class='btn btn-sm btn-outline-primary'>$i</a>");
                    }   
                @endphp
            </div>
        </div>
    </div>
</div>
@endsection