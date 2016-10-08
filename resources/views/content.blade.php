@extends('master')

@section('content')
<div class="inner cover">
            <h1 class="cover-heading">Comisia de admitere!</h1>
            <p class="lead">Site-ul de admitere al colegiului "Iulia Hasdeu" care va fi integrat in viitorul apropiat.</p>
            @if (Session::has('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d'))
            <p class="lead">
              <a href="/blog/public/admitere" class="btn btn-lg btn-default col-md-12">Aplică!</a>
            </p>
            @else
              <a href="/blog/public/register" class="btn btn-lg btn-default col-md-12">Poți aplica dupa Înregistrare!</a>
            @endif
          </div>
@endsection