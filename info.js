$('#name').focus()

function semak(){
	if($('#name').val()==''){
		alert('Please enter your name')
		$('#name').focus()
		return false
	}else if($('#email').val()==''){
		alert('Please enter your Email')
		$('#email').focus()
		return false
	}else if($('#contactNo').val()==''){
		alert('Please enter your contact number')
		$('#contactNo').focus()
		return false
}else{
		return true
	}
}

function confirm(){
	var msg = 'Are You Sure to submit?'
	return confirm(msg)
}