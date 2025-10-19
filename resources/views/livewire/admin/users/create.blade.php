<form wire:submit="saveUser" data-parsley-validate novalidate>
    <div class="form-group col-lg-6">
        <label for="userName" style="font-size: 18px">نام کاربری*</label>
        <input type="text" wire:model="name" parsley-trigger="change" required placeholder="نام کاربری خود را وارد کنید"
            class="form-control">
        @error('name')
            <span style="color: red !important">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-lg-6">
        <label for="emailAddress" style="font-size: 18px">آدرس ایمیل*</label>
        <input type="email" wire:model.blur="email" parsley-trigger="change" required
            placeholder="ایمیل خود را وارد کنید" class="form-control">
        @error('email')
            <span style="color: red !important">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-lg-6">
        <label style="font-size: 18px">شماره تماس*</label>
        <input type="number" wire:model="cellphone" required placeholder="شماره تماس" class="form-control">
        @error('cellphone')
            <span style="color: red !important">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group col-lg-6">
        <label style="font-size: 18px">پسورد*</label>
        <input wire:model="password" type="password" placeholder="پسورد" required class="form-control">
        @error('password')
            <span style="color: red !important">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group text-left m-b-0 m-t-10">
        <button class="btn btn-primary waves-effect waves-light" type="submit"
            style="font-size: 18px;padding-left:25px;padding-right:25px;">
            ثبت اطلاعات
        </button>
        <a href="{{route('admin.user.index')}}" class="btn btn-default waves-effect waves-light m-l-5"
            style="font-size: 18px;padding-left:25px;padding-right:25px;">
            بازگشت
        </a>
    </div>

</form>
