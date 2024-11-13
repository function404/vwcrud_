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


/**
 * Change register visibility
 *
*/
document.addEventListener('DOMContentLoaded', () => {
   const vehicleButton = document.querySelector('.modelo');
   const keyButton = document.querySelector('.chave');
   const vehicleSection = document.getElementById('register1');
   const keySection = document.getElementById('register2');

   const model = document.querySelector('.modelo');
   const key = document.querySelector('.chave');

   vehicleButton.addEventListener('click', () => {
      vehicleSection.style.display = 'block';
      vehicleSection.classList.add('active');
      model.classList.add('active');
      keySection.style.display = 'none';
      keySection.classList.remove('active');
      key.classList.remove('active');
   });

   keyButton.addEventListener('click', () => {
      vehicleSection.style.display = 'none';
      vehicleSection.classList.remove('active');
      model.classList.remove('active');
      keySection.style.display = 'block';
      keySection.classList.add('active');
      key.classList.add('active');
   });
});


/**
 * Change visibility of the modal to edit user
 *
*/
function openEditModal(id, name, email) {
   document.getElementById('userId').value = id;
   document.getElementById('userName').value = name;
   document.getElementById('userEmail').value = email;
   
   document.getElementById('editModalUser').style.display = 'block';
}

document.querySelector('.close-btnUser').onclick = function() {
   document.getElementById('editModalUser').style.display = 'none';
};

window.onclick = function(event) {
   if (event.target == document.getElementById('editModalUser')) {
       document.getElementById('editModalUser').style.display = 'none';
   }
};


/**
 * Change visibility of the modal to edit model
 *
*/
function openEditModal2(id, name, type, color, availability) {
   document.getElementById('modelId').value = id;
   document.getElementById('modelName').value = name;
   document.getElementById('modelType').value = type;
   document.getElementById('modelColor').value = color;
   document.getElementById('modelAvailability').value = availability;

   document.getElementById('editModalModel').style.display = 'block';
}

document.querySelector('.close-btnModel').onclick = function() {
   document.getElementById('editModalModel').style.display = 'none';
};

window.onclick = function(event) {
   if (event.target == document.getElementById('editModalModel')) {
       document.getElementById('editModalModel').style.display = 'none';
   }
};