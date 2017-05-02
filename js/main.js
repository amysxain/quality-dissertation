//ripple button effect
(function (window, $) {
    $(function () {
        $('.ripple').on('click', function (event) {
           // event.preventDefault();
            var $div = $('<div/>'),
                btnOffset = $(this).offset(),
                xPos = event.pageX - btnOffset.left,
                yPos = event.pageY - btnOffset.top;
            $div.addClass('ripple-effect');
            var $ripple = $(".ripple-effect");
            $ripple.css("height", $(this).height());
            $ripple.css("width", $(this).height());
            $div
                .css({
                    top: yPos - ($ripple.height() / 2),
                    left: xPos - ($ripple.width() / 2),
                    background: $(this).data("ripple-color")
                })
                .appendTo($(this));
            window.setTimeout(function () {
                $div.remove();
            }, 2000);
        });
    });
})(window, jQuery);
//ripple button effect end
//glide slider settings


var WinWidth = $(window).width();

if (WinWidth > 767) {
    var carousel = $('#Carousel').glide({
        type: 'carousel',
        paddings: '27%',
        startAt: 2,
        autoplay: false,
        beforeTransition: function (data) {
            console.log(data);
            $('.glide__slide.active').addClass('sliding')
        },
        afterTransition: function (data) {
            $('.glide__slide').removeClass('sliding')
        }
    });
}

if (WinWidth <= 767) {
    var carousel = $('#Carousel').glide({
        type: 'carousel',
        paddings: '0',
        startAt: 2,
        autoplay: false,
        beforeTransition: function (data) {
            console.log(data);
            $('.glide__slide.active').addClass('sliding')
        },
        afterTransition: function (data) {
            $('.glide__slide').removeClass('sliding')
        }
    });
}



//glide slider settings end


//input increament button

var $incr = $('.input-number');
$('.btn-number').click(function(e){
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {

            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$incr.focusin(function(){
    $(this).data('oldValue', $(this).val());
});
$incr.change(function() {

    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});

$incr.keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
//input increament button end


//free sample form collapse
$('.free-sample-download').on('click', function (e) {
    e.preventDefault();
    $('.sample-form-wrap').slideDown();
})

//free sample form collapse end


//steps


var navListItems = $('ul.setup-panel li a'),
    allWells = $('.setup-content');

allWells.hide();

navListItems.click(function(e)
{
    e.preventDefault();
    var $target = $($(this).attr('href')),
        $item = $(this).closest('li');

    if (!$item.hasClass('disabled')) {
        navListItems.closest('li').removeClass('active');
        $item.addClass('active');
        allWells.hide();
        $target.show();
    }
});

$('ul.setup-panel li.active a').trigger('click');

// DEMO ONLY //
$('#activate-step-2').on('click', function(e) {
    $('ul.setup-panel li:eq(1)').removeClass('disabled');
    $('ul.setup-panel li a[href="#step-2"]').trigger('click');
    //$(this).remove();
})

$('#activate-step-3').on('click', function(e) {
    $('ul.setup-panel li:eq(2)').removeClass('disabled');
    $('ul.setup-panel li a[href="#step-3"]').trigger('click');
    //$(this).remove();
})

$('#activate-step-4').on('click', function(e) {
    $('ul.setup-panel li:eq(3)').removeClass('disabled');
    $('ul.setup-panel li a[href="#step-4"]').trigger('click');
    //$(this).remove();
})

$('#activate-step-3').on('click', function(e) {
    $('ul.setup-panel li:eq(2)').removeClass('disabled');
    $('ul.setup-panel li a[href="#step-3"]').trigger('click');
    //$(this).remove();
})




//steps end


//dropzone

$('#dropzone').on('dragover', function() {
    $(this).addClass('hover');
});

$('#dropzone').on('dragleave', function() {
    $(this).removeClass('hover');
});

$('#dropzone input').on('change', function(e) {
    var file = this.files[0];

    $('#dropzone').removeClass('hover');

    if (this.accept && $.inArray(file.type, this.accept.split(/, ?/)) == -1) {
        return alert('File type not allowed.');
    }

    $('#dropzone').addClass('dropped');
    $('#dropzone img').remove();

    if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
        var reader = new FileReader(file);

        reader.readAsDataURL(file);

        reader.onload = function(e) {
            var data = e.target.result,
                $img = $('<img />').attr('src', data).fadeIn();

            $('#dropzone div').html($img);
        };
    } else {
        var ext = file.name.split('.').pop();

        $('#dropzone div').html(ext);
    }
});
//dropzone end