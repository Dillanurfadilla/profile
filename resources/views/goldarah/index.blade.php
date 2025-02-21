@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
        <h1 class="mt-4">Data goldarah</h1>
        <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
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
        @if (Auth::user()->type == 1)   
        <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("agama.create") }}"><ion-icon name="add"></ion-icon> Input</a>
         
            <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
            href="{{ route("goldarah.create") }}"><ion-icon name="add"></ion-icon> Import</a>
        @endif    

        <a href="{{ route('export.goldarah') }}" class="btn btn-sm btn-success px-2" style="margin-bottom:10px">
        <ion-icon name="download"></ion-icon> Export ke Excel</a>
       
            <table id="myTable" class="table table-bordered">  
            <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>KODE</th>
                        <th>WILAYAH</th>
                        <th class="hidden-column">A (LK)</th>
                        <th class="hidden-column">A (PR)</th>
                        <th>A (JML)</th>
                        <th class="hidden-column">A- (LK)</th>
                        <th class="hidden-column">A- (PR)</th>
                        <th class="hidden-column">A- (JML)</th>
                        <th class="hidden-column">A+ (LK)</th>
                        <th class="hidden-column">A+ (PR)</th>
                        <th class="hidden-column">A+ (JML)</th>
                        <th class="hidden-column">B (LK)</th>
                        <th class="hidden-column">B (PR)</th>
                        <th class="hidden-column">B (JML)</th>
                        <th class="hidden-column">B- (LK)</th>
                        <th class="hidden-column">B- (PR)</th>
                        <th class="hidden-column">B- (JML)</th>
                        <th class="hidden-column">B+ (LK)</th>
                        <th class="hidden-column">B+ (PR)</th>
                        <th class="hidden-column">B+ (JML)</th>
                        <th class="hidden-column">AB (LK)</th>
                        <th class="hidden-column">AB (PR)</th>
                        <th class="hidden-column">AB (JML)</th>
                        <th class="hidden-column">AB- (LK)</th>
                        <th class="hidden-column">AB- (PR)</th>
                        <th class="hidden-column">AB- (JML)</th>
                        <th class="hidden-column">AB+ (LK)</th>
                        <th class="hidden-column">AB+ (PR)</th>
                        <th class="hidden-column">AB+ (JML)</th>
                        <th class="hidden-column">O (LK)</th>
                        <th class="hidden-column">O (PR)</th>
                        <th>O (JML)</th>
                        <th class="hidden-column">O- (LK)</th>
                        <th class="hidden-column">O- (PR)</th>
                        <th class="hidden-column">O- (JML)</th>
                        <th class="hidden-column">O+ (LK)</th>
                        <th class="hidden-column">O+ (PR)</th>
                        <th class="hidden-column">O+ (JML)</th>
                        <th class="hidden-column">TIDAK TAHU (LK)</th>
                        <th class="hidden-column">TIDAK TAHU (PR)</th>
                        <th>TIDAK TAHU (JML)</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($goldarah as $goldarah)
                <tr id="row-{{ $goldarah->id }}">
                        <td>{{ $goldarah->id }}</td>
                        <td>{{ $goldarah->kode }}</td>
                        <td>{{ $goldarah->wilayah }}</td>
                        <td class="hidden-column">{{ $goldarah->a_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->a_pr }}</td>
                        <td>{{ $goldarah->a_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->a_minus_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->a_minus_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->a_minus_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->a_plus_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->a_plus_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->a_plus_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->b_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->b_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->b_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->b_minus_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->b_minus_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->b_minus_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->b_plus_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->b_plus_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->b_plus_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->ab_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->ab_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->ab_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->ab_minus_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->ab_minus_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->ab_minus_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->ab_plus_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->ab_plus_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->ab_plus_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->o_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->o_pr }}</td>
                        <td>{{ $goldarah->o_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->o_minus_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->o_minus_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->o_minus_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->o_plus_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->o_plus_pr }}</td>
                        <td class="hidden-column">{{ $goldarah->o_plus_jml }}</td>
                        <td class="hidden-column">{{ $goldarah->tidak_tahu_lk }}</td>
                        <td class="hidden-column">{{ $goldarah->tidak_tahu_pr }}</td>
                        <td>{{ $goldarah->tidak_tahu_jml }}</td>
                        <td>
                        <button class="btn btn-success btn-sm toggle-details" data-id="{{ $goldarah->id }}">
                        Show all
                    </button>
                        @if (Auth::user()->type == 1)
                            <a class="btn btn-primary" href="{{ route('goldarah.edit',$goldarah->id) }}">
                                <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                            <a class="btn btn-danger" href="{{ route('goldarah.show',$goldarah->id) }}">
                                <ion-icon name="trash-outline"></ion-icon> Delete</a>
                        @endif
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
           
        </div>
    </div>
</div>
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src= "/css/tbl.css"></script>
<!-- Pastikan file JavaScript TIDAK di-cache -->
<script src="/js/tabel.js"></script>