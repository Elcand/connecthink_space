@section('title', 'List Studio')

<div class="container mt-10">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @if ($studios->isEmpty())
            <div class="col-12 text-center">
                <p class="text-muted">Tidak ada studio tersedia saat ini.</p>
            </div>
        @else
            @foreach ($studios as $studio)
                <div class="col">
                    <div class="card h-100">
                        <figure class="card-img-top overlay overlay-1 hover-scale">
                            <a href="#">
                                <img src="{{ asset('assets/img/' . $studio->image) }}"
                                    alt="{{ $studio->name_labs ?? 'Studio' }}" class="img-fluid" />
                            </a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="card-body">
                            <div class="post-header">
                                <h2 class="post-title h3 mb-3">
                                    <a class="link-dark" href="#">{{ $studio->name_labs }}</a>
                                </h2>
                            </div>
                            <div class="post-content">
                                <p>{{ $studio->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
