<div class="wrapper">
    @include('components.sidebar')
    <main class="main">
        @include('components.navbar')
        <div class="content">
            {{ $slot }}
        </div>
    </main>

</div>