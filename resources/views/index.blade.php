@extends('layouts.head')
@section('content')

</div>
</div>
</div>

<!--============= Banner Section Starts Here =============-->
<section class="banner-section-4 bg_img oh" data-background="{{ asset('assets/images/banner/bgfinal.png')}}">
<div class="container">
<div class="row align-items-center">
    <div class="col-md-10 col-lg-7 col-xl-8">
        <div class="banner-content cl-white">
        <h3 class="cate">Change Password</h3>
        <form method="POST" action="{{ route('changePassword') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control cl-black" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control cl-black" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control cl-black" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="custom-button">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>

        </div>
    </div>
    <div class="col-lg-5 col-xl-4">
        <div class="banner-thumb-4">
        <div class="col-lg-5 col-xl-4">
        <div class="banner-thumb-4">
          
          
        </div>
    </div>
<!--  
            <img src="assets/images/banner/banner-4.png" alt="banner"> -->
        </div>
    </div>
</div>
</div>
<div class="banner-shape d-none d-lg-block bot-0">
<img src="{{ asset('assets/css/img/banner-shape-4.png')}}" alt="css">
</div>
</section>
<!--============= Banner Section Ends Here =============-->






    </div>
</div>
</div>
</section>



  
@endsection
