@extends('layouts.base')
@section('content')
    <style>
        .content {
            padding-top: 10px !important;
            /* default biasanya 25-30px, diperkecil */
        }

        .card-body.p-2 {
            padding-top: 10px !important;
            padding-bottom: 10x !important;
        }

        .form-select-sm {
            height: 35px;
            /* biar sejajar dengan tombol */
        }

        .btn-sm {
            height: 35px;
        }

        .card {
            margin-bottom: 0 !important;
        }

        .card+.card {
            margin-top: 35px !important;
            /* jarak antar card */
        }
    </style>

    <div class="col-md-12">
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            {{-- CARD 1: PILIH PELANGGAN --}}
            <div class="card mb-0">
                <div class="card-body p-2">
                    <div class="row g-2 align-items-center">
                        <div class="col-md-9">
                            <select class="form-control select2" id="email2" name="email" style="width: 100%;">
                                <option value=""></option>
                                <option value="user1@email.com">user1@email.com</option>
                                <option value="user2@email.com">user2@email.com</option>
                                <option value="user3@email.com">user3@email.com</option>
                            </select>
                        </div>
                        <div class="col-md-3 text-end">
                            <button type="button" class="btn btn-sm w-100"
                                style="background-color:#555555; border-color:#555555; color:#fff;">
                                Reg. Pelanggan Baru
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- CARD 2: DETAIL ORDER --}}
            <div class="card mt-1">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center" style="background:#e0e0e0; border-radius:6px; padding:8px;">
                        <div style="font-size:20px; background:#555555; padding:8px; border-radius:4px; margin-right:10px;">
                            <i class="fas fa-user-check text-white"></i>
                        </div>

                        <div>
                            <h6 class="mb-1" style="font-size:14px;">
                                Register Pelanggan Atas Nama
                                <strong>{{ $customer->nama ?? '' }}</strong>
                            </h6>
                            <small class="text-muted" style="font-size:12px;">
                                Alamat: {{ $customer->alamat ?? '' }}
                            </small>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="form-container">
                        <div class="row form-section">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email[]" placeholder="Enter Email" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password[]" placeholder="Password" />
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password[]" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password[]" placeholder="Password" />
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password[]" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password[]" placeholder="Password" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-action" style="text-align: right;">
                    <button type="button" id="add-form" class="btn btn-custom"
                        style="background-color:#ff9933; color:#fff;">Tambah Barang</button>
                    <button type="submit" class="btn btn-custom"
                        style="background-color:#555555; color:#fff;">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        document.getElementById('add-form').addEventListener('click', function() {
            let container = document.getElementById('form-container');
            let newSection = container.querySelector('.form-section').cloneNode(true);

            newSection.querySelectorAll('input').forEach(input => input.value = '');

            container.appendChild(newSection);
        });
        
        $(document).ready(function() {
            $('#email2').select2({
                placeholder: "-- Pilih Pelanggan --",
                allowClear: true
            });
        });
    

    </script>
@endsection
