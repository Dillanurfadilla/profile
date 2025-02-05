@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Master Data</div>
        <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
            
            <li class="breadcrumb-item active" aria-current="page">Delete Data</li>
            </ol>
        </nav>
        </div>
        
    </div>
    <!--end breadcrumb-->


    <div class="card">
        <div class="card-header">
            <h6 class="mb-0">Delete Goldarah</h6>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('goldarah.destroy',$goldarah->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            
                <div class="mb-3">
                    <label class="form-label">kode:</label>
                    <input type="text" name="kode" value="{{ $goldarah->kode }}" class="form-control" 
                    placeholder="kode" disabled="" readonly="">
                    @error('kode')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">wilayah:</label>
                    <input type="text" name="wilayah" value="{{ $goldarah->wilayah }}" class="form-control" 
                    placeholder="wilayah" disabled="" readonly="">
                    @error('wilayah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">a_lk:</label>
                    <input type="text" name="a_lk" value="{{ $goldarah->a_lk }}" class="form-control" 
                    placeholder="a_lk" disabled="" readonly="">
                    @error('a_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">a_pr:</label>
                    <input type="text" name="a_pr" value="{{ $goldarah->a_pr }}" class="form-control" 
                    placeholder="a_pr" disabled="" readonly="">
                    @error('a_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">a_jml:</label>
                    <input type="text" name="a_jml" value="{{ $goldarah->a_jml }}" class="form-control" 
                    placeholder="a_jml" disabled="" readonly="">
                    @error('a_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">a_minus_lk:</label>
                    <input type="text" name="a_minus_lk" value="{{ $goldarah->a_minus_lk }}" class="form-control" 
                    placeholder="a_minus_lk" disabled="" readonly="">
                    @error('a_minus_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">a_minus_pr:</label>
                    <input type="text" name="a_minus_pr" value="{{ $goldarah->a_minus_pr }}" class="form-control" 
                    placeholder="a_minus_pr" disabled="" readonly="">
                    @error('a_minus_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">a_minus_jml:</label>
                    <input type="text" name="a_minus_jml" value="{{ $goldarah->a_minus_jml }}" class="form-control" 
                    placeholder="a_minus_jml" disabled="" readonly="">
                    @error('a_minus_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">a_plus_lk:</label>
                    <input type="text" name="a_plus_lk" value="{{ $goldarah->a_plus_lk }}" class="form-control" 
                    placeholder="a_plus_lk" disabled="" readonly="">
                    @error('a_plus_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">a_plus_pr:</label>
                    <input type="text" name="a_plus_pr" value="{{ $goldarah->a_plus_pr }}" class="form-control" 
                    placeholder="a_plus_pr" disabled="" readonly="">
                    @error('a_plus_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">a_plus_jml:</label>
                    <input type="text" name="a_plus_jml" value="{{ $goldarah->a_plus_jml }}" class="form-control" 
                    placeholder="a_plus_jml" disabled="" readonly="">
                    @error('a_plus_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">b_lk:</label>
                    <input type="text" name="b_lk" value="{{ $goldarah->b_lk }}" class="form-control" 
                    placeholder="b_lk" disabled="" readonly="">
                    @error('b_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">b_pr:</label>
                    <input type="text" name="b_pr" value="{{ $goldarah->b_pr }}" class="form-control" 
                    placeholder="b_pr" disabled="" readonly="">
                    @error('b_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">b_jml:</label>
                    <input type="text" name="b_jml" value="{{ $goldarah->b_jml }}" class="form-control" 
                    placeholder="b_jml" disabled="" readonly="">
                    @error('b_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">b_minus_lk:</label>
                    <input type="text" name="b_minus_lk" value="{{ $goldarah->b_minus_lk }}" class="form-control" 
                    placeholder="b_minus_lk" disabled="" readonly="">
                    @error('b_minus_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">b_minus_pr:</label>
                    <input type="text" name="b_minus_pr" value="{{ $goldarah->b_minus_pr }}" class="form-control" 
                    placeholder="b_minus_pr" disabled="" readonly="">
                    @error('b_minus_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">b_minus_jml:</label>
                    <input type="text" name="b_minus_jml" value="{{ $goldarah->b_minus_jml }}" class="form-control" 
                    placeholder="b_minus_jml" disabled="" readonly="">
                    @error('b_minus_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">b_plus_lk:</label>
                    <input type="text" name="b_plus_lk" value="{{ $goldarah->b_plus_lk }}" class="form-control" 
                    placeholder="b_plus_lk" disabled="" readonly="">
                    @error('b_plus_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">b_plus_pr:</label>
                    <input type="text" name="b_plus_pr" value="{{ $goldarah->b_plus_pr }}" class="form-control" 
                    placeholder="b_plus_pr" disabled="" readonly="">
                    @error('b_plus_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">b_plus_jml:</label>
                    <input type="text" name="b_plus_jml" value="{{ $goldarah->b_plus_jml }}" class="form-control" 
                    placeholder="b_plus_jml" disabled="" readonly="">
                    @error('b_plus_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ab_lk:</label>
                    <input type="text" name="ab_lk" value="{{ $goldarah->ab_lk }}" class="form-control" 
                    placeholder="ab_lk" disabled="" readonly="">
                    @error('ab_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ab_pr:</label>
                    <input type="text" name="ab_pr" value="{{ $goldarah->ab_pr }}" class="form-control" 
                    placeholder="ab_pr" disabled="" readonly="">
                    @error('ab_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ab_jml:</label>
                    <input type="text" name="ab_jml" value="{{ $goldarah->ab_jml }}" class="form-control" 
                    placeholder="ab_jml" disabled="" readonly="">
                    @error('ab_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ab_minus_lk:</label>
                    <input type="text" name="ab_minus_lk" value="{{ $goldarah->ab_minus_lk }}" class="form-control" 
                    placeholder="ab_minus_lk" disabled="" readonly="">
                    @error('ab_minus_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ab_minus_pr:</label>
                    <input type="text" name="ab_minus_pr" value="{{ $goldarah->ab_minus_pr }}" class="form-control" 
                    placeholder="ab_minus_pr" disabled="" readonly="">
                    @error('ab_minus_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ab_minus_jml:</label>
                    <input type="text" name="ab_minus_jml" value="{{ $goldarah->ab_minus_jml }}" class="form-control" 
                    placeholder="ab_minus_jml" disabled="" readonly="">
                    @error('ab_minus_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ab_plus_lk:</label>
                    <input type="text" name="ab_plus_lk" value="{{ $goldarah->ab_plus_lk }}" class="form-control" 
                    placeholder="ab_plus_lk" disabled="" readonly="">
                    @error('ab_plus_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ab_plus_pr:</label>
                    <input type="text" name="ab_plus_pr" value="{{ $goldarah->ab_plus_pr }}" class="form-control" 
                    placeholder="ab_plus_pr" disabled="" readonly="">
                    @error('ab_plus_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">ab_plus_jml:</label>
                    <input type="text" name="ab_plus_jml" value="{{ $goldarah->ab_plus_jml }}" class="form-control" 
                    placeholder="ab_plus_jml" disabled="" readonly="">
                    @error('ab_plus_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">o_lk:</label>
                    <input type="text" name="o_lk" value="{{ $goldarah->o_lk }}" class="form-control" 
                    placeholder="o_lk" disabled="" readonly="">
                    @error('o_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">o_pr:</label>
                    <input type="text" name="o_pr" value="{{ $goldarah->o_pr }}" class="form-control" 
                    placeholder="o_pr" disabled="" readonly="">
                    @error('o_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">o_jml:</label>
                    <input type="text" name="o_jml" value="{{ $goldarah->o_jml }}" class="form-control" 
                    placeholder="o_jml" disabled="" readonly="">
                    @error('o_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">o_minus_lk:</label>
                    <input type="text" name="o_minus_lk" value="{{ $goldarah->o_minus_lk }}" class="form-control" 
                    placeholder="o_minus_lk" disabled="" readonly="">
                    @error('o_minus_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">o_minus_pr:</label>
                    <input type="text" name="o_minus_pr" value="{{ $goldarah->o_minus_pr }}" class="form-control" 
                    placeholder="o_minus_pr" disabled="" readonly="">
                    @error('o_minus_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">o_minus_jml:</label>
                    <input type="text" name="o_minus_jml" value="{{ $goldarah->o_minus_jml }}" class="form-control" 
                    placeholder="o_minus_jml" disabled="" readonly="">
                    @error('o_minus_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">o_plus_lk:</label>
                    <input type="text" name="o_plus_lk" value="{{ $goldarah->o_plus_lk }}" class="form-control" 
                    placeholder="o_plus_lk" disabled="" readonly="">
                    @error('o_plus_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">o_plus_pr:</label>
                    <input type="text" name="o_plus_pr" value="{{ $goldarah->o_plus_pr }}" class="form-control" 
                    placeholder="o_plus_pr" disabled="" readonly="">
                    @error('o_plus_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">o_plus_jml:</label>
                    <input type="text" name="o_plus_jml" value="{{ $goldarah->o_plus_jml }}" class="form-control" 
                    placeholder="o_plus_jml" disabled="" readonly="">
                    @error('o_plus_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tidak_tahu_lk:</label>
                    <input type="text" name="tidak_tahu_lk" value="{{ $goldarah->tidak_tahu_lk }}" class="form-control" 
                    placeholder="tidak_tahu_lk" disabled="" readonly="">
                    @error('tidak_tahu_lk')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tidak_tahu_pr:</label>
                    <input type="text" name="tidak_tahu_pr" value="{{ $goldarah->tidak_tahu_pr }}" class="form-control" 
                    placeholder="tidak_tahu_pr" disabled="" readonly="">
                    @error('tidak_tahu_pr')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">tidak_tahu_jml:</label>
                    <input type="text" name="tidak_tahu_jml" value="{{ $goldarah->tidak_tahu_jml }}" class="form-control" 
                    placeholder="tidak_tahu_jml" disabled="" readonly="">
                    @error('tidak_tahu_jml')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger ml-3">Delete</button>
                </div>

            </form>
        </div>
    </div>
@endsection