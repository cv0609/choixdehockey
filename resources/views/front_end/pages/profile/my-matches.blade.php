@extends('front_end.layout.main')
@section('content')

<!--==== Matches section start ====-->
@php
   $PointCalculationService = app(App\Services\PointCalculationService::class);
@endphp
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
                            Mes matchs
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
                <h2>Mes matchs</h2>

                <!-- Content -->
                <div class="ice-leagues-inner-content">
                    <div class="matches-table ">
                        <table cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Équipe</th>
                                    <th scope="col">Détails du match</th>
                                    <th scope="col">Équipe</th>
                                    <th scope="col">Score </th>
                                    <th scope="col">Statut </th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($matches as $match)
                                @php
                                    $points = $PointCalculationService->calculatePoints(Auth::user()->id,$match->fixture_id);
                                @endphp
                                <tr>
                                    <td class="match-team-logo">
                                        <a href="">
                                            <div class="my-match-team-logo-inner my-match-team-logo-inner1"></div>
                                            <h6>Ligue Magnus</h6>
                                        </a>
                                    </td>
                                    <td>
                                        <h6>Accor Arena</h6>
                                        <p>France</p>
                                        <span>2024-12-21 07:30 PM</span>
                                    </td>
                                    <td class="match-team-logo">

                                        <div class="my-match-team-logo-inner my-match-team-logo-inner2"></div>
                                        <h6>National Hockey League</h6>
                                    </td>
                                    <td class="match-score">
                                        <h4>0</h4>
                                    </td>
                                    <td class="match-status">
                                        <p class="win">-- </p>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- Leagues Content Section End -->
@endsection

@section('custom-script')

<script>
   $(".matche-main").on('click', function() {
    var fixtureId = $(this).data('fixture-id');
    var leagueId = $(this).data('league-id');
    var url = "{{ route('profile.match-detail', [':leagueId', ':fixtureId']) }}";
    url = url.replace(':fixtureId', fixtureId).replace(':leagueId', leagueId);
    window.location.href = url;
  });
</script>

@endsection
