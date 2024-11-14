<!-- External JavaScripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
{{-- <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') . config('app.asset') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.2/js/bootstrap-select.min.js"
    integrity="sha512-XGVlMoVv0uWUvlNXLTsd6m0K4u7k7FL1SZ4e56pZWjUyxduGmHyWHggcHy45jH4TjvFkiuC1LQnLmNUGnaoNpA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
    integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ url('vendor/imagesloaded/imagesloaded.js') . config('app.asset') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"
    integrity="sha512-lo4YgiwkxsVIJ5mex2b+VHUKlInSK2pFtkGFRzHsAL64/ZO5vaiCPmdGP3qZq1h9MzZzghrpDP336ScWugUMTg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ url('vendor/progress-bar/jquery.appear.js') . config('app.asset') }}"></script>
<script src="{{ url('vendor/progress-bar/jquery.skillbar.js') . config('app.asset') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.2.0/js/swiper.min.js"
    integrity="sha512-dEcJn+6xTNTBfFsnzrF7r6P8/TkR6RxRrrisTKW6Wd+6LzedLBG6AvVB8X0tvcNYka6Csf4Vci5Isemo12apIw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('vendor/masonry/isotope.pkgd.min.js') . config('app.asset') }}"></script>
<script src="{{ asset('vendor/masonry/masonry.pkgd.min.js') . config('app.asset') }}"></script>
<script src="{{ url('js/functions.js') . config('app.asset') }}"></script>
<script src="{{ url('js/contact.js') . config('app.asset') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</script>


<style>
    #loader {
        border: 5px solid #f3f3f3;
        /* Light grey */
        border-top: 5px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 2s linear infinite;
        margin: 20px auto;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<script>
    $(document).ready(function() {
        var page = 1;
        var currentCategory = ''; // Keep track of the current category

        // Handle tab click
        $('.filters li').on('click', function() {
            currentCategory = $(this).data('category');
            page = 1; // Reset pagination
            loadGalleryItems(); // Load initial items for the selected category
        });

        // Handle Load More click
        $('#load-more').on('click', function() {
            page++;
            loadGalleryItems();
        });

        function loadGalleryItems() {
            $('#loader').show();
            $.ajax({
                url: '/load-more-gallery',
                type: 'GET',
                data: {
                    page: page,
                    category: currentCategory
                },
                success: function(response) {
                    $('#loader').hide();
                    if (page === 1) {
                        $('#masonry').html(''); // Clear existing items if first page
                    }
                    $('#masonry').append(response.html);
                    $('#masonry').masonry('reloadItems');
                    $('#masonry').masonry('layout');
                    if (!response.hasMore) {
                        $('#load-more').hide();
                    } else {

                        $('#load-more').show();
                    }
                }
            });
        }
    });
</script>



@yield('scripts')
