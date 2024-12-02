    <!-- Footer Start -->
    <footer class="footer py-5">
        <div class="container">
            <div class="footer-wrap">
                <div class="footer-blocks footer-menus">
                    <h3>
                        Menu
                    </h3>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">
                                Page D'accueil
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('personal-data-policy') }}">
                                Politique de Données Personnelles
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('privacy') }}">
                                Politique de Confidentialité
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('terms') }}">
                                Conditions Générales d'Utilisation
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-blocks footer-socials">
                    <h3>
                        Phone
                    </h3>
                    <p>
                        (123) 456-7890
                    </p>
                    <h3>
                        Email
                    </h3>
                    <p>
                        hello@reallygreatsite.com
                    </p>
                    <h3>
                        Social
                    </h3>
                    <div class="social-tags-container">
                        <div class="social-icons">
                            <div class="social-ikons fb"></div>
                        </div>
                        <div class="social-icons">
                            <div class="social-ikons twitter"></div>
                        </div>
                        <div class="social-icons insta">
                            <div class="social-ikons insta"></div>
                        </div>
                    </div>
                </div>
                <div class="footer-blocks footer-disclaimer">
                    <h3>
                        Avertissement
                    </h3>
                    <p>
                        Cette plateforme de sports fantastiques est exploitée par des fans et est destinée
                        uniquement à des fins de divertissement. Nous ne sommes pas responsables des pertes
                        financières, des litiges ou d’autres problèmes découlant de l’utilisation de ce site. Cette
                        plateforme n’offre ni ne facilite les jeux d’argent avec de l’argent réel. Toute participation
                        est
                        soumise à nos Conditions d’utilisation et Politique de confidentialité.
                    </p>
                </div>
            </div>
            <div class="footer-copyright-ssl-wrap">
                <div class="copyright-wrap">
                    <p>
                        Droit d'auteur &copy; 2024 choixdehockey.com Tous droits réservés.
                    </p>
                </div>
                <div class="ssl-container">
                    <div class="ssl-logo bg-center bg-contain bg-no-repeat h-100 w-100"></div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer End -->

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card_title">
                            <h1>S'inscrire</h1>
                        </div>
                        <div class="form">
                        <div id="responseMessage"></div>
                        <form id="registerForm" method="post">
                            <input type="text" name="name" id="name" placeholder="Entrez votre nom" />
                            <input type="text" name="username" id="username" placeholder="Choisissez votre nom d'utilisateur" />
                            <input type="email" name="email" id="email" placeholder="Entrez votre e-mail" />
                            <input type="password" name="password" id="password" placeholder="Entrez le mot de passe" />
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmez le mot de passe" />
                            <button type="submit">S'inscrire</button>
                        </form>
                        </div>
                        <!-- <div class="card_terms">
                            <input type="checkbox" name="" id="terms"> <span>J'ai lu et j'accepte les <a
                                    href="">Conditions d'utilisation</a></span>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card_title">
                            <h1>Se connecter</h1>
                        </div>
                         <div id="responseMessage_login"></div>
                        <div class="form">
                            <form id="loginForm" method="post">
                               @csrf
                                <input type="email" name="email" placeholder="Enter Your Email" id="login-email" />
                            
                                <input type="password" placeholder="Entrez le mot de passe" name="password" class="form-control para" id="login-password-field" />
                             
                                <button>Se connecter</button>
                            </form>
                        </div>
                        <!-- <div class="card_terms">
                            <input type="checkbox" name="" id="terms"> <span>J'ai lu et j'accepte les <a
                                    href="">Conditions d'utilisation</a></span>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <script src="{{asset('assets/js/index.js')}}"></script>

@section('custom-script')

<script>
    $(document).ready(function () {
        $('#loginForm').on('submit', function (e) {
            e.preventDefault(); // Prevent form submission

            let email = $('#login-email').val();
            let password = $('#login-password-field').val();
            
            $.ajax({
                url: "{{ route('login.post') }}", // Laravel route name
                type: "POST",
                data: {
                    email: email,
                    password: password,
                    _token: "{{ csrf_token() }}" // CSRF token for Laravel
                },
                success: function (response) {
                    console.log(response); return false;
                    if (response.success) {
                        $('#responseMessage_login').html('<p style="color: green;">' + response.message + '</p>');
                        // Optionally redirect
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000); // 2-second delay
                    } else {
                        $('#responseMessage_login').html('<p style="color: red;">' + response.message + '</p>');
                    }
                },
                error: function (xhr) {
                    let errorMessage = xhr.responseJSON.message || 'An error occurred.';
                    $('#responseMessage_login').html('<p style="color: red;">' + errorMessage + '</p>');
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#registerForm').on('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Gather form data
            let formData = {
                name: $('#name').val(),
                username: $('#username').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                password_confirmation: $('#password_confirmation').val(),
                _token: "{{ csrf_token() }}" // Laravel CSRF token
            };

            $.ajax({
                url: "{{ route('signup.post') }}", // Replace with your register route URL if necessary
                type: "POST",
                data: formData,
                success: function (response) {
                    if (response.success) {
                        $('#responseMessage').html('<p style="color: green;">' + response.message + '</p>');
                        // Optionally redirect to another page
                        window.location.href = "/dashboard";
                    } else {
                        $('#responseMessage').html('<p style="color: red;">' + response.message + '</p>');
                    }
                    setTimeout(function () {
                            window.location.reload();
                        }, 2000); // 2-second delay
                },
                error: function (xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessages = '';
                    for (const field in errors) {
                        errorMessages += `<p style="color: red;">${errors[field][0]}</p>`;
                    }
                    $('#responseMessage').html(errorMessages);
                }
            });
        });
    });
</script>
@endsection