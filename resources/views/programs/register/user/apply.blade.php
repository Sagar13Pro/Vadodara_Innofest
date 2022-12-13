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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Apply</title>
    <!-- This page plugin CSS -->
    <link href="{{asset('user/programs/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('user/programs/dist/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('user/programs/assets/libs/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
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


                        <!-- ============================================================== -->


                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">

                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ $avatar  }}" alt="user" class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark">{{session()->get('session_name')}}</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="{{route('user.profile',session()->get('session_id'))}}"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                                    My Profile
                                </a>


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
                        <li class="sidebar-item "> <a class="sidebar-link sidebar-link " href="{{route('user.dashboard',session()->get('session_id'))}}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Hackathon</span></li>


                        <li class="sidebar-item selected">
                            <a class="sidebar-link active" href="javascript:void(0)" aria-expanded="false">
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Proposal</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="{{route('user.dashboard',session()->get('session_id'))}}" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Apply</li>
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
            <div class="container-fluid" style="padding: 35px 0px;">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- ======= F.A.Q Section ======= -->
                <section id="faq" class="faq">
                    <div class="container" data-aos="fade-up">
                        <x-alert />
                        <form id="proposal-form" action="{{route('proposal.store',session()->get('session_id'))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
                                <!-- Team Details-->
                                <li>
                                    <a data-toggle="collapse" class="collapsed" href="#faq1">Team Details<i class="ion-android-remove"></i></a>
                                    <div id="faq1" class="collapse" data-parent="#faq-list">
                                        <div class="card" style="margin:5px 20px 20px 20px;">
                                            <div class="card-body">
                                                @if(is_object($detail ?? '') || is_array($detail ?? ''))
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Team name<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <input type="text" name="_teamName" class="form-control" placeholder="Enter Team Name" value="{{old('_teamName')}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style="border-color: white;">
                                                    @foreach($users as $item)
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Team Leader Name<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <input type="text" name="_teamLeaderName" class="form-control" placeholder="Enter Team Leader Name" value="{{$item->firstName}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Team Leader Email Id<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <input type="text" name="_teamLeaderEmailId" class="form-control" placeholder="Enter Team Leader Email" value="{{$item->email}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Team Leader Contact no<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <input type="number" name="_teamLeaderContactNo" class="form-control" placeholder="Enter Team Leader Contact no" value="{{old('_mentorContactNo')}}" required>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    <hr style="border-color: white;">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Mentors Name<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <input type="text" name="_mentorsName" class="form-control" placeholder="Enter mentors Name" value="{{old('_mentorsName')}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Mentor Email<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <input type="text" name="_mentorEmail" class="form-control" placeholder="Enter Mentor Email" value="{{old('_mentorEmail')}}" required>
                                                            </div>
                                                        </div>
                                                        <div class=" col-md-4">
                                                            <div class="form-group">
                                                                <label>Mentor Contact No<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <input type="text" name="_mentorContactNo" class="form-control" placeholder="Enter Mentor Contact no." value="{{old('_mentorContactNo')}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr style=" border-color: white;">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Institute</label>
                                                                <input type="text" name="_institute" class="form-control" placeholder="Enter Institute Name" value="{{old('_institute')}}" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Team Members Name</label>
                                                                <textarea class="form-control" rows="2" name="_teamMembers" placeholder="Team Members Name" required>{{ old('_teamMembers') }}</textarea>
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Note: Maximum participant are allowed upto 4 members only including leader</small>
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Note: One female participant is complusory.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <h5>Please Select Problem Statement First &emsp; </h5>
                                                <a href="../programs/Hackathon"><button class="btn btn-success">Go to Home</button></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--/Team Details End-->

                                <!-- Proposal Submission -->
                                <li>
                                    <a data-toggle="collapse" class="collapsed" href="#faq2">Proposal Submission<i class="ion-android-remove"></i></a>
                                    <div id="faq2" class="collapse" data-parent="#faq-list">
                                        <div class="card" style="margin:5px 20px 20px 20px;">
                                            <div class="card-body">

                                                @if(is_object($detail ?? '') || is_array($detail ?? ''))
                                                <div class="col-xl-12">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Problem Id</label>
                                                                <input type="text" name="_complaintId" class="form-control" id="readonly" placeholder="Readonly Text" value="{{$detail->id}}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Problem Title</label>
                                                                <textarea class="form-control" name="_problemTitle" rows="3" id="readonly" placeholder="Readonly Text" readonly>{{$detail->Problem_Title}}
                                                                </textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Problem Description</label>
                                                                <textarea class="form-control" name="_problemDescription" rows="3" id="readonly" placeholder="Readonly Text" readonly>{{$detail->problem_Description}}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4" style="display: none;">
                                                            <div class="form-group">
                                                                <label>Problem Category</label>
                                                                <textarea class="form-control" name="_problemCategory" rows="3" id="readonly" placeholder="Readonly Text" readonly>{{$detail->Problem_Category}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Solution Brief<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <textarea class="form-control" rows="3" name="_solutionBrief" required>{{ old('_solutionBrief') }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Technology used/Methdology<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <textarea class="form-control" rows="3" name="_technoUsed" required>{{ old('_technoUsed') }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Timeline for the Development of Solution<span style="color:#ff5e13;">&nbsp;*</span></label>
                                                                <textarea class="form-control" rows="3" name="_timelineDev" required>{{ old('_timelineDev') }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Figures/diagrams/charts</label>
                                                                <input type="file" class="form-control-file" id="exampleInputFile" name="image[]" accept="image/*" multiple>
                                                                <small id="name1" class="badge badge-default badge-info form-text text-white float-left">Please Upload only JPEG/JPG/PNG File</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bs-example-modal-sm"><i class="fas fa-check custom-icon" style="position: inherit;font-size: 15px;"></i>
                                                                Submit Proposal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <h5>Please Select Problem Statement First &emsp; </h5>
                                                <a href="../programs/Hackathon"><button class="btn btn-success">Go to Home</button></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- Proposal Submission End-->
                            </ul>
                        </form>
                    </div>
                </section>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="mySmallModalLabel">Are Sure to Submit?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <button type="button" class="btn btn-light" data-dismiss="modal"><i data-feather="edit" class="feather-icon"></i> Edit</button>&emsp;&emsp;
                            <button id="Sbutton" type="submit" class="btn btn-primary"><i data-feather="check-circle" class="feather-icon"></i> Submit</button>
                            <script>
                                let submitBtn = document.getElementById('Sbutton');
                                submitBtn.onclick = function() {
                                    document.getElementById('proposal-form').submit();
                                }

                            </script>
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
                            <form id="logout-form" action="/logout" method="">
                                @csrf
                            </form>
                            <script>
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
    <script src="{{asset('user/programs/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('user/programs/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('user/programs/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="{{asset('user/programs/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('user/programs/dist/js/feather.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('user/programs/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('user/programs/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <script src="{{asset('user/programs/assets/extra-libs/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="{{asset('user/programs/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('user/programs/dist/js/custom.min.js')}}"></script>
    <!--This page plugins -->
    <script src="{{asset('user/programs/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('user/programs/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
</body>

</html>
