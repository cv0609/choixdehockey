<div class="col-md-4">
    <div class="profile-side">
        <div class="profile-sec">
            <div class="user_img">
            <div class="update_img_user">                               
            <form id="profile-pic-form" action="{{ route('profile.update-pic') }}" method="POST" enctype="multipart/form-data">
            @csrf                      
            <input type="file" id="profile-pic-input" name="profile_picture" style="display: none;" accept="image/*" onchange="document.getElementById('profile-pic-form').submit()">                              
                <span class="edit_pan" onclick="document.getElementById('profile-pic-input').click()" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                </svg> </span> 
            </form> 
        </div>
                <div class="user_name">
                    <h3>{{Auth::user()->name}} {{Auth::user()->lname}}</h3>
                </div>
            </div>
            <div class="edit_option_bar">
              <a href="{{route('profile.profile')}}">
                 <div class="content-bar">
                    <span class="tabedit">Edit Profile</span>
                 </div>
              </a>  
              <a href="{{ route('profile.change.password') }}">
                <div class="content-bar">
                    <span class="tabedit">Change password</span>
                </div>
              </a>   
            </div>
        </div>
    </div>
</div>