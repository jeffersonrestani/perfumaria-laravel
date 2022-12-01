<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!DOCTYPE html>
            <html lang="pt-br">

            <head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta name="description" content="">
                <meta name="author" content="">

                <link rel="stylesheet" href="/css/all.mim.css">
                <link rel="stylesheet" href="/css/bootstrap.css">
                <link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css">
                <link rel="stylesheet" href="/css/sb-admin-2.min.css">

                <title>Perfumaria</title>

            </head>

            <body id="page-top">

                <div id="wrapper">
                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
                        <br /><br /><br />
                        <a class="sidebar-brand d-flex align-items-center justify-content-center">
                            <div class="sidebar-brand-icon rotate-n-0">
                                <img src=/img/perfume-1.png width=100%>
                            </div>

                        </a>


                    </br></br></br>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('brand.create') }}">
                                    <i class="fas fa-fw fa-chart-area"></i>
                                    <span>Cadastrar Marca</span></a>
                            </li>
                            <hr class="sidebar-divider">


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('brand.index') }}">
                                    <i class="fas fa-fw fa-table"></i>
                                    <span>Listar Marca</span></a>
                            </li>
                            <hr class="sidebar-divider">


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('perfume.create') }}">
                                    <i class="fas fa-fw fa-chart-area"></i>
                                    <span>Cadastrar Perfume</span></a>
                            </li>
                            <hr class="sidebar-divider">


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('perfume.index') }}">
                                    <i class="fas fa-fw fa-table"></i>
                                    <span>Listar Perfume</span></a>
                            </li>
                    </ul>


                    <div id="content-wrapper" class="d-flex flex-column">
                        <div id="content">

                            <body class="bg-gradient-primary">

                                @yield('content-here')

                                <footer class="sticky-footer bg-white fixed-bottom p-2">
                                    <div class="container my-auto">
                                        <div class="copyright text-center my-auto">
                                            <span>Copyright &copy; 2022. Todos os direitos reservados.</span>
                                        </div>
                                    </div>
                                </footer>
                            </body>
                        </div>
                    </div>
                </div>

            </body>

            </html>
        </h2>
    </x-slot>
</x-app-layout>
