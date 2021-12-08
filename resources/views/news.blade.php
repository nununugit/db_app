@extends('layouts.app')

@section('content')
<div id="app">

<section class="py-5">
    <div class="container px-5">
        <h1 class="fw-bolder fs-5 mb-4">AIシステム工学科TOPニュース</h1>
        <div class="card border-0 shadow rounded-3 overflow-hidden">
            <div class="card-body p-0">
                <div class="row gx-0">
                    <div class="col-lg-6 col-xl-5 py-lg-5">
                        <div class="p-4 p-md-5">
                            <div class="badge bg-primary bg-gradient rounded-pill mb-2">{{ $newses[0]->created_at }}</div>
                            <div class="h2 fw-bolder">{{ $newses[0]->n_title }}</div>
                            <p>{{ $newses[0]->n_content }}</p>
                            <a class="stretched-link text-decoration-none" href="#!">
                                Read more
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7">
                        <div class="bg-featured-blog" style="background-image: url('https://dummyimage.com/700x350/343a40/6c757d')">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container px-5">
        <div class="row gx-5">
            <div class="col-xl-8">
                <h2 class="fw-bolder fs-5 mb-4">News</h2>
                @foreach ($newses as $news)
                    <div class="mb-4">
                        <div class="small text-muted">{{ $news->created_at }}</div>
                        <a class="link-dark" href="#!"><h3>{{ $news->n_title }}</h3></a>
                    </div>

                    @if(($loop->index)>=5)
                        @break
                    @endif
                @endforeach

                <div class="text-end mb-5 mb-xl-0">
                    <a class="text-decoration-none" href="#!">
                        More news
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection