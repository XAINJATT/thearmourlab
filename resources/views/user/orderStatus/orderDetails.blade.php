@extends('admin.layouts.app')
@section('content')
<style>
    .card hr {
        color: #adb35b !important;
        height: 2px !important;
        width: 100% !important;
    }

    .signature-line {
        border-bottom: 1px solid #000;
        /* Adjust the border properties as needed */
        margin-top: 30px;
        /* You can adjust the spacing above the signature line */
    }

    .kbw-signature {
        width: 400px;
        height: 200px;
    }

    body {
        background-color: #f6f6f6;
        margin-top: 20px;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        border: none;
        position: relative;
        margin-bottom: 30px;
        box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
    }

    .card .card-header {
        border-bottom-color: #f9f9f9;
        line-height: 30px;
        -ms-grid-row-align: center;
        align-self: center;
        width: 100%;
        padding: 10px 25px;
        display: flex;
        align-items: center;
    }

    .card .card-header,
    .card .card-body,
    .card .card-footer {
        background-color: transparent;
        padding: 20px 25px;
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125);
    }

    .table:not(.table-sm) thead th {
        border-bottom: none;
        background-color: #e9e9eb;
        color: #666;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .table .table-img img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        border: 2px solid #bbbbbb;
        -webkit-box-shadow: 5px 6px 15px 0px rgba(49, 47, 49, 0.5);
        -moz-box-shadow: 5px 6px 15px 0px rgba(49, 47, 49, 0.5);
        -ms-box-shadow: 5px 6px 15px 0px rgba(49, 47, 49, 0.5);
        box-shadow: 5px 6px 15px 0px rgba(49, 47, 49, 0.5);
        text-shadow: 0 0 black;
    }

    .table .team-member-sm {
        width: 32px;
        -webkit-transition: all 0.25s ease;
        -o-transition: all 0.25s ease;
        -moz-transition: all 0.25s ease;
        transition: all 0.25s ease;
    }

    .table .team-member {
        position: relative;
        width: 30px;
        white-space: nowrap;
        border-radius: 1000px;
        vertical-align: bottom;
        display: inline-block;
    }

    .table .order-list li img {
        border: 2px solid #ffffff;
        box-shadow: 4px 3px 6px 0 rgba(0, 0, 0, 0.2);
    }

    .table .team-member img {
        width: 100%;
        max-width: 100%;
        height: auto;
        border: 0;
        border-radius: 1000px;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .table .order-list li+li {
        margin-left: -14px;
        background: transparent;
    }

    .avatar.avatar-sm {
        font-size: 12px;
        height: 30px;
        width: 30px;
    }

    .avatar {
        background: #6777ef;
        border-radius: 50%;
        color: #e3eaef;
        display: inline-block;
        font-size: 16px;
        font-weight: 300;
        margin: 0;
        position: relative;
        vertical-align: middle;
        line-height: 1.28;
        height: 45px;
        width: 45px;
    }

    .table .order-list li .badge {
        background: rgba(228, 222, 222, 0.8);
        color: #6b6f82;
        margin-bottom: 6px;
    }

    .badge {
        vertical-align: middle;
        padding: 7px 12px;
        font-weight: 600;
        letter-spacing: 0.3px;
        border-radius: 30px;
        font-size: 12px;
    }

    .progress-bar {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-direction: column;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -ms-flex-pack: center;
        -webkit-box-pack: center;
        justify-content: center;
        overflow: hidden;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #007bff;
        -webkit-transition: width .6s ease;
        transition: width .6s ease;
    }

    .bg-success {
        background-color: #54ca68 !important;
    }

    .bg-purple {
        background-color: #9c27b0 !important;
        color: #fff;
    }

    .bg-cyan {
        background-color: #10cfbd !important;
        color: #fff;
    }

    .bg-red {
        background-color: #f44336 !important;
        color: #fff;
    }

    .progress {
        -webkit-box-shadow: 0 0.4rem 0.6rem rgba(0, 0, 0, 0.15);
        box-shadow: 0 0.4rem 0.6rem rgba(0, 0, 0, 0.15);
    }

    .btn-action {
        color: #fff !important;
        line-height: 25px;
        font-size: 12px;
        min-width: 35px;
        min-height: 35px;
    }
</style>
<script>
    $(function() {
        var sig = $('#sig').signature();
        $('#disable').click(function() {
            var disable = $(this).text() === 'Disable';
            $(this).text(disable ? 'Enable' : 'Disable');
            sig.signature(disable ? 'disable' : 'enable');
        });
        $('#clear').click(function() {
            sig.signature('clear');
        });
        $('#json').click(function() {
            alert(sig.signature('toJSON'));
        });
        $('#svg').click(function() {
            alert(sig.signature('toSVG'));
        });
    });
</script>
<div class="content container-fluid">
    {{--Section 1--}}
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row invoice-add">
            <div class="container">
                <div class="col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Task Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                Completed
                                            </th>
                                            <th>Stages</th>
                                            <th>Stages Details</th>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked>
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>General</td>
                                            <td>
                                                <ul class="list-unstyled ps-0 mb-0">
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Vehicle has arrived and is logged into our system. </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Evaluating the vehicle's condition before any work begins.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Ensuring the car's surface is clean and free of contaminants.</p>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4" checked>
                                                    <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Paint Protection Film</td>
                                            <td>
                                                <ul class="list-unstyled ps-0 mb-0">
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Cutting the PPF to the vehicle's specific measurements and aligning it for application. </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Polishing the vehicle's surface to ensure an immaculate finish beneath the PPF.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Applying the PPF to the vehicle's body.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Allowing time for the glue under the Ppf to solidify and dry enough to go home.</p>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5" checked>
                                                    <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Ceramic Coating</td>
                                            <td>
                                                <ul class="list-unstyled ps-0 mb-0">
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Preparing the vehicle's surface for ceramic coating. </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Correcting any imperfections in the paint before the ceramic coating application.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Applying the ceramic coating to protect the vehicle's paint.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Allowing time for the ceramic coating to bond with the vehicle's surface or PPF.</p>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                                                    <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Window Tint</td>
                                            <td>
                                                <ul class="list-unstyled ps-0 mb-0">
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Measuring windows and cutting tint film accordingly. </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Applying the tint to the vehicle's windows.</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> 5G and Gigabit LTE</p>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                                                    <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>Final</td>
                                            <td>
                                                <ul class="list-unstyled ps-0 mb-0">
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Checking the quality of the work, ensuring no imperfections. </p>
                                                    </li>
                                                    <li>
                                                        <p class="text-muted mb-1 text-truncate"><i class="mdi mdi-circle-medium align-middle text-primary me-1"></i> Vehicle is ready and waiting for the customer.</p>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    </div>
</div>
@endsection