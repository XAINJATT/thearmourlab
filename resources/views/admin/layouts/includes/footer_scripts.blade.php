<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/<your API key>/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<script>
    function copy(elm) {
        var copyText = document.getElementById(elm.getAttribute("data-value"));
        var btnText = elm.innerText
        console.log(elm.getAttribute("data-value"))
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        elm.innerText = elm.getAttribute("data-text")
        setTimeout(() => {
            elm.innerText = btnText
        }, 4000);
    }


    $(document).ready(function() {
        $("#email").select2();
    });

    var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    tinymce.init({
        selector: 'textarea#description',
        plugins: ' preview powerpaste casechange importcss searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker help formatpainter permanentpen pageembed charmap tinycomments mentions quickbars linkchecker emoticons advtable export',
        mobile: {
            plugins: ' preview powerpaste casechange importcss searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker help formatpainter pageembed charmap mentions quickbars linkchecker emoticons advtable'
        },
        menu: {
            tc: {
                title: 'Comments',
                items: 'addcomment showcomments deleteallconversations'
            }
        },
        menubar: 'file edit view insert format tools table tc help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,

        importcss_append: true,
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
        tinycomments_mode: 'embedded',
        content_style: '.mymention{ color: gray; }',
        contextmenu: 'link image table configurepermanentpen',
        a11y_advanced_options: true,
        skin: 'oxide',
        content_css: 'default',

    }).then(function(editors) {
        $(".tox.tox-silver-sink.tox-tinymce-aux .tox-notifications-container .tox-notification").css("display",
            "none")
    });
</script>

<!-- Apex Charts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

{{-- <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script> --}}

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
{{-- Form Repeater --}}
{{-- <script src="{{asset('assets/vendor/js/repeater/jquery.repeater.min.js')}}"></script> --}}
{{-- <script src="{{asset('assets/js/jquery.form-repeater.js')}}"></script> --}}

{{-- Spartan Image Selector --}}
{{-- <script src="{{asset('assets/vendor/js/spartan-multi-image-picker/spartan-multi-image-picker-min.js')}}"></script> --}}
{{-- <script src="{{asset('assets/vendor/js/spartan-multi-image-picker/spartan-multi-image-picker.js')}}"></script> --}}

<!-- DateRangePicker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" defer></script>

<!-- Datatables -->
<script src="{{ asset('assets/vendor/libs/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables/js/dataTables.min.js') }}"></script>

<!-- Select2 -->
<!-- Style -->
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> --}}
<!-- Script -->

{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}

<script src="{{ asset('assets/vendor/libs/datatables/js/dataTables.min.js') }}"></script>
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> --}}
{{-- <!-- <script src="{{ asset('assets/js/jquery.signature.js') }}"></script> --> --}}

<!-- <script src="{{ asset('assets/js/jquery.signature.min.js') }}"></script> -->

<!-- Include jQuery -->
<!-- SweetAlert JS -->
<script src="{{ asset('backend/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

@yield('script')
