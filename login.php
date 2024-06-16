
<div class="modal fade" id="logModal" tabindex="-1" aria-labelledby="logModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">      
            <div class="justify-content-end" style="margin-right: 10px; margin-top: 10px;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-5">
            <img src="images/mascot.jpg" width="200px" style="border-radius: 50%;">
        </div>
            <div class="row text-center mb-3">
                <div class="col-md-12">
                    <h4 style="color: #014675">Sing In</h4>
                </div>
            </div>
            <form method="POST" class="sing-register-form" action="">
             
                <div class="row mb-3">

                    <div class="col-md-12">
                        <input id="username"
                         type="text" 
                         class="form-control" 
                         placeholder="Username" 
                         name="username" 
                         value="" 
                         required autocomplete="username">
  
                    
                    </div>
                </div>

              <div class="row mb-3">
                  <div class="col-md-12">
                      <input 
                      id="password" 
                      type="password" 
                      class="form-control" 
                      placeholder="Password"
                      name="password" 
                      required autocomplete="new-password">

                     
                  </div>
              </div>
              <div class="row mb-5 mt-5">
                  <div class="col-md-12">
                    
                    <button type="submit" class="custom-button w-100">Submit</button>
                
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
