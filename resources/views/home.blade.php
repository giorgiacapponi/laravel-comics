@extends('layouts.app')

@section('content')
    <div class="banner">
    </div>
    <main>
        <section class="current-series">
        <div class="container">
            <h2>current series</h2>
            <div class="row row-cols-6 d-flex">

                @foreach ($items as $item)
                    <div class="col">
                        <div class="card" style="width: 10rem;">
                            <img src="{{ $item['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">{{ $item['series'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-center">
                <button>load more</button>
            </div>
            
        </div>
        </section>
        <div class="links">
            <div class="container">
                <ul class="d-flex justify-content-between align-items-center">
                    @foreach($links_main as $link)
                    {{-- <img src="{{Vite:: asset('resources/img/{{$link[/'img']}}')}}" alt=""> --}}
                    <li>{{$link['name']}}</li>
                    @endforeach
                </ul>

            </div>
        </div>
    </main>
@endsection
