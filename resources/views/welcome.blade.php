@extends('layouts.app')

@section('content')
    <fh-citations class="m-b-0" :list="citations"></fh-citations>
  
    <!-- Modality appresentations
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <fh-full-painel class="m-b-0">
      <h1>{{ trans('core.institute') }}</h1>
      <p class="lead">{{ trans('core.institute-sub-title') }}</p>
    </fh-full-painel>

    <div class="container-fluid modality p-t-2">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4 center-block">
          <img class="img-circle" src="{{ asset('images/wudang-kung-fu.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{ trans('modality.wudang') }}</h2>
          <p>{{ trans('modality.wudang-summary') }}</p>
          <p><a class="btn btn-info" href="#" role="button">{{ trans('core.view-details') }} &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 center-block">
          <img class="img-circle" src="{{ asset('images/shaolin-kung-fu.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{ trans('modality.shaolin') }}</h2>
          <p>{{ trans('modality.shaolin-summary') }}</p>
          <p><a class="btn btn-info" href="#" role="button">{{ trans('core.view-details') }} &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 center-block">
          <img class="img-circle" src="{{ asset('images/meditation.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h2>{{ trans('modality.meditation') }}</h2>
          <p>{{ trans('modality.meditation-summary') }}</p>
          <p><a class="btn btn-info" href="#" role="button">{{ trans('core.view-details') }} &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div> <!-- /container -->
@endsection
