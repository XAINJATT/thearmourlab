<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        /* For Error Messages Without ajax */
        $(function () {
            $("#datefilter").daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

        });
        $('[data-toggle="tooltip"]').tooltip();
        
        /*Table*/
        $('#user_table').DataTable();
        $('#blog_table').DataTable();
        $('#product_table').DataTable();
        $('#warranty_table').DataTable();
        $('#invoice_table').DataTable();

        
    });

    function ReadUrl(input, Preview, Browse) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function(e) {
                $("#" + Preview).show().attr('src', e.target.result).fadeIn('slow');
                $("#" + Browse).hide();
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function CheckForAdvanceDuplicateEmail(id, value) {
        $.ajax({
            type: "post",
            url: "{{route('admin.user.CheckForDuplicateEmail')}}",
            data: { Id: id, Value: value},
            success: function (data) {
                if (data === 'Failed') {
                    $("#duplicateEmailError").removeClass('d-none');
                    $("#email").focus();
                    $(".submitBtn").prop('disabled', true);
                } else {
                    $("#duplicateEmailError").addClass('d-none');
                    $(".submitBtn").prop('disabled', false);
                }
            }
        });
    }

</script>

@yield('scripts')