@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Invoices for <strong>{{ $user->first_name . ' ' . $user->last_name }}</strong></h3>
            @if (auth()->user()->isAdmin())
                <button type="button" class="btn btn-primary"
                    onclick="window.location.href='{{ route('admin.upload-invoice.create') }}'">
                    <i class="fa fa-upload"></i> Upload Invoice
                </button>
            @endif
        </div>

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

        <div class="row">
            @forelse ($invoices as $invoice)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            Invoice #{{ $loop->iteration }}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Uploaded: {{ $invoice->created_at->format('M d, Y') }}</h5>
                            <p class="card-text">Click the button below to download the invoice.</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ Storage::url($invoice->file_path) }}" target="_blank" class="btn btn-success">
                                <i class="fa fa-download"></i> Download Invoice
                            </a>
                            @if (auth()->user()->isAdmin())
                                <form action="{{ route('admin.upload-invoice.delete', $invoice->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this invoice?')">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            @endif
                        </div>

                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-warning" role="alert">
                        No invoices available.
                        @if (auth()->user()->isAdmin())
                            Click the "Upload Invoice" button above to add an invoice.
                        @endif
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
