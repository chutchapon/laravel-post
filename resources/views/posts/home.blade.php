@extends('layouts.app')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

{{-- <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script> --}}

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css" rel="stylesheet" />

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="mt-2 col-md-12">
                <h4 class="mb-3"><strong>Heroes</strong></h4>
                <div class="row justify-content-center">
                    <div class="mt-2 row">
                        @foreach ($posts as $post)
                            @if ($post->category_id == 1)
                                <div class="col-lg-4 col-md-12 mb-4 ">
                                    <div class="card" >
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            @if (is_url($post->thumbnail))
                                                <img src={{ $post->thumbnail }} class="rounded mx-auto d-block" width="256"
                                                    height="144" />
                                            @else
                                                <img src={{ asset('storage/images/' . $post->thumbnail) }}
                                                    class="rounded mx-auto d-block" width="256" height="144" />
                                            @endif
                                            <a href="#!">
                                                <div class="mask"
                                                    style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"> {{ $post->title }}</h5>
                                            <p class="card-text">
                                                {{ $post->description }}
                                            </p>
                                            <a href="#!" class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <h4 class="mb-3"><strong>Items</strong></h4>
                <div class="row justify-content-center">
                    <div class="mt-2 row">
                        @foreach ($posts as $post)
                            @if ($post->category_id == 2)
                                <div class="col-lg-4 col-md-12 mb-4">
                                    <div class="card">
                                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                            @if (is_url($post->thumbnail))
                                                <img src={{ $post->thumbnail }} class="rounded mx-auto d-block"
                                                    width="256" height="144" />
                                            @else
                                                <img src={{ asset('storage/images/' . $post->thumbnail) }}
                                                    class="rounded mx-auto d-block" width="256" height="144" />
                                            @endif
                                            <a href="#!">
                                                <div class="mask"
                                                    style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"> {{ $post->title }}</h5>
                                            <p class="card-text">
                                                {{ $post->description }}
                                            </p>
                                            <a href="#!" class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <h4 class="mb-3"><strong>Heroes Table</strong></h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        @if ($post->category_id == 1)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <h4 class="mb-3"><strong>Items Table</strong></h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        @if ($post->category_id == 2)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
