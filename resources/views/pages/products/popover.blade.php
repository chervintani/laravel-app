@if (Session::get('message'))
    <div class="absolute right-5 top-5 {{ Session::get('message')['success'] ? 'bg-green-300' : 'bg-rose-300' }} py-5 px-8 rounded-md text-gray-600"
        id="success-popover">
        <h2 class="font-bold">{{ Session::get('message')['success'] ? 'Success' : 'Error' }}</h2>
        <p class="text-sm">{{ Session::get('message')['success'] }}</p>
    </div>
@endif
<script>
    $(document).ready(function() {
        setTimeout(() => {
            $('#success-popover').fadeOut(300)
        }, 3000);
    })
</script>
