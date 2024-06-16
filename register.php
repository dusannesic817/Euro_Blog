
    <div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="regModal" aria-hidden="true">
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
                        <h4 style="color: #014675">Please Register</h4>
                    </div>
                </div>
                <form method="POST" class="sing-register-form" action="">
                 
                  <div class="row mb-3">
                      <div class="col-md-6">
                          <input 
                          id="name" 
                          type="text" 
                          class="form-control" 
                          placeholder="Name" 
                          name="name" 
                          value="" 
                          required autocomplete="name" autofocus>

                       
                      </div>
                      <div class="col-md-6">
                          <input 
                          id="surname" 
                          type="text" 
                          class="form-control" 
                          placeholder="Surname" 
                          name="surname" 
                          value="" 
                          required autocomplete="surname" autofocus>

                         
                      </div>
                  </div>

                  <div class="row mb-3">

                      <div class="col-md-12">
                          <input id="email"
                           type="email" 
                           class="form-control" 
                           placeholder="Email" 
                           name="email" 
                           value="" 
                           required autocomplete="email">

                        
                      </div>
                  </div>
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

                  <div class="row mb-3">

                      <div class="col-md-12">
                          <input 
                          id="password-confirm" 
                          type="password" 
                          class="form-control form-control-sm"
                          placeholder="Confirm Password"
                          name="password_confirmation" 
                          required autocomplete="new-password">
                      </div>
                  </div>
                  <div class="row mb-5 mt-5">
                      <div class="col-md-12">
                        
                        <button type="submit" class="custom-button w-100">Register</button>
                    
                      </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
