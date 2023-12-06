@extends('admin.layouts.app')
@section('content')
<style>
  .label-style {
    border: 1px solid grey;
    border-radius: 7px;
    padding: 42px 33px;
  }

  .input-style {
    border: 1px grey !important;
    padding: 35px 10px 29px 0;
    display: none;
  }

  form div {
    margin-bottom: 0;
  }

  #image-container {
    position: relative;
    display: inline-block;
  }

  .defect-input {
    position: absolute;
    z-index: 10;
  }

  #car-image {
    display: block;
    max-width: 100%;
    height: auto;
  }

  button {
    margin-top: 10px;
  }

  .input-wrapper {
    position: absolute;
    z-index: 10;
  }

  .card hr {
    color: #adb35b !important;
    height: 2px !important;
    width: 100% !important;
  }

  .signature-line {
    border-bottom: 1px solid #000;
    /* Adjust the border properties as needed */
    margin-top: 30px;
    /* You can adjust the spacing above the signature line */
  }

  .signature-line {
    border-bottom: 1px solid #000;
    /* Adjust the border properties as needed */
    margin-top: 30px;
    /* You can adjust the spacing above the signature line */
  }

  .kbw-signature {
    width: 400px;
    height: 200px;
  }
</style>
<div class="content container-fluid">
  {{--Section 1--}}
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

    <div class="row invoice-add">
      <!-- Invoice Add-->
      <div class="col-lg-12 col-12 mb-lg-0 mb-4">
        <div class="card invoice-preview-card">
          <div class="card-body">
            <div class="row p-sm-3 p-0">
              <div class="col-md-4 mb-md-0 mb-4">
                <div class="d-flex svg-illustration mb-4 gap-2">
                  <span class="app-brand-logo demo">
                    <img src="{{ asset('storage/logo/logo.webp') }}">
                  </span>
                </div>
              </div>
              <div class="col-md-4" style="text-align: center;">
                <h2 class="mb-1" style=" color: #040404 !important;">THE ARMOUR LAB</h2>
                <p class="mb-1">701 MILLWAY AVENUE, UNIT 6, VAUGHAN, ON L4K 3S7</p>
                <p class="mb-1">T: 416-675-6853</p>
                <p class="mb-1">E: INFO@THEARMOURLAB.COM</p>
                <p class="mb-1">WWW.THEARMOURLAB.COM</p>
              </div>
              <div class="col-md-4" style="text-align: end;">
                <h1 style=" color: #040404 !important;">WORK</h1>
                <h1 style=" color: #040404 !important;">ORDER</h1>
              </div>
            </div>
            <hr class="my-4 mx-n4" />
            <!-- Form Start -->
            <form method="post" action="{{ route('admin.invoice.update') }}" enctype="multipart/form-data">
              @csrf

              <input type="hidden" name="old_drivers_license" value="{{@$order->drivers_license}}" />
              <div class="row py-sm-3">
                <div class="col-md-4 col-12">
                  <label for="email" class="form-label me-5 fw-medium">Email:</label>
                  <select class="form-control" id="email" name="email" required>
                    <option value="">Select Email</option>
                    @foreach($users as $user)
                    <option value="{{ $user->email }}" data-first-name="{{ $user->first_name }}" data-last-name="{{ $user->last_name }}" data-phone="{{ $user->phone }}" data-id="{{ $user->id }}" {{ @$order->user->email == $user->email ? 'selected' : '' }}>{{ $user->email }}</option>
                    @endforeach
                  </select>
                </div>
                <input type="hidden" class="form-control" id="id" name="id" />
                <input type="hidden" class="form-control" id="id" value="{{ $id }}" name="work_order_id" />
                <div class="col-md-4 col-12">
                  <label for="first_name" class="form-label me-5 fw-medium">First Name:</label>
                  <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" />
                </div>
                <div class="col-md-4 col-12">
                  <label for="last_name" class="form-label me-5 fw-medium">Last Name:</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" />
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <label for="phone" class="form-label me-5 fw-medium">Phone:</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" />
                </div>
                <div class="col-md-4 col-12">
                  <label for="make" class="form-label me-5 fw-medium">Make:</label>
                  <input type="text" class="form-control" id="make" name="make" value="{{ @$order->make }}" required />
                </div>
                <div class="col-md-4 col-12">
                  <label for="colour" class="form-label me-5 fw-medium">Colour:</label>
                  <input type="text" class="form-control" id="colour" name="colour" value="{{ @$order->colour }}" required />
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <label for="model" class="form-label me-5 fw-medium">Model:</label>
                  <input type="text" class="form-control" id="model" name="model" value="{{ @$order->model }}" required />
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <label for="year" class="form-label me-5 fw-medium">Year:</label>
                  <input type="text" class="form-control" id="year" name="year" value="{{ @$order->year }}" required />
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <label for="v_i_n" class="form-label me-5 fw-medium">V.I.N#:</label>
                  <input type="text" class="form-control" id="v_i_n" name="v_i_n" value="{{ @$order->v_i_n }}" required />
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <label for="plate" class="form-label me-5 fw-medium">Plate#:</label>
                  <input type="text" class="form-control" id="plate" name="plate" value="{{ @$order->plate }}" required />
                </div>
                <div class="col-md-4 col-12 mt-2">
                  <label for="status" class="font-weight-bold">Status <span class="text-danger">*</span></label>
                  <select class="form-control" id="status" name="status" required>
                    <option value="General" {{ $order->status == 'General' ? 'selected' : '' }}>General</option>
                    <option value="Paint Protection Film" {{ $order->status == 'Paint Protection Film' ? 'selected' : '' }}>Paint Protection Film</option>
                    <option value="Ceramic Coating" {{ $order->status == 'Ceramic Coating' ? 'selected' : '' }}>Ceramic Coating</option>
                    <option value="Window Tint" {{ $order->status == 'Window Tint' ? 'selected' : '' }}>Window Tint</option>
                    <option value="Final" {{ $order->status == 'Final' ? 'selected' : '' }}>Final</option>
                  </select>
                </div>
              </div>
              <hr class="mx-n4" />
              <!-- Check Box Start -->
              <div class="row p-sm-3 p-0">
                <div class="col-lg-4 col-12 invoice-actions">
                  <h6 class="pb-2">Ceramic Coating</h6>
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="d-flex justify-content-between mb-2">
                        <label for="kenzo_coating" class="mb-0">Kenzo Coating</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="kenzo_coating" name="ceramic_coating_kenzo_coating" {{ @$order->ceramic_coating_kenzo_coating ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <label for="quartz_plus_coating" class="mb-0">Quartz Plus Coating</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="quartz_plus_coating" name="ceramic_coating_quartz_plus_coating" {{ @$order->ceramic_coating_quartz_plus_coating ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <label for="quartz_coating" class="mb-0">Quartz Coating</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="quartz_coating" name="ceramic_coating_quartz_coating" {{ @$order->ceramic_coating_quartz_coating ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <label for="premier_coating" class="mb-0">Premier Coating</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="premier_coating" name="ceramic_coating_premier_coating" {{ @$order->ceramic_coating_premier_coating ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <label for="interior_pkg" class="mb-0">Interior PKG</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="interior_pkg" name="ceramic_coating_interior_pkg" {{ @$order->ceramic_coating_interior_pkg ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between">
                        <label for="wheels_of_pkg" class="mb-0">Wheels of PKG</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="wheels_of_pkg" name="ceramic_coating_wheels_of_pkg" {{ @$order->ceramic_coating_wheels_of_pkg ? 'checked' : '' }} required>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <label for="price" class="mb-0">Price :</label>
                    <div class="">
                      <input type="number" class="form-control" name="ceramic_coating_price" value="{{ @$order->ceramic_coating_price }}" required>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-12 invoice-actions">
                  <h6 class="pb-2">PPF</h6>
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="d-flex justify-content-between mb-2">
                        <label for="full_car" class="mb-0">Full Car</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="full_car" name="ppf_full_car" {{ @$order->ppf_full_car ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <label for="client-notes" class="mb-0">Client Notes</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="client-notes" name="ppf_client_notes" {{ @$order->ppf_client_notes ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <label for="payment-stub" class="mb-0">Payment Stub</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="payment-stub" name="ppf_payment_stub" {{ @$order->ppf_payment_stub ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <label for="payment-terms" class="mb-0">Payment Terms</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" id="payment-terms" name="ppf_payment_terms" {{ @$order->ppf_payment_terms ? 'checked' : '' }} required>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <label for="price" class="mb-0">Price :</label>
                    <div class="">
                      <input type="number" class="form-control" name="ppf_price" value="{{ @$order->ppf_price }}" required>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-12 invoice-actions">
                  <h6 class="pb-2">Ceramic Coating</h6>
                  <div class="card mb-4">
                    <div class="card-body">
                      <div class="d-flex justify-content-between mb-2">
                        <label for="payment-terms" class="mb-0">Payment Terms</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" name="cc_payment_terms" {{ @$order->cc_payment_terms ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <label for="client-notes" class="mb-0">Client Notes</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" name="cc_client_notes" {{ @$order->cc_client_notes ? 'checked' : '' }} required>
                        </label>
                      </div>
                      <div class="d-flex justify-content-between">
                        <label for="payment-stub" class="mb-0">Payment Stub</label>
                        <label class="switch switch-primary me-0">
                          <input type="checkbox" class="switch-input" name="cc_payment_stub" {{ @$order->cc_payment_stub ? 'checked' : '' }} required>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <label for="price" class="mb-0">Price :</label>
                    <div class="">
                      <input type="number" class="form-control" name="cc_price" value="{{ @$order->cc_price }}" required>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Check Box End -->
              <!-- Form End -->
              <hr class="my-4 mx-n4" />
              <!-- Additional Requests Start -->
              <div class="row">
                <div class="col-12">
                  <div class="mb-3">
                    <label for="additional_requests" class="form-label fw-medium">Additional Requests:</label>
                    <textarea class="form-control" rows="2" id="additional_requests" name="additional_requests" placeholder="Additional Requests" required>{{ @$order->additional_requests }}</textarea>
                  </div>
                </div>
                <div class="col-6 mb-3">
                  <label for="total_price" class="mb-0">Total Price :</label>
                  <div class="">
                    <input type="number" class="form-control" id="total_price" name="total_price" value="{{ @$order->total_price }}" required>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-6 mb-3">
                  <label for="drivers_license" class="font-weight-bold">Drivers License <span class="text-danger">*</span>&nbsp;&nbsp;
                    <a href="{{ $order->drivers_license }}" download="{{$order->drivers_license}}">
                      <i class="fas fa-download"></i>
                    </a>
                  </label>
                  <img src="" alt="" class="picture-src" id="drivers_license_preview" onclick="$(this).next().trigger('click')" style="width: 60%; display: none;">
                  <label class="form-control label-style" id="drivers_license_browse">
                    <span class="d-flex justify-content-center align-items-center">
                      <span><i class="fa fa-2x fa-camera"></i></span>
                      <span>&nbsp;Browse</span>
                    </span>
                    <input type="file" class="input-style" name="drivers_license" onchange="ReadUrl(this, 'drivers_license_preview', 'drivers_license_browse');">
                  </label>
                  <img src="{{ @$order->drivers_license }}" id="drivers_license" alt="drivers_license" width="50%" height="30%" />
                </div>
              </div>
              <!-- Additional Requests End -->
              <hr class="my-4 mx-n4" />
              <div class="row p-sm-3 p-0">
                <div class="col-md-4 col-sm-5 col-12 mb-sm-0 mb-4">
                  <h2 class="mb-1" style=" color: #040404 !important; margin-bottom: 17px !important; font-size:x-large; font-weight: bolder;">INSPECTION REPORT</h2>
                  <h6 class="pb-2">Defects:</h6>
                  <table class="table table-bordered border-primary">
                    <tbody>
                      <tr>
                        <th scope="row">SH</th>
                        <td>Swirls/Hologram</td>
                      </tr>
                      <tr>
                        <th scope="row">WS</th>
                        <td>Water Spots</td>
                      </tr>
                      <tr>
                        <th scope="row">OX</th>
                        <td>Oxidation</td>
                      </tr>
                      <tr>
                        <th scope="row">CF</th>
                        <td>Clear Coat Failure</td>
                      </tr>
                      <tr>
                        <th scope="row">DS</th>
                        <td>Deep Scratch</td>
                      </tr>
                      <tr>
                        <th scope="row">BD</th>
                        <td>Bird Droppings</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-8 col-sm-7">
                  <div class="row">
                    <div class="col-7">
                      <h4 class="mb-1" style=" color: #040404 !important; margin-bottom: 17px !important; font-size:x-large; font-weight: 500; display: inline;">PART A:</h4>
                      <span> Upon Acceptance</span>
                    </div>
                    <div class="col-5">
                      <label for="price" class="mb-0">Mileage In :</label>
                      <div class="">
                        <input type="number" class="form-control" id="mileage_in_price" name="mileage_in_price" value="{{ @$order->mileage_in_price }}" required>
                      </div>
                    </div>
                  </div>
                  <!-- <img src="{{ asset('storage/images/images.png') }}"> -->
                  <div id="image-container">
                    <canvas id="image-canvas"></canvas>
                  </div>
                  <button class="btn btn-primary" id="submit-image">Save Image</button>
                  <!-- <img src="" id="image-preview" alt="Preview" width="50%" height="30%" /> -->
                  <img src="{{ @$order->defects }}" id="defects" alt="defects" width="50%" height="30%" />
                  <input type="hidden" id="old_defects" name="old_defects" value="{{ @$order->defects }}">
                </div>
              </div>
              <hr class="my-4" />
              <!-- Note Start -->
              <div class="row">
                <div class="col-12">
                  <div class="mb-3">
                    <label for="note" class="form-label fw-medium">Note:</label>
                    <textarea class="form-control" rows="2" id="note" name="note" placeholder="Note" required>{{ @$order->note }}</textarea>
                  </div>
                </div>
                <div class="col-6 mb-3">
                  <label for="int" class="mb-0">Int :</label>
                  <div class="">
                    <input type="number" class="form-control" id="int" name="int" value="{{ @$order->int }}" required>
                  </div>
                </div>
              </div>
              <!-- Note End -->
              <hr class="my-4 mx-n4" />
              <div class="row">
                <div class="col-6 mt-4">
                  <h4 class="mb-1" style=" color: #040404 !important; margin-bottom: 17px !important; font-size:x-large; font-weight: 500; display: inline;">PART B:</h4>
                  <span> Upon Delivery</span>
                </div>
                <div class="col-6">
                  <p class="mb-2">Payment</p>
                  <!-- <input type="number" class="form-control" id="payment_type" name="payment_type" value="{{ @$order->payment_type }}" required> -->
                  <select class="form-select mb-4" name="payment_type">
                    <option value="Cash" {{ $order->payment_type == 'Cash' ? 'selected' : '' }}>Cash</option>
                    <option value="Credit" {{ $order->payment_type == 'Credit' ? 'selected' : '' }}>Credit</option>
                    <option value="Debit" {{ $order->payment_type == 'Debit' ? 'selected' : '' }}>Debit</option>
                    <option value="E-Transfer" {{ $order->payment_type == 'E-Transfer' ? 'selected' : '' }}>E-Transfer</option>
                  </select>
                </div>
              </div>
              <hr class="my-4" />
              <div class="row">
                <div class="col-12">
                  <div class="border p-3">
                    <b>TERMS</b><br>

                    This is an estimation of work to be completed by walk-around evaluation and is not binding if vehicle condition changes prior to scheduled appointment, or if more

                    than 15 days has lapsed from date of estimate. This estimate may also change based on a more detailed examination immediately prior to start of repairs and will be

                    discussed with customer prior to beginning of work.<br><br>

                    Please remove all personal items prior to your appointment. Although we will take the utmost care with anything left inside your vehicle, we cannot be held

                    responsible for any personal items left behind.<br><br>

                    This estimate

                    deemed completed and invoiced when signed below by customer and actual final price has been completed in the total below. Customer's signature

                    below acknowledges the damage identified above as pre-existing and will not hold The Armour Lab liable.<br><br>

                    <b>PAYMENT:</b> Payment is expected upon completion of work unless other arrangements are agreed to in writing ahead of time.<br><br>

                    <span style="font-size: large;"> paid with AMEX will be charged a convenience fee of 3% no matter what. Any Invoice over $1000 and paid with

                      Visa or Master card will be charge a convenience fee of 1.75%</span><br><br>

                    I am the owner of the vehicle described on this document (the "Vehicle") or have been authorized by the owner to make the representations, promises and

                    covenants provided herein; I have removed all valuable articles from the vehicle, and The Armour Lab shall bear no responsibility for loss due to theft, fire, or any

                    other cause beyond The Armour Lab's control; In the event of any damage done to the vehicle while in possession of The Armour Lab; The Armour lab cannot be

                    held responsible; The Armour Lab can't be held responsible for electrical or mechanical issues. Every precaution will be taken to prevent such malfunction. Upon

                    delivery of the Vehicle and rendering the service(s) complete, I am accepting the work performed by The Armour Lab as complete and in timely compliance of our

                    agreement, and I am satisfied as to condition of the Vehicle.

                    <div class="row mt-3">
                      <div class="col-7">
                        <label for="customer_signature" class="form-label mb-0">Customer Signature:</label>
                        <div style="padding: 30px" class="row p-3">
                          <div style="width: 100%">
                            <canvas style="background: #dedede" id="signature-pad" width="400" height="200"></canvas>
                          </div>

                          <input hidden="" name="signature" value="" id="signature_value" />
                          <img src="{{ @$order->customer_signature }}" id="old_signature" alt="Old Signature" width="40%" height="20%" />
                          <input type="hidden" id="old_signature" name="old_signature" value="{{ @$order->customer_signature }}">

                          <div class="row">
                            <div class="col-3">
                              <button type="button" class="btn btn-danger btn-sm" id="clear">
                                Clear Signature
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-5">
                        <label for="date" class="mb-0">Date:</label>
                        <div class="">
                          <input type="date" class="form-control" id="date" name="date" value="{{ @$order->date }}" required>
                        </div>
                      </div>
                    </div>
                    <div id="" class="float-right" style="display: flex; justify-content:end;">
                      <button type="submit" class="btn btn-primary" id="save" data-action="save-jpg">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /Invoice Add-->

      <!-- /Invoice Actions -->
    </div>
    <!-- /Send Invoice Sidebar -->
    <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
      <div class="offcanvas-header mb-3">
        <h5 class="offcanvas-title">Send Invoice</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="d-flex justify-content-between mb-2">
        <label for="payment-terms" class="mb-0">Payment Terms</label>
        <label class="switch switch-primary me-0">
          <input type="checkbox" class="switch-input" id="payment-terms">
          <span class="switch-toggle-slider">
            <span class="switch-on">
              <i class="bx bx-check"></i>
            </span>
            <span class="switch-off">
              <i class="bx bx-x"></i>
            </span>
          </span>
          <span class="switch-label"></span>
        </label>
      </div>
      <div class="d-flex justify-content-between mb-2">
        <label for="client-notes" class="mb-0">Client Notes</label>
        <label class="switch switch-primary me-0">
          <input type="checkbox" class="switch-input" id="client-notes">
          <span class="switch-toggle-slider">
            <span class="switch-on">
              <i class="bx bx-check"></i>
            </span>
            <span class="switch-off">
              <i class="bx bx-x"></i>
            </span>
          </span>
          <span class="switch-label"></span>
        </label>
      </div>
      <div class="d-flex justify-content-between">
        <label for="payment-stub" class="mb-0">Payment Stub</label>
        <label class="switch switch-primary me-0">
          <input type="checkbox" class="switch-input" id="payment-stub">
          <span class="switch-toggle-slider">
            <span class="switch-on">
              <i class="bx bx-check"></i>
            </span>
            <span class="switch-off">
              <i class="bx bx-x"></i>
            </span>
          </span>
          <span class="switch-label"></span>
        </label>
      </div>
    </div>
    <!-- /Offcanvas -->

  </div>
  <!-- / Content -->

</div>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    $('#email').change(function() {
      var selectedOption = $('option:selected', this);

      $('#first_name').val(selectedOption.data('first-name'));
      $('#last_name').val(selectedOption.data('last-name'));
      $('#phone').val(selectedOption.data('phone'));
      $('#id').val(selectedOption.data('id'));
    });

    // Trigger change event initially to populate fields based on the selected email
    $('#email').trigger('change');
  });

  var clearBtn = "#clear";
  var saveBtn = "#save";
  var canvasArea = "#signature-pad";
  var returnUrlSave = "#signature_value";
  var ajaxUrl = "{{ route('admin.invoice.store') }}";

  $(document).ready(function() {
    initSignaturePad();
  });

  function initSignaturePad() {
    var canvas = document.getElementById(canvasArea.replace("#", ""));
    console.log(canvas)
    if (!canvas) {
      console.error("Canvas not found: signature-pad");
      return;
    }
    var context = canvas.getContext("2d");

    var drawing = false;
    var lastPos = null;

    // Remove existing event handlers to avoid duplicates
    $(document).off(
      "mousemove touchmove mousedown touchstart touchend touchmove",
      canvasArea
    );
    $(document).off("click", saveBtn);
    $(clearBtn).off("click");

    // Mouse and touch events for drawing
    $(document).on("mousedown", canvasArea, function(e) {
      if (e.which === 1) {
        drawing = true;
        lastPos = getMousePos(canvas, e);
      }
    });

    $(document).on("mousemove", canvasArea, function(e) {
      if (drawing) {
        var mousePos = getMousePos(canvas, e);
        draw(canvas, context, lastPos, mousePos);
        lastPos = mousePos;
      }
    });

    $(document).on("mouseup", canvasArea, function() {
      drawing = false;
    });

    $(document).on("touchstart", canvasArea, function(e) {
      e.preventDefault();
      drawing = true;
      lastPos = getTouchPos(canvas, e);
    });

    $(document).on("touchmove", canvasArea, function(e) {
      e.preventDefault();
      if (drawing) {
        var touchPos = getTouchPos(canvas, e);
        draw(canvas, context, lastPos, touchPos);
        lastPos = touchPos;
      }
    });

    $(document).on("touchend", canvasArea, function() {
      drawing = false;
    });

    // Save button event handler
    $(saveBtn).click(function() {
      var canvas = document.getElementById(canvasArea.replace("#", ""));
      var signatureData = canvas.toDataURL();

      // Set the signature value in a hidden input field
      $("#signature_value").val(signatureData);

      // Now submit the form
      $("form").submit();
    });

    // Clear canvas function and event handler
    function clearCanvas() {
      context.clearRect(0, 0, canvas.width, canvas.height);
    }

    $(clearBtn).click(function() {
      clearCanvas();
    });
  }

  function getMousePos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    return {
      x: evt.clientX - rect.left,
      y: evt.clientY - rect.top,
    };
  }

  function getTouchPos(canvas, evt) {
    var rect = canvas.getBoundingClientRect();
    var touch = evt.touches[0] || evt.changedTouches[0];
    return {
      x: touch.clientX - rect.left,
      y: touch.clientY - rect.top,
    };
  }

  function draw(canvas, context, startPos, endPos) {
    context.beginPath();
    context.moveTo(startPos.x, startPos.y);
    context.lineTo(endPos.x, endPos.y);
    context.stroke();
  }

  $(document).ready(function() {
    var canvas = document.getElementById("image-canvas");
    var ctx = canvas.getContext("2d");
    var img = new Image();

    img.onload = function() {
      canvas.width = img.width;
      canvas.height = img.height;
      ctx.drawImage(img, 0, 0);
    };
    img.src = "{{ asset('storage/images/images.png') }}"; // Set source at the end

    $("#image-container").click(function(e) {
      var posX = $(this).offset().left,
        posY = $(this).offset().top,
        x = e.pageX - posX,
        y = e.pageY - posY;

      var $inputWrapper = $("<div>", {
        class: "input-wrapper",
        css: {
          left: x + "px",
          top: y + "px",
        },
      }).appendTo("#image-container");

      var $input = $("<input class='mb-2'>", {
        type: "text",
        class: "defect-input",
      }).appendTo($inputWrapper);

      var $addButton = $("<button>", {
        text: "Add",
        click: function(event) {
          event.stopPropagation();
          var defectDescription = $input.val();
          if (defectDescription.trim() !== "") {
            ctx.font = "16px Arial";
            ctx.fillStyle = "red";
            ctx.fillText(defectDescription, x, y);
          }
          $inputWrapper.remove();
        },
      }).appendTo($inputWrapper);

      var $removeButton = $("<button>", {
        text: "Remove",
        click: function(event) {
          event.stopPropagation();
          $inputWrapper.remove();
        },
      }).appendTo($inputWrapper);

      $input.focus();
    });

    $("#submit-image").click(function() {
      // Convert the canvas to a data URL
      var dataURL = canvas.toDataURL("image/png");
      $('#image-preview').attr('src', dataURL);
      $('#defects').addClass('d-none');

      // Append the canvas image data to the form data
      $('<input>').attr({
        type: 'hidden',
        id: 'imgBase64',
        name: 'imgBase64'
      }).val(dataURL).appendTo('form');

      // Rest of your AJAX code...
    });
  });
</script>

@endsection