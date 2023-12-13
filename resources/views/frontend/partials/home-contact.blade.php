<section class="section-area bg-primary form-card">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 align-self-center">
                <div class="form-head text-white mb-md-30">
                    <h3 class="title">Schedule Service</h3>
                    <h6 class="mb-0"><span class="fw4 me-1">OR Call</span> <a class="text-white"
                            href="tel:(416) 675 6853">(416) 675 6853</a></h6>
                </div>
            </div>
            <div class="col-lg-9">
                <form method="post" action="{{ route('frontend.contact.store') }}">
                    <div class="row sp5">
                        @csrf
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Name*">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" placeholder="Email*">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <input name="phone" type="text" class="form-control" placeholder="Phone*">
                            </div>
                        </div>
                        {{-- <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <select name="type_of_service" class="form-select">
                                    <option>Type of Service*</option>
                                    <option value="General Service">General Service</option>
                                    <option value="Paint Protection Film">Paint Protection Film</option>
                                    <option value="Ceramic Coating">Ceramic Coating</option>
                                    <option value="Window Tints">Window Tints</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <input name="message" type="text" class="form-control"
                                    placeholder="How Can We Help you*">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning w-100">SUBMIT REQUEST</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </diV>
</section>
