 <!-- Window Tint FAQs -->
 <div class="tab-pane fade @if($show)  show active @endif" id="windowTint" role="tabpanel" aria-labelledby="window-tint-tab">
     <div class="accordion" id="windowTintAccordion">
         <div class="row">
             <div class="">
                 <div class="ttr-accordion style1" id="themeAccordion3">
                    @foreach($wtFaqs as $index => $wtFaq)
                        <div class="card">
                            <div class="card-header {{ $index === 0 ? '' : 'collapsed' }}" id="heading{{ $index }}" data-bs-toggle="collapse" role="button"
                                data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $index }}">
                                <i class="fa fa-question-circle"></i>
                                {{ $wtFaq->question }}
                            </div>
                            <div id="collapse{{ $index }}" class="collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}"
                                data-bs-parent="#themeAccordion3">
                                <div class="card-body">
                                    {{ $wtFaq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>
