<!--begin::Header-->
<div id="kt_header" class="header">
    <!--begin::Header top-->
    <div class="header-top d-flex align-items-stretch flex-grow-1">
        <!--begin::Container-->
        <div class="d-flex container-xxl align-items-stretch">
            <!--begin::Brand-->
            <div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
                <!--begin::Heaeder navs toggle-->
                <button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n3 me-2" id="kt_header_navs_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </button>
                <!--end::Heaeder navs toggle-->
                <!--begin::Logo-->
                <a href="" class="d-flex align-items-center">
                    Hafez Logo
                </a>
                <!--end::Logo-->
                <!--begin::Tabs wrapper-->
                <div class="align-self-end overflow-auto" id="kt_brand_tabs">
                    <!--begin::Header tabs wrapper-->
                    <div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
                        <!--begin::Header tabs-->
                        <ul class="nav flex-nowrap text-nowrap">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#kt_header_navs_tab_1">آموزش</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_2">حسابداری</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_3">دانشجویان</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_4">اساتید</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_5">آزمون ها</a>
                            </li>
                        </ul>
                        <!--begin::Header tabs-->
                    </div>
                    <!--end::Header tabs wrapper-->
                </div>
                <!--end::Tabs wrapper-->
            </div>
            <!--end::Brand-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header top-->
    <!--begin::Header navs-->
    <div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0 overflow-hidden overflow-lg-visible" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
        <!--begin::Container-->
        <div class="d-lg-flex container-xxl w-100">
            <!--begin::Wrapper-->
            <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
                <!--begin::Header tab content-->
                <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade active show" id="kt_header_navs_tab_1">
                        <!--begin::Menu wrapper-->
                        <div class="header-menu flex-column align-items-stretch flex-lg-row">
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold align-items-stretch flex-grow-1 px-2 px-lg-0" id="#kt_header_menu" data-kt-menu="true">

                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">

                                    <span class="menu-link py-3">
															<span class="menu-title">اطلاعات</span>
															<span class="menu-arrow d-lg-none"></span>
														</span>

                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                                        <!--begin:Pages menu-->
                                        <div class="menu-active-bg px-4 px-lg-0">
                                            <!--begin:Tabs nav-->
                                            <div class="d-flex w-100 overflow-auto">
                                                <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                    <!--begin:Nav item-->
                                                    <li class="nav-item mx-lg-1">
                                                        <a class="nav-link py-3 py-lg-6 text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">آموزش</a>
                                                    </li>
                                                    <!--end:Nav item-->
                                                </ul>
                                            </div>
                                            <!--end:Tabs nav-->
                                            <!--begin:Tab content-->
                                            <div class="tab-content py-4 py-lg-8 px-lg-7">
                                                <!--begin:Tab pane-->
                                                <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_authentication">
                                                    <!--begin:Row-->
                                                    <div class="row">
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <div class="mb-6">
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">اطلاعات آموزش</h4>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="{{ route('category') }}" class="menu-link">
                                                                        <span class="menu-title">دوره های آموزشی</span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="{{ route('group') }}" class="menu-link">
                                                                        <span class="menu-title">گروه های اموزشی</span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="{{ route('level') }}" class="menu-link">
                                                                        <span class="menu-title">سطوح آموزشی</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <div class="mb-6">
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4"> مرتبط با کلاس ها</h4>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="" class="menu-link">
                                                                        <span class="menu-title">ساعت ها</span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="" class="menu-link">
                                                                        <span class="menu-title">محل برگزاری</span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="" class="menu-link">
                                                                        <span class="menu-title">انواع کلاس ها</span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="" class="menu-link">
                                                                        <span class="menu-title">انواع وضعیت کلاس ها</span>
                                                                    </a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <div class="mb-6">
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4"> مرتبط با ترم ها</h4>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="" class="menu-link">
                                                                        <span class="menu-title">انواع ترم ها</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                            <div class="mb-6">
                                                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">حسابداری</h4>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="" class="menu-link">
                                                                        <span class="menu-title">بانک ها</span>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item p-0 m-0">
                                                                    <a href="" class="menu-link">
                                                                        <span class="menu-title">حساب های بانکی</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>

                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_header_navs_tab_2">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-primary fw-bold" href="">شهریه ها</a>
                                <a class="btn btn-sm btn-light-success fw-bold" href="">حساب ها</a>
                                <a class="btn btn-sm btn-light-danger fw-bold" href="">بدهکاران/بستانکاران</a>
                                <a class="btn btn-sm btn-light-info fw-bold" href="">پرداخت ها</a>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_header_navs_tab_3">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-primary fw-bold" href="">ثبت مشخصات</a>
                                <a class="btn btn-sm btn-light-success fw-bold" href="">لیست زبان آموزان</a>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tab panel-->
                    <!--begin::Tab panel-->
                    <div class="tab-pane fade" id="kt_header_navs_tab_4">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                            <div class="d-flex flex-column flex-lg-row gap-2">
                                <a class="btn btn-sm btn-light-primary fw-bold" href="../../demo20/dist/apps/ecommerce/catalog/products.html">ثبت مشخصات</a>
                                <a class="btn btn-sm btn-light-danger fw-bold" href="../../demo20/dist/apps/file-manager/folders.html">لیست اساتید</a>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Tab panel-->
                </div>
                <!--end::Header tab content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header navs-->
</div>
<!--end::Header-->
