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
                                  <h4 class="card-title" style="d-block">Statistics Content</h4>
                                   <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Statistics Image</label>
                                    </div>
                                    <div class="baner-image"><img class="img-fluid my-2" style="width:100%; height:250px; object-fit:cover;" src="images/big/img1.jpg" alt=""></div>
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
                                    <h4 class="card-title" style="d-block">Statistics List</h4>
                                        <div id="columns-container">
                                            <div class="columns-container">
                                                    <div class="form-row" >
                                                        <div class="form-group col-md-4">
                                                        <label>Statistics Url => (Choose icon from Font awsome)</label>
                                                        <input type="text" class="form-control" placeholder="Statistics Url => (Choose icon from Font awsome)">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Title</label>
                                                        <input type="text" class="form-control" placeholder="Title">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>Counts Number</label>
                                                        <input type="text" class="form-control" placeholder="Counts Number">
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
                        <div class="form-group col-md-4">
                        <label>Statistics Url => (Choose icon from Font awsome)</label>
                        <input type="text" class="form-control" placeholder="Statistics Url => (Choose icon from Font awsome)">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Counts Number</label>
                        <input type="text" class="form-control" placeholder="Counts Number">
                    </div>
                </div>
            </div>
        `;

        // Append the new div to the container
        columnsContainer.appendChild(newDiv);
    });
</script>