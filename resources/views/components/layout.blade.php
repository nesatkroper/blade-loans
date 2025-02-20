<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield("title", "Home")</title>
        <link
            rel="stylesheet"
            href="{{ asset('adminlte/dist/css/adminlte.css') }}"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
            integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css"
            integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg="
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
            integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI="
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
            integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
            crossorigin="anonymous"
        />
    </head>
    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
        <div class="app-wrapper">
            <x-header />
            <x-sidebar />
            <main class="app-main">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </main>
            <x-footer />
        </div>
        <script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"
            integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8="
            crossorigin="anonymous"
        ></script>
        <script>
            const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
            const Default = {
                scrollbarTheme: "os-theme-light",
                scrollbarAutoHide: "leave",
                scrollbarClickScroll: true,
            };
            document.addEventListener("DOMContentLoaded", function () {
                const sidebarWrapper = document.querySelector(
                    SELECTOR_SIDEBAR_WRAPPER
                );
                if (
                    sidebarWrapper &&
                    typeof OverlayScrollbarsGlobal?.OverlayScrollbars !==
                        "undefined"
                ) {
                    OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                        scrollbars: {
                            theme: Default.scrollbarTheme,
                            autoHide: Default.scrollbarAutoHide,
                            clickScroll: Default.scrollbarClickScroll,
                        },
                    });
                }
            });
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
            integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ="
            crossorigin="anonymous"
        ></script>
        <script>
            const connectedSortables =
                document.querySelectorAll(".connectedSortable");
            connectedSortables.forEach((connectedSortable) => {
                let sortable = new Sortable(connectedSortable, {
                    group: "shared",
                    handle: ".card-header",
                });
            });

            const cardHeaders = document.querySelectorAll(
                ".connectedSortable .card-header"
            );
            cardHeaders.forEach((cardHeader) => {
                cardHeader.style.cursor = "move";
            });
        </script>
    </body>
</html>
