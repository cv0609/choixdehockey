@extends('front_end.layout.main')
@section('content')

    <!-- Banner Section Start -->
    <section class="pages-banner how-to-play  bg-cover bg-no-repeat">
        <div class="container">
            <div class="banner-content">
                <h1>
                    Comment Jouer
                </h1>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- After Banner Intro Text Section Start -->
    <div class="after-banner-text py-5">
        <div class="container">
            <div class="after-banner-text-wrap">
                <p>
                    Bienvenue sur <strong>Choix De Hockey!</strong> Que vous soyez un joueur expérimenté ou un débutant
                    dans le fantasy hockey, ce guide vous aidera à commencer et à profiter de l'expérience de
                    gestion de votre propre équipe.
                </p>
            </div>
        </div>
    </div>
    <!-- After Banner Intro Text Section End-->

    <!-- How To Play Content Section Start -->
    <section class="how-to-play-content-section pb-5">
        <div class="container">
            <div class="how-to-play-cards-wrap">

                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card1-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    Créez Votre Compte
                                </h3>
                                <p>
                                    Avant de commencer à jouer, vous devez créer un compte :
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Allez à la page <strong>S'inscrire</strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Remplissez vos informations (nom, courriel et nom d'utilisateur).
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Choisissez votre mot de passe et confirmez votre compte.
                                        </p>
                                    </li>
                                </ul>
                                <p>
                                    Une fois votre compte créé, vous pouvez commencer à construire votre équipe
                                    fantastique!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="down-arrow-container"></div>

                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card2-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    Rejoindre ou Créer une Ligue
                                </h3>
                                <ul>
                                    <li>
                                        <p><span class="block-span">Rejoindre une Ligue :</span>Parcourez les ligues
                                            publiques disponibles et rejoignez celle qui correspond à votre
                                            style. Vous pouvez rechercher des ligues selon leur taille ou d'autres
                                            préférences.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="block-span">Créer une Ligue :</span>Vous voulez jouer avec des
                                            amis? Créez une ligue privée! Configurez les règles de
                                            la ligue, les systèmes de points et invitez vos amis à rejoindre.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="down-arrow-container"></div>

                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card3-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    Sélectionner Votre Équipe
                                </h3>
                                <p>
                                    Une fois que vous êtes dans une ligue, il est temps de sélectionner vos joueurs!
                                    Voici
                                    comment :
                                </p>
                                <ul>
                                    <li>
                                        <p><span class="block-span">Sélection automatique :</span>Laissez la plateforme
                                            choisir automatiquement vos joueurs
                                            en fonction des classements et de vos préférences.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="block-span">Sélection manuelle : </span>Si vous préférez plus
                                            de contrôle, sélectionnez manuellement
                                            les joueurs pour remplir votre équipe.
                                        </p>
                                    </li>
                                </ul>
                                <p>
                                    Le repêchage inclut généralement différentes catégories de joueurs comme les
                                    attaquants,
                                    les défenseurs et les gardiens, en fonction des règles de votre ligue.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="down-arrow-container"></div>


                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card4-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    Gérez Votre Roster
                                </h3>
                                <p>
                                    Après le repêchage, c'est le moment de gérer votre équipe tout au long de la saison
                                    :
                                </p>
                                <ul>
                                    <li>
                                        <p><span class="block-span">Échanges :</span>Échangez des joueurs avec d'autres
                                            gestionnaires pour renforcer votre
                                            équipe.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="block-span">Ajouter/Supprimer : </span>Prenez de nouveaux
                                            joueurs dans la pool d'agents libres ou
                                            laissez tomber ceux qui ne performent pas.
                                        </p>
                                    </li>
                                    <li>
                                        <p><span class="block-span">Ajustement de la composition : </span> Définissez
                                            votre composition de départ avant
                                            chaque semaine de jeu pour maximiser vos points.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="down-arrow-container"></div>

                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card5-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    Système de Points
                                </h3>
                                <p>
                                    Gagnez des points en fonction des performances des joueurs lors des matchs réels.
                                    Voici
                                    quelques catégories de points courantes :
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            <strong>
                                                Buts (Attaquants/ Défenseurs)
                                            </strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong>
                                                Passes (Attaquants/ Défenseurs)
                                            </strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong>
                                                Victoires (Gardiens)
                                            </strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong>
                                                Arrêts (Gardiens)
                                            </strong>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong>
                                                Blanchissages (Gardiens)
                                            </strong>
                                        </p>
                                    </li>
                                </ul>
                                <p>
                                    Les règles de votre ligue peuvent varier, alors consultez les paramètres de votre
                                    ligue pour
                                    connaître les valeurs exactes des points.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="down-arrow-container"></div>


                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card6-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    Matchups Hebdomadaires
                                </h3>
                                <p>
                                    Affrontez d'autres équipes de votre ligue chaque semaine :
                                </p>
                                <ul>
                                    <li>
                                        <p>Chaque matchup consiste en un concours direct où les points de votre équipe
                                            sont
                                            comparés à ceux d'une autre équipe.
                                        </p>
                                    </li>
                                    <li>
                                        <p>Votre objectif est de surpasser votre adversaire en ayant des joueurs mieux
                                            performants.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="down-arrow-container"></div>

                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card7-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    Séries Éliminatoires et Championnat
                                </h3>
                                <p>
                                    À la fin de la saison régulière, les meilleures équipes passeront aux <strong>Séries
                                        Éliminatoires.</strong>
                                    Dans les séries éliminatoires, les équipes s'affrontent lors des rondes
                                    d'élimination jusqu'à
                                    ce qu'une équipe soit couronnée <strong>Champion Choix De Hockey! </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="down-arrow-container"></div>

                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card8-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    Astuces Stratégiques
                                </h3>
                                <ul>
                                    <li>
                                        <p>
                                            <strong>
                                                Restez Actif :
                                            </strong>
                                            Vérifiez régulièrement les statistiques des joueurs, les blessures et les
                                            calendriers des matchs pour prendre des décisions intelligentes.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong>
                                                Planifiez à l'avance :
                                            </strong>
                                            Faites attention au calendrier de la LNH et ajustez votre
                                            équipe pour les semaines de congé ou les joueurs en série.
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <strong>
                                                Restez Engagé :
                                            </strong>
                                            Participez aux discussions de la ligue, aux échanges et aux défis
                                            pour rester compétitif!
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="down-arrow-container"></div>


                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card9-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    FAQ & Support
                                </h3>
                                <p>
                                    Si vous avez besoin d'aide à tout moment, consultez notre page <strong>FAQ</strong>
                                    pour des réponses
                                    aux questions fréquentes. Si vous avez encore besoin d'assistance, n'hésitez pas à
                                    contacter notre équipe de support via la section <strong><a
                                            href="contact-us">Contactez-nous.</a></strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="down-arrow-container"></div>


                <div class="how-to-play-cards">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="how-to-play-card-image how-to-play-card10-image"></div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="how-to-play-cards-content">
                                <h3>
                                    Commencez Maintenant !
                                </h3>
                                <p>
                                    Rejoignez une ligue et commencez à sélectionner votre équipe dès aujourd'hui.
                                    <strong> Choix De
                                        Hockey </strong> est le meilleur endroit pour combiner votre amour du hockey et
                                    l'excitation des
                                    sports fantastiques. Bonne chance et amusez-vous bien!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- How To Play Content Section Start -->
@endsection