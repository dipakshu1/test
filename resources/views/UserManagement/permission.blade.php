<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header mt-6">
                <!--begin::Card title-->
                <div class="card-title">
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <button type="button" class="btn btn-light-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_permission">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                    rx="5" fill="currentColor" />
                                <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                    transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Add Permission
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">Name</th>
                            <th class="min-w-250px">Assigned to</th>
                            <th class="min-w-125px">Created Date</th>
                            <th class="text-end min-w-100px">Actions</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modals-->
        <!--begin::Modal - Update permissions-->
        <div class="modal fade" id="kt_modal_update_permission" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!--begin::Modal header-->
                    <div class="modal-header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">Update Permission</h2>
                        <!--end::Modal title-->
                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal"
                            data-kt-permissions-modal-action="close">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                        rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                        transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Notice-->
                        <!--begin::Notice-->
                        <div
                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                        rx="10" fill="currentColor" />
                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                        transform="rotate(-90 11 14)" fill="currentColor" />
                                    <rect x="11" y="17" width="2" height="2"
                                        rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <div class="fs-6 text-gray-700">
                                        <strong class="me-1">Warning!</strong>By editing the permission name, you
                                        might break the system permissions functionality. Please ensure you're
                                        absolutely certain before proceeding.
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Notice-->
                        <!--begin::Form-->
                        <form id="kt_modal_update_permission_form" class="form" action="#">
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Permission Name</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                        data-bs-trigger="hover" data-bs-html="true"
                                        data-bs-content="Permission names is required to be unique."></i>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="Enter a permission name"
                                    name="permission_name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center pt-15">
                                <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"
                                    data-kt-permissions-modal-action="cancel">Discard</button>
                                <button type="submit" class="btn btn-primary"
                                    data-kt-permissions-modal-action="submit">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Update permissions-->
        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

<script>
    $(document).ready(function() {

        $('#kt_permissions_table').DataTable({
            processing: true,
            serverSide: true,
            order: [
                [0, "desc"]
            ],
            ajax: {
                url: '/permission/data',
            },

            columns: [{
                    data: 'name'
                },
                {
                    data: 'assigned_to'
                },
                {
                    data: 'created_at',
                    render: function(d, type, row) {
                        const created_at = row.created_at;

                        if (created_at) {
                            return moment(created_at, "YYYY-MM-DD").format('MM/DD/YYYY');
                        }
                        return '';
                    }
                },
                {
                    data: 'actions',
                    render: function(a, b, data) {

                        return '<button class="edit-btn btn btn-primary" data-edit-id="' + data
                            .id + '" >Edit</button>' + '  ' +
                            '<button class="delete-btn btn btn-danger" data-delete-id="' + data
                            .id +
                            '">Delete</button>'
                    },
                }

            ],
        });

        $(document).off('click', '.delete-btn').on('click', '.delete-btn', function(e) {
            e.preventDefault();
            const id = $(this).attr('data-delete-id');
            $.get('/usermanagement/permission/delete/' + id).then(function(response) {
                $('#kt_permissions_table').DataTable().ajax.reload(null, false);
            }, function(err) {
                alert(err.responseJSON.message || err.responseJSON.error);
            });
        });
        $(document).off('click', '.edit-btn').on('click', '.edit-btn', function(e) {
            e.preventDefault();
            const id = $(this).attr('data-edit-id');
            $.get('/usermanagement/permission/edit/' + id).then(function(response) {
                $('#kt_modal').html(response).modal('show');
            }, function(err) {
                alert(err.responseJSON.message || err.responseJSON.error);
            });
        });
       
        $(document).off('click', '#sub-btn').on('click', '#sub-btn', function(e) {
            const postdata = $('#kt_modal_add_permission_form').serialize();
            $.post('/usermanagement/permission/added', postdata).then(function(response) {
                $('#kt_permissions_table').DataTable().ajax.reload(null, false);
            }, function(err) {
                alert(err.responseJSON.message || err.responseJSON.error);
            });
            e.preventDefault();
            e.stopPropagation();
        })
    });
</script>
