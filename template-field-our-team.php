<?php 
include 'confiq.php'; 
include 'header.php';
include 'sidebar.php';
?> 
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                  <h4 class="card-title" style="d-block">Our Team Content</h4>
                                    <div class="form-row mt-2">
                                        <div class="form-group col-md-6">
                                            <label>Sub Title</label>
                                            <input type="text" class="form-control" placeholder="Sub Title">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                        <div id="columns-container">
                                            <div class="columns-container">
                                            <h4 class="card-title" style="d-block">Team 1</h4>
                                                    <div class="form-row" >
                                                    <div class="custom-file mb-3">
                                                        <input type="file" class="custom-file-input" id="fileInput">
                                                        <label class="custom-file-label py-0 d-flex align-items-center">
                                                        Team Image 
                                                            <img class="img-fluid" id="previewImage" style="width:6%; height:27px; margin-left:6px; object-fit:cover;" src="images/big/img1.jpg" alt="">
                                                        </label>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label>Team Name</label>
                                                        <input type="text" class="form-control" placeholder="Team Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Team Roll</label>
                                                        <input Team="text" class="form-control" placeholder="Team Roll">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Team description</label>
                                                        <textarea class="form-control h-150px" rows="6" id="comment"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Team Facebook Url</label>
                                                        <input type="text" class="form-control" placeholder="Team Facebook Url">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Team Twitter Url</label>
                                                        <input type="text" class="form-control" placeholder="Team Twitter Url">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Team Instagram Url</label>
                                                        <input type="text" class="form-control" placeholder="Team Instagram Url">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 text-right">
                                            <button type="button" class="btn mb-1 btn-flat btn-info" id="AddNew">Add New Row</button>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-flat btn-success btn-block">Save Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
<?php 
include 'footer.php'; 
?>

<script>
    // Get the button and the container to append new columns
    const addButton = document.getElementById('AddNew');
    const columnsContainer = document.getElementById('columns-container');

    // Add event listener to the button
    addButton.addEventListener('click', function () {
        // Create a new div with the same structure
        const newDiv = document.createElement('div');
        newDiv.className = 'columns-container';
        newDiv.innerHTML = `
       <div class="columns-container">
                <div class="form-row" >
                 <h4 class="card-title" style="d-block">Team 2</h4>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input">
                    <label class="custom-file-label">Team Image</label>
                </div>
                <div class="form-group col-md-6">
                    <label>Team Name</label>
                    <input type="text" class="form-control" placeholder="Team Name">
                </div>
                <div class="form-group col-md-6">
                    <label>Team Roll</label>
                    <input type="text" class="form-control" placeholder="Team Roll">
                </div>
                <div class="form-group col-md-12">
                    <label>Team description</label>
                    <textarea class="form-control h-150px" rows="6" id="comment"></textarea>
                </div>
                <div class="form-group col-md-4">
                    <label>Team Facebook Url</label>
                    <input type="text" class="form-control" placeholder="Team Facebook Url">
                </div>
                <div class="form-group col-md-4">
                    <label>Team Twitter Url</label>
                    <input type="text" class="form-control" placeholder="Team Twitter Url">
                </div>
                <div class="form-group col-md-4">
                    <label>Team Instagram Url</label>
                    <input type="text" class="form-control" placeholder="Team Instagram Url">
                </div>
            </div>
        </div>
           <button type="submit" class="btn btn-flat btn-danger  mb-3">Delete Item</button>
        `;

        // Append the new div to the container
        columnsContainer.appendChild(newDiv);
    });
</script>


<script>
    // Get the file input and image elements
    const fileInput = document.getElementById('fileInput');
    const previewImage = document.getElementById('previewImage');

    // Add an event listener to handle changes to the file input
    fileInput.addEventListener('change', function(event) {
        // Check if a file is selected
        const file = event.target.files[0];
        if (file) {
            // Create a URL for the selected file
            const fileURL = URL.createObjectURL(file);
            // Set the src attribute of the image to the new file URL
            previewImage.src = fileURL;

            // Optional: Revoke the object URL to release memory when the image is loaded
            previewImage.onload = function() {
                URL.revokeObjectURL(fileURL);
            };
        }
    });
</script>