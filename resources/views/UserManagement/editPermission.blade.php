    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Edit a Permission</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal" data-kt-permissions-modal-action="close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
 <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
    <!--begin::Form-->
    <form id="kt_modal_add_permission_form" class="form" method="POST"  action="/usermanagement/permission/update/{{ $per->id }}}">
        @csrf
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold form-label mb-2">
                <span class="required">Permission Name</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique."></i>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-solid" placeholder="Enter a permission name" name="name" value="{{ $per->name }}" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Checkbox-->
            <label class="fs-6 fw-semibold form-label mb-2">
                <span class="required">Assigned To</span>
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Permission names is required to be unique."></i>
            </label>
            <input class="form-control form-control-solid" placeholder="Enter a permission name" name="assigned_to" value="{{ $per->assigned_to }}" />

            <!--end::Checkbox-->
        </div>
        
        <!--end::Input group-->
        <!--begin::Disclaimer-->
        <div class="text-gray-600">Permission set as a
        <strong class="me-1">Core Permission</strong>will be locked and
        <strong class="me-1">not editable</strong>in future</div>
        <!--end::Disclaimer-->
        <!--begin::Actions-->
        <div class="text-center pt-15">
            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" data-kt-permissions-modal-action="cancel">Discard</button>
            <button type="submit" id="edit-submit" class="btn btn-primary" data-bs-dismiss="modal" data-kt-permissions-modal-action="submit">
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


<script>
     $(document).off('click', '#edit-submit').on('click', '#edit-submit', function(e) {
            e.preventDefault();
            const postdata = $('#kt_modal_add_permission_form').serialize();
            $.post('/usermanagement/permission/update/{{ $per->id }}',postdata).then(function(response) {
                $('#kt_permissions_table').DataTable().ajax.reload(null, false);
            }, function(err) {
                alert(err.responseJSON.message || err.responseJSON.error);
            });
        });
</script>