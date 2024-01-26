<!-- Ceramic Coating FAQs -->
<div class="tab-pane fade show active" id="ceramicCoating" role="tabpanel" aria-labelledby="ceramic-coating-tab">
    <div class="row">
        <div class="">
            <div class="ttr-accordion style1" id="themeAccordion1">
                @foreach($ccFaqs as $index => $ccFaq)
                    <div class="card">
                        <div class="card-header {{ $index === 0 ? '' : 'collapsed' }}" id="heading{{ $index }}" data-bs-toggle="collapse" role="button"
                            data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                            aria-controls="collapse{{ $index }}">
                            <i class="fa fa-question-circle"></i>
                            {{ $ccFaq->question }}
                        </div>
                        <div id="collapse{{ $index }}" class="collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}"
                            data-bs-parent="#themeAccordion1">
                            <div class="card-body">
                                {{ $ccFaq->answer }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
