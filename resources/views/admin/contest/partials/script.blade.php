<script>
    $(document).ready(function() {
        $('#email').change(function() {
            var selectedEmail = $(this).val();
            var selectedOption = $('option:selected', this);

            $('#first_name').val(selectedOption.data('first-name'));
            $('#last_name').val(selectedOption.data('last-name'));
            $('#phone').val(selectedOption.data('phone'));
            $('#id').val(selectedOption.data('id'));

        });

        $('#email').trigger('change');
    });

    console.log("Asfd");
    document.getElementById('general_stages').addEventListener('change', function() {
        var additionalRowsgs = document.getElementsByClassName('additional-row-gs');
        console.log(additionalRowsgs)
        for (var i = 0; i < additionalRowsgs.length; i++) {
            additionalRowsgs[i].style.display = this.checked ? 'table-row' : 'none';
        }
    });
    document.getElementById('paint_protection_film_stages').addEventListener('change', function() {
        var additionalRowsppf = document.getElementsByClassName('additional-row-ppf');
        for (var i = 0; i < additionalRowsppf.length; i++) {
            additionalRowsppf[i].style.display = this.checked ? 'table-row' : 'none';
        }
    });
    document.getElementById('ceramic_coating_stages').addEventListener('change', function() {
        var additionalRowsccs = document.getElementsByClassName('additional-row-ccs');
        for (var i = 0; i < additionalRowsccs.length; i++) {
            additionalRowsccs[i].style.display = this.checked ? 'table-row' : 'none';
        }
    });
    document.getElementById('window_tint_stages').addEventListener('change', function() {
        var additionalRowswts = document.getElementsByClassName('additional-row-wts');
        for (var i = 0; i < additionalRowswts.length; i++) {
            additionalRowswts[i].style.display = this.checked ? 'table-row' : 'none';
        }
    });
    document.getElementById('final_stages').addEventListener('change', function() {
        var additionalRowsfs = document.getElementsByClassName('additional-row-fs');
        for (var i = 0; i < additionalRowsfs.length; i++) {
            additionalRowsfs[i].style.display = this.checked ? 'table-row' : 'none';
        }
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


    $(document).ready(function() {




        var canvas = document.getElementById("image-canvas");
        var ctx = canvas.getContext("2d");
        var img = new Image();

        img.onload = function() {
            // Get the ratio of the image
            var ratio = img.width / img.height;

            // Set the maximum width
            var maxWidth = $('#image-container').width(); // Width of the container or a fixed value

            // Calculate the canvas width and height while maintaining the aspect ratio
            canvas.width = maxWidth;
            canvas.height = maxWidth / ratio;

            // Draw the image
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        };


        $(window).resize(function() {
            // Calculate new width and height

            var ratio = img.width / img.height;
            var maxWidth = $('#image-container').width();
            var newHeight = maxWidth / ratio;

            // Resize the canvas
            canvas.width = maxWidth;
            canvas.height = newHeight;

            // Redraw the image
            ctx.drawImage(img, 0, 0, maxWidth, newHeight);
        });

        img.src = "{{ asset('/images/images.png') }}"; // Set source at the end

        $("#image-container").click(function(e) {
            var posX = $(this).offset().left,
                posY = $(this).offset().top,
                x = e.pageX - posX,
                y = e.pageY - posY;

            var $inputWrapper = $("<div>", {
                class: "input-wrapper",
                css: {
                    left: x + "px",
                    top: y + "px",
                },
            }).appendTo("#image-container");

            var $input = $("<input class='mb-2'>", {
                type: "text",
                class: "defect-input",
            }).appendTo($inputWrapper);

            var $addButton = $("<button>", {
                text: "Add",
                click: function(event) {
                    event.stopPropagation();
                    var defectDescription = $input.val();
                    if (defectDescription.trim() !== "") {
                        ctx.font = "16px Arial";
                        ctx.fillStyle = "red";
                        ctx.fillText(defectDescription, x, y);
                        var dataURL = canvas.toDataURL("image/png");
                        $('#imgBase64').attr("value", dataURL);
                    }
                    $inputWrapper.remove();
                },
            }).appendTo($inputWrapper);

            var $removeButton = $("<button>", {
                text: "Remove",
                click: function(event) {
                    event.stopPropagation();
                    $inputWrapper.remove();
                },
            }).appendTo($inputWrapper);

            $input.focus();
        });

        // $("#save").click(function() {
        //     // Convert the canvas to a data URL
        //     var dataURL = canvas.toDataURL("image/png");
        //     $('#image-preview').attr('src', dataURL);

        //     // Append the canvas image data to the form data
        //     $('#imgBase64').attr("value", dataURL);

        //     // Rest of your AJAX code...
        // });
    });
</script>
