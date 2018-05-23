<footer class="py-3 d-flex flex-column justify-content-center align-items-center" style="background-color: #414143">
    <div class="w-75 d-flex justify-content-between align-items-center">
        <a href="">Orientation</a>
        <a href="">Logement</a>
        <a href="">Loisirs </a>
        <a href="">Mobilité euro/international</a>
        <a href="">Blog</a>
        <a href="">Accès</a>
    </div>
    <div class="w-75 d-flex justify-content-between align-items-center">
        <a href="">Santé</a>
        <a href="">Scolarité</a>
        <a href="">Voyage</a>
        <a href="">Réservation</a>
        <a href="">Galerie</a>
        <a href="">Mention légales</a>
    </div>
</footer>
</body>
<script src="{{ asset('js/app.js') }}"></script>
@include('app.partials.notifications')
@yield('js')

</html>