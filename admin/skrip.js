$('#component').focus()

function semak(){
	if($('#component').val()==''){
		alert('Please insert your items here')
		$('#component').focus()
		return false
	}else if($('#quantity').val()==''){
		alert('Please insert quantity of item')
		$('#quantity').focus()
		return false
	}else if($('#price').val()==''){
		alert('Please insert price of item')
		$('#price').focus()
		return false
	}else{
		return true
	}
}

function sahkan(){
	var msg = 'Are you sure?'
	return confirm(msg)
}