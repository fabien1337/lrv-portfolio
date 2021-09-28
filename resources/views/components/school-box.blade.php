@props(['title', 'year', 'description'])

<div class="swiper-slide">
    <div class="about-education-box">
        <div class="about-education-preview">
            <div class="education section-20px-montserrat text-pri margin-bottom-8">{{ $title }}</div>
            <div class="date section-14px-regular font-weight-700 margin-bottom-18">{{ $year }}</div>
        </div>
        <div class="about-education-desc">
            <p>{!! $description !!}</p>
        </div>
    </div>
</div>