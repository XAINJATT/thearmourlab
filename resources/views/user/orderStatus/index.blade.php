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


  body {
    margin-top: 20px;
  }

  .steps .step {
    display: block;
    width: 100%;
    margin-bottom: 35px;
    text-align: center
  }

  .steps .step .step-icon-wrap {
    display: block;
    position: relative;
    width: 100%;
    height: 80px;
    text-align: center
  }

  .steps .step .step-icon-wrap::before,
  .steps .step .step-icon-wrap::after {
    display: block;
    position: absolute;
    top: 50%;
    width: 50%;
    height: 3px;
    margin-top: -1px;
    background-color: #e1e7ec;
    content: '';
    z-index: 1
  }

  .steps .step .step-icon-wrap::before {
    left: 0
  }

  .steps .step .step-icon-wrap::after {
    right: 0
  }

  .steps .step .step-icon {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
    border: 1px solid #e1e7ec;
    border-radius: 50%;
    background-color: #f5f5f5;
    color: #374250;
    font-size: 38px;
    line-height: 81px;
    z-index: 5
  }

  .steps .step .step-title {
    margin-top: 16px;
    margin-bottom: 0;
    color: #606975;
    font-size: 14px;
    font-weight: 500
  }

  .steps .step:first-child .step-icon-wrap::before {
    display: none
  }

  .steps .step:last-child .step-icon-wrap::after {
    display: none
  }

  .steps .step.completed .step-icon-wrap::before,
  .steps .step.completed .step-icon-wrap::after {
    background-color: #0da9ef
  }

  .steps .step.completed .step-icon {
    border-color: #0da9ef;
    background-color: #0da9ef;
    color: #fff
  }

  @media (max-width: 576px) {

    .flex-sm-nowrap .step .step-icon-wrap::before,
    .flex-sm-nowrap .step .step-icon-wrap::after {
      display: none
    }
  }

  @media (max-width: 768px) {

    .flex-md-nowrap .step .step-icon-wrap::before,
    .flex-md-nowrap .step .step-icon-wrap::after {
      display: none
    }
  }

  @media (max-width: 991px) {

    .flex-lg-nowrap .step .step-icon-wrap::before,
    .flex-lg-nowrap .step .step-icon-wrap::after {
      display: none
    }
  }

  @media (max-width: 1200px) {

    .flex-xl-nowrap .step .step-icon-wrap::before,
    .flex-xl-nowrap .step .step-icon-wrap::after {
      display: none
    }
  }

  #text {
    resize: none;
    margin-botton: 10px;
  }

  .bg-faded,
  .bg-secondary {
    background-color: #f5f5f5 !important;
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
  <div class="container">
    <div class="col-md-12 col-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4>Provide Basic Information</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <div class="well">
                <!-- <form action="" method="POST"> -->
                <div class="row" style="width: 100%;">
                  <div class="col-6">
                    <p class="mb-2">Car Name</p>
                    <select class="form-select mb-4" id="text" required>
                      <option value="Car">Car</option>
                      <option value="SUV">SUV</option>
                      <option value="Truck">Truck</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <p class="mb-2">Order Number</p>
                    <input type="number" class="form-control" id="order_number" placeholder="Please Enter Order Number" required>
                  </div>
                  <div class="col-12">
                    <h6 class="pull-right" id="count_message"></h6>
                    <button class="btn btn-info" onclick="toggleSection()" style="float: right;">Order Status</button>
                  </div>
                </div>
                <!-- </form> -->
              </div>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-xxl flex-grow-1 container-p-y" id="orderStatusSection" style="display: none;">
    <div class="row invoice-add">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
      <div class="container padding-bottom-3x mb-1">
        <div class="card mb-3">
          <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span class="text-uppercase">Order </span><span class="text-medium">Status</span></div>
          <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
            <div class="w-100 text-center py-1 px-2"><span class="text-medium">General Stages</span> (applicable to all services)</div>
            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Paint Protection</span> Film Stages</div>
            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Ceramic Coating</span> Stages</div>
            <div class="w-100 text-center py-1 px-2"><span class="text-medium"> Window Tint</span> Stages</div>
            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Final</span> Stages</div>
          </div>
          <div class="card-body">
            <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
              <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-cart"></i></div>
                </div>
                <h4 class="step-title">General</h4>
              </div>
              <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-config"></i></div>
                </div>
                <h4 class="step-title">Paint Protection Film</h4>
              </div>
              <div class="step completed">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-medal"></i></div>
                </div>
                <h4 class="step-title">Ceramic Coating</h4>
              </div>
              <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-car"></i></div>
                </div>
                <h4 class="step-title">Window Tint</h4>
              </div>
              <div class="step">
                <div class="step-icon-wrap">
                  <div class="step-icon"><i class="pe-7s-home"></i></div>
                </div>
                <h4 class="step-title">Final</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="d-flex flex-wrap flex-md-nowrap justify-content-center justify-content-sm-between align-items-center mb-3">
          <div class="custom-control custom-checkbox mr-3">
            <input class="custom-control-input" type="checkbox" id="notify_me" checked="">
            <label class="custom-control-label" for="notify_me">Notify me when order is delivered</label>
          </div>
          <div class="text-left text-sm-right"><a class="btn btn-outline-primary btn-rounded btn-sm" href="{{ route('user.orderDetails') }}" data-toggle="modal" data-target="#orderDetails">View Order Details</a></div>
        </div> -->
        <div class="col-md-12 col-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <h4>Order Details</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th class="text-center">
                        Completed
                      </th>
                      <th>Stages</th>
                      <th>Stages Details</th>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked>
                          <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>General</td>
                      <td>
                        <ul class="list-unstyled ps-0 mb-0">
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Vehicle has arrived and is logged into our system. </p>
                          </li>
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Evaluating the vehicle's condition before any work begins.</p>
                          </li>
                          <li>
                            <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Ensuring the car's surface is clean and free of contaminants.</p>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4" checked>
                          <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Paint Protection Film</td>
                      <td>
                        <ul class="list-unstyled ps-0 mb-0">
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Cutting the PPF to the vehicle's specific measurements and aligning it for application. </p>
                          </li>
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Polishing the vehicle's surface to ensure an immaculate finish beneath the PPF.</p>
                          </li>
                          <li>
                            <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Applying the PPF to the vehicle's body.</p>
                          </li>
                          <li>
                            <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Allowing time for the glue under the Ppf to solidify and dry enough to go home.</p>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5" checked>
                          <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Ceramic Coating</td>
                      <td>
                        <ul class="list-unstyled ps-0 mb-0">
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Preparing the vehicle's surface for ceramic coating. </p>
                          </li>
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Correcting any imperfections in the paint before the ceramic coating application.</p>
                          </li>
                          <li>
                            <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Applying the ceramic coating to protect the vehicle's paint.</p>
                          </li>
                          <li>
                            <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Allowing time for the ceramic coating to bond with the vehicle's surface or PPF.</p>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                          <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Window Tint</td>
                      <td>
                        <ul class="list-unstyled ps-0 mb-0">
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Measuring windows and cutting tint film accordingly. </p>
                          </li>
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Applying the tint to the vehicle's windows.</p>
                          </li>
                          <li>
                            <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 5G and Gigabit LTE</p>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-0 text-center">
                        <div class="custom-checkbox custom-control">
                          <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                          <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                        </div>
                      </td>
                      <td>Final</td>
                      <td>
                        <ul class="list-unstyled ps-0 mb-0">
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Checking the quality of the work, ensuring no imperfections. </p>
                          </li>
                          <li>
                            <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Vehicle is ready and waiting for the customer.</p>
                          </li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
  </div>

  <script>
    function toggleSection() {
      var section = document.getElementById('orderStatusSection');
      if (section.style.display === 'none') {
        section.style.display = 'block';
      } else {
        section.style.display = 'none';
      }
    }
  </script>

  @endsection