<div class="table-responsive">
    <table id="mainTable" class="table table-striped m-b-0">
        <thead>
            <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>وضعیت</th>
                <th>شماره تماس</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_active }}</td>
                    @if (!empty($user->cellphone))
                        <td class="label label-primary">{{ $user->cellphone }}</td>
                    @else
                        <td class="label label-warning">این فیلد وارد نشده</td>
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
    </table>
</div>
