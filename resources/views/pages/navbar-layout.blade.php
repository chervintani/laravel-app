<x-head :title="$activeTab">
    <div class="flex">
        <div class="w-80 h-screen relative border-r-2">
            <div class="px-6">
                <div class="border-b-2">
                    <div class="py-5 flex justify-center items-center border-b-1">
                        <div class="rounded-full bg-blue-500 py-5 h-14 w-14 mr-3"></div>
                        <p class="text-blue-500">Product Admin</p>
                    </div>
                </div>
            </div>
            <div class="h-3/5">
                <div class="flex items-center pl-10 my-5 py-3 cursor-pointer hover:text-blue-500 {{ $activeTab == 'home' ? 'border-l-blue-500 border-l-4 text-blue-500' : 'text-slate-700' }}"
                    onclick="window.location='{{ url('home') }}'">
                    <i class="fa-sharp fa-solid fa-house mr-4"></i>
                    <p>HOME</p>
                </div>
                <div class="flex items-center pl-10 my-5 py-3 cursor-pointer hover:text-blue-500 {{ $activeTab == 'products' ? 'border-l-blue-500 border-l-4 text-blue-500' : 'text-slate-700' }}"
                    onclick="window.location='{{ url('products') }}'">
                    <i class="fa-solid fa-bag-shopping mr-4"></i>
                    <p>PRODUCTS</p>
                </div>
                <div class="flex items-center pl-10 my-5 py-3 cursor-pointer hover:text-blue-500 {{ $activeTab == 'order' ? 'border-l-blue-500 border-l-4 text-blue-500' : 'text-slate-700' }}"
                    onclick="window.location='{{ url('order') }}'">
                    <i class="fa-sharp fa-solid fa-cart-shopping mr-4"></i>
                    <p>ORDER</p>
                </div>
                <div class="flex items-center pl-10 my-5 py-3 cursor-pointer hover:text-blue-500 {{ $activeTab == 'setting' ? 'border-l-blue-500 border-l-4 text-blue-500' : 'text-slate-700' }}"
                    onclick="window.location='{{ url('setting') }}'">
                    <i class="fa-solid fa-gear mr-4"></i>
                    <p>SETTING</p>
                </div>

            </div>
            <div class="px-6 absolute bottom-0 w-80">
                <div class="border-b-2">
                    <div class="py-5 flex flex-col justify-center items-center border-t-2">
                        <div class="rounded-full bg-blue-500 py-5 h-14 w-14 mb-3"></div>
                        <p class="text-slate-700">Ruth Chavez</p>
                        <p class="text-sm text-gray-600">Product Management</p>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="py-2 px-5 rounded-3xl border-2 text-blue-500 border-blue-500 mt-5 hover:bg-blue-500 hover:text-white duration-300">Log
                                out &nbsp; <i class="fa-solid fa-arrow-right"></i></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        {{ $slot }}
    </div>
</x-head>
