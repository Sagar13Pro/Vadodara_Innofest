@php use App\Models\User; $avatar = User::select('Avatar')->where('email',session('session_mail'))->get()[0]->Avatar;@endphp
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../assets/images/favicon.png') }}">
    <title>Dashboard</title>
    <!-- Custom CSS -->
    <link href="{{ asset('user/programs/assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/programs/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('user/programs/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('user/programs/dist/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="javascript:void(0)">
                            <!-- Logo text -->
                            <span class="logo-text">
                                <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"> Welcome</h2>
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">


                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ $avatar  }}" alt="user" class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark">
                                        {{ session()->get('session_name') }}
                                    </span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="{{ route('user.profile', session()->get('session_id')) }}"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#bs-example-modal-lg"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                    Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item selected"> <a class="sidebar-link sidebar-link active" href="javascript:void(0)" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Hackathon</span></li>


                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('user.apply', session()->get('session_id')) }}" aria-expanded="false">
                                <i data-feather="tag" class="feather-icon"></i>
                                <span class="hide-menu">Apply</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1"><span id="greet">
                                ,</span>{{ session()->get('session_name') }}</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <x-alert />
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Application Statistics</h4>
                                </div>
                                @if (count($proposals) >= 1)
                                <div class="table-responsive">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Team ID
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center ">
                                                    Team Name
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Problem Title
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Current Status
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($proposals as $item)
                                            <tr>
                                                <td class="border-top-0 text-dark text-center px-2 py-4 font-weight-medium ">
                                                    <b>{{ $item->teamID }}</b>
                                                </td>
                                                <td class="border-top-0 text-dark text-center px-2 py-4 font-weight-medium">
                                                    {{ $item->teamName }}
                                                </td>
                                                <td class="border-top-0 text-dark text-center px-2 py-4 font-weight-medium">
                                                    {{ $item->problemTitle }}
                                                </td>
                                                <td class="border-top-0 text-dark text-center px-2 py-4 font-weight-medium">
                                                    {{ $item->id }}
                                                </td>
                                                <td class="border-top-0 text-dark text-center px-2 py-4 font-weight-medium">
                                                    <div class="action-icon">
                                                        <button type="button" class="btn button-edit" onclick="event.preventDefault();
                                                    document.getElementById('form-edit-{{ $item->id }}').submit();"> <i data-feather="edit" class="svg-icon mr-2 ml-1"></i>Edit</button>

                                                        <form id="{{ 'form-edit-' . $item->id }}" action="{{ route('proposal.edit', $item->id) }}" method="post" style="display: none;">
                                                            @csrf
                                                        </form>
                                                        <button type="button" class="btn button-view get-id" data-id={{ $item->id }} data-toggle="modal" data-target="#full-width-modal"><i data-feather="eye" class="svg-icon mr-2 ml-1"></i>View</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @else
                                <div style="text-align: center;font-size:18px;"><b>No-Data avaiable</b></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->


            <!-- Full width modal content -->
            <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-full-width">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="fullWidthModalLabel">Proposal Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Team ID</th>
                                        <td id="data-1"></td>
                                        <th>Team Name</th>
                                        <td id="data-2"></td>
                                    </tr>
                            </div>
                            <tr>
                                <th>Team Leader Name</th>
                                <td id="data-3"></td>
                                <th>Team Leader Email Id</th>
                                <td id="data-4"></td>
                                <th>Team Leader Contact no</th>
                                <td id="data-5"></td>
                            </tr>
                            <tr>
                                <th>Team Mentor Name</th>
                                <td id="data-6"></td>
                                <th>Team Mentor Email Id</th>
                                <td id="data-7"></td>
                                <th>Team Mentor Contact no</th>
                                <td id="data-8"></td>
                            </tr>
                            <tr>
                                <th>Problem Id</th>
                                <td id="data-9"></td>
                                <th>Problem Title</th>
                                <td id="data-10"></td>
                                <th>Problem Category</th>
                                <td id="data-11"></td>
                            </tr>
                        </div>
                        </table>
                        <table class="table table-bordered table-striped d-flex flex-wrap">
                            <tr>
                                <th>Problem Description</th>
                                <td id="data-12"></td>
                                <th>Solution Brief</th>
                                <td id="data-13"></td>
                            </tr>
                            <tr>
                                <th>Technology used/Methdology</th>
                                <td id="data-14"></td>
                                <th>Timeline for the Development of Solution</th>
                                <td id="data-15"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <!-- ============================================================== -->
    <!--  Modal content for the above example -->
    <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Ary you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"><i data-feather="x" class="feather-icon"></i> Close</button>
                    <button id="logout" type="button" class="btn btn-primary"><i data-feather="log-out" class="feather-icon"></i> Logout</button>
                    <form id="logout-form" action="/logout" method="get">
                        @csrf
                    </form>
                    <script type="text/javascript">
                        let btn = document.getElementById('logout');
                        btn.onclick = function() {
                            document.getElementById('logout-form').submit();
                        }

                    </script>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center text-muted">
        All Rights Reserved by <b>Parul University</b>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('user/programs/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('user/programs/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('user/programs/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{ asset('user/programs/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('user/programs/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('user/programs/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}">
    </script>
    <script src="{{ asset('user/programs/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src=" {{ asset('user/programs/dist/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('user/programs/assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('user/programs/assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('user/programs/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('user/programs/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
    </script>
    <script src="{{ asset('user/programs/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('user/programs/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('user/programs/assets/extra-libs/jvector/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('user/programs/dist/js/pages/dashboards/dashboard1.js') }}"></script>

    <script type="text/javascript">
        const date = new Date;
        let hours = date.getHours();
        if (hours == 00) {
            document.getElementById('greet').innerHTML = 'Good Evening' + ', ';
        } else {
            let status = (hours <= 11 && hours >= 5) ? "Good Morning" : ((hours < 17 && hours >= 12) ? "Good Afternoon" :
                "Good Evening");
            document.getElementById('greet').innerHTML = status + ', ';
        }

    </script>
    <script>
        $(document).ready(function() {
            $('.get-id').click(function() {
                const id = $(this).data('id');
                $.get("/user/dashboard/view/" + id, function(response) {
                    if (response.success) {
                        let data1 = document.getElementById('data-1');
                        let data2 = document.getElementById('data-2');
                        let data3 = document.getElementById('data-3');
                        let data4 = document.getElementById('data-4');
                        let data5 = document.getElementById('data-5');
                        let data6 = document.getElementById('data-6');
                        let data7 = document.getElementById('data-7');
                        let data8 = document.getElementById('data-8');
                        let data9 = document.getElementById('data-9');
                        let data10 = document.getElementById('data-10');
                        let data11 = document.getElementById('data-11');
                        let data12 = document.getElementById('data-12');
                        let data13 = document.getElementById('data-13');
                        let data14 = document.getElementById('data-14');
                        let data15 = document.getElementById('data-15');

                        data1.innerHTML = response.data['teamID'];
                        data2.innerHTML = response.data['teamName'];
                        data3.innerHTML = response.data['teamLeaderName'];
                        data4.innerHTML = response.data['teamLeaderEmail'];
                        data5.innerHTML = response.data['teamLeaderMobile'];
                        data6.innerHTML = response.data['mentorName'];
                        data7.innerHTML = response.data['mentorEmail'];
                        data8.innerHTML = response.data['mentorMobile'];
                        data9.innerHTML = response.data['problemID'];
                        data10.innerHTML = response.data['problemTitle'];
                        data11.innerHTML = response.data['problemCategory'];
                        data12.innerHTML = response.data['problemDescription'];
                        data13.innerHTML = response.data['solutionBrief'];
                        data14.innerHTML = response.data['methodology'];
                        data15.innerHTML = response.data['timeline'];

                    }
                });
            });
        });

    </script>
</body>

</html>
