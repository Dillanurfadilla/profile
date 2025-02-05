@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data goldarah</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('dashboard') }}" style="color: #000000;">Dashboard</a></li>
            <li class="breadcrumb-item active">Data goldarah</li>
        </ol>
</div>

<!--end breadcrumb-->

<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Data goldarah</h5> 
        </div>
        @if ($message = Session::get("success"))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive mt-3">
            <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("goldarah.create") }}"><ion-icon name="add"></ion-icon> Import</a>
            <table id="myTable" class="table table-bordered">  
            <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th>A (LK)</th>
                        <th>A (PR)</th>
                        <th>A (JML)</th>
                        <th>A- (LK)</th>
                        <th>A- (PR)</th>
                        <th>A- (JML)</th>
                        <th>A+ (LK)</th>
                        <th>A+ (PR)</th>
                        <th>A+ (JML)</th>
                        <th>B (LK)</th>
                        <th>B (PR)</th>
                        <th>B (JML)</th>
                        <th>B- (LK)</th>
                        <th>B- (PR)</th>
                        <th>B- (JML)</th>
                        <th>B+ (LK)</th>
                        <th>B+ (PR)</th>
                        <th>B+ (JML)</th>
                        <th>AB (LK)</th>
                        <th>AB (PR)</th>
                        <th>AB (JML)</th>
                        <th>AB- (LK)</th>
                        <th>AB- (PR)</th>
                        <th>AB- (JML)</th>
                        <th>AB+ (LK)</th>
                        <th>AB+ (PR)</th>
                        <th>AB+ (JML)</th>
                        <th>O (LK)</th>
                        <th>O (PR)</th>
                        <th>O (JML)</th>
                        <th>O- (LK)</th>
                        <th>O- (PR)</th>
                        <th>O- (JML)</th>
                        <th>O+ (LK)</th>
                        <th>O+ (PR)</th>
                        <th>O+ (JML)</th>
                        <th>TIDAK TAHU (LK)</th>
                        <th>TIDAK TAHU (PR)</th>
                        <th>TIDAK TAHU (JML)</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($goldarah as $goldarah)
                    <tr>
                        <td>{{ $goldarah->id }}</td>
                        <td>{{ $goldarah->kode }}</td>
                        <td>{{ $goldarah->wilayah }}</td>
                        <td>{{ $goldarah->a_lk }}</td>
                        <td>{{ $goldarah->a_pr }}</td>
                        <td>{{ $goldarah->a_jml }}</td>
                        <td>{{ $goldarah->a_minus_lk }}</td>
                        <td>{{ $goldarah->a_minus_pr }}</td>
                        <td>{{ $goldarah->a_minus_jml }}</td>
                        <td>{{ $goldarah->a_plus_lk }}</td>
                        <td>{{ $goldarah->a_plus_pr }}</td>
                        <td>{{ $goldarah->a_plus_jml }}</td>
                        <td>{{ $goldarah->b_lk }}</td>
                        <td>{{ $goldarah->b_pr }}</td>
                        <td>{{ $goldarah->b_jml }}</td>
                        <td>{{ $goldarah->b_minus_lk }}</td>
                        <td>{{ $goldarah->b_minus_pr }}</td>
                        <td>{{ $goldarah->b_minus_jml }}</td>
                        <td>{{ $goldarah->b_plus_lk }}</td>
                        <td>{{ $goldarah->b_plus_pr }}</td>
                        <td>{{ $goldarah->b_plus_jml }}</td>
                        <td>{{ $goldarah->ab_lk }}</td>
                        <td>{{ $goldarah->ab_pr }}</td>
                        <td>{{ $goldarah->ab_jml }}</td>
                        <td>{{ $goldarah->ab_minus_lk }}</td>
                        <td>{{ $goldarah->ab_minus_pr }}</td>
                        <td>{{ $goldarah->ab_minus_jml }}</td>
                        <td>{{ $goldarah->ab_plus_lk }}</td>
                        <td>{{ $goldarah->ab_plus_pr }}</td>
                        <td>{{ $goldarah->ab_plus_jml }}</td>
                        <td>{{ $goldarah->o_lk }}</td>
                        <td>{{ $goldarah->o_pr }}</td>
                        <td>{{ $goldarah->o_jml }}</td>
                        <td>{{ $goldarah->o_minus_lk }}</td>
                        <td>{{ $goldarah->o_minus_pr }}</td>
                        <td>{{ $goldarah->o_minus_jml }}</td>
                        <td>{{ $goldarah->o_plus_lk }}</td>
                        <td>{{ $goldarah->o_plus_pr }}</td>
                        <td>{{ $goldarah->o_plus_jml }}</td>
                        <td>{{ $goldarah->tidak_tahu_lk }}</td>
                        <td>{{ $goldarah->tidak_tahu_pr }}</td>
                        <td>{{ $goldarah->tidak_tahu_jml }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('goldarah.edit',$goldarah->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('goldarah.show',$goldarah->id) }}">
                                <ion-icon name="trash-outline"></ion-icon> Delete</a>
  
                        </td>
                    </tr>
                    @endforeach


        <!-- Import Excel -->
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="post" action="/goldarah/import_excel" enctype="multipart/form-data">
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


                </tbody>
            </table>
            <div class="btn-group" style="margin-top:10px; float:right">
                @php
                    for($i=1;$i<=$totalpages;$i++){
                        echo("<a href='/goldarah?page=$i' class='btn btn-sm btn-outline-primary'>$i</a>");
                    }   
                @endphp
            </div>
        </div>
    </div>
</div>
@endsection