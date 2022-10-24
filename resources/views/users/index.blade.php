@extends('layouts.admin')

@push('style')
    <link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/responsive.bootstrap4.min.css" />
@endpush

@section('content')
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Users</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Role
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-20">
                    <div class="card-box mb-30">
                        <div class="pd-20 d-flex justify-content-between">
                            <div>
                                <div class="text-blue h5">User Role</div>
                                <small class="mb-0">
                                    list User beserta role-nya
                                </small>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary" data-toggle="modal"
                                    data-target="#bd-example-modal-lg" type="button">
                                    Create User
                                </a>
                                <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <form id="create_user">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">
                                                        Create User Form
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                        ×
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input name="nama" class="form-control" type="nama"
                                                            placeholder="Joko Santoso">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input name="email" class="form-control" type="email"
                                                            placeholder="jokosantoso@mail.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input name="password" class="form-control" type="password"
                                                            placeholder="* * * * * *">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select name="gender" id="gender" class="form-control">
                                                            <option value="" selected hidden disabled>Pilih Gender
                                                            </option>
                                                            <option value="male">Pria</option>
                                                            <option value="female">Wanita</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Role</label>
                                                        <select name="role" id="role" class="form-control">
                                                            <option value="" selected hidden disabled>Pilih Role
                                                            </option>
                                                            @foreach ($roles as $role)
                                                                <option value="{{ $role->name }}">{{ $role->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" onclick="cancelForm()" class="btn btn-secondary"
                                                        data-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <button type="reset" class="btn btn-warning">Reset</button>
                                                    <button type="button" onclick="submitForm()" class="btn btn-primary">
                                                        Create User
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="alert-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                        <div class="modal-content bg-danger text-white">
                                            <div class="modal-body text-center">
                                                <h3 class="text-white mb-15">
                                                    <i class="fa fa-exclamation-triangle"></i> User Gagal Dibuat
                                                </h3>
                                                <div class="isi">
                                                </div>
                                                <button type="button" onclick="resetModal()" class="btn btn-light"
                                                    data-dismiss="modal">
                                                    Ok
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr id="role">
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <select name="role" class="custom-select" id="{{ $user->id }}">
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->name }}"
                                                            {{ $user->roles[0]->id == $role->id ? 'selected' : '' }}>
                                                            {{ $role->name }}</option>
                                                    @endforeach
                                                </select>
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
    </div>
@endsection
@push('script')
    <script src="/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="/src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="/src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="/src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="/vendors/scripts/datatable-setting.js"></script>
    <script src="/src/plugins/datatables/js/vfs_fonts.js"></script>
    <script>
        $("#role select").on("change", function() {
            $.ajax({
                url: '/user/' + $(this).attr('id'),
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    roles: $(this).val(),
                    user_id: $(this).attr("id")
                },
                success: function(data) {
                    window.alert("Role berhasil diubah");
                }
            });
        });

        const resetModal = () => {
            $('#alert-modal').modal('hide');
            $('#alert-modal .isi').html('');
        }

        const cancelForm = () => {
            document.getElementById("create_user").reset();
        };

        const submitForm = () => {
            $.ajax({
                url: '/users/store',
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    nama: $("input[name=nama]").val(),
                    email: $("input[name=email]").val(),
                    password: $("input[name=password]").val(),
                    gender: $("#gender").val(),
                    role: $("#role").val()
                },
                success: function() {
                    document.getElementById("create_user").reset();
                    $("#bd-example-modal-lg").modal("hide");
                    window.alert("Berhasil Menambahkan User");
                },
                error: function(data) {
                    const errors = data.responseJSON.errors;
                    for (const [key, value] of Object.entries(errors)) {
                        $("#alert-modal .isi").append(`<p>${value[0]}</p>`)
                    }
                    $("#alert-modal").modal("show");
                }
            });
        };
    </script>
@endpush
