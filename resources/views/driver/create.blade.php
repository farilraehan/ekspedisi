@extends('layouts.base')

@section('content')
    <div class="col-md-12">
        <div class="card" style="border-radius:20px; overflow:hidden;">
            <div class="card-body">
                <form action="{{ route('driver.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <!-- Kolom 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label>Nama Driver</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Driver" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                            </div>
                        </div>

                        <!-- Kolom 2 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label>Nomor Kendaraan</label>
                                <input type="text" name="nomor_kendaraan" class="form-control"
                                    placeholder="Nomor Kendaraan" required>
                            </div>
                        </div>

                        <!-- Kolom 3 -->
                        <div class="col-md-6 col-lg-4">

                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="text" name="hp" class="form-control" placeholder="No. HP" required>
                            </div>
                        </div>
                    </div>

                    <div class="card-action" style="text-align: right;">
                        <a href="{{ route('driver.index') }}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
