@extends('layout.admin')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    var siteUrl = "{{url('/')}}";
</script>


<div class="row row-sm mt-4">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-header text-center font-weight-bold">
                <h2>Penjualan Barang</h2>
            </div>
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="row row-sm">
                            <div class="col-lg mt-3">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cari barang berdasarkan nama barang</label>
                                    <input type="text" id="barang" name="barang" class="form-control">
                                    <input type="hidden" id="barang_id" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg mt-3" id="detail-barang"></div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('autocomplete1.js') }}"></script>

@endsection