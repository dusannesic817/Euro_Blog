<?php
require_once 'inc/header.php';
?>
    
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="ms-3">Post Your Exprirence</h5>
                                <div class="border-bottom"></div>
                            </div>
                        </div>
                        <form action="" method="POST"  enctype="multipart/form-data">
                        <div class="row mt-5">
                            <div class="col-md-2"><h5>Name</h5></div>
                            <div class="col-md-5">
                                <div class="input-group mb-3">
                                    <input
                                    type="text"
                                    name='name' 
                                    class="form-control"
                                    value=""
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-2"><h5>Description</h5></div>
                            <div class="col-md-8">
                                <textarea 
                                name="description" 
                                id="description"
                                class="form-control"
                                value=""
                                rows="4"></textarea>                
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-2"><h5>Images</h5></div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <input 
                                    type="file" 
                                    name="images[]" 
                                    class="form-control"
                                    value="{{old('images[]')}}"
                                    multiple id="postImages" 
                                    aria-describedby="inputGroupFileAddon04" 
                                    aria-label="Upload"
                                    /> 
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div id="slike-preview" class="d-flex flex-row"></div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-10">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-warning ">Post Ad</button>
                    
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>
                  </div>
            </div>
        </div>
        

        <?php
require_once 'inc/footer.php';
?>
    