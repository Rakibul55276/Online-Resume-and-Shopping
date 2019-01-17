$('#identity_card_number').focus()

function semak(){
	if($('#fnama').val()==''){
		alert('Sila isi nama ruang nama')
		$('#fnama').focus()
		return false
    }else if($('#password').val()==''){
		alert('Sila isi ruang password')
		$('#password').focus()
		return false
	}else if($('#address').val()==''){
		alert('Sila isi ruang address')
		$('#address').focus()
		return false
	}else if($('#date_of_birth').val()==''){
		alert('Sila isi ruang dateofbirth')
		$('#date_of_birth').focus()
		return false
	}else if($('#email_id').val()==''){
		alert('Sila isi ruang emailid')
		$('#email_id').focus()
		return false
	}else if($('#mobile_number').val()==''){
		alert('Sila isi ruang mobilenumber')
		$('#mobile_number').focus()
		return false
	}else if($('#gender').val()==''){
		alert('Sila isi ruang gender')
		$('#gender').focus()
		return false
	}else if($('#identity_card_number').val()==''){
		alert('Sila isi ruang ic')
		$('#identity_card_number').focus()
		return false
	}else if($('#ceremony').val()==''){
		alert('Sila isi ruang ceremony')
		$('#ceremony').focus()
		return false
	}else if($('#ceremony_place').val()==''){
		alert('Sila isi ruang ceremonyplace')
		$('#ceremony_place').focus()
		return false
	}else if($('#date').val()==''){
		alert('Sila isi ruang date')
		$('#date').focus()
		return false
	}else if($('#time').val()==''){
		alert('Sila isi ruang time')
		$('#time').focus()
		return false
	}else{
		return true
	}
}

function sahkan(){
	var msg = 'Adakah anda pasti?'
	return confirm(msg)
}