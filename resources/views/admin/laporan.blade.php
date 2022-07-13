@extends('admin.base')

@section('content')
    <div>



        <div class="row">
            <div class="col-6">
                <div class="panel">
                    <div class="title">
                        <p>Laporan Pembelian</p>

                        <div class="d-flex ">
                            <div class="form-floating  me-2">
                                <input type="date" class="form-control" id="tanggalawal" name="tanggalawal"
                                    placeholder="tanggalawal">
                                <label for="tanggalawal" class="form-label">Tanggal Awal</label>
                            </div>

                            <div class="form-floating  me-2">
                                <input type="date" class="form-control" id="tanggalakhir" name="tanggalakhir"
                                    placeholder="tanggalakhir">
                                <label for="tanggalakhir" class="form-label">Tanggal Akhir</label>
                            </div>

                            <a class="btn-utama" href="/admin/transaksi/cetak/1" target="_blank">Cetak</a>
                        </div>
                        {{-- <a class="btn-utama-soft sml rnd " data-bs-toggle="modal" data-bs-target="#modaltambahnegara">Data
                            Negara Baru
                            <i class="material-icons menu-icon ms-2">add_circle</i></a> --}}
                    </div>

                    <div class="isi">
                        <div class="table">
                            <table id="table_pesanan" class="table table-striped enselect" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Transaksi</th>
                                        <th>Tanggal & Jam</th>
                                        <th>Total</th>
                                        <th>Kasir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>#0001</td>
                                        <td>13 Juli 2022 14:00</td>
                                        <td>70.000</td>
                                        <td>Joni</td>

                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>#0002</td>
                                        <td>13 Juli 2022 15:00</td>
                                        <td>70.000</td>
                                        <td>Joni</td>

                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-6">
                <div class="panel">
                    <div class="title">
                        <p>Barang yang dibeli (nomor transaksi)</p>
                        {{-- <a class="btn-utama-soft sml rnd " data-bs-toggle="modal" data-bs-target="#modaltambahnegara">Data
                            Negara Baru
                            <i class="material-icons menu-icon ms-2">add_circle</i></a> --}}
                    </div>

                    <div class="isi">
                        <div class="table">
                            <table id="table_keranjang" class="table table-striped enselect" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nasi Goreng Sei</td>
                                        <td>2</td>
                                        <td>20.000</td>
                                        <td>40.000</td>

                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>Mie Goreng Sei</td>
                                        <td>2</td>
                                        <td>15.000</td>
                                        <td>30.000</td>

                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection

    @section('morejs')
        <script src="{{ asset('js/number_formater.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('#table_pesanan').DataTable({
                    select: {
                        style: 'single'
                    }
                });

                $('#table_keranjang').DataTable();
            });
        </script>
    @endsection


    </body>

    </html>
