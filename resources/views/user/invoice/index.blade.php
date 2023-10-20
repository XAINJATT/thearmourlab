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
            <!-- <div class="row p-sm-3 p-0" style="background-color: #989843;">
              <div class="col-md-4 mb-md-0 mb-4">
                <div class="d-flex svg-illustration mb-4 gap-2">
                  <span class="app-brand-logo demo">
                    <img src="images/logo.webp">
                  </span>
                </div>
              </div>
              <div class="col-md-2">
              </div>
              <div class="col-md-6 mt-5">
                <h1 style=" color: #040404 !important;">Auto Repair Work Order</h1>
                <div class="row mt-5">
                  <div class="col-3"></div>
                  <div class="col-5" style="color: white;">Order Date:</div>
                  <div class="col-4" style="color: white;">7/25/2023</div>
                </div>
              </div>
            </div> -->
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
              <div class="col-md-4" style="text-align: end; margin-top: auto;">
                <h1 style=" color: #040404 !important;">WORK</h1>
                <h1 style=" color: #040404 !important;">ORDER</h1>
              </div>
            </div>
            <hr class="my-4 mx-n4" />
            <!-- Form Start -->
            <div class="row m-5">
              <h2 style="color: #040404 !important; margin-bottom: 17px !important; font-size:x-large; font-weight: bolder;">Client Information</h2>
              <hr class="mx-n4" style="height: 1px !important;" />
              <div class="row">
                <div class="col-2">
                  <label for="name" style="color: #040404 !important; font-weight: bolder;">Name</label>
                </div>
                <div class="col-4">
                  <span>John Smith</span>
                </div>
                <div class="col-2">
                  <label for="email" style="color: #040404 !important; font-weight: bolder;">Email</label>
                </div>
                <div class="col-4">
                  <span>john@example.com</span>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-2">
                  <label for="phone" style="color: #040404 !important; font-weight: bolder;">Phone Number</label>
                </div>
                <div class="col-4">
                  <span>(312) 312</span>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-2">
                  <label for="address" style="color: #040404 !important; font-weight: bolder;">Address</label>
                </div>
              </div>
              <div class="row">
                <div class="isAnswer">
                  textbox_sample8, textbox_sample9</div>
                <div class="isAnswer">
                  textbox_sample10, textbox_sample11, textbox_sample12</div>
                <div class="isAnswer">
                  United States</div>
              </div>

            </div>
            <!-- Form End -->
            <hr class="mx-n4" />
            <!-- Check Box Start -->
            <div class="row m-5">
              <h2 style="color: #040404 !important; margin-bottom: 17px !important; font-size:x-large; font-weight: bolder;">Vehicle Description</h2>
              <hr class="mx-n4" style="height: 1px !important;" />
              <div class="vehicle-description" style="background-color: #E0E1E4; padding: 20px">
                <div class="row">
                  <div class="col-3">
                    <label for="year" style="color: #040404 !important; font-weight: bolder;">Year</label>
                  </div>
                  <div class="col-3">
                    <label for="model" style="color: #040404 !important; font-weight: bolder;">Model</label>
                  </div>
                  <div class="col-5">
                    <label for="type_of_repair" style="color: #040404 !important; font-weight: bolder;">Type of Repair</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <label for="year">2010</label>
                  </div>
                  <div class="col-3">
                    <label for="model">textbox_sample15</label>
                  </div>
                  <div class="col-5">
                    <div class="row">
                      <div class="col-4">
                        <label for="brake" class="mb-0">Brake</label>
                        <label class="switch switch-primary me-0" style="margin-left: 30px;">
                          <input type="checkbox" class="switch-input" id="brake" name="brake" checked disabled>
                        </label>
                      </div>
                      <div class="col-8">
                        <label for="air_conditioning_systems" class="mb-0">Air Conditioning Systems</label>
                        <label class="switch switch primary me-0" style="margin-left: 30px;">
                          <input type="checkbox" class="switch-input" id="air_conditioning_systems" name="air_conditioning_systems" checked disabled>
                        </label>
                      </div>
                      <div class="col-8">
                        <label for="steeringand_suspension" class="mb-0">Steering and Suspension</label>
                        <label class="switch switch-primary me-0" style="margin-left: 30px;">
                          <input type="checkbox" class="switch-input" id="steeringand_suspension" name="steeringand_suspension" checked disabled>
                        </label>
                      </div>
                      <div class="col-4">
                        <label for="oil" class="mb-0">Oil</label>
                        <label class="switch switch primary me-0" style="margin-left: 30px;">
                          <input type="checkbox" class="switch-input" id="oil" name="oil" checked disabled>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-2">
                    <label for="phone" style="color: #040404 !important; font-weight: bolder;">Phone Number</label>
                  </div>
                  <div class="col-4">
                    <span>(312) 312</span>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-2">
                    <label for="address" style="color: #040404 !important; font-weight: bolder;">Address</label>
                  </div>
                </div>
                <div class="row">
                  <div class="isAnswer">
                    textbox_sample8, textbox_sample9</div>
                  <div class="isAnswer">
                    textbox_sample10, textbox_sample11, textbox_sample12</div>
                  <div class="isAnswer">
                    United States</div>
                </div>
              </div>

            </div>
            <!-- Check Box End -->
            <hr class="my-4 mx-n4" />
            <!-- Additional Requests Start -->
            <div class="row">
              <div class="col-12">
                <div class="mb-3">
                  <label for="additional_requests" class="form-label fw-medium">Additional Comments:</label>
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                    content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
                    as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
                    have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                  </p>
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                    humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
                    be sure there isn't anything embarrassing hidden in the middle of text.
                  </p>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="row">
                  <div class="col-6">
                    <label for="client_signature" class="form-label fw-medium" style="color: #040404 !important; font-weight: bolder;">Client Signature:</label>
                    <div id="sig"></div>
                    <p style="clear: both;">
                      <button id="disable">Disable</button>
                      <button id="clear">Clear</button>
                      <!-- <button id="json">To JSON</button>
                      <button id="svg">To SVG</button> -->
                    </p>
                  </div>
                  <div class="col-6">
                    <label for="authorized_signature" class="form-label fw-medium" style="color: #040404 !important; font-weight: bolder;">Authorized Signature:</label>
                    <div id="sign"></div>
                    <p style="clear: both;">
                      <button id="sign_disable">Disable</button>
                      <button id="sign_clear">Clear</button>
                      <!-- <button id="json">To JSON</button>
                      <button id="svg">To SVG</button> -->
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Additional Requests End -->
            <hr class="my-4 mx-n4" />
          </div>
        </div>
      </div>
      <!-- /Invoice Add-->

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