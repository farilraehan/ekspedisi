@extends('layouts.base')
@section('content')
    <div class="col-md-12">
        <div class="card" style="border-radius:20px; overflow:hidden;">
            <div class="card-body">
                <form action="{{ route('armadas.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label>Armada</label>
                                <select class="form-control select2" name="jenis" required>
                                    <option value="">-- Pilih Jenis Armada --</option>
                                    <option value="Motor">Motor</option>
                                    <option value="Mobil Pickup">Mobil Pickup</option>
                                    <option value="Mobil Box">Mobil Box</option>
                                    <option value="Truck">Truck</option>
                                    <option value="Wingbox">Wingbox</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label>Nomor Kendaraan</label>
                                <input type="text" class="form-control" name="nomor_kendaraan" required
                                    placeholder="Nomor Kendaraan">
                            </div>
                        </div>
                    </div>
                    <div class="card-action" style="text-align: right;">
                        <a href="{{ route('armadas.index') }}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
