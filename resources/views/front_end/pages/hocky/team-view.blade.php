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
                            Visionneuse d'équipe
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
                    <a href="premier-league-players">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#000">
                            <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                        </svg>
                    </a>
                </div>
                <h2>2023-24 Season </h2>

                <div class="team-view-sec">
                    <div class="team-view-header">
                        <h4>Choisissez votre capitaine et votre vice-capitaine</h4>
                        <ul>
                            <li>
                                <span class="c-logo"> C </span>
                                <div class="c-details">
                                    <h6>Le capitaine obtient</h6>
                                    <p>2X (Points doublés)</p>
                                </div>
                            </li>
                            <li>
                                <span class="c-logo"> VC </span>
                                <div class="c-details">
                                    <h6> Le vice-capitaine obtient</h6>
                                    <p>1.5X (Points doublés)</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ice-leagues-inner-content">
                    <div class="team-view-table">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Joueuse</th>
                                    <th scope="col">Points</th>
                                    <th scope="col">% C PAR</th>
                                    <th scope="col">% VC PAR</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="player-dp">
                                        <div class="player-dp-inner player-dp-inner1"></div>
                                    </td>
                                    <td>
                                        <h6>Blaise Rogeau</h6>
                                        <span>41 Pt</span>
                                    </td>
                                    <td>
                                        <span class="c-logo">C</span>
                                        <p>0.55%</p>
                                    </td>
                                    <td>
                                        <span class="c-logo">VC</span>
                                        <p>0.37%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="player-dp">
                                        <div class="player-dp-inner player-dp-inner2"></div>
                                    </td>
                                    <td>
                                        <h6>Blaise Rogeau</h6>
                                        <span>41 Pt</span>
                                    </td>
                                    <td>
                                        <span class="c-logo">C</span>
                                        <p>0.55%</p>
                                    </td>
                                    <td>
                                        <span class="c-logo">VC</span>
                                        <p>0.37%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="player-dp">
                                        <div class="player-dp-inner player-dp-inner3"></div>
                                    </td>
                                    <td>
                                        <h6>Blaise Rogeau</h6>
                                        <span>41 Pt</span>
                                    </td>
                                    <td>
                                        <span class="c-logo">C</span>
                                        <p>0.55%</p>
                                    </td>
                                    <td>
                                        <span class="c-logo">VC</span>
                                        <p>0.37%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="player-dp">
                                        <div class="player-dp-inner player-dp-inner4"></div>
                                    </td>
                                    <td>
                                        <h6>Blaise Rogeau</h6>
                                        <span>41 Pt</span>
                                    </td>
                                    <td>
                                        <span class="c-logo">C</span>
                                        <p>0.55%</p>
                                    </td>
                                    <td>
                                        <span class="c-logo">VC</span>
                                        <p>0.37%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="player-dp">
                                        <div class="player-dp-inner player-dp-inner5"></div>
                                    </td>
                                    <td>
                                        <h6>Blaise Rogeau</h6>
                                        <span>41 Pt</span>
                                    </td>
                                    <td>
                                        <span class="c-logo">C</span>
                                        <p>0.55%</p>
                                    </td>
                                    <td>
                                        <span class="c-logo">VC</span>
                                        <p>0.37%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="player-dp">
                                        <div class="player-dp-inner player-dp-inner6"></div>
                                    </td>
                                    <td>
                                        <h6>Blaise Rogeau</h6>
                                        <span>41 Pt</span>
                                    </td>
                                    <td>
                                        <span class="c-logo">C</span>
                                        <p>0.55%</p>
                                    </td>
                                    <td>
                                        <span class="c-logo">VC</span>
                                        <p>0.37%</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="team-btns">
                        <a href="#" class="next-btn">Sauvegarder</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Leagues Content Section End -->
@endsection