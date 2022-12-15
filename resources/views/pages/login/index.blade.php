<x-head title="Login">
    <div class="h-full left-0 absolute text-center w-full table">
        <div class="table-row">
            <div class="table-cell align-middle">
                <div class="text-left inline-block w-96">
                    <h1 class="text-3xl font-bold text-center text-blue-800 mb-5">LOGIN</h1>
                    <form method="POST" action="/api/login">
                        {!! csrf_field() !!}
                        <div class="row">
                            <input type="email" class="px-4 py-3 bg-gray-300 w-full text-sm text-slate-700"
                                placeholder="Email" name="email" required />
                        </div>
                        <div class="row mt-2">
                            <input type="password" class="px-4 py-3 bg-gray-300 w-full text-sm text-slate-700"
                                placeholder="Password" name="password" required />
                        </div>
                        <div class="row mt-2 flex justify-between">
                            <div>
                                <input type="checkbox" id="remember-me">
                                <label class="ml-1 text-md text-slate-700 select-none" id="label"
                                    for="remember-me">Remember me</label>
                            </div>
                            <p class="float-right text-md text-blue-500">Forgot?</p>
                        </div>
                        <div class="row mt-8">
                            <button type="submit"
                                class="uppercase w-full border-blue-500 bg-blue-500 text-white text-sm py-3">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-head>
<script>
    // $('form').submit(function(e) {
    //     e.preventDefault();
    //     const values = $(this).serialize();
    //     console.log($('#email').val())
    //     $.ajax({
    //         type: 'POST',
    //         url: `http://127.0.0.1:8000/api/login`,
    //         data: {
    //             email: $('#email').val(),
    //             password: $('#password').val()
    //         },
    //         success: function(data) {
    //             $.ajax({
    //                 type: 'GET',
    //                 url: `http://127.0.0.1:8000/api/products`,
    //                 headers: {
    //                     'Authorization': `Bearer ${data.token}`,
    //                     'Content-Type': 'application/json',
    //                     'Accept': '*'
    //                 },
    //                 data: {
    //                     user_id: data.user.id
    //                 },
    //                 success: function(data) {
    //                     window.location = "{{ route('products.index') }}"
    //                 }
    //             })
    //         }
    //     });
    // });
</script>
