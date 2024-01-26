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
            <div class="row justify-content-center">

                <div class="col-12 col-md-8 mt-3">
                    <form action="{{ route('admin.faq.update') }}" id="editFaqForm" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="card mb-3">
                            <div class="card-header" style="padding: 0.5rem 1.5rem">
                                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                    <div>
                                        <h4 class="mb-3 mb-md-0">Faq > <span class="text-secondary">
                                                Edit Faq</span>
                                        </h4>
                                    </div>
                                    <button type="button" class="btn btn-secondary ml-auto" onclick="window.location.replace('{{ route('admin.faq') }}');">Back
                                    </button>
                                </div>

                            </div>
                            <hr>
                            <input type="hidden" class="form-control" name="id" id="id" value="{{ $faqs->id }}">
                            <div class="card-body pb-2">
                                <div class="row gap-3">

                                    <div id="upload-faq" style="color: green;"></div>

                                    <div class="col-12 col-md-12 mt-2">
                                        <label class="font-weight-bold text-black">
                                            Question <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="question" id="question" value="{{ $faqs->question }}" placeholder="Enter Question" required>
                                        @if ($errors->has('question'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('question') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="col-12 col-md-12 mt-2">
                                        <label class="font-weight-bold text-black">
                                            Answer <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="answer" id="answer" placeholder="Enter Answer" required>{{ $faqs->answer }}</textarea>
                                        @if ($errors->has('answer'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('answer') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group d-flex">
                                            <input type="checkbox" name="status" id="status" class="form-check" value="1" {{ ($faqs->status == 1) ? 'checked' : '' }}>
                                            <label for="status"> Active / Inactive</label>
                                        </div>
                                    </div>
                                    <?php
                                    $services = config('app.services');
                                    ?>
                                    <div class="col-md-6">
                                        <label for="category">Category <span class="text-danger">*</span></label>
                                        <select class="form-select" name="category" id="category" required>
                                            <option value="">--please select--</option>
                                            @foreach ($services as $key => $service)
                                                <option {{ ($faqs->category == $key) ? "selected" : "" }} value="{{ $key }}">{{ $service }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-header" style="padding: 0.5rem 1.5rem">
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <button type="button" class="btn btn-light px-4 py-2" onclick="window.location.href='{{ route('admin.faq') }}'">
                                            Cancel
                                        </button>
                                        <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                            <i class="fa-solid fa-floppy-disk"></i> Save Faq
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

@section('script')
<script>
    $(document).ready(function() {
        $('#status').on('change', function() {
            // Set the value to 1 if checked, otherwise set it to null
            $(this).val(this.checked ? 1 : null);
        });
    });
    $(document).ready(function() {
        $('.submitBtn').on('click', function(e) {
            e.preventDefault();
            var id = $('#id').val();
            var question = $('#question').val();
            var answer = $('#answer').val();
            var status = $('#status').val();
            var category = $('#category').val();

            // Disable the submit button
            $('.submitBtn').prop('disabled', true);

            uploadFaq(id, question, answer, status, category); // Start uploading faq
        });

        function uploadFaq(id, question, answer, status, category) {
            var formData = new FormData();
            formData.append('id', id);
            formData.append('question', question);
            formData.append('answer', answer);
            formData.append('status', status);
            formData.append('category', category);
            formData.append('_token', '{{ csrf_token() }}'); // Add CSRF token

            // Clear existing content in the upload-faq div
            $('#upload-faq').html('');

            $.ajax({
                url: '{{ route('admin.faq.update') }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle success
                    console.log(response);

                    // Update upload faq with the response
                    $('#upload-faq').html('Faq updated successfully.');

                    // Re-enable the submit button
                    $('.submitBtn').prop('disabled', false);
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);

                    // Update upload faq with the error message
                    $('#upload-faq').html('Error: ' + error);

                    // Re-enable the submit button
                    $('.submitBtn').prop('disabled', false);
                }
            });
        }
    });
</script>
@endsection
