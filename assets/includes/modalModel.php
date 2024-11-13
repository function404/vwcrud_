<!-- /**
    * Modal Models
    *
    * This file contains the modal for editing models.
    *
*/ -->

<div id="editModalModel" class="modal">
    <div class="modal-content">
        <form action="./listModelsPage.rules.php" method="POST">
            <h2>Edit Model</h2>

            <input type="hidden" name="id" id="modelId">
            
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="modelName" required>
            </div>

            <div>
                <label for="type">Type:</label>
                <select name="type" id="modelType">
                    <option value="SUV">SUV</option>
                    <option value="Hatch">Hatch</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Pickup">Pickup</option>
                </select>
            </div>

            <div>
                <label for="color">Color:</label>
                <input type="color" name="color" id="modelColor" required>
            </div>

            <div>
                <label>Photo:</label>
                <input type="file" name="image" id="modelImage">
            </div>
            
            <div>
                <label for="availability">Availability:</label>
                <select name="availability" id="modelAvailability">
                    <option value="1">Available</option>
                    <option value="0">Unavailable</option>
                </select>
            </div>

            <div>
                <div class="flex-btn">
                    <div>
                        <button class="submit-btn" type="submit" name="updateModel">Save Changes</button>
                    </div>
                    <div>
                        <button class="close-btnModel" name="updateModel">Close</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>