@extends('layouts.base')

@section('content')
    <div class="col-md-12">
        <div class="card" style="border-radius:20px; overflow:hidden;">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="20%">Armada</th>
                                <th width="10%">Nomor Kendaraan</th>
                                <th style="width: 8%; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($armada as $armd)
                                <tr>
                                    <td>{{ $armd->jenis }}</td>
                                    <td>{{ $armd->nomor_kendaraan }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-link btn-primary btnEdit"
                                            data-id="{{ $armd->id }}" data-bs-toggle="modal"
                                            data-bs-target="#modalEdit">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <form action="{{ route('armadas.destroy', $armd->id) }}" method="POST"
                                            class="deleteForm" style="display:inline;">
                                            @csrf @method('DELETE')
                                            <button type="button" class="btn btn-link btn-danger btnDelete">
                                                <i class="fa fa-times"></i>
                                            </button>
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
@endsection

@section('modal')
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Armada</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form id="editForm">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="editId">

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Armada</label>
                                    <select class="form-control select2" id="editJenis" name="jenis" required>
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
                                <div class="form-group mb-3">
                                    <label>Nomor Kendaraan</label>
                                    <input type="text" class="form-control" id="NomorKendaraan" name="nomor_kendaraan">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-success btnSave">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).on("click", ".btnEdit", function() {
            let id = $(this).data("id");
            $("#editId").val(id);

            $.get("/app/armadas/" + id + "/edit", function(data) {
                $("#editJenis").val(data.jenis).trigger("change");
                $("#NomorKendaraan").val(data.nomor_kendaraan);
            });
        });

        // Save Changes with SweetAlert
        $(document).on("click", ".btnSave", function() {
            let id = $("#editId").val();
            let formData = $("#editForm").serialize();

            $.ajax({
                url: "/app/armadas/" + id,
                type: "POST",
                data: formData,
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: "success",
                            title: "Berhasil!",
                            text: "Data berhasil diperbarui",
                            timer: 1500,
                            showConfirmButton: false
                        });

                        setTimeout(() => {
                            $("#modalEdit").modal("hide");
                            location.reload();
                        }, 1500);
                    }
                }
            });
        });

        // Delete Confirmation
        $(document).on("click", ".btnDelete", function(e) {
            e.preventDefault();
            let form = $(this).closest("form");

            Swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "Berhasil!",
                text: "{{ session('success') }}",
                timer: 1500,
                showConfirmButton: false
            });
        </script>
    @endif
@endsection
