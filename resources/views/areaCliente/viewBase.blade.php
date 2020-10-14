<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ env('APP_URL') }}imagens/logo-naj-2020_N - Cópia.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />

    <link href="{{ env('APP_URL') }}ampleAdmin/dist/css/style.min.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ env('APP_URL') }}naj-datatable/styles/alert.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}naj-datatable/styles/loading.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}naj-datatable/styles/modal.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}naj-datatable/styles/index.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}naj-datatable/styles/scrollbar.css">

    <title>@yield('title')</title>

    @yield('css')
</head>

<body>    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>                        
                    <b class="logo-icon ml-5">
                        <img src="{{ env('APP_URL') }}imagens/logo-naj-125x50px.png" alt="homepage" class="dark-logo" />
                    </b>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-right mr-auto"><li class="nav-item dropdown"></li></ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::check())
                                    <span class="ml-2 user-text font-medium">{{ Auth::user()->nome }}</span><span class="fas fa-angle-down ml-2 user-text"></span>
                                @else
                                    <span class="ml-2 user-text font-medium">Usuário</span><span class="fas fa-angle-down ml-2 user-text"></span>
                                @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                    <div class="ml-2">
                                        <h4 class="mb-0">{{ Auth::user()->nome }}</h4>
                                        <p class=" mb-0 text-muted">{{ Auth::user()->email_recuperacao }}</p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)" id="logout"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('ac/home') }}" aria-expanded="false"><i class="fas fa-home"></i>
							<span class="hide-menu">Início</span></a>
						</li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('ac/mensagens') }}" aria-expanded="false"><i class="far fa-comments"></i>
							<span class="hide-menu">Minhas Mensagens</span></a>
						</li>
                        <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('ac/processos') }}" aria-expanded="false"><i class="fas fa-balance-scale"></i>
							<span class="hide-menu">Meus Processos</span></a>
						</li>
						<li class="sidebar-item"> <a class="sidebar-link" href="{{ url('ac/atividades') }}" aria-expanded="false"><i class="fas fa-tasks"></i>
							<span class="hide-menu">Atividades</span></a>
						</li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!--loader do najFunctions é aplicado sobre o "page-wrapper" por default-->
        <div class="page-wrapper" style="display: block; height: 100%;">
            @yield('content')
        </div>
    </div>
    <div style="display: none" id="active-layer">@yield('active-layer')</div>

    <script src="{{ env('APP_URL') }}ampleAdmin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ env('APP_URL') }}ampleAdmin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="{{ env('APP_URL') }}ampleAdmin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ env('APP_URL') }}ampleAdmin/dist/js/app.init.mini-sidebar.js"></script>
	<script src="{{ env('APP_URL') }}ampleAdmin/dist/js/app.init.horizontal-fullwidth.js"></script>	
	<script src="{{ env('APP_URL') }}ampleAdmin/dist/js/app.js"></script>	
    <script src="{{ env('APP_URL') }}ampleAdmin/dist/js/app-style-switcher.js"></script>
    <script src="{{ env('APP_URL') }}ampleAdmin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ env('APP_URL') }}ampleAdmin/assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="{{ env('APP_URL') }}ampleAdmin/dist/js/waves.js"></script>
    <script src="{{ env('APP_URL') }}ampleAdmin/dist/js/sidebarmenu.js"></script>
    <script src="{{ env('APP_URL') }}ampleAdmin/dist/js/custom.min.js"></script>

    <script src="{{ env('APP_URL') }}js/input-mask/jquery.inputmask.js"></script>
    <script src="{{ env('APP_URL') }}js/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="{{ env('APP_URL') }}js/input-mask/jquery.inputmask.extensions.js"></script>
    <script src="{{ env('APP_URL') }}js/jQuery-Mask-Plugin/jquery.mask.min.js"></script>

    <script src="{{ env('APP_URL') }}js/axios.js"></script>
    <script src="{{ env('APP_URL') }}js/Naj.js"></script>
    <script src="{{ env('APP_URL') }}js/NajFunctions.js"></script>

    <script>
        const baseURL           = "{{ env('APP_URL') }}" + "{{ env('APP_ALIAS') }}" + "/";
        const baseURLCpanel     = "{{ env('CPANEL_URL') }}";
        const appAlias          = "{{ env('APP_ALIAS') }}";
        const appUrl            = "{{ env('APP_URL') }}";
        const nomeUsuarioLogado = "{{ Auth::user()->nome }}";
        const tipoUsuarioLogado = "{{ Auth::user()->usuario_tipo_id }}";
        const idUsuarioLogado   = "{{ Auth::user()->id }}";

        $(window).on('load', () => {
            identificador = sessionStorage.getItem('@NAJ_CLIENTE/identificadorEmpresa');
            if(!identificador) {
                //Busca o identificador
                axios({
                    method: 'get',
                    url: `${baseURL}empresas/identificador`
                }).then(response => {
                    if(!response.data) return;

                    sessionStorage.setItem('@NAJ_CLIENTE/identificadorEmpresa', response.data);
                });
            }

            $('#logout').on('click', onClickLogout);
        });

        function onClickLogout() {
            window.location.href = "{{ url('auth/logout') }}";
        }

    </script>
    <script src="{{ env('APP_URL') }}js/datatable/api.js"></script>
    <script src="{{ env('APP_URL') }}naj-datatable/src/sweetalert2.min.js"></script>
    <script src="{{ env('APP_URL') }}naj-datatable/src/functions.js"></script>
    <script src="{{ env('APP_URL') }}naj-datatable/src/TableModel.js"></script>
    <script src="{{ env('APP_URL') }}naj-datatable/src/Table.js"></script>
    <script src="{{ env('APP_URL') }}naj-datatable/src/alerts.js"></script>
    <script src="{{ env('APP_URL') }}naj-datatable/src/masks.js"></script>

    @yield('scripts')

    </body>
</html>