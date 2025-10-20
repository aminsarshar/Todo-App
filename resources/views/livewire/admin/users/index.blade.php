<div class="table-responsive">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <table id="mainTable" class="table table-striped m-b-0">
        <div class="col-lg-1"
            style="margin-top: 20px;text-align: end;margin-left: -56px;z-index: 1;font-size: 19px;">
            <i class="fa fa-search" aria-hidden="true" style=""></i>
        </div>
        <div class="col-lg-9" style="padding: 15px">
            <input wire:model.live="search" type="text" style="width: 100%;height:33px;padding-right:35px">
        </div>

        <div class="col-lg-2" style="padding: 15px;text-align:end">

            <a href="{{ route('admin.user.create') }}" class="btn btn-default waves-effect waves-light m-l-5"
                style="font-size: 18px;padding-left:25px;padding-right:25px;">
                ایجاد کاربر
            </a>
        </div>
        <thead>
            <tr>
                <th style="font-size: 21px">ردیف</th>
                <th style="font-size: 21px">نام</th>
                <th style="font-size: 21px">ایمیل</th>
                <th style="font-size: 21px">وضعیت</th>
                <th style="font-size: 21px">شماره تماس</th>
                <th style="font-size: 21px">تاریخ عضویت</th>
                <th style="font-size: 21px">ویرایش</th>
                <th style="font-size: 21px">حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <td>{{ $users->firstItem() + $index }}</td>
                    <td style="font-size: 18px;font-family:sans-serif">{{ $user->name }}</td>
                    <td style="font-size: 18px;font-family:sans-serif">{{ $user->email }}</td>
                    @if ($user->is_active == 1)
                        <td style="font-size: 18px;font-family:sans-serif;color:rgb(0, 156, 0) !important">فعال</td>
                    @else
                        <td style="font-size: 18px;font-family:sans-serif;color:red !important">غیرفعال</td>
                    @endif
                    @if (!empty($user->cellphone))
                        <td style="font-size: 15px;padding: 2px;margin-top: 7px;display: block;width: 75%;" class="label label-info  ">{{ $user->cellphone }}</td>
                    @else
                        <td style="font-size: 15px;padding:2px" class="label label-warning">این فیلد وارد نشده</td>
                    @endif

                    <td>
                        {{ verta($user->created_at)->format('%d  %B   %Y') }}
                    </td>
                    <td><a href="{{ route('admin.user.edit', ['user' => $user->id]) }}" class="btn btn-warning">ویرایش</a></td>
                    <td><a href="#" class="btn btn-danger">حذف</a></td>

                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th> {{ $users->links() }}
                </th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>

    </table>
</div>
