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
                            Détails des matchs
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Leagues Pages Banner Section End -->

    <!-- Leagues Content Section Start -->

    <section class="ice-leagues">
        <div class="container">


            <div class="ice-leagues-inner">
                <div class="back-btn">
                    <a href="matches">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#000">
                            <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                        </svg>
                    </a>
                </div>
                <h2>{{date('Y')}} Season </h2>

                <div class="plyr-headr">
                    <div class="team-logo">
                        <div class="team_inner">
                        <img src="{{$matchDetails->home_team_logo}}" alt="team-logo-4">
                            <!-- <span>LM</span> -->
                        </div>
                        <h6>{{$matchDetails->home_team_name}}</h6>
                    </div>
                    <div class="match-details">
                        <!-- <h6>Accor Arena</h6>
                        <p>France</p> -->
                        <span>{{ date('Y-m-d h:i a',strtotime($matchDetails->fixture_date))}}</span>
                    </div>
                    <div class="team-logo">
                        <div class="team_inner">
                            <!-- <span>NHL</span> -->
                            <img src="{{$matchDetails->away_team_logo}}" alt="team-logo-2">
                        </div>
                        <h6>{{$matchDetails->away_team_name}}</h6>
                    </div>
                </div>

                <div class="tab-content-wrapper">
                    <div class="toggle-target">
                        <a href="#" class="tab active" data-toggle-target=".tab-content-1">Defender</a>
                        <a href="#" class="tab" data-toggle-target=".tab-content-2">Attacker</a>
                        <a href="#" class="tab" data-toggle-target=".tab-content-3">Goalkeeper</a>
                    </div>

                    <div class="tab-content tab-content-1 active">
                        <div class="ice-leagues-inner-content">
                            <div class="matches-table matche-det">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Sélectionné par</th>
                                            <th scope="col">Équipe</th>
                                            <th scope="col">Âge </th>
                                            <th scope="col">Blessé </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="player-name">
                                                <p>Arthur Thieffry</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner  match-team-logo-inner1"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>12</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Arthur Thieffry</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner2"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>07</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Arthur Thieffry</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner3"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>67</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Arthur Thieffry</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner4"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>57</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Arthur Thieffry</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner5"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>37</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Arthur Thieffry</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner6"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>57</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Arthur Thieffry</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner7"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>17</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="team-btns">
                                <a href="team-view" class="next-btn">Suivant</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content tab-content-2">
                        <div class="ice-leagues-inner-content">
                            <div class="matches-table matche-det">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Sélectionné par</th>
                                            <th scope="col">Équipe</th>
                                            <th scope="col">Âge </th>
                                            <th scope="col">Blessé </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="player-name">
                                                <p>Gaspard Xavier</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner8"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>12</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Gaspard Xavier</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner9"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>07</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Gaspard Xavier</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner10"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>67</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Gaspard Xavier</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner11"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>57</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Gaspard Xavier</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner12"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>37</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Gaspard Xavier</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner13"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>57</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Gaspard Xavier</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner14"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>17</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="team-btns">
                                <a href="team-view" class="next-btn">next</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content tab-content-3">
                        <div class="ice-leagues-inner-content">
                            <div class="matches-table matche-det">
                                <table>
                                    <thead>
                                        <tr>
                                            <th scope="col" class="">Sélectionné par</th>
                                            <th scope="col">Équipe</th>
                                            <th scope="col">Âge </th>
                                            <th scope="col">Blessé </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="player-name">
                                                <p>Mattéo Desgouillons</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner15"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>12</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Mattéo Desgouillons</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner16"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>07</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Mattéo Desgouillons</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner17"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>67</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Mattéo Desgouillons</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner18"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>57</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Mattéo Desgouillons</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner19"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>37</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Mattéo Desgouillons</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner20"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>57</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td class="player-name">
                                                <p>Mattéo Desgouillons</p>
                                            </td>
                                            <td class="match-team-logo">
                                                <a href="">
                                                    <div class="match-team-logo-inner match-team-logo-inner21"></div>
                                                </a>
                                            </td>

                                            <td class="match-position">
                                                <p>17</p>
                                            </td>
                                            <td class="credits_points">
                                                <span>No</span>
                                                <button class="plus player-toggle" data-event="plus">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <button class="minus player-toggle d-none" data-event="minus">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="team-btns">
                                <a href="team-view" class="next-btn">next</a>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>

    </section>
    <!-- Leagues Content Section End -->
@endsection