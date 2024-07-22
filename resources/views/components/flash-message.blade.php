@session('message')
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-0 transform -translate-x-1/2 left-1/2 bg-laravel text-white px-48 py-3 z-50">
        <p> {{ $value }} </p>
    </div>
@endsession
