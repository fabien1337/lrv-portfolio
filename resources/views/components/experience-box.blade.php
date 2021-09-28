@props(['year', 'company', 'city', 'job', 'description'])

<div class="swiper-slide">
    <div class="work-box">
        <div class="work-box-left">
            <div class="date section-14px-regular font-weight-700 margin-bottom-12">{{ $year }}</div>
            <div class="job section-20px-montserrat">{{ $company }}</div>
            <div class="client section-20px-montserrat padding-right-10">{{ $city }}</div>
        </div>
        <div class="work-box-center">
            <div class="work-job">
                <h3 class="section-20px-montserrat">{!! $job !!}</h3>
            </div>
        </div>
        <div class="work-box-right">
            <div class="work-introduce">
                <p>{!! $description !!}</p>
            </div>
        </div>
    </div>
</div>