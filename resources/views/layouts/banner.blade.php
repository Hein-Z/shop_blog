<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                @if ($message = session()->has('success'))
                    <div class="alert alert-dark" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if ($message = session()->has('error'))
                    <div class="alert alert-warning" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                {{-- <h4>Fugiat Aspernatur</h4>
                <h2>Laboriosam reprehenderit ducimus</h2> --}}
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                {{-- <h4>Saepe Omnis</h4>
                <h2>Quaerat suscipit unde minus dicta</h2> --}}
            </div>
        </div>
    </div>
</div>
