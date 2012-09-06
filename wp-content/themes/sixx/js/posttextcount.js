function counterUpdate(opt_countedTextBox, opt_countBody, opt_maxSize) {
	var countedTextBox = opt_countedTextBox ? opt_countedTextBox : "posttext";
    var countBody = opt_countBody ? opt_countBody : "countBody";
    var maxSize = opt_maxSize ? opt_maxSize : 1024;

    var field = document.getElementById(countedTextBox);

    if (field && field.value.length >= maxSize) {
    	field.value = field.value.substring(0, maxSize);
        }
        var txtField = document.getElementById(countBody);
                if (txtField) { 
	    txtField.innerHTML = maxSize- field.value.length;
        }
}