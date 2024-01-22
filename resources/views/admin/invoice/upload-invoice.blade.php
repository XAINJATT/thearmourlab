@extends('admin.layouts.app')
@section('content')
    @if (!auth()->user()->isAdmin())
        @php(abort(403))
    @endif
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
    </style>
    <div class="page-content">

        <section class="contact-area pb-5">
            <div class="container">

                @if (session('success-message'))
                    <div class="alert alert-success">
                        {{ session('success-message') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('error-message'))
                    <div class="alert alert-danger">
                        {{ session('error-message') }}
                    </div>
                @endif


                <div class="row justify-content-center">

                    <div class="col-12 col-md-8 mt-3">
                        <form action="{{ route('admin.upload-invoice.store') }}" id="addInvoiceForm" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="card mb-3">
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                        <div>
                                            <h4 class="mb-3 mb-md-0">Invoices > <span class="text-secondary">
                                                    Create Invoice</span>
                                            </h4>
                                        </div>
                                        <button type="button" class="btn btn-secondary ml-auto"
                                            onclick="window.location.replace('{{ route('admin.upload-invoice.create') }}');">Back
                                        </button>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-body pb-2">
                                    <div class="row">

                                        <div class="col-md-4 col-12">
                                            <label for="email" class="form-label me-5 fw-medium">Email: *</label>
                                            <select required class="form-control select2-class" id="email"
                                                name="email" required>
                                                <option value="">Select Email</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}"
                                                        data-first-name="{{ $user->first_name }}"
                                                        data-last-name="{{ $user->last_name }}"
                                                        data-phone="{{ $user->phone }}" data-id="{{ $user->id }}">
                                                        {{ $user->email }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-12 mt-2">
                                            <label for="invoice_files" class="font-weight-bold">Invoice Files <span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="invoice_files[]"
                                                id="invoice_files" multiple />
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="row">
                                        <div class="col-12 text-end">
                                            <button type="button" class="btn btn-light px-4 py-2"
                                                onclick="window.location.href='{{ route('admin.upload-invoice.create') }}'">
                                                Cancel
                                            </button>
                                            <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                                <i class="fa-solid fa-floppy-disk"></i> Save Invoice
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
