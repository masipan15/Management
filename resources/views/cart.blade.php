@extends('layout.admin')
@section('content')
    @if (session('messsage'))
        <div>{{ session('message') }}</div>
    @endif
    <div class="row row-sm mt-4">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 main-section">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                                            class="badge badge-pill badge-danger">{{ 0 }}</span>
                                    </button>

                                    <div>

                                        <p class="text-muted card-sub-title"></p>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table" id="example1">
                                            <thead>
                                                <tr>
                                                    <th class="wd-20p">No</th>
                                                    <th class="wd-20p">Nama Barang</th>

                                                    <th class="wd-20p">Harga</th>
                                                    <th class="wd-20p">Aksi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($products as $row)
                                                    <tr>
                                                        <th scope="row">{{ $no++ }}</th>
                                                        <td>{{ $row->name }}</td>

                                                        <td>Rp.{{ number_format($row['price'], 2, '.', '.') }}</td>
                                                        <td>
                                                            <form action="/insertcart" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id {{ $row->id }}">
                                                                <input type="number" name="quantity"
                                                                    class="text-sm sm:text-base px-2 pr-2 rounded-lg border border-gray-400 py-1 focus:outline-none focus:border-blue-400"
                                                                    style="width: 50px" />

                                                                <a href="/tambahcart/{{ $row->id }}"
                                                                    class="btn btn-success mb-1"><i
                                                                        class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i>Add To Cart</a><br>
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
                    </div>
                @endsection
