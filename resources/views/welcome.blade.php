@extends('layouts.app')

@section('content')

<style>
body {
	background-image: url("/images/welcomee.jpg");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}





</style>



<br><br><br>
  <class="welcome">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">


          <h1 class="text-white font-weight-bold">iSCAMmmm </h1>
          <h1 class="text-white font-weight-bold">{{ __('messages.welcome') }}</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
        <h3> <p class="text-white font-weight-bold mb-5">{{ __('messages.Trace Your Suspicious Scammers with One Single Search') }}</p>  </h3>

				<a class="btn btn-primary btn-lg js-scroll-trigger" href="/customsearch">{{ __('messages.Search Now') }}</a>

<br>


        </div>
      </div>
    </div>
<br><br>
<br><br>





@endsection
