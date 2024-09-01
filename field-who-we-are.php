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
                                  <h4 class="card-title" style="d-block">Banner Content</h4>
                                   <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Banner Image</label>
                                    </div>
                                    <div class="baner-image"><img class="img-fluid my-2" style="width:100%; height:250px; object-fit:cover;" src="images/big/img1.jpg" alt=""></div>
                                    <div class="form-row mt-2">
                                        <div class="form-group col-md-6">
                                            <label>Banner Title</label>
                                            <input type="text" class="form-control" placeholder="Banner Title">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Banner Description</label>
                                            <input type="text" class="form-control" placeholder="Banner Description">
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
        newDiv.className = 'form-group col-md-6';
        newDiv.innerHTML = `
                <label>Description</label>
                                            <textarea class="form-control h-150px" rows="6" id="comment"></textarea>
        `;

        // Append the new div to the container
        columnsContainer.appendChild(newDiv);
    });
</script>