(function($) {
    "use strict";
    $(document).ready(function(){
        /* Step type 1 */
        var multiple_form_one_current_fs,
            multiple_form_one_next_fs,
            multiple_form_one_previous_fs; //fieldsets
        var multiple_form_one_opacity;
        $(".multiple-form-one .next").on('click', function(){
            multiple_form_one_current_fs = $(this).parent();
            multiple_form_one_next_fs = $(this).parent().next();

            var form = $("#msform");
            form.validate({
                errorElement: 'span',
                errorClass: 'help-block',
                highlight: function(element, errorClass, validClass) {
                    $(element).closest('.mb-3').addClass("has-error");
                   
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.mb-3').removeClass("has-error");
                   
                },
                rules: {
                    fname: {
                        required: true,
                    },
                    lname: {
                        required: true,
                    },

                    nationality: {
                        required: true,
                    },
                    gender: {
                        required: true,
                    },
                    d_o_birth: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                   
                    membership_reason: {
                        required: true,
                    },
                    other_info: {
                        required: true,
                    },
                  

                    picture: {
                        required: true,
                    },
                   
                },
                messages: {
                    fname: {
                        required: "Field Required",
                    },
                    lname : {
                        required: "Field Required",
                    },
                    
                    nationality: {
                        required: "Field Required",
                    },
                    gender: {
                        required: "Field Required",
                    },
                    d_o_birth: {
                        required: "Field Required",
                    },
                    email: {
                        required: "Field Required",
                    },
                    
                    membership_reason: {
                        required: "Field Required",
                    },
                    other_info: {
                        required: "Field Required",
                    },
                  
                    
                    picture: {
                        required: "Field Required",
                    },
                }
            });
            if (form.valid() === true){
            //Add Class Active
            $(".multiple-form-one #progressbar li").eq($(".multiple-form-one fieldset").index(multiple_form_one_next_fs)).addClass("active");
            //show the next fieldset
            multiple_form_one_next_fs.show();
            //hide the current fieldset with style
            multiple_form_one_current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fielset appear animation
                    multiple_form_one_opacity = 1 - now;
                    multiple_form_one_current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    multiple_form_one_next_fs.css({'opacity': multiple_form_one_opacity});
                },
                duration: 600
            });
        }
        });
        
        $(".multiple-form-one .previous").on('click', function(){
            multiple_form_one_current_fs = $(this).parent();
            multiple_form_one_previous_fs = $(this).parent().prev();
            //Remove class active
            $(".multiple-form-one #progressbar li").eq($(".multiple-form-one fieldset").index(multiple_form_one_current_fs)).removeClass("active");
            //show the previous fieldset
            multiple_form_one_previous_fs.show();
            //hide the current fieldset with style
            multiple_form_one_current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fielset appear animation
                    multiple_form_one_opacity = 1 - now;
                    multiple_form_one_current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    multiple_form_one_previous_fs.css({'opacity': multiple_form_one_opacity});
                },
                duration: 600
            });
        });
        $('.radio-group .radio').on('click', function(){
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });
        $(".multiple-form-one .submit").on('click', function(){
            return false;
        })
        /* Step type 2 */
        var multiple_form_two_current_fs,
            multiple_form_two_next_fs,
            multiple_form_two_previous_fs; //fieldsets
        var multiple_form_two_opacity;
        var current = 1;
        var steps = $(".multiple-form-two fieldset").length;
        setProgressBar(current);
        $(".multiple-form-two .next").on('click', function(){
            multiple_form_two_current_fs = $(this).parent();
            multiple_form_two_next_fs = $(this).parent().next();
           
            if (form.valid() === true){
            //Add Class Active
            $(".multiple-form-two #progressbar li").eq($(".multiple-form-two fieldset").index(multiple_form_two_next_fs)).addClass("active");
            //show the next fieldset
            multiple_form_two_next_fs.show();
            //hide the current fieldset with style
            multiple_form_two_current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fielset appear animation
                    multiple_form_two_opacity = 1 - now;
                    multiple_form_two_current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    multiple_form_two_next_fs.css({'opacity': multiple_form_two_opacity});
                },
                duration: 500
            });
            setProgressBar(++current);
        }
        });
        $(".multiple-form-two .previous").on('click', function(){
            multiple_form_two_current_fs = $(this).parent();
            multiple_form_two_previous_fs = $(this).parent().prev();
            //Remove class active
            $(".multiple-form-two #progressbar li").eq($(".multiple-form-two fieldset").index(multiple_form_two_current_fs)).removeClass("active");
            //show the previous fieldset
            multiple_form_two_previous_fs.show();
            //hide the current fieldset with style
            multiple_form_two_current_fs.animate({opacity: 0}, {
                step: function(now) {
                    // for making fielset appear animation
                    multiple_form_two_opacity = 1 - now;
                    multiple_form_two_current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    multiple_form_two_previous_fs.css({'opacity': multiple_form_two_opacity});
                },
                duration: 500
            });
            setProgressBar(--current);
        });
        function setProgressBar(curStep){
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".multiple-form-two .progress-bar").css("width",percent+"%")
        }
        $(".multiple-form-two .submit").on('click', function(){
            return false;
        })
        // For file attachment
        var arr = [];
        var children = "";
        var count = 0;
        var count2 = 0
        $('#file-upload').on('change', function(e) {
            count2++
            if(count2 > 1){
                count++;
            }
            var file = $('#file-upload')[0].files[0].name;
            arr.push(file);
            children = '<label>' + arr[count] + '<span title="Remove Attachment" class="delete-label bs-tooltip"><i class="las la-times"></i></span></label>';
            // console.log(children);
            $(".attached-files").css({
                'display': 'block',
            });
            $(".attached-files").append(children);
            // If no file was selected, empty the preview <img>
            if(!e.target.files.length){
                return imgElement.src = '';
            }
            // Set the <img>'s src to a reference URL to the selected file
            return imgElement.src = URL.createObjectURL(e.target.files.item(0))
        });
        $('.attached-files').on('click', '.delete-label',  function(event) {
            $(this).parent().remove();
            imgElement.src = '';
            $(".attached-files").css({
                'display': 'none',
            });
        });
        const imgElement = document.getElementById('image-preview');
    });
})(jQuery);
