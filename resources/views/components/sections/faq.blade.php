@props([
    'title' => null,
    'subtitle' => null,
    'items' => [],
    'id' => 'faq-accordion'
])

@php
    $currentLocale = app()->getLocale();
    $isRtl = in_array($currentLocale, ['fa'], true);
@endphp

<section class="faq-area ptb-100 bg-f9f9f9">
    <div class="container">
        @if($title || $subtitle)
            <div class="section-title text-center mb-5">
                @if($subtitle)
                    <span class="top-title">{{ $subtitle }}</span>
                @endif
                @if($title)
                    <h2 class="mt-2">{{ $title }}</h2>
                @endif
            </div>
        @endif

        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="accordion custom-accordion" id="{{ $id }}">
                    @foreach($items as $index => $item)
                        <div class="accordion-item mb-3 border-0 rounded-4 shadow-sm overflow-hidden">
                            <h2 class="accordion-header" id="heading-{{ $index }}">
                                <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }} fw-bold py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse-{{ $index }}">
                                    {{ $item['question'] }}
                                </button>
                            </h2>
                            <div id="collapse-{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading-{{ $index }}" data-bs-parent="#{{ $id }}">
                                <div class="accordion-body bg-white text-muted py-3 px-4">
                                    {!! $item['answer'] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@push('json')
    @php
        $faqSchema = new \App\Services\StructuredData\FAQSchema();
        foreach($items as $item) {
            $faqSchema->addQuestion($item['question'], strip_tags($item['answer']));
        }
    @endphp
    <x-seo.structured-data :schema="$faqSchema" />
@endpush

<style>
    .custom-accordion .accordion-button {
        background-color: #fff;
        color: #111;
        box-shadow: none;
        transition: all 0.3s ease;
    }
    .custom-accordion .accordion-button:not(.collapsed) {
        color: var(--main-color, #007bff);
        background-color: #fff;
    }
    .custom-accordion .accordion-button::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
    .custom-accordion .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23007bff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
    [dir="rtl"] .custom-accordion .accordion-button::after {
        margin-left: initial;
        margin-right: auto;
    }
</style>
