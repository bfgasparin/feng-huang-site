@extends('layouts.app')

@section('content')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide m-b-0" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="img first-slide" src="{{ asset('images/dalai-lama.jpg') }}" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-xs-left">
              <blockquote class="blockquote">
                <h1 class="m-b-0">É muito melhor perceber um defeito em si mesmo, do que dezenas nos outros, poia o seu defeito, você pode mudar.</p>
                <footer class="blockquote-footer text-info h2">Dalai Lama - <cite title="Source Title">Monge Budista</cite></footer>
              </blockquote>
              <!-- <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img second-slide" src="{{ asset('images/aelson.jpg') }}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <blockquote class="blockquote">
                <h1 class="m-b-0">O maior prazer de um homem sábio é se passar por tolo diante de um tolo que quer se passar por sábio</p>
                <footer class="blockquote-footer text-info h2">Cofúsio<cite title="Source Title">Source Title</cite></footer>
              </blockquote>
              <!-- <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="img third-slide" src="{{ asset('images/shaolin-giant-buddha-3.jpg') }}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-xs-right">
              <blockquote class="blockquote text-xs-right">
                <h1 class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer text-info h2">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            <!--   <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Modality appresentations
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="jumbotron jumbotron-fluid m-b-0 bg-primary">
      <div class="container">
        <h1>{{ trans('core.institute') }}</h1>
        <p class="lead">Representante oficial de Wudang Kung Fu na América Latina.</p>
      </div>
    </div>
    <div class="container-fluid modality p-t-2">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('images/wudang-kung-fu.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{ trans('modality.wudang') }}</h2>
          <p>{{ trans('modality.wudang-summary') }}</p>
          <p><a class="btn btn-info" href="#" role="button">{{ trans('core.view-details') }} &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('images/shaolin-kung-fu.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{ trans('modality.shaolin') }}</h2>
          <p>{{ trans('modality.shaolin-summary') }}</p>
          <p><a class="btn btn-info" href="#" role="button">{{ trans('core.view-details') }} &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="{{ asset('images/meditation.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{ trans('modality.meditation') }}</h2>
          <p>{{ trans('modality.meditation-summary') }}</p>
          <p><a class="btn btn-info" href="#" role="button">{{ trans('core.view-details') }} &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div> <!-- /container -->
@endsection
