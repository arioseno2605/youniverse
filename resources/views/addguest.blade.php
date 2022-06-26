@extends('layouts.head')
@section('content')

</div>
</div>
</div>

<!--============= Banner Section Starts Here =============-->
<section class="banner-section-4 bg_img oh" data-background="{{ asset('assets/images/banner/bgfinal.png')}}">
<<<<<<< HEAD
<div class="container">
=======
    <div class="container">
>>>>>>> e5a4dfe040c34a5dfec83717553f249128457909
        <div class="row align-items-center">
            <div class="col-md-10 col-lg-7 col-xl-8">
                <div class="banner-content cl-blue">
                    <form action="{{ url('guestadd/post',@$guest->id) }}" method="post">
                        @csrf
<<<<<<< HEAD
                        @if(!empty($guest))
                            @method('PATCH')
                        @endif
                        <div class="card-content">
                            <div class="form-group">
                                <div class="form-group ">
                                    <label for="firstname" class="cl-white">First Name:</label>
                                    <input type="text" class="form-control cl-black" id="firstname" name="firstname"
                                           value="{{old('firstname',@$guest->firstname)}}">
                                </div>
                                <div class="form-group ">
                                    <label for="lastname" class="cl-white">Last Name:</label>
                                    <input type="text" class="form-control cl-black" id="lastname" name="lastname"
                                           value="{{old('lastname',@$guest->lastname)}}">
                                </div>
                                <div class="form-group ">
                                    <label for="organization" class="cl-white">Organization:</label>
                                    <input type="text" class="form-control cl-black" id="organization"
                                           name="organization" value="{{old('organization',@$guest->organization)}}">
                                </div>
                                <div class="form-group ">
                                    <label for="address" class="cl-white">Address:</label>
                                    <input type="text" class="form-control cl-black" id="address" name="address"
                                           value="{{old('address',@$guest->address)}} ">
                                </div>
                                <div class="form-group ">
                                    <label for="province" class="cl-white">Province: </label>
                                    <select class="form-control" id="province" name="province"
                                            onchange="hideOtherCity()">
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->kode}}">{{ $province->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="city" class="cl-white">City: </label>
                                <select class="form-control" id="city" name="city">
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->kode }}">{{ $city->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="phone" class="cl-white">Phone:</label>
                                <input type="number" class="form-control cl-black" id="phone" name="phone"
                                       value="{{old('phone',@$guest->phone)}}">
                            </div>
                            <div class="form-group cl-white">
                                <button type="submit" class="custom-button">Submit</button>

=======

                        @if(!empty($guest))
                            @method('PATCH')
                        @endif

                        <div class="card-content">
                            <div class="form-group">
                                <div class="form-group ">
                                    <label for="firstname" class="cl-white">First Name:</label>
                                    <input type="text" class="form-control cl-black" id="firstname" name="firstname"
                                           value="{{old('firstname',@$guest->firstname)}}">
                                </div>
                                <div class="form-group ">
                                    <label for="lastname" class="cl-white">Last Name:</label>
                                    <input type="text" class="form-control cl-black" id="lastname" name="lastname"
                                           value="{{old('lastname',@$guest->lastname)}}">
                                </div>
                                <div class="form-group ">
                                    <label for="organization" class="cl-white">Organization:</label>
                                    <input type="text" class="form-control cl-black" id="organization"
                                           name="organization" value="{{old('organization',@$guest->organization)}}">
                                </div>
                                <div class="form-group ">
                                    <label for="address" class="cl-white">Address:</label>
                                    <input type="text" class="form-control cl-black" id="address" name="address"
                                           value="{{old('address',@$guest->address)}} ">
                                </div>
                                <div class="form-group ">
                                    <label for="province" class="cl-white">Province: </label>
                                    <select class="form-control" id="province" name="province"
                                            onchange="hideOtherCity()">
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->kode}}">{{ $province->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="city" class="cl-white">City: </label>
                                <select class="form-control" id="city" name="city">
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->kode }}">{{ $city->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="phone" class="cl-white">Phone:</label>
                                <input type="number" class="form-control cl-black" id="phone" name="phone"
                                       value="{{old('phone',@$guest->phone)}}">
                            </div>
                            <div class="form-group cl-white">
                                <button type="submit" class="custom-button">Submit</button>

>>>>>>> e5a4dfe040c34a5dfec83717553f249128457909
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>


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