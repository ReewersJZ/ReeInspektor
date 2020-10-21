function checkPassword(){
if(document.formChangePassword.newpassword.value!=document.formChangePassword.newinputPasswordRepeated.value){
alert('Hasła się nie zgadzają'); return false;
} else { return true; }
}

