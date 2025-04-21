<!doctype html>
<html lang="en">
  <!--begin::Head-->
  @include('layouts.backend.header')
  {{-- ini file header --}}
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      @include('layouts.backend.navbar')
      {{-- ini file navbar --}}
      <!--end::Header-->
      <!--begin::Sidebar-->
      @include('layouts.backend.sidebar')
      {{-- ini file sidebar --}}
      <!--end::Sidebar-->
      <!--begin::App Main-->
      @include('layouts.backend.content')
      {{-- ini file content --}}
      <!--end::App Main-->
      <!--begin::Footer-->
      @include('layouts.backend.footer')
      {{-- ini file footer --}}
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    @include('layouts.backend.mainfooter')
    {{-- ini mainfooter --}}
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
