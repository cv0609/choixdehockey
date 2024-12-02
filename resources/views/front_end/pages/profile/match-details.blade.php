@extends('front_end.layout.main')
@section('content')

@php
$PointCalculationService = app(App\Services\PointCalculationService::class);
use Carbon\Carbon;
@endphp

<!--====sign up section start====-->
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
                <h2>2023-24 Season </h2>

                <div class="plyr-headr">
                    <div class="team-logo">
                        <div class="team_inner">
                            <div class="match-details-header-logo match-details-header-logo1"></div>
                            <span>LM</span>
                        </div>
                        <h6>Ligue Magnus</h6>
                    </div>
                    <div class="match-details">
                        <h6>Accor Arena</h6>
                        <p>France</p>
                        <span>4:00 PM</span>
                    </div>
                    <div class="team-logo">
                        <div class="team_inner">
                            <span>NHL</span>
                            <div class="match-details-header-logo match-details-header-logo2 "></div>
                        </div>
                        <h6>National Hockey League</h6>
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
<!--====sign up section end====-->

<!-- alert-msg popup start -->
<div class="alert-msg">
    <div class="modal fade" id="errorModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#d30f0f">
                            <path
                                d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                    </span>
                    <h4 id="error-message"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- alert-msg popup end -->

<!-- alert-msg popup start -->
<div class="alert-msg">
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#00c900">
                            <path
                                d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z" />
                            </svg>
                    </span>
                    <h4 id="success-message"></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ok</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- alert-msg popup end -->

@endsection

@section('custom-script')



@endsection
