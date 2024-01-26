 <!-- PPF FAQs -->
 <div class="tab-pane fade @if($show)  show active @endif" id="ppf" role="tabpanel" aria-labelledby="ppf-tab">
     <div class="accordion" id="ppfAccordion">
         <div class="row">
             <div class="">
                 <div class="ttr-accordion style1" id="themeAccordion2">
                    @foreach($ppfFaqs as $index => $ppfFaq)
                        <div class="card">
                            <div class="card-header {{ $index === 0 ? '' : 'collapsed' }}" id="heading{{ $index }}" data-bs-toggle="collapse" role="button"
                                data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $index }}">
                                <i class="fa fa-question-circle"></i>
                                {{ $ppfFaq->question }}
                            </div>
                            <div id="collapse{{ $index }}" class="collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}"
                                data-bs-parent="#themeAccordion2">
                                <div class="card-body">
                                    {{ $ppfFaq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>
