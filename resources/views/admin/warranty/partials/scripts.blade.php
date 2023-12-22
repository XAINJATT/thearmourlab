<script>
    function addRow() {
        // Get the table element
        var table = document.getElementById("maintenanceLog");

        // Insert a new row at the end of the table
        var newRow = table.insertRow(-1);

        // Insert new cells (<td> elements) and add the input fields
        var cell1 = newRow.insertCell(0);
        var cell2 = newRow.insertCell(1);
        var cell3 = newRow.insertCell(2);
        var cell4 = newRow.insertCell(3);
        var cell5 = newRow.insertCell(4);
        var cell6 = newRow.insertCell(5);

        // Add the input fields
        cell1.innerHTML = '<input class="form-control" type="date" name="log_date[]">';
        cell2.innerHTML = '<input class="form-control" type="text" name="annualInspection[]">';
        cell3.innerHTML = '<input class="form-control" type="text" name="productUsed[]">';
        cell4.innerHTML = '<input class="form-control" type="text" name="performedBy[]">';
        cell5.innerHTML = '<input class="form-control" type="text" name="notes[]">';
        cell6.innerHTML = '<button class="btn btn-danger" type="button" onclick="removeRow(this)">Remove</button>';
    }

    function removeRow(btn) {
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }

    $(document).ready(function() {
        $('#email').change(function() {
            var selectedEmail = $(this).val();
            var selectedOption = $('option:selected', this);

            $('#first_name').val(selectedOption.data('first-name'));
            $('#last_name').val(selectedOption.data('last-name'));
            $('#tel').val(selectedOption.data('tel'));
            $('#id').val(selectedOption.data('id'));
        });
    });

    var clearBtn = "#clear";
    var saveBtn = "#save";
    var canvasArea = "#signature-pad";
    var returnUrlSave = "#signature_value";
    var ajaxUrl = "{{ route('admin.invoice.store') }}";

    $(document).ready(function() {
        initSignaturePad();
    });

    function initSignaturePad() {
        var canvas = document.getElementById(canvasArea.replace("#", ""));
        console.log(canvas)
        if (!canvas) {
            console.error("Canvas not found: signature-pad");
            return;
        }
        var context = canvas.getContext("2d");

        var drawing = false;
        var lastPos = null;

        // Remove existing event handlers to avoid duplicates
        $(document).off(
            "mousemove touchmove mousedown touchstart touchend touchmove",
            canvasArea
        );
        $(document).off("click", saveBtn);
        $(clearBtn).off("click");

        // Mouse and touch events for drawing
        $(document).on("mousedown", canvasArea, function(e) {
            if (e.which === 1) {
                drawing = true;
                lastPos = getMousePos(canvas, e);
            }
        });

        $(document).on("mouseup", canvasArea, function() {
            drawing = false;
            var canvas = document.getElementById(canvasArea.replace("#", ""));
            var signatureData = canvas.toDataURL();

            // Set the signature value in a hidden input field
            $("#signature_value").val(signatureData);
        });

        canvas.addEventListener('touchstart', function(e) {
            e.preventDefault();
            drawing = true;
            lastPos = getTouchPos(canvas, e);
        }, false);

        canvas.addEventListener('touchmove', function(e) {
            e.preventDefault();
            if (drawing) {
                var touchPos = getTouchPos(canvas, e);
                if (touchPos) {
                    draw(canvas, context, lastPos, touchPos);
                    lastPos = touchPos;
                }
            }
        }, false);

        canvas.addEventListener('touchend', function(e) {
            e.preventDefault();
            var canvas = document.getElementById(canvasArea.replace("#", ""));
            var signatureData = canvas.toDataURL();

            // Set the signature value in a hidden input field
            $("#signature_value").val(signatureData);
            drawing = false;
        }, false);



        $(document).on("mousemove", canvasArea, function(e) {
            if (drawing) {
                var mousePos = getMousePos(canvas, e);
                if (lastPos && mousePos) {
                    draw(canvas, context, lastPos, mousePos);
                    lastPos = mousePos;
                }
            }
        });



        // Save button event handler
        // $(saveBtn).click(function() {
        //     var canvas = document.getElementById(canvasArea.replace("#", ""));
        //     var signatureData = canvas.toDataURL();

        //     // Set the signature value in a hidden input field
        //     $("#signature_value").val(signatureData);

        //     // Now submit the form
        //     // $("form").submit();
        // });

        // Clear canvas function and event handler
        function clearCanvas() {
            document.getElementById("is_drawn").value = false;
            context.clearRect(0, 0, canvas.width, canvas.height);
        }

        $(clearBtn).click(function() {
            $("#signature_value").val("");
            clearCanvas();
        });
    }

    function getMousePos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        var scaleX = canvas.width / rect.width; // Relationship bitmap vs. element for X
        var scaleY = canvas.height / rect.height; // Relationship bitmap vs. element for Y

        return {
            x: (evt.clientX - rect.left) * scaleX,
            y: (evt.clientY - rect.top) * scaleY
        };
    }

    function getTouchPos(canvas, evt) {
        var rect = canvas.getBoundingClientRect();
        var scaleX = canvas.width / rect.width;
        var scaleY = canvas.height / rect.height;

        var touch = evt.touches[0] || evt.changedTouches[0];
        return {
            x: (touch.clientX - rect.left) * scaleX,
            y: (touch.clientY - rect.top) * scaleY
        };
    }


    function draw(canvas, context, startPos, endPos) {
        document.getElementById("is_drawn").value = true;
        context.beginPath();
        context.moveTo(startPos.x, startPos.y);
        context.lineTo(endPos.x, endPos.y);
        context.stroke();
    }
</script>
