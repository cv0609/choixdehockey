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
                            Ligues
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
                    <a href="https://ballerzpicks.com/matche-detail/1069">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="#000">
                            <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                        </svg>
                    </a>
                </div>
                <h2>2024 Saison</h2>
 
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
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Points</th>
                                    <th scope="col">% C PAR</th>
                                    <th scope="col">% VC PAR</th>
 
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                                              <tr>
                                    <td class="player-dp">
                                        <img src="https://media.api-sports.io/basketball/teams/775.png" alt="dp">
                                    </td>
                                    <td>
                                        <h6>Alash Anatoly</h6>                                        
                                    </td>
                                    <td class="my-team-captain">
                                        <span class="c-logo">C</span>
                                  
 
                                        <p class="team_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 3929 data-already_captain = >
                                           <button class="plus player-toggle captain-plus" data-event="cap_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none captain-minus" data-event="cap_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                    </td>
                                    <td class="my-team-vice-captain">
                                        <span class="c-logo">VC</span>
                                        <p class="team_captain team_vice_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 3929>
                                           <button class="plus player-toggle vice-cap-plus" data-event="vice_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none vice-cap-minus" data-event="vice_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                        
                                    </td>
                                </tr>
                                                              <tr>
                                    <td class="player-dp">
                                        <img src="https://media.api-sports.io/basketball/teams/775.png" alt="dp">
                                    </td>
                                    <td>
                                        <h6>Kozyrkin Artem</h6>
                                        
                                    </td>
                                    <td my-team-captain>
                                        <span class="c-logo">C</span>
                                  
 
                                        <p class="team_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 9690 data-already_captain = >
                                           <button class="plus player-toggle captain-plus" data-event="cap_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none captain-minus" data-event="cap_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                    </td>
                                    <td class="my-team-vice-captain">
                                        <span class="c-logo">VC</span>
                                        <p class="team_captain team_vice_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 9690>
                                           <button class="plus player-toggle vice-cap-plus" data-event="vice_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none vice-cap-minus" data-event="vice_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                        
                                    </td>
                                </tr>
                                                              <tr>
                                    <td class="player-dp">
                                        <img src="https://media.api-sports.io/basketball/teams/775.png" alt="dp">
                                    </td>
                                    <td>
                                        <h6>Dedov Roman</h6>
                                        
                                    </td>
                                    <td my-team-captain>
                                        <span class="c-logo">C</span>
                                  
 
                                        <p class="team_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 3933 data-already_captain = >
                                           <button class="plus player-toggle captain-plus" data-event="cap_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none captain-minus" data-event="cap_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                    </td>
                                    <td class="my-team-vice-captain">
                                        <span class="c-logo">VC</span>
                                        <p class="team_captain team_vice_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 3933>
                                           <button class="plus player-toggle vice-cap-plus" data-event="vice_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none vice-cap-minus" data-event="vice_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                        
                                    </td>
                                </tr>
                                                              <tr>
                                    <td class="player-dp">
                                        <img src="https://media.api-sports.io/basketball/teams/775.png" alt="dp">
                                    </td>
                                    <td>
                                        <h6>Vakhrameev Andrey</h6>
                                        
                                    </td>
                                    <td my-team-captain>
                                        <span class="c-logo">C</span>
                                  
 
                                        <p class="team_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 3928 data-already_captain = >
                                           <button class="plus player-toggle captain-plus" data-event="cap_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none captain-minus" data-event="cap_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                    </td>
                                    <td class="my-team-vice-captain">
                                        <span class="c-logo">VC</span>
                                        <p class="team_captain team_vice_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 3928>
                                           <button class="plus player-toggle vice-cap-plus" data-event="vice_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none vice-cap-minus" data-event="vice_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                        
                                    </td>
                                </tr>
                                                              <tr>
                                    <td class="player-dp">
                                        <img src="https://media.api-sports.io/basketball/teams/775.png" alt="dp">
                                    </td>
                                    <td>
                                        <h6>Lavrenko Kirill</h6>
                                        
                                    </td>
                                    <td my-team-captain>
                                        <span class="c-logo">C</span>
                                  
 
                                        <p class="team_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 3930 data-already_captain = >
                                           <button class="plus player-toggle captain-plus" data-event="cap_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none captain-minus" data-event="cap_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                    </td>
                                    <td class="my-team-vice-captain">
                                        <span class="c-logo">VC</span>
                                        <p class="team_captain team_vice_captain" data-league_id = 396 data-match_id = 424864 data-team_id = 775 data-player_id = 3930>
                                           <button class="plus player-toggle vice-cap-plus" data-event="vice_plus">
                                              <i class="fa fa-plus" aria-hidden="true"></i>
                                           </button>
                                           <button class="minus player-toggle d-none vice-cap-minus" data-event="vice_minus">
                                              <i class="fa fa-minus" aria-hidden="true"></i>
                                           </button>
                                       </p>
                                        
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="team-btns">
                      <a href="#" id="save-team-btn" class="next-btn">Sauvegarder</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
@endsection