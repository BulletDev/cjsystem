
$(function () {


    
    $('#myModal').on('shown.bs.modal', function (e) {
        $('#catPers').on('input', function () {
            if ($(this).val() == '') {

            } else {
                var max = parseInt(document.getElementById('remaining').innerText);
                var min = parseInt($(this).attr('min'));
                if ($(this).val() > max) {
                    $(this).val(max);
                } else if ($(this).val() < min) {
                    $(this).val(min);
                }
                var x = parseInt(document.getElementById('remaining').innerText);
                var y = parseInt(document.getElementById('catPers').value);
                var z = x - y;
                document.getElementById('p1').textContent = z;
            }
        });
        $('#catPers').change(function () {
            if ($(this).val() == '') {

            } else {
                var max = parseInt(document.getElementById('remaining').innerText);
                var min = parseInt($(this).attr('min'));
                if ($(this).val() > max) {
                    $(this).val(max);
                } else if ($(this).val() < min) {
                    $(this).val(min);
                }
                var x = parseInt(document.getElementById('remaining').innerText);
                var y = parseInt(document.getElementById('catPers').value);
                var z = x - y;
                document.getElementById('p1').textContent = z;
            }
        });
    });
});

// {{-- criteria percentage script --}}

$(function () {
    $('#criteriaModal').on('shown.bs.modal', function (e) {
        $('#critPers').on('input', function () {
            if (!$(this).val() == '') {
                var critMax = parseInt(document.getElementById('critRemaining').innerText);
                var critMin = parseInt($(this).attr('min'));
                if ($(this).val() > critMax) {
                    $(this).val(critMax);
                } else if ($(this).val() < critMin) {
                    $(this).val(critMin);
                }
                var a = parseInt(document.getElementById('critRemaining').innerText);
                var b = parseInt(document.getElementById('critPers').value);
                var c = a - b;
                document.getElementById('p2').textContent = c;
            }
        });
        var m = 100;
        var n = parseInt(document.getElementById('totalCritPercentage').innerText);
        var o = m - n;
        document.getElementById('p2').textContent = o;
        document.getElementById('critRemaining').textContent = o;
        
        $('#critPers').change(function () {
            if (!$(this).val() == '') {
                var critMax = parseInt(document.getElementById('critRemaining').innerText);
                var min = parseInt($(this).attr('min'));
                if ($(this).val() > critMax) {
                    $(this).val(critMax);
                } else if ($(this).val() < critMin) {
                    $(this).val(critMin);
                }
                var a = parseInt(document.getElementById('critRemaining').innerText);
                var b = parseInt(document.getElementById('critPers').value);
                var c = a - b;
                document.getElementById('p2').textContent = c;
            }
        });
        var m = 100;
        var n = parseInt(document.getElementById('totalCritPercentage').innerText);
        var o = m - n;
        document.getElementById('p2').textContent = o;
        document.getElementById('critRemaining').textContent = o;

    });
});


