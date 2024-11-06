/**
 * Toggle password visibility
 * 
*/
function togglePassword() {
   const passwordInput = document.getElementById('password');
   const toggleIcon = document.getElementById('toggle-icon');

   if (passwordInput && toggleIcon) {
      if (passwordInput.type === 'password') {
         passwordInput.type = 'text';
         toggleIcon.classList.remove('fa-eye-slash');
         toggleIcon.classList.add('fa-eye');
      } else {
         passwordInput.type = 'password';
         toggleIcon.classList.remove('fa-eye');
         toggleIcon.classList.add('fa-eye-slash');
      }
   }
};


/**
 * Toggle admin checkbox based on admin key
 *
*/
function toggleAdmin(){
   
   const admCheckbox = document.getElementById('adm');
   const adminKey = prompt("Enter a key to continue:");

   if (adminKey === '28374192') {
      admCheckbox.setAttribute('aria-checked', 'true');
      admCheckbox.checked = true;
   } else {
      admCheckbox.setAttribute('aria-checked', 'false');
      admCheckbox.checked = false;
      alert("You are not an admin");
   }
};


/**
 * Change notify visibility
 *
*/
function toggleInputs(){
   const error = document.getElementById('error');
   const success = document.getElementById('success');

   if (error) {
      error.style.display = 'none';
   }

   if (success) {
      success.style.display = 'none';
   }
};