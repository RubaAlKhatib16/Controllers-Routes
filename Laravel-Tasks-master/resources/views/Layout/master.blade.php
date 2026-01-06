<!DOCTYPE html>
<html lang="en">
    @include('layout.head')

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">

            @include('layout.header') <!-- Sidebar + Topbar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    <main class="container-fluid mt-4">
                        @yield('content')
                    </main>
                </div>

                @include('layout.footer') <!-- Footer + Scripts -->

            </div>
        </div>
    </body>
</html>
