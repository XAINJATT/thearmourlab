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

    <style>
        .preview-img,
        .preview-video {
            max-width: 100%;
            max-height: 300px;
            margin: 10px;
        }
    </style>
    <div class="page-content">

        <section class="contact-area pb-5">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 col-md-8 mt-3">
                        <form action="{{ route('admin.media.store') }}" id="addMediaForm" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="card mb-3">
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                                        <div>
                                            <h4 class="mb-3 mb-md-0">Media > <span class="text-secondary">
                                                    Create Media</span>
                                            </h4>
                                        </div>
                                        <button type="button" class="btn btn-secondary ml-auto"
                                            onclick="window.location.replace('{{ route('admin.media') }}');">Back
                                        </button>
                                    </div>

                                </div>
                                <hr>
                                <div class="card-body pb-2">
                                    <div class="row gap-3">

                                        <div class="col-12 col-md-12 mt-2">
                                            <input name="files[]" class="form-control" type="file" id="file-upload"
                                                multiple>
                                                <div class="row" id="preview-container"></div>
                                                <div id="upload-status"></div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group d-flex">
                                                <input value="true" type="checkbox" name="is_gallery" class="form-check"
                                                    id="is_gallery">
                                                <label for="is_gallery">Show in Gallery?</label>
                                            </div>
                                        </div>
                                        <?php
                                        $services = config('app.services');
                                        ?>
                                        <div class="col-md-6">
                                            <label for="category">Category</label>
                                            <select class="form-select" name="category" id="category">
                                                <option value="">--please select--</option>
                                                @foreach ($services as $key => $service)
                                                    <option value="{{ $key }}">{{ $service }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                    </div>
                                </div>
                                <hr>
                                <div class="card-header" style="padding: 0.5rem 1.5rem">
                                    <div class="row">
                                        <div class="col-12 text-end">
                                            <button type="button" class="btn btn-light px-4 py-2"
                                                onclick="window.location.href='{{ route('admin.media') }}'">
                                                Cancel
                                            </button>
                                            <button type="submit" name="submit" class="btn btn-primary submitBtn">
                                                <i class="fa-solid fa-floppy-disk"></i> Save Media
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
            $('.submitBtn').on('click', function(e) {
                e.preventDefault();
                var files = $('#file-upload')[0].files;
                var isGallery = $('#is_gallery').is(':checked');
                var category = $('#category').val();

                // Disable the submit button
                $('.submitBtn').prop('disabled', true);

                uploadFiles(files, 0, isGallery, category); // Start uploading files one by one
            });

            function uploadFiles(files, index, isGallery, category) {
                if (index < files.length) {
                    var file = files[index];
                    var formData = new FormData();
                    formData.append('file', file);
                    formData.append('is_gallery', isGallery);
                    formData.append('category', category);
                    formData.append('_token', '{{ csrf_token() }}'); // Add CSRF token

                    // Update upload status
                    $('#upload-status').append('<div id="status-' + index + '">Uploading ' + file.name +
                        '...</div>');

                    $.ajax({
                        url: '{{ route('admin.media.store') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            // Update status to complete
                            $('#status-' + index).text(file.name + ' uploaded successfully.');

                            // Upload next file
                            uploadFiles(files, index + 1, isGallery, category);
                        },
                        error: function(xhr, status, error) {
                            // Update status to error
                            $('#status-' + index).text('Error uploading ' + file.name);
                        },
                        complete: function() {
                            // Re-enable the submit button after the last file is processed
                            if (index === files.length - 1) {
                                $('.submitBtn').prop('disabled', false);
                            }
                        }
                    });
                } else {
                    // All files are processed
                    $('#upload-status').append('<div>All files processed.</div>');
                }
            }
        });



        $(document).ready(function() {
            $('#file-upload').on('change', function() {
                var files = $(this)[0].files;
                $('#preview-container').html('');
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var content = $('<div class="preview col-md-3"></div>');
                        if (file.type.startsWith('image/')) {
                            content.append($('<img>').attr('src', e.target.result).addClass(
                                'preview-img'));
                        } else if (file.type.startsWith('video/')) {
                            content.append($('<video controls>').attr('src', e.target.result).addClass(
                                'preview-video'));
                        }
                        content.append($('<button>').text('Remove').addClass('btn btn-danger btn-sm')
                            .click(function() {
                                $(this).parent().remove();
                            }));
                        $('#preview-container').append(content);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endsection
