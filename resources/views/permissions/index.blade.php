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
                            <h4>Permissions</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Permissions
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
                                <div class="text-blue h5">Permissions</div>
                                <small class="mb-0">
                                    list Permission
                                </small>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary" data-toggle="modal"
                                    data-target="#bd-example-modal-lg" type="button">
                                    Create Permission
                                </a>
                                <div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <form id="create_permission">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">
                                                        Create Permission Form
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                        ×
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Nama Permission</label>
                                                        <input name="nama" class="form-control" type="nama"
                                                            placeholder="add-fppp">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" onclick="cancelForm()" class="btn btn-secondary"
                                                        data-dismiss="modal">
                                                        Cancel
                                                    </button>
                                                    <button type="reset" class="btn btn-warning">Reset</button>
                                                    <button type="button" onclick="submitForm()" class="btn btn-primary">
                                                        Create Permission
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama Permission</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->name }}</td>
                                            <td><button class="btn btn-danger" onclick="hapusPermission(this)"
                                                    id="{{ $permission->id }}">Hapus</button></td>
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
        const submitForm = () => {
            $.ajax({
                url: '/permissions/store',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    nama: $('input[name=nama]').val(),
                },
                success: function(data) {
                    window.location.reload();
                }
            });
        };

        const cancelForm = () => {
            document.getElementById("create_permission").reset();
        };

        const hapusPermission = (value) => {
            $.ajax({
                url: '/permission/' + value.id,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: value.id,
                },
                success: function() {
                    window.location.reload();
                }
            });
        }
    </script>
@endpush
