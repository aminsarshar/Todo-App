<div class="table-responsive">
    <table id="mainTable" class="table table-striped m-b-0">
        <div class="col-lg-12" style="padding: 15px">
            <label for="" style="padding-left: 15px;font-size:18px">عنوان جستجو</label>
            <input wire:model.live="search" type="text" style="width: 100%;height:33px">
        </div>
        <thead>
            <tr>
                <th style="font-size: 21px">نام</th>
                <th style="font-size: 21px">ایمیل</th>
                <th style="font-size: 21px">وضعیت</th>
                <th style="font-size: 21px">شماره تماس</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td style="font-size: 20px;font-family:sans-serif">{{ $user->name }}</td>
                    <td style="font-size: 20px;font-family:sans-serif">{{ $user->email }}</td>
                    @if ($user->is_active == 1)
                        <td style="font-size: 20px;font-family:sans-serif;color:rgb(0, 156, 0) !important">فعال</td>
                    @else
                        <td style="font-size: 20px;font-family:sans-serif;color:red !important">غیرفعال</td>
                    @endif
                    @if (!empty($user->cellphone))
                        <td style="font-size: 15px;padding:2px" class="label label-primary">{{ $user->cellphone }}</td>
                    @else
                        <td style="font-size: 15px;padding:2px" class="label label-warning">این فیلد وارد نشده</td>
                    @endif

                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th><strong>مجموع</strong></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>

        {{ $users->links() }}
    </table>
</div>
