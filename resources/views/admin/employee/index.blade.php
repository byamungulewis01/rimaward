@extends('layouts.admin.app')
@section('page-name')
    Employees
@endsection
@section('body')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Employees</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">RIMAWARD</a>
                        </li>
                        <li class="breadcrumb-item active">Employees</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom-dashed">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm">
                            <div>
                                <h5 class="card-title mb-0">Employee List</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex flex-wrap align-items-start gap-2">
                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()">
                                    <i class="ri-delete-bin-2-line"></i>
                                </button>
                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                    id="create-btn" data-bs-target="#showModal">
                                    <i class="ri-add-line align-bottom me-1"></i> Add
                                    Employee
                                </button>
                                <div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog model-lg">
                                        <div class="modal-content">
                                            <div class="modal-header p-3">
                                                <h5 class="modal-title" id="exampleModalLabel">Employee Registration</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="close-modal"></button>
                                            </div>
                                            <form class="tablelist-form" method="post"
                                                action="{{ route('admin.employee.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <p><strong>Opps Something went wrong</strong></p>
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li>* {{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="customername-field" class="form-label">Employee
                                                            Name</label>
                                                        <input type="text" id="customername-field" name="name"
                                                            class="form-control" placeholder="Enter name"
                                                            value="{{ old('name') }}" required />
                                                        <div class="invalid-feedback">
                                                            Please enter a employee name.
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="email-field" class="form-label">Email</label>
                                                        <input type="email" id="email-field" class="form-control"
                                                            name="email" placeholder="Enter email" required
                                                            value="{{ old('email') }}" />
                                                        <div class="invalid-feedback">
                                                            Please enter an email.
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3 ">
                                                        <div class="col-lg-12">
                                                            <label for="phone-field" class="form-label">Phone</label>
                                                            <input type="text" id="phone-field" name="phone"
                                                                class="form-control phoneNumber" minlength="10"
                                                                maxlength="10" placeholder="Enter phone no." required
                                                                value="{{ old('phone') }}" />
                                                            <div class="invalid-feedback">
                                                                Please enter a phone.
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">
                                                            Close
                                                        </button>
                                                        <button type="submit" class="btn btn-success" id="add-btn">
                                                            Add Employee
                                                        </button>
                                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="employees" class="table table-centered table-hover align-middle table-nowrap mb-0"
                        style="width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">
                                    #
                                </th>

                                <th class="sort" data-sort="name">
                                    Employee Name
                                </th>
                                <th class="sort" data-sort="email">Email</th>
                                <th class="sort" data-sort="phone">Phone</th>
                                <th class="sort" data-sort="status">Status</th>
                                <th class="sort" data-sort="date">Joining Date</th>
                                <th class="sort" data-sort="action">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->


    <!-- Modal -->
    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal"
                        aria-label="Close" id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="deleteForm">
                        @csrf
                        @method('DELETE')
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548"
                                style="width: 100px; height: 100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">
                                    Are you sure you want to remove this record ?
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn w-sm btn-danger" id="delete-record">
                                Yes, Delete It!
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog model-lg">
            <div class="modal-content">
                <div class="modal-header p-3">
                    <h5 class="modal-title" id="exampleModalLabel">Employee Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <form id="updateform" class="tablelist-form" method="post" action="{{ route('admin.employee.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <p><strong>Opps Something went wrong</strong></p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>* {{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Employee
                                Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Enter name" value="{{ old('name') }}" required />
                            <div class="invalid-feedback">
                                Please enter a employee name.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email"
                                placeholder="Enter email" required value="{{ old('email') }}" />
                            <div class="invalid-feedback">
                                Please enter an email.
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control phoneNumber"
                                    minlength="10" maxlength="10" placeholder="Enter phone no." required
                                    value="{{ old('phone') }}" />
                                <div class="invalid-feedback">
                                    Please enter a phone.
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-success" id="add-btn">
                                Edit Employee
                            </button>
                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
@section('css')
    {{-- <link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet" /> --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endsection

@section('script')
    @if (old('id'))
        @if ($errors->any())
            <script>
                var myModal = new bootstrap.Modal(document.getElementById('editUser'), {
                    keyboard: false
                })
                myModal.show()
            </script>
        @endif
    @else
        @if ($errors->any())
            <script>
                var myModal = new bootstrap.Modal(document.getElementById('showModal'), {
                    keyboard: false
                })
                myModal.show()
            </script>
        @endif
    @endif

    <script>
        $(document).ready(function() {
            $(".phoneNumber").on("input", function() {
                var value = $(this).val();
                var decimalRegex = /^[0-9]+(\.[0-9]{1,2})?$/;
                if (!decimalRegex.test(value)) {
                    $(this).val(value.substring(0, value.length - 1));
                }
            });
        });
    </script>

    {{-- <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#employees').DataTable({

                processing: true,
                scrollX: true,
                ajax: "{{ route('employee.api') }}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'phone'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'create_at'
                    },
                    {
                        data: ''
                    },
                ],
                columnDefs: [{
                        targets: 0,
                        render: function(data, type, row, meta) {
                            return (meta.row) + 1;
                        },
                    },
                    {
                        targets: 4,
                        render: function(data, type, row) {
                            if (row.status == 'active') {
                                return '<span class="badge bg-success text-uppercase">Active</span>';
                            } else {
                                return '<span class="badge bg-danger text-uppercase">Inactive</span>';
                            }
                        },
                    },
                    {
                        targets: 5,
                        render: function(data, type, row) {
                            var date = new Date(row.created_at).toLocaleDateString('en-US', {
                                day: 'numeric',
                                month: 'long',
                                year: 'numeric'
                            });
                            return date;
                        },
                    },
                    {
                        targets: 6,
                        render: function(data, type, row) {
                            return `
                        <button class="btn btn-sm btn-primary editUser" data-bs-toggle="modal" data-bs-target="#editUser">
                        <span data-id="${row.id}" data-name="${row.name}" data-email="${row.email}" data-phone="${row.phone}"  data-status="${row.status}">Edit</span>
                        </button>
                        <a href="" class="btn btn-sm btn-danger deleteUser" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"> <span data-id="${row.id}">Delete</span></a>
                        `;
                        },
                    },
                ],

                dom: 'Bfrtip',
                buttons: [{
                        extend: 'print',
                        title: 'Employee List',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        },
                        customize: function(win) {
                            $(win.document.body).css('font-size', '10pt');
                            $(win.document.body).find('table')
                                .addClass('table-bordered')
                                .css('font-size', 'inherit');
                        }
                    },
                    {
                        extend: 'excel',
                        title: 'Employee List',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }

                    },
                    {
                        extend: 'pdf',
                        title: 'Employee List',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        extend: 'csv',
                        title: 'Employee List',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                ],
            });
        });

        $(document).on('click', '.editUser', function() {
            var id = $(this).find('span').data('id');
            var name = $(this).find('span').data('name');
            var email = $(this).find('span').data('email');
            var phone = $(this).find('span').data('phone');
            var status = $(this).find('span').data('status');


            // Populate the modal fields with the retrieved data
            $('#editUser').find('#id').val(id);
            $('#editUser').find('#name').val(name);
            $('#editUser').find('#email').val(email);
            $('#editUser').find('#phone').val(phone);
            $('#editUser').find('#status').val(status);

            var route = "{{ route('admin.employee.update', ['id' => ':id']) }}";
            route = route.replace(':id', id);

            $('#updateform').attr('action', route);

        });
        $(document).on('click', '.deleteUser', function() {
            var id = $(this).find('span').data('id');
            var route = "{{ route('admin.employee.destroy', ['id' => ':id']) }}";
            route = route.replace(':id', id);
            $('#deleteRecordModal').find('#deleteForm').attr('action', route);
        });
    </script>
@endsection
