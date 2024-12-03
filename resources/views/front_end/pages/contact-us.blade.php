@extends('front_end.layout.main')
@section('content')
   <!-- Pages Banner Section Start -->
   <section
        class="pages-banner contact-banner bg-center bg-cover bg-no-repeat flex justify-center align-center text-center">
        <div class="container">
            <div class="banner-text text-center">
                <h1>
                    Contactez-nous
                </h1>
            </div>
        </div>
    </section>
    <!-- Pages Banner Section End -->

    <!-- After Banner Text Section Start -->
    <div class="after-banner-text py-5">
        <div class="container">
            <p>
                Nous serions ravis de recevoir de vos nouvelles! Que vous ayez une question, des
                commentaires ou besoin d’assistance, notre équipe est là pour vous aider. N’hésitez pas à
                nous contacter en utilisant le formulaire ci-dessous ou directement par courriel à
                <a href="mailto:info@choixdehockey.com">info@choixdehockey.com.</a>
            </p>
        </div>
    </div>
    <!--After Banner Text Section End -->

    <!-- Contact Us Content Section Start -->
    <section class="header-pages-content-section bg-center bg-cover bg-fixed bg-no-repeat py-5">
        <div class="container">
            <div class="header-pages-content pb-5">

                <div class="header-pages-cards">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="header-pages-cards-image contact-card1-image bg-center bg-cover bg-no-repeat ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="header-pages-cards-content">
                                <div class="form-wrapper">
                                    <form id="contact" action="{{ route('contact.save') }}" method="post" onsubmit="return validateForm()">
                                        @csrf
                                        <fieldset>
                                            <input class="contact-form" placeholder="Nom" type="text" tabindex="1"
                                                required id="name" minlength="2" maxlength="100" name="name" value="{{ old('name') }}">
                                        </fieldset>
                                        <fieldset>
                                            <input class="contact-email" placeholder="E-mail" type="email" tabindex="2"
                                              name="email" id="email" value="{{ old('email') }}"  required>
                                        </fieldset>
                                        <fieldset>
                                            <select class="contact-topic" id="subject" name="subject" value="{{ old('subject') }}" required>
                                                <option value="">Sujet</option>
                                                <option value="general">Demandes générales</option>
                                                <option value="product-info">Lié au produit</option>
                                                <option value="other">Autre</option>
                                            </select>
                                        </fieldset>
                                        <fieldset>
                                            <textarea name="message" id="message" class="message" placeholder="Votre message"
                                                required maxlength="1000">{{ old('message') }}</textarea>
                                        </fieldset>
                                        <fieldset>
                                            <button name="submit" type="submit" class="contact-submit butn"
                                                data-submit="...Sending">
                                                Envoyer
                                            </button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        Une fois que vous aurez soumis votre message, notre équipe examinera votre demande et
                        vous répondra dans les plus brefs délais. Nous nous efforçons de répondre à tous les
                        messages dans un délai de 24 à 48 heures.
                    </p>
                </div>

                <div class="header-pages-cards">
                    <h3>
                        Contactez-Nous Directement
                    </h3>
                    <p>
                        Si vous préférez nous envoyer un courriel directement, vous pouvez nous joindre à
                        info@choixdehockey.com. Veuillez inclure autant de détails que possible afin que nous
                        puissions vous aider plus efficacement.
                    </p>
                </div>


                <div class="header-pages-cards">
                    <h3>
                        Pourquoi Nous Contacter?
                    </h3>
                    <ul>
                        <li>
                            <p>
                                <strong>
                                    Questions sur la plateforme:
                                </strong>
                                Si vous êtes nouveau sur Choix De Hockey ou avez
                                une question spécifique sur le fonctionnement du site, nous serons heureux de vous
                                guider.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>
                                    Support Technique:
                                </strong>
                                Si vous rencontrez des problèmes avec votre compte, vos
                                paramètres ou tout autre aspect technique de la plateforme, faites-le nous savoir et
                                nous résoudrons rapidement le problème.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>
                                    Suggestions et Commentaires:
                                </strong>
                                Nous sommes toujours à la recherche de moyens
                                d’améliorer. Vos suggestions nous aident à offrir une meilleure expérience à tous nos
                                utilisateurs
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>
                                    Demandes Générales:
                                </strong>
                                Si vous souhaitez simplement nous saluer ou poser des
                                questions générales sur nos services, n’hésitez pas à nous contacter à tout moment.
                            </p>
                        </li>
                    </ul>
                </div>


                <div class="header-pages-cards">
                    <h3>
                        Suivez-Nous sur les Réseaux Sociaux
                    </h3>
                    <p>
                        Restez connecté et informé des dernières nouvelles, conseils et annonces en nous suivant
                        sur nos plateformes de réseaux sociaux!
                    </p>
                    <p>
                        Merci de faire partie de la communauté Choix De Hockey. Nous avons hâte de recevoir de
                        vos nouvelles!
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact Us Content Section End -->

@endsection