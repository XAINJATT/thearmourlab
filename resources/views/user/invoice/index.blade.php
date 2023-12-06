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

  .warranty-heading {
    color: #43491a !important;
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;
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

<!-- Contact Start -->
<div class="page-holder w-100 d-flex flex-wrap">
  <div class="container-fluid px-xl-5">
    <section class="py-5">
      <div class="row">
        <div class="col-md-12">
          @if(session()->has('success-message'))
          <div class="alert alert-success">
            {{ session('success-message') }}
          </div>
          @elseif(session()->has('error-message'))
          <div class="alert alert-danger">
            {{ session('error-message') }}
          </div>
          @endif
        </div>
        <div class="col-lg-12 mb-12">
          <div class="card">
            <div class="card-header row">
              <h6 class="text-uppercase mb-0 col-12">HERE ARE ALL WORK ORDER </h6>
            </div>
            <div class="card-body" style="overflow: scroll">
              <table id="user_invoice_table" class="table table-striped table-hover card-text">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($orders as $order)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $order->first_name }}</td>
                    <td>{{ $order->last_name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>
                      <a href="{{ route('user.invoice.view', $order->id) }}" class="text-primary fs-6 mr-1" data-toggle="tooltip" title="View">
                          <i class="fas fa-eye"></i>
                      </a>
                      <a href="{{ route('user.invoice.orderStatusShow', $order->id) }}" class="text-primary fs-6 mr-1" data-toggle="tooltip" title="Status">
                          <i class="fas fa-check"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- Contact End -->
@endsection