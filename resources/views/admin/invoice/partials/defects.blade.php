<div class="row p-sm-3 p-0">

    <div class="col-md-4 col-sm-5 col-12 mb-sm-0 mb-4">
        <h2 class="mb-1"
            style=" color: #040404 !important; margin-bottom: 17px !important; font-size:x-large; font-weight: bolder;">
            INSPECTION REPORT</h2>
        <h6 class="pb-2">Defects:</h6>
        <input type="hidden" id="imgBase64" name="imgBase64">

        @include('admin.partials.defect-table')



    </div>

    <div class="col-md-8 col-sm-7">
        <style>
            #image-canvas {
                max-width: 100%;
                height: auto;
                display: block;
            }

            #image-container {
                width: 100%;
                height: auto;
            }
        </style>
        @if (auth()->user()->isAdmin())
            <div id="image-container">
                <canvas class="cavas-image" id="image-canvas"></canvas>
            </div>
        @endif

        @if (!empty($order->defects))
            <img style="max-height:300px" src="{{ @$order->defects }}" id="defects" alt="defects"
                class="img-fluid" />
            <input type="hidden" id="old_defects" name="old_defects" value="{{ @$order->defects }}">
        @endif

    </div>
</div>
