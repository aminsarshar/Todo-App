@extends('admin.layouts.admin')
@section('content')
    <div class="content-page" style="margin-right: 0px !important">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <livewire:admin.users.index />
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
