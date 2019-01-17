function semak() {
 if ($('#full_name').val()=='') {
     alert('please type your name')
     $('#full_name').focus()
     return false
    
 }else if ($('#address').val().length<30) {
     alert('please state your full address')
     $('#address').focus()
     return false
    
 }else if ($('#date').val() !=$('#date').val()*1){
     alert('please state the date')
     $('#date').select()
     return false
    
 }else if ($('#time').val()<18){
     alert('please state the time')
      $('#time').select()
     return false
    
 }else if ($('#identity card number').val()==0) {
     alert('please state your ic')
     $('#identity card number').focus()
     return false
    
 }else if ($('#props').val()==0) {
     alert('please state the props')
     $('#props').focus()
     return false
    
 }else if ($('#gender').val()==0) {
     alert('please state your gender')
     $('#gender').focus()
     return false
    
 }else if ($('#mobile_number').val()==0) {
     alert('please enter the phone number')
     $('#imobile_number').focus()
     return false
    
 }else if ($('#commision').val()==0) {
     alert('please state commision')
     $('#commision').focus()
     return false
    
 }else if ($('#ceremonies').val()==0) {
     alert('please state your ceremonies')
     $('#ceremonies').focus()
     return false
 
 }else{
     return true
 }
}
