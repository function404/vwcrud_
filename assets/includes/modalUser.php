<!-- /**
    * Modal Users
    *
    * This file contains the modal for editing users.
    *
*/ -->
<div id="editModalUser" class="modal">
    <div class="modal-content">
        <form action="./listUsersPage.rules.php" method="POST">
            <h2>Edit User</h2>

            <input type="hidden" name="id" id="userId">
            
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="userName" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="userEmail" required>
            </div>

            <div>
                <div class="flex-btn">
                    <div>
                        <button class="submit-btn" type="submit" name="updateUser">Save Changes</button>
                    </div>
                    <div>
                        <button class="close-btnUser" name="updateUser">Close</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>