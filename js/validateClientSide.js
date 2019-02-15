'use strict';

document.addEventListener("DOMContentLoaded", function() {
    var elements = document.querySelectorAll("input,textarea");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Dit veld dient ingevuld te worden");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})
