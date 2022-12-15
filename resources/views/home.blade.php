@extends('layouts.app')

@section('content')
    <section id="comic_list" class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 mb-5">
                        <div class="img_wrapper"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></div>
                        <h4>{{ $comic['series'] }}</h4>
                    </div>
                @endforeach
            </div>
            <button>Load More</button>
        </div>
    </section>
@endsection
