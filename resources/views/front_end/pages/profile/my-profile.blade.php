@extends('front_end.layout.main')
@section('content')

  <!--Leagues Pages Banner Section Start -->
  <section class="pages-banner leagues-pages  bg-cover bg-no-repeat">
        <div class="container">
            <div class="banner-content">
                <ul class="leagues-ul">
                    <li class="inline-list home-list">
                        <h3>
                            <a href="./">Page D'accueil</a>
                        </h3>
                    </li>
                    <li class="inline-list next-page-list">
                        <h3>
                            Mon profil
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Leagues Pages Banner Section End -->

    <!-- Leagues Content Section Start -->
    <section class="my-profile">
        <div class="container">
            <div class="mmy-profile-inner">
                <div class="profile-side">
                    <div class="profile-sec">
                        <div class="user-img">
                            <div class="">    
                            <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('images/dummy.jpg') }}" alt="dp">                           
                                <span class="edit_pan"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg> </span>
                            </div>
                            <div class="user_name">
                                <h3>{{Auth::user()->name}}</h3>
                            </div>
                        </div>
                        <div class="edit_option_bar">
                            <div class="content-bar">
                                <span class="tabedit">Modifier le profil
                                </span>
                            </div>
                            <div class="content-bar">
                                <span class="tabedit">Changer le mot de passe</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sec">
                    <div class="user-content-update">
                        <div class="">
                            <div class="tab-content tab-content-1 active">
                                <div class="user-content-box">
                                    <form action="#" method="POST" class="mt-60 ">
                                        <div class="row">
                                            <div class="mb-3 col-sm-6">
                                                <input type="text" placeholder="Prénom"
                                                    class="form-control para" id="name" required="required"
                                                    autocomplete="off">
                                            </div>
                                            <div class="mb-3 col-sm-6">
                                                <input type="text" placeholder="Nom de famille" class="form-control para"
                                                    id="last-name" required="required" autocomplete="off">
                                            </div>
                                            <div class="mb-3 col-sm-6">
                                                <input type="email" placeholder="E-mail" class="form-control para"
                                                    id="email" required="required" autocomplete="off">
                                            </div>
                                            <div class="mb-3 col-sm-6">
                                                <input type="text" placeholder="Téléphone" class="form-control para"
                                                    id="Phone" required="required" autocomplete="off">
                                            </div>

                                            <div class="mb-3 col-sm-6">
                                                <div class="show_password">
                                                    <input type="password" placeholder="Mot de passe"
                                                        class="form-control para" id="password-field"
                                                        required="required" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="mb-3 col-sm-6">
                                                <input type="password" placeholder="Confirmez le mot de passe"
                                                    class="form-control para" id="con_password" required="required">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Mise à jour</button>

                                        <div class="reset-password">
                                            <a href="#"> Réinitialiser le mot de passe </a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Leagues Content Section End -->
     

@endsection
