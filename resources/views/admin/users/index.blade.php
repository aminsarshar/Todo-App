@extends('admin.layouts.admin')
@section('content')
    <div class="content-page" style="margin-right: 0px !important">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">فعال</a></li>
                                    <li><a href="#">متن اول</a></li>
                                    <li><a href="#">متن دوم</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">متن پاورقی</a></li>
                                </ul>
                            </div>

                            <h4 class="header-title m-t-0 m-b-30">نمونه اول</h4>

                            <div class="table-responsive">
                                <table id="mainTable" class="table table-striped m-b-0">
                                    <thead>
                                        <tr>
                                            <th>نام</th>
                                            <th>هزینه</th>
                                            <th>سود</th>
                                            <th>تفریح</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ماشین</td>
                                            <td>100</td>
                                            <td>200</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>دوچرخه</td>
                                            <td>330</td>
                                            <td>240</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>بیلیارد</td>
                                            <td>430</td>
                                            <td>540</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>قایق بادبانی</td>
                                            <td>100</td>
                                            <td>200</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>اسکی</td>
                                            <td>330</td>
                                            <td>240</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th><strong>مجموع</strong></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
