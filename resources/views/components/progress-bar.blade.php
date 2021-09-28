@props(['label', 'value'])

<div class="label-progress margin-bottom-5 text-white">
    <h4 class="section-14px-regular-montserrat">{{ $label }}</h4>
    <h4 class="section-14px-regular font-weight-500">{{ $value }}%</h4>
</div>
<div class="progress skill-progress margin-bottom-15" style="height:6px;">
    <div class="progress-bar progress-animated" style="width: {{ $value }}%; height:6px;" role="progressbar"></div>
</div>