<footer class="py-3 d-flex flex-column justify-content-center align-items-center" style="background-color: #414143">
    <div class="w-75 d-flex justify-content-around align-items-center">
        <a href="">Orientation</a>
        <a href="">Logement</a>
        <a href="">Loisirs </a>
        <a href="">Mobilité euro/international</a>
        <a href="">Blog</a>
        <a href="">Accès</a>
    </div>
    <div class="w-75 d-flex justify-content-around align-items-center">
        <a href="">Santé</a>
        <a href="" style="padding-left: 31px;">Scolarité</a>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.1.1/turbolinks.js"
        data-turbolinks-eval="false"></script>
<script>
    Turbolinks.start();
    document.addEventListener('turbolinks:load', function () {
        console.log('adzz')
    })
</script>

</html>