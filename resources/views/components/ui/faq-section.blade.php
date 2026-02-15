@props(['faqs' => [], 'withSchema' => true])

<div class="faq-section">
    @if(count($faqs) > 0)
        <div class="accordion" id="faqAccordion">
            @foreach($faqs as $index => $faq)
                <div class="accordion-item mb-3">
                    <h3 class="accordion-header" id="heading{{ $index }}">
                        <button class="accordion-button @if($index !== 0) collapsed @endif" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapse{{ $index }}" 
                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" 
                                aria-controls="collapse{{ $index }}">
                            {{ $faq['question'] }}
                        </button>
                    </h3>
                    <div id="collapse{{ $index }}" 
                         class="accordion-collapse collapse @if($index === 0) show @endif" 
                         aria-labelledby="heading{{ $index }}" 
                         data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {!! nl2br(e($faq['answer'])) !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if($withSchema)
            @push('json')
                @php
                    $faqSchema = new \App\Services\StructuredData\FAQSchema();
                    $faqSchema->addQuestions($faqs);
                @endphp
                <x-seo.structured-data :schema="$faqSchema" />
            @endpush
        @endif
    @endif
</div>
