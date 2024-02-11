@extends('admin.layouts.app')

@section('content')
    @if (!auth()->user()->isAdmin())
        @php(abort(403))
    @endif
    <!-- Contact Start -->
    <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
            <section class="py-5">
                <div class="row">
                    <div class="col-md-12">
                        @if (session()->has('success-message'))
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
                                <h6 class="text-uppercase mb-0 col-10">HERE ARE ALL Translations </h6>
                            </div>
                            <div class="card-body" style="overflow: scroll">
                                <table id="data_table" class="table table-striped table-hover card-text">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Language</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($langs as $lang)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>
                                                {{$lang['iso']}}
                                            </td>
                                            <td>
                                                @if($lang['active'])
                                                    <input type="checkbox" class="change_lang_status" id="change_status_{{$lang['id']}}" lang-id='{{$lang['id']}}' checked netliva-switch data-active-text="{{__('Active')}}" data-passive-text=" {{__('Deactive')}}"/>
                                                @else 
                                                    <input type="checkbox" class="change_lang_status" id="change_status_{{$lang['id']}}" lang-id='{{$lang['id']}}' netliva-switch data-active-text="{{__('Active')}}" data-passive-text="{{__('Deactive')}}"/>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('admin.language.edit',$lang['iso'])}}" class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i>
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
    <script src="{{url('js/admin/translations.js')}}"></script>
    <!-- Switch -->
    <script src="{{url('plugins/swtich-netliva/js/netliva_switch.js')}}"></script>
@endsection