@extends('layouts.app')

@section('content')
  <div class="m-b-0">
    <fh-citations :list="citations"></fh-citations>
  </div>  
  
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
