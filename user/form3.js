$('#username').focus()

function semak(){
	if($('#fnama').val()==''){
		alert('Please enter your name')
		$('#fnama').focus()
		return false
	}else if($('#identity_card_address').val()==''){
		alert('Please enter your IC Number')
		$('#identity_card_address').focus()
		return false
	}else if($('#address').val()==''){
		alert('Please enter your address')
		$('#address').focus()
		return false
	}else if($('#gender').val()==''){
		alert('Please enter your gender')
		$('#gender').focus()
		return false
	}else if($('#mobile_number').val()==''){
		alert('Please enter your mobile number')
		$('#mobile_number').focus()
		return false
	}else if($('#username').val()==''){
		alert('Please enter your username')
		$('#username').focus()
		return false
	}else if($('#password').val()==''){
		alert('Please enter your password')
		$('#password').focus()
		return false
	}else if($('#email_id').val()==''){
		alert('Please enter your Email')
		$('#email_id').focus()
		return false
	}else{
		return true
	}
}

function confirm(){
	var msg = 'Are You Sure?'
	return confirm(msg)
}