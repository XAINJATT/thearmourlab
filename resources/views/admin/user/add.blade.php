@extends('admin.layouts.app')
@section('content')
<style>
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
<script>
  $(function() {
    var sig = $('#sig').signature();
    $('#disable').click(function() {
      var disable = $(this).text() === 'Disable';
      $(this).text(disable ? 'Enable' : 'Disable');
      sig.signature(disable ? 'disable' : 'enable');
    });
    $('#clear').click(function() {
      sig.signature('clear');
    });
    $('#json').click(function() {
      alert(sig.signature('toJSON'));
    });
    $('#svg').click(function() {
      alert(sig.signature('toSVG'));
    });
  });
</script>
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
            <form method="post" action="{{ route('admin.invoice.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row py-sm-3">
                <div class="col-md-4 col-12">
                    <label for="name" class="form-label me-5 fw-medium">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                </div>
                <div class="col-md-4 col-12">
                    <label for="make" class="form-label me-5 fw-medium">Make:</label>
                    <input type="text" class="form-control" id="make" name="make"placeholder="Make" />
                </div>
                <div class="col-md-4 col-12">
                    <label for="colour" class="form-label me-5 fw-medium">Colour:</label>
                    <input type="text" class="form-control" id="colour" name="colour"placeholder="Colour" />
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <label for="phone" class="form-label me-5 fw-medium">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone"placeholder="Phone" />
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <label for="model" class="form-label me-5 fw-medium">Model:</label>
                    <input type="text" class="form-control" id="model" name="model"placeholder="Model" />
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <label for="year" class="form-label me-5 fw-medium">Year:</label>
                    <input type="text" class="form-control" id="year" name="year"placeholder="Year" />
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <label for="email" class="form-label me-5 fw-medium">Email:</label>
                    <input type="text" class="form-control" id="email" name="email"placeholder="Email" />
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <label for="v_i_n" class="form-label me-5 fw-medium">V.I.N#:</label>
                    <input type="text" class="form-control" id="v_i_n" name="v_i_n"placeholder="V.I.N#" />
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <label for="plate" class="form-label me-5 fw-medium">Plate#:</label>
                    <input type="text" class="form-control" id="plate" name="plate"placeholder="Plate#" />
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
                            <input type="checkbox" class="switch-input" id="kenzo_coating" name="ceramic_coating_kenzo_coating">
                        </label>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                        <label for="quartz_plus_coating" class="mb-0">Quartz Plus Coating</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" id="quartz_plus_coating" name="ceramic_coating_quartz_plus_coating">>
                        </label>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                        <label for="quartz_coating" class="mb-0">Quartz Coating</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" id="quartz_coating" name="ceramic_coating_quartz_coating">
                        </label>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                        <label for="premier_coating" class="mb-0">Premier Coating</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" id="premier_coating" name="ceramic_coating_premier_coating">
                        </label>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                        <label for="interior_pkg" class="mb-0">Interior PKG</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" id="interior?_pkg" name="ceramic_coating_interior_pkg">
                        </label>
                        </div>
                        <div class="d-flex justify-content-between">
                        <label for="wheels_of_pkg" class="mb-0">Wheels of PKG</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" id="wheels_of_pkg" name="ceramic_coating_wheels_of_pkg">
                        </label>
                        </div>
                    </div>
                    </div>
                    <div class="">
                    <label for="price" class="mb-0">Price :</label>
                    <div class="">
                        <input type="number" class="form-control" name="ceramic_coating_price">
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
                            <input type="checkbox" class="switch-input" id="full_car" name="ppf_full_car">
                        </label>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                        <label for="client-notes" class="mb-0">Client Notes</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" id="client-notes" name="ppf_client_notes">
                        </label>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                        <label for="payment-stub" class="mb-0">Payment Stub</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" id="payment-stub" name="ppf_payment_stub">
                        </label>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                        <label for="payment-terms" class="mb-0">Payment Terms</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" id="payment-terms" name="ppf_payment_terms">
                        </label>
                        </div>
                    </div>
                    </div>
                    <div class="">
                    <label for="price" class="mb-0">Price :</label>
                    <div class="">
                        <input type="number" class="form-control" name="ppf_price">
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
                            <input type="checkbox" class="switch-input" name="cc_payment_terms">
                        </label>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                        <label for="client-notes" class="mb-0">Client Notes</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" name="cc_client_notes">
                        </label>
                        </div>
                        <div class="d-flex justify-content-between">
                        <label for="payment-stub" class="mb-0">Payment Stub</label>
                        <label class="switch switch-primary me-0">
                            <input type="checkbox" class="switch-input" name="cc_payment_stub">
                        </label>
                        </div>
                    </div>
                    </div>
                    <div class="">
                    <label for="price" class="mb-0">Price :</label>
                    <div class="">
                        <input type="number" class="form-control" name="cc_price">
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
                    <textarea class="form-control" rows="2" id="additional_requests" name="additional_requests" placeholder="Additional Requests"></textarea>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <label for="total_price" class="mb-0">Total Price :</label>
                    <div class="">
                    <input type="number" class="form-control" id="total_price" name="total_price">
                    </div>
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
                        <input type="number" class="form-control" id="mileage_in_price">
                        </div>
                    </div>
                    </div>
                    <img src="{{ asset('storage/images/images.png') }}">
                </div>
                </div>
                <hr class="my-4" />
                <!-- Note Start -->
                <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                    <label for="note" class="form-label fw-medium">Note:</label>
                    <textarea class="form-control" rows="2" id="note" name="note" placeholder="Note"></textarea>
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <label for="int" class="mb-0">Int :</label>
                    <div class="">
                    <input type="number" class="form-control" id="int" name="int">
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
                    <select class="form-select mb-4" name="payment_type">
                    <option value="Cash">Cash</option>
                    <option value="Credit">Credit</option>
                    <option value="Debit">Debit</option>
                    <option value="E-Transfer">E-Transfer</option>
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
                            <label for="authorized_signature" class="form-label fw-medium" style="visibility: hidden">Customer Signature:</label>
                            <div id="sign"></div>
                            <p style="clear: both;">
                            <a id="sign_disable" class="btn btn-primary" style="color: #fff !important;">Disable</a>
                            <a id="sign_clear" class="btn btn-primary" style="color: #fff !important;">Clear</a>
                            </p>
                        </div>
                        <div class="col-5">
                        <label for="date" class="mb-0">Date:</label>
                        <div class="">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        </div>
                    </div>
                    <div id="" class="float-right" style="display: flex; justify-content:end;">
                        <button type="submit" class="btn btn-primary">Submit</button>
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