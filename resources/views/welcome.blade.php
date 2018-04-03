@extends('admin.templates.main')

@section('title','Home') 


@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
              <h5 class="card-header">Bienvenido</h5>
              <div class="card-body">
                <h5 class="card-title">Bienvenido a laravel 5 </h5>
                <p class="card-text">es un framework de código abierto para desarrollar aplicaciones y servicios web 
                con PHP 5 y PHP 7. Su filosofía es desarrollar código PHP de forma elegante y simple, evitando el 
                "código espagueti". Fue creado en 2011 y tiene una gran influencia de frameworks como 
                Ruby on Rails, Sinatra y ASP.NET MVC.</p>
                <a href="https://laravel.com/" class="btn btn-primary">desea ir a la Documentacion</a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection