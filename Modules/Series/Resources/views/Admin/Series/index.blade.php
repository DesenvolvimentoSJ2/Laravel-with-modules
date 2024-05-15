@extends('series::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('series.name') !!}
    </p>

    <p>
        Location:
        <span>
            Series::Admin.Series.index
        </span>
    </p>
@endsection
