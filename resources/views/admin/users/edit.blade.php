@extends('admin.layouts.admin')
@section('content')
    <div class="content-page" style="margin-right: 0px !important">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form action="{{ route('admin.user.update', ['user' => $user->id]) }}" method="POST" data-parsley-validate novalidate>
                                @csrf
                                @method('put')
                                <div class="form-group col-lg-6">
                                    <label for="userName" style="font-size: 18px">نام کاربری*</label>
                                    <input type="text" name="name" value="{{ $user->name }}"
                                        parsley-trigger="change" required placeholder="نام کاربری خود را وارد کنید"
                                        class="form-control">
                                    @error('name')
                                        <span style="color: red !important">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="emailAddress" style="font-size: 18px">آدرس ایمیل*</label>
                                    <input type="email" name="email" value="{{ $user->email }}"
                                        parsley-trigger="change" required placeholder="ایمیل خود را وارد کنید"
                                        class="form-control">
                                    @error('email')
                                        <span style="color: red !important">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-lg-6">
                                    <label style="font-size: 18px">شماره تماس*</label>
                                    <input type="number" name="cellphone" value="{{ $user->cellphone }}" required
                                        placeholder="شماره تماس" class="form-control">
                                    @error('cellphone')
                                        <span style="color: red !important">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group text-left m-b-0 m-t-10">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit"
                                        style="font-size: 18px;padding-left:25px;padding-right:25px;">
                                        ثبت اطلاعات
                                    </button>
                                    <a href="{{ route('admin.user.index') }}"
                                        class="btn btn-default waves-effect waves-light m-l-5"
                                        style="font-size: 18px;padding-left:25px;padding-right:25px;">
                                        بازگشت
                                    </a>
                                </div>

                            </form>

                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
