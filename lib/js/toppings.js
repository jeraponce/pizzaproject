function addTopping() {
    $.ajax({
        url: '/pizzaproject/lib/bin/toppings.php?action=addTopping',
        data: {
            topping: $("#topping").val()
        },
        success: function(result) {
            try {
                json = jQuery.parseJSON(result);
                console.log(json);
            } catch (e) {
                showError("Invalid JSON returned from server: " + result);
                return;
            }
            if (json["success"] === 0) {
                showError(json["errormsg"]);
				
            } else {
                $("#topping").val("");
                getToppings();
            }
        },
        error: function() {
            showError(' Reaching toppings.php');
        }
    });
}

function getToppings() {
    $.ajax({
        url: '/pizzaproject/lib/bin/toppings.php?action=getToppings',
        dataType:"JSON",
        success: function(json) {

            if (json["success"] === "0") {
                showError(json["errormsg"]);
            } else {
                console.log(json.toppings.length)
                if (json.toppings.length > 0) {
                    $("#listToppings").empty();
                    $.each(json.toppings, function(key, value) {
                        $("#listToppings").append('<tr><td><button class="btn btn-outline-danger btn-sm" title="Discart" onclick="deleteTopping(' + key + ')">X</button></td><td class="text-white">' + value + '</td></tr>');
						
                    });
                    $('p.hasToppings').show();
                    $('p.isEmpty').hide();
                } else {
                    $("#listToppings").empty();
                    $('p.hasToppings').hide();
                    $('p.isEmpty').show();
                }
            }
        },
        error: function() {
            showError(' Reaching Server');
        }
    });
}

function deleteTopping(toppingId){
    console.log(toppingId);

    $.ajax({
        url: '/pizzaproject/lib/bin/toppings.php?action=deleteTopping&toppingId='+toppingId,
        dataType: 'JSON',
        success: function(result) {

            if(result.success === 0){
                showError(result.message);
            }else{
                getToppings();
            }
        },
        error: function(xhr) {
            console.log(xhr);
            showError(' Reaching Server');
        }

    });

}

function showError(message) {
    // alert("ERROR: " + message);
	$("#messages").html('<div class="alert alert-danger shadow"><b>[Error]</b> ' + message + '</div>');
	setTimeout(function(){
		$(".alert").hide("slow");
	}, 3000);
	
}