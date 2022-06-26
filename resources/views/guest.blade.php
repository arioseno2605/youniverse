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
         
            <table class="fc table" id="table">
                <thead>
                <tr>
		        	<th>First Name</th>
		        	<th>Last Name</th>
		        	<th>Organization</th>
		        	<th>Address</th>
                    <th>Province</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Action</th>
		        	
		        </tr>
                </thead>
                <tbody>
		        @foreach($guest as $p)
                
		        <tr>
		        	<td>{{ $p->firstname }}</td>
		        	<td>{{ $p->lastname }}</td>
		        	<td>{{ $p->organization }}</td>
		        	<td>{{ $p->address }}</td>
                    <td>{{ $p->province}}</td>
                    <td>{{ $p->city }}</td>
                    <td>{{ $p->phone }}</td>
                    <td> <a href="{{url('delete/'.$p->id)}}">Delete</a>
                         <a href="{{url('guestadd/'.$p->id)}}">EDIT</a>
                    </td>
		        </tr>
              
		        @endforeach
                </tbody>
            </table>
            <a href="{{route('guestindex')}}" class="custom-button"><span>Add Guest</span></a>
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
@push('scripts')
<script>
  $(document).ready(function() {
    $('#table').DataTable({
    "order": [],
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false 
});


});
</script>
@endpush

@endsection

