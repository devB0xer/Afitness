@extends('main')

@section('title', 'Услуги')

@section('content')

<div class="container text-white">
    @foreach ($categories as $category)
        <div class="row col-12 op-bl-bg p-4 my-3 rounded-4">
            <div class="col-3 bg-black text-center p-2 rounded-4">
                <img src="/img/{{$category->image_path}}" class="img-fluid card-img rounded-4" alt="">
                <h2>{{ $category->title }}</h2>
            </div>
            <div class="col-9 text-center position-relative">
                <p class="text-break">{{ $category->description }}</p>
                <div class="card-footer mb-5 w-100 position-absolute bottom-0 start-50 translate-middle-x">
                    <a class="col-6 col-sm-6 col-lg-2 btn cta-b rounded-3 py-2"
                        href="{{url('/category', $category->id)}}">Выбрать услугу</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection