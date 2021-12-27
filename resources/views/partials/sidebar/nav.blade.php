<div class="hover-scroll-y mb-10" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px" style="height: 729px;">
    <ul class="nav flex-column">
        @foreach($sidebarElements as $element)
            <li
                class="nav-item mb-2"
                data-bs-toggle="tooltip"
                data-bs-trigger="hover"
                data-bs-placement="right"
                data-bs-dismiss="click"
                data-bs-original-title="{{ $element->tooltip }}"
            >
                <a
                    class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light {{ $element->shouldHighlight(Route::current()->getName()) ? 'active' : '' }}"
                    data-bs-toggle="tab"
                    {!!
                        ($element->workspaceElement === null)
                            ? "onClick=\"window.location = '" . route($element->route) . "'\""
                            : "href=\"#{$element->workspaceElement->id}\""
                    !!}
                >
                    {!! $themeService->getSvgIcon($element->iconPath, "svg-icon-2x") !!}
                </a>
            </li>
        @endforeach
        {{--
        <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="" data-bs-original-title="Menu">
            <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light active" data-bs-toggle="tab" href="#kt_aside_nav_tab_menu">
                <span class="svg-icon svg-icon-2x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                         <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black"></path>
                         <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black"></path>
                    </svg>
                </span>
            </a>
        </li>
        <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="" data-bs-original-title="Subscription">
            <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light " data-bs-toggle="tab" href="#kt_aside_nav_tab_subscription">
                                <span class="svg-icon svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                 <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"></rect>
                                                 <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black"></rect>
                                                 <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"></rect>
                                                 <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"></rect>
                                                 </svg></span>
            </a>
        </li>
        <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="" data-bs-original-title="Tasks">
            <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light " data-bs-toggle="tab" href="#kt_aside_nav_tab_tasks">
                                <span class="svg-icon svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                 <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"></path>
                                                 <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"></path>
                                                 </svg></span>
            </a>
        </li>
        <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="" data-bs-original-title="Notifications">
            <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light " data-bs-toggle="tab" href="#kt_aside_nav_tab_notifications">
                                <span class="svg-icon svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                 <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"></path>
                                                 <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"></path>
                                                 </svg></span>
            </a>
        </li>
        <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="" data-bs-original-title="Authors">
            <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light " data-bs-toggle="tab" href="#kt_aside_nav_tab_authors">
                <span class="svg-icon svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                 <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13H13V10C13 9.4 12.6 9 12 9C11.4 9 11 9.4 11 10V13H8C7.4 13 7 13.4 7 14C7 14.6 7.4 15 8 15H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V15H16C16.6 15 17 14.6 17 14C17 13.4 16.6 13 16 13Z" fill="black"></path>
                                                 <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                                 </svg></span>
                <!--end::Svg Icon-->
            </a>
            <!--end::Nav link-->
        </li>
        --}}
    </ul>
</div>
