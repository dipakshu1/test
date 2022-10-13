<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
			<!--begin::Modal header-->
			<div class="modal-header" id="kt_modal_add_user_header">
				<!--begin::Modal title-->
				<h2 class="fw-bold">Add Menus</h2>
				<!--end::Modal title-->
				<!--begin::Close-->
				<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal"
					data-kt-users-modal-action="close">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24"
							fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16"
								height="2" rx="1"
								transform="rotate(-45 6 17.3137)"
								fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1"
								transform="rotate(45 7.41422 6)"
								fill="currentColor" />
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
				<form id="kt_modal_add_user_form" class="form" action="#"
					method="POST" enctype="multipart/form-data">
					@csrf
					<!--begin::Scroll-->
					<div class="d-flex flex-column scroll-y me-n7 pe-7"
						id="kt_modal_add_user_scroll" data-kt-scroll="true"
						data-kt-scroll-activate="{default: false, lg: true}"
						data-kt-scroll-max-height="auto"
						data-kt-scroll-dependencies="#kt_modal_add_user_header"
						data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
						data-kt-scroll-offset="300px">

						<!--begin::Input group-->
                        {{-- <div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Parent id</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" name="parent id"
								class="form-control form-control-solid mb-3 mb-lg-0"
								placeholder="Parent_id" />
							<!--end::Input--> --}}
						</div>
                        <div class="fv-row mb-7">
                            <label class="fw-semibold fs-6 mb-2">
                                    Parent Menu</label>
                                <select name="parent_id" class="form-select form-select-solid" data-control="select2"
                                    data-placeholder="Select an option">
                                    <option  value="" >Choose Parent</option>
                                    @foreach($all_menus as $menu)
                                    <option value=" {{ $menu->id }}">
										{{ $menu->name }}
									</option>
                                    
                                    @endforeach
                                </select>
                            </div>
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Menu
								Name</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" name="name"
								class="form-control form-control-solid mb-3 mb-lg-0"
								placeholder="Menu Name" value="Menu" />
							<!--end::Input-->
						</div>
                        <div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Route</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" name="route"
								class="form-control form-control-solid mb-3 mb-lg-0"
								placeholder="route"  />
							<!--end::Input-->
						</div>
                        <div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Sequence</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" name="seq"
								class="form-control form-control-solid mb-3 mb-lg-0"
								placeholder="seq"  />
							<!--end::Input-->
						</div>
                        <div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="fw-semibold fs-6 mb-2">SideBar Sequence</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" name="sidebar_seq"
								class="form-control form-control-solid mb-3 mb-lg-0"
								placeholder="sidebar seq"  />
							<!--end::Input-->
						</div>
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="fw-semibold fs-6 mb-2"> Icon
							</label>
							<!--end::Label-->
							<!--begin::Input-->
							<!--begin::Image input-->
							<br>
							<div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
								<!--begin::Preview existing avatar-->
								<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg);"></div>
								<!--end::Preview existing avatar-->
								<!--begin::Label-->
								<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change icon">
									<i class="bi bi-pencil-fill fs-7"></i>
									<!--begin::Inputs-->
									<input type="file" name="icon" accept=".png, .jpg, .jpeg" />
									<input type="hidden" name="icon_remove" />
									<!--end::Inputs-->
								</label>
								<!--end::Label-->
								<!--begin::Cancel-->
								<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel icon">
									<i class="bi bi-x fs-2"></i>
								</span>
								<!--end::Cancel-->
								<!--begin::Remove-->
								<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove icon">
									<i class="bi bi-x fs-2"></i>
								</span>
								<!--end::Remove-->
							</div>
							<!--end::Image input-->
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
					
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label class="required fw-semibold fs-6 mb-2">Icon
								Class</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" name="icon_class"
								class="form-control form-control-solid mb-3 mb-lg-0"
								placeholder="icon class" />
							<!--end::Input-->
						</div>
						<div class="fv-row mb-7">
							<!--begin::Label-->
							<label
								class="required fw-semibold fs-6 mb-2">Is sidebar</label>
							<!--end::Label-->
							<!--begin::Input-->
							<div class="form-check form-switch form-check-custom form-check-solid">
								<input name="is_sidebar" class="form-check-input" type="checkbox"  value="1" id="flexSwitchDefault"/>
								<label class="form-check-label" for="flexSwitchDefault">
									SideBar or not
								</label>
							</div>
							<!--end::Input-->
						</div>
					</div>
					<!--end::Scroll-->
					<!--begin::Actions-->
					<div class="text-center pt-15">
						<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal"
							data-kt-users-modal-action="cancel">Discard</button>
						<button type="submit" class="btn btn-primary"
							data-kt-users-modal-action="submit">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please
								wait...
								<span
									class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
<!--end::Modal - Add task-->