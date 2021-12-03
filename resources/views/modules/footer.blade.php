<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>We are the champions</b> {{-- Esta es la parte inferiorderecha de la derecha --}}
    </div>
    <strong>Copyright ©
        {{-- Sintaxis PHP para recuperar año --}}
        @php
            echo date('Y');
        @endphp
        <a href="https://google.com">Artavia</a>.</strong> All rights reserved.
</footer>
