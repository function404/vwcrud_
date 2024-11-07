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
   const keydiv = document.querySelector('#div-key');
   const checkbox = document.querySelector('#adm-input');

   if (checkbox.checked) {
      keydiv.style.display = 'block';
   } else {
      keydiv.style.display = 'none';
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


/**
 * Change navbar visibility
 *
*/
function toggleNavbar() {
   const navbar = document.querySelector('.nav-header');
   const toggleMenu = document.querySelector('#burger-checkbox');
   
   if (navbar && toggleMenu) {
      if (toggleMenu.checked) {
         navbar.style.display = 'block';
      } else {
         navbar.style.display = 'none';
      }
   }
}

document.querySelector('#burger-checkbox').addEventListener('click', toggleNavbar);