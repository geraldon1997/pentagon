$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#loginForm').validate({
            rules: {
                username: {
                    required: true,
                    minlength: 8
                },
                password: {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                username: {
                    required: "come on, you have a username, don't you?",
                    minlength: "your username must consist of at least 8 characters"
                },
                password: {
                    required: "come on, you have a password, don't you?",
                    minlength: "your password must consist of at least 8 characters"
                }
            }
        })
    })
        
 })(jQuery)
})