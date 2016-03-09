@extends('layouts.app')

@section('content')
    <fh-citations class="m-b-0" :list="citations"></fh-citations>
  
    <fh-full-painel class="m-b-0">
		<h1>{{ trans('core.institute') }}</h1>
		<p class="lead">{{ trans('core.institute-sub-title') }}</p>
    </fh-full-painel>

    <fh-modalities-brief list="{{ $modalities }}" class="container-fluid p-t-2" button-text="{{ trans('core.view-details') }}"></fh-modalities-brief>
@endsection
