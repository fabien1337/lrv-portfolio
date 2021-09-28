@props(['delay', 'year', 'title', 'description', 'url'])

<div class="col-md-6">
    <div class="counter-box themesflat-counter hover-up wow fadeInUp" data-wow-delay="{{ $delay }}">
        <div class="number-content section-65px-montserrat">{{ $year }}</div>
        <h3 class="section-20px-montserrat font-weight-600 line-height-35 mb-3">{!! $title !!}</h3>
        <p>{!! $description !!}</p>
        <a href="{{ $url }}" target="_blank" class="mt-5 button-footer arrow-btn btn-st btn-style-1">{{ __('master.lets_go') }}</a>
    </div>
</div>