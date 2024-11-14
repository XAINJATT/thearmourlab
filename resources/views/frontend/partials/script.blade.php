<!-- External JavaScripts -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') . config('app.asset') }}"></script>
<script src="{{ url('vendor/bootstrap-select/bootstrap-select.min.js') . config('app.asset') }}"></script>
<script src="{{ url('vendor/magnific-popup/magnific-popup.js') . config('app.asset') }}"></script>
<script src="{{ url('vendor/imagesloaded/imagesloaded.js') . config('app.asset') }}"></script>
<script src="{{ url('vendor/owl-carousel/owl.carousel.js') . config('app.asset') }}"></script>
<script src="{{ url('vendor/progress-bar/jquery.appear.js') . config('app.asset') }}"></script>
<script src="{{ url('vendor/progress-bar/jquery.skillbar.js') . config('app.asset') }}"></script>
<script src="{{ url('vendor/swiper/swiper.min.js') . config('app.asset') }}"></script>
<script src="{{ asset('vendor/masonry/isotope.pkgd.min.js') . config('app.asset') }}"></script>
<script src="{{ asset('vendor/masonry/masonry.pkgd.min.js') . config('app.asset') }}"></script>
<script src="{{ url('js/functions.js') . config('app.asset') }}"></script>
<script src="{{ url('js/contact.js') . config('app.asset') }}"></script>
<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
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
