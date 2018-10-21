$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initial text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><div class="row"><div class="column small-12 medium-4">Name<input type="text" name="mytext[]"></div><div class="column small-12 medium-4">Relation<input type="text" name=""></div><div class="column small-12 medium-4"><input type="file" name=""></div></div><a href="#" class="remove_field">Remove</a></div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});