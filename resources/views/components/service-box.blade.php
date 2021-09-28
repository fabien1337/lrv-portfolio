@props(['title', 'description', 'icon', 'isActive'])

<div class="col-md-4">
    <div class="services-box {{ isset($isActive) && $isActive ? 'active' : '' }}">
        <div class="wraper-effect {{ isset($isActive) && $isActive ? 'active' : '' }}"></div>
        <span class="icon-services {{ $icon }} font-size-icon {{ isset($isActive) && $isActive ? 'active' : '' }}"></span>
        <div class="services-content">
            <p class="section-22px-montserrat">{{ $title }}</p>
            <p class="services-desc">{!! $description !!}</p>
        </div>
    </div>
</div>