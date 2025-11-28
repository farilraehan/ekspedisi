@extends('layouts.base')
@section('content')
    <div class="col-md-12">
        <div class="card" style="border-radius:20px; overflow:hidden;">
            <div class="card-body">
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label>Perusahaan / Perorangan</label>
                                <select class="form-control select2" name="jenis" required>
                                    <option value="">-- Pilih Jenis --</option>
                                    <option value="PERORANGAN">Perorangan</option>
                                    <option value="PERUSAHAAN">Perusahaan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" required
                                    placeholder="Nama Customer">
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">

                            <div class="form-group">
                                <label>No. Hp</label>
                                <input type="text" class="form-control" name="hp" placeholder="+62">
                            </div>
                        </div>
                    </div>
                    <div class="card-action" style="text-align: right;">
                        <a href="{{ route('customers.index') }}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
