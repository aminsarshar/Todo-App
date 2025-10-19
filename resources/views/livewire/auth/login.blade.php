<div>  <!-- ✅ تگ والد اضافه شد -->

    <!-- دکمه باز کردن مودال -->
    <button wire:click="openModal"
        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
        ورود کاربر
    </button>

    <!-- مودال -->
    @if ($showModal)
        <div class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
            <div class="bg-white rounded-2xl shadow-xl w-96 p-6 relative" wire:click.outside="closeModal">
                <!-- دکمه بستن -->
                <button wire:click="closeModal" class="absolute top-3 left-3 text-gray-500 hover:text-gray-700">
                    ✕
                </button>ش

                <h2 class="text-xl font-semibold text-center mb-4">ورود به حساب کاربری</h2>

                <form wire:submit.prevent="loginUser" class="space-y-4">
                    <div>
                        <label class="block text-sm text-gray-600 mb-1">ایمیل</label>
                        <input type="email" wire:model="email"
                            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="example@email.com" />
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm text-gray-600 mb-1">رمز عبور</label>
                        <input type="password" wire:model="password"
                            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 outline-none"
                            placeholder="••••••••" />
                        @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit"
                        class="rounded-lg p-2 transition-all bg-blue-600 text-white hover:bg-blue-700 w-full">
                        ورود
                    </button>
                </form>
            </div>
        </div>
    @endif

</div> <!-- ✅ تگ بسته والد -->
