@extends('layouts.base')

@section('content')
    <div class="col-md-12">
        <div class="card" style="border-radius:20px; overflow:hidden;">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nama Driver</th>
                                <th>No HP</th>
                                <th>Nomor Kendaraan</th>
                                <th style="width: 10%; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($drivers as $drv)
                                <tr>
                                    <td>{{ $drv->nama }}</td>
                                    <td>{{ $drv->hp }}</td>
                                    <td>{{ $drv->nomor_kendaraan }}</td>
                                    <td class="text-center">

                                        <!-- tombol edit -->
                                        <button type="button" class="btn btn-link btn-primary btnEdit"
                                            data-id="{{ $drv->id }}" data-bs-toggle="modal"
                                            data-bs-target="#modalEdit">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <!-- tombol delete -->
                                        <form action="{{ route('driver.destroy', $drv->id) }}" method="POST"
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


{{-- ====================== MODAL EDIT ======================== --}}
@section('modal')
    <div class="modal fade" id="modalEdit" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Driver</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form id="editForm">
                        @csrf @method('PUT')

                        <input type="hidden" id="editId">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nama</label>
                                <input type="text" id="editNama" name="nama" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>No HP</label>
                                <input type="text" id="editHp" name="hp" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Nomor Kendaraan</label>
                                <input type="text" id="editKendaraan" name="nomor_kendaraan" class="form-control">
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
        // edit button
        $(document).on("click", ".btnEdit", function() {
            let id = $(this).data("id");
            $("#editId").val(id);

            $.get("/app/driver/" + id + "/edit", function(data) {
                $("#editNama").val(data.nama);
                $("#editHp").val(data.hp);
                $("#editKendaraan").val(data.nomor_kendaraan);
            });
        });

        // save update
        $(document).on("click", ".btnSave", function() {
            let id = $("#editId").val();
            let formData = $("#editForm").serialize();

            $.ajax({
                url: "/app/driver/" + id,
                type: "POST",
                data: formData,
                success: function(res) {
                    Swal.fire({
                        icon: "success",
                        title: "Berhasil!",
                        text: "Data berhasil diperbarui!",
                        timer: 1500,
                        showConfirmButton: false,
                    });

                    setTimeout(() => {
                        $("#modalEdit").modal("hide");
                        location.reload();
                    }, 1500);
                }
            });
        });

        // delete confirm
        $(document).on("click", ".btnDelete", function(e) {
            e.preventDefault();
            let form = $(this).closest("form");

            Swal.fire({
                title: "Apakah yakin?",
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Ya, Hapus!"
            }).then(result => {
                if (result.isConfirmed) form.submit();
            });
        });
    </script>
@endsection
