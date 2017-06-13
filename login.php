<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="main.css" type="text/css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body>
    
     <div id="container" class="container">
         <div class="row">
             <div class="col-sm-3"></div>
             <div class="col-sm-5">
                 <form action="zalogowany.php" method="post">
                    <div class="form-bg">
                    <div class="form-img kontener-img">
                        <img src="logo_footer.png" class="atelier-logo" alt="atelier">
                    </div>
                     <div class="form-group kontener">
                         <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                             <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Email">
                         </div>
                     </div>
                     <div class="form-group kontener">
                         <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                             <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                         </div>
                     </div>
                     <div class="form-group-button kontener">
                        <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                         <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                         <input type="hidden" name="action" value="login_user">
                        <input type="submit" class="btn btn-default form-control" value="Zaloguj się">
                        </div>
                      </div>
                      
                      <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                          Zarejstruj się
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Rejestracja</h4>
                              </div>
                              <form action="login.php">
                                 
                                  <div class="form-group kontener">
                                    <label for="exampleInputName2">Imię</label>
                                    <input type="text" class="form-control" id="exampleInputName2" />
                                  </div>
                                  
                                   <div class="form-group kontener">
                                    <label for="exampleInputName2">Nazwisko</label>
                                    <input type="text" class="form-control" id="exampleInputName2" />
                                  </div>
                                  
                                   <div class="form-group kontener">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                  </div>
                                  
                                  <div class="form-group kontener">
                                    <select name="" id="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                  </div>
                                  
                                  <div class="form-group kontener">
                                    <label for="exampleInputPassword1">Hasło</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                  </div>
                                  
                                   <div class="form-group kontener">
                                    <label for="exampleInputPassword1">Powtórz hasło</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                  </div>
                                  
                              </form>
                              
                            </div>
                          </div>
                        </div>
                      
                     </div>
                 </form>
             </div>
             <div class="col-sm-4"></div>
         </div>
     </div> 
    
</body>
</html>