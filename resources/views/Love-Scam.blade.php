

@extends('layouts.app')

@section('content')

<style>
.jumbotron {
  background-color: #323232;
  color: #fff;
}

body {
  background-image: url("/images/blog.png");
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


</style>

<div class="jumbotron text-center">
<h1>{{__('lang.Modus Operandi- Love SCAM')}}</h1>

</div>

<div class="post">
<a href="/Love-Scam"><img src={{url('images/love-scam.jpeg')}} alt="img" style="width:80%"></a>
</div>



@endsection
