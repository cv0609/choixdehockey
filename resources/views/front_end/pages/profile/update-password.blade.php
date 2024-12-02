@extends('front_end.layout.main')
@section('content')

<section class="page-title-section overlay profile_sec" data-background="images/backgrounds/page-title.jpg">
      
</section>

   <!-- Leagues Content Section Start -->
   <section class="my-profile">
        <div class="container">
            <div class="mmy-profile-inner">
                <div class="profile-side">
                    <div class="profile-sec">
                        <div class="user-img">
                        <div class="update_img_user">                               
                                <form id="profile-pic-form" action="https://hockidraft.com/profile/profile/update-pic" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="1yMWXSGgBG959PKYUdeT5x8IraLTTzmpm8a88zLW" autocomplete="off">                        <input type="file" id="profile-pic-input" name="profile_picture" style="display: none;" accept="image/*" onchange="document.getElementById('profile-pic-form').submit()">                              
                                    <span class="edit_pan" onclick="document.getElementById('profile-pic-input').click()" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                                    </svg> </span> 
                                </form> 
                            </div>
                            <div class="user_name">
                            <h3>{{Auth::user()->name}}</h3>
                            </div>
                        </div>
                        <div class="edit_option_bar">
                            <div class="content-bar">
                                <a href="{{route('profile.profile')}}" class="tabedit">Modifier le profil
                                </a>
                            </div>
                            <div class="content-bar">
                                <a href="{{ route('profile.change.password') }}" class="tabedit">Changer le mot de passe</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sec">
                    <div class="user-content-update">
                        <div class="">
                            <div class="tab-content tab-content-1 active">
                                <div class="user-content-box">
                                    <form action="{{ route('profile.update.password') }}" method="POST" class="mt-60 ">
                                    @csrf
                                        <div class="row">
                                            <div class="mb-3 col-sm-6">
                                                <input type="password" placeholder="Mot de passe actuel"
                                                    class="form-control para" id="name" required="required"
                                                    autocomplete="off" name="current_password">
                                                    @error("current_password")
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                            </div>
                                            <div class="mb-3 col-sm-6">
                                                <input type="password" placeholder="Nouveau mot de passe"
                                                    class="form-control para" id="last-name" required="required"
                                                    autocomplete="off" name="new_password">
                                                    @error("new_password")
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                            </div>
                                            <div class="mb-3 col-sm-6">
                                                <input type="password" placeholder="Confirmez le mot de passe"
                                                    class="form-control para" id="email" required="required"
                                                    autocomplete="off" name="new_password_confirmation">
                                            </div>                                         
                                        </div>
                                        <button type="submit" class="btn btn-primary">Mise à jour</button>

                                        <div class="reset-password">
                                            <a href="change-password"> Réinitialiser le mot de passe </a>
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
