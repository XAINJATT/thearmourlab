@extends('admin.layouts.app')
@section('content')
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
              <h6 class="text-uppercase mb-0 col-9">HERE ARE ALL WORK ORDER STATUS </h6>
            </div>
            <div class="card-body" style="overflow: scroll">
              <table id="data_table" class="table table-striped table-hover card-text">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Work Order Id</th>
                    <th>Car Name</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($workOrderStatus as $value)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $value->work_order_id }}</td>
                    <td>{{ $value->car_name }}</td>
                    <td>
                      @if($value->status == 'General')
                      <a>
                        <span class="badge bg-primary cursor-pointer">General</span>
                      </a>
                      @elseif($value->status == 'Paint Protection Film')
                        <a>
                          <span class="badge bg-secondary cursor-pointer">Paint Protection Film</span>
                        </a>
                      @elseif($value->status == 'Ceramic Coating')
                        <a>
                          <span class="badge bg-info cursor-pointer">Ceramic Coating</span>
                        </a>
                      @elseif($value->status == 'Window Tint')
                        <a>
                          <span class="badge bg-dark cursor-pointer">Window Tint</span>
                        </a>
                      @elseif($value->status == 'Final')
                        <a>
                          <span class="badge bg-success cursor-pointer">Final</span>
                        </a>
                      @endif
                    </td>
                    <td>
                      <a href="{{ route('user.orderStatus.view', $value->id) }}" class="text-primary fs-6 mr-1" data-toggle="tooltip" title="View">
                          <i class="fas fa-eye"></i>
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

@section('scripts')

<script>

</script>

@endsection