@extends("layouts.admin")
@section("main-content")
<!--start breadcrumb-->
<div class="container-fluid px-4">
    <h1 class="mt-4">Data Kecamatan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('home') }}" style="color: #000000;">Dashboard</a></li>
        <li class="breadcrumb-item active">Data Kecamatan</li>
    </ol>
</div>
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
            @if (Auth::user()->type == 1)
                <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
                    href="{{ route('kecamatan.create') }}"><ion-icon name="add"></ion-icon> Input Data</a>
                
                <a class="btn btn-sm btn-success px-2" style="margin-bottom:10px" 
                    href="{{ route('kecamatan.import') }}"><ion-icon name="add"></ion-icon> Import Data</a>
                
                <a href="{{ route('export.kecamatan') }}" class="btn btn-sm btn-success px-2" style="margin-bottom:10px">
                    <ion-icon name="download"></ion-icon> Export ke Excel</a>
            @endif

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
                                @if (Auth::user()->type == 1)
                                    <a href="{{ url('kecamatan/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm" title="Edit">
                                    <ion-icon name="pencil-sharp"></ion-icon> Edit</a>
                                    </a>
                                    <form action="{{ route('kecamatan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                        <ion-icon name="trash-outline"></ion-icon> Delete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection