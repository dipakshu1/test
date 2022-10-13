<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
    <!--begin::Navbar-->
                         <div class="d-flex align-items-stretch" id="kt_header_nav">
                             <!--begin::Menu wrapper-->
                             <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                 <!--begin::Menu-->
                                 <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-state-primary menu-title-gray-800 menu-arrow-gray-400 align-items-stretch my-5 my-lg-0 px-2 px-lg-0 fw-semibold fs-6" id="#kt_header_menu" data-kt-menu="true">
                                     <!--begin:Menu item-->
                                     @foreach ($all_menus as $menu)
                                        @if($menu->parent_id > 0)
                                            @continue
                                        @endif
                                     <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                         <!--begin:Menu link-->
                                         <span class="menu-link py-3">
                                             <span class="menu-title">{{ $menu->name }}</span>
                                             <span class="menu-arrow d-lg-none"></span>
                                         </span>
                                         <!--end:Menu link-->
                                         <!--begin:Menu sub-->
                                             
                                         <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                             <!--begin:Menu item-->
                                         @foreach ($menu->child as $child)

                                             <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                                                 <!--begin:Menu link-->
                                                 <span class="menu-link py-3">

                                                     <span class="menu-icon">

                                                         <i class="bi bi-patch-check fs-3"></i>
                                                     </span>
                                                     <span class="menu-title">{{ $child->name }}</span>
                                                     <span class="menu-arrow"></span>
                                                 </span>
                                                 <!--end:Menu link-->
                                                 <!--begin:Menu sub-->
                                                 <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                     <!--begin:Menu item-->
                                                     @foreach ($child->child as $subchild)
                                                     <div class="menu-item">
                                                        <!--begin:Menu link-->
                                                        <a class="menu-link py-3" href="../../demo13/dist/apps/projects/list.html">
                                                            <span class="menu-bullet">
                                                                <span class="bullet bullet-dot"></span>
                                                            </span>
                                                            <span class="menu-title">{{ $subchild->name }}</span>
                                                        </a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                     @endforeach
                                                    
                                                     <!--end:Menu item-->
                                                   
                                                     <!--begin:Menu item-->
                                                     
                                                     <!--end:Menu item-->
                                                 </div>
                                                 <!--end:Menu sub-->
                                             </div>
                                         @endforeach

                                             <!--end:Menu item-->
                                         </div>
                                         <!--end:Menu sub-->
                                     </div>
                                     @endforeach
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                         <!--begin:Menu link-->
                                         <span class="menu-link py-3">
                                             <span class="menu-title">Setting</span>
                                             <span class="menu-arrow d-lg-none"></span>
                                         </span>
                                         <!--end:Menu link-->
                                         <!--begin:Menu sub-->
                                         <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                             <!--begin:Menu item-->
                                             <div class="menu-item">
                                                 <!--begin:Menu link-->
                                                 <a class="menu-link def py-3" href="/setting/menu" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                     <span class="menu-icon">
                                                         <i class="fa-light fa-gear"></i>
                                                     </span>
                                                     <span class="menu-title">Add Menu</span>
                                                 </a>
                                                 <!--end:Menu link-->
                                             </div>
                                             <!--end:Menu item-->
                                         </div>
                                         <!--end:Menu sub-->
                                     </div>
                                     <!--end:Menu item-->
                                     <!--begin:Menu item-->
                                     <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                        <!--begin:Menu link-->
                                        <span class="menu-link py-3">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                            <span class="menu-title">Logout</span>
                                         </a>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </span>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                     </form>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                 </div>
                                 <!--end::Menu-->
                             </div>
                             <!--end::Menu wrapper-->
                         </div>
                         <!--end::Navbar-->
     <!--begin::Toolbar wrapper-->
     <!--end::Toolbar wrapper-->
 </div>