<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    
     <div id="container" class="container">
         <div class="row">
             <div class="col-sm-3"></div>
             
             
             <!-- Login Form -->
             <div class="col-sm-5">
                 <form action="zalogowany.php" method="post">
                    <div class="form-bg">
                    
                    <!-- Logo -->
                    <div class="form-img kontener-img">
                        <img src="logo_footer.png" class="atelier-logo" alt="atelier">
                    </div>
                    
                    <!-- Email -->
                     <div class="form-group kontener">
                         <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                             <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Email">
                         </div>
                     </div>
                     
                     <!-- Password -->
                     <div class="form-group kontener">
                         <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                             <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                         </div>
                     </div>
                     
                     <!-- Submit Login -->
                     <div class="form-group-button kontener">
                        <div class="col-md-offest-2 col-md-8 col-md-offset-2">
                         <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                         <input type="hidden" name="action" value="login_user">
                        <input type="submit" class="btn btn-default form-control" value="Zaloguj się">
                        </div>
                      </div>
                   </div><!-- end <form action="zalogowany.php" method="post"> -->
                 </form> <!-- end <div class="form-bg"> -->  
                     
                     
                     <!-- Register Form -->
                     
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
                              
                              <!-- Form -->
                              <form action="login.php">
                                 
                                 <!-- Name -->
                                  <div class="kontener">
                                    <h4>Imię:</h4>
                                    <input type="text" class="form-control" id="exampleInputName2" />
                                  </div>
                                  
                                  <!-- Surname -->
                                   <div class="kontener">
                                    <h4>Nazwisko</h4>
                                    <input type="text" class="form-control" id="exampleInputName2" />
                                  </div>
                                  
                                  <!-- Email -->
                                   <div class="kontener">
                                    <h4>Email:</h4>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                  </div>
                                  
                                  <!-- Select Day -->
                                  <div class="kontener">
                                   <h4>Wiek:</h4>
                                    <select name="day" id="day">
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
                                    
                                    <!-- Select Month -->
                                    <select name="month" id="month">
                                        <option value="Styczeń">Styczeń</option>
                                        <option value="Luty">Luty</option>
                                        <option value="Marzec">Marzec</option>
                                        <option value="Kwiecień">Kwiecień</option>
                                        <option value="Maj">Maj</option>
                                        <option value="Czerwiec">Czerwiec</option>
                                        <option value="Lipiec">Lipiec</option>
                                        <option value="Sierpień">Sierpień</option>
                                        <option value="Wrzesień">Wrzesień</option>
                                        <option value="Pażdziernik">Pażdziernik</option>
                                        <option value="Listopad">Listopad</option>
                                        <option value="Grudzień">Grudzień</option>
                                    </select>
                                    
                                    <!-- Select Year -->
                                    <select name="year" id="year">
                                        <option value="1945">1945</option>
                                        <option value="1946">1946</option>
                                        <option value="1947">1947</option>
                                        <option value="1948">1948</option>
                                        <option value="1949">1949</option>
                                        <option value="1950">1950</option>
                                        <option value="1951">1951</option>
                                        <option value="1952">1952</option>
                                        <option value="1953">1953</option>
                                        <option value="1954">1954</option>
                                        <option value="1955">1955</option>
                                        <option value="1956">1956</option>
                                        <option value="1957">1957</option>
                                        <option value="1958">1958</option>
                                        <option value="1959">1959</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                    </select>
                                  </div>
                                  
                                  <!-- Password -->
                                  <div class="kontener">
                                    <h4>Hasło:</h4>
                                    <input type="password" class="form-control" placeholder="Password">
                                  </div>
                                  
                                  <!-- Password 2 -->
                                   <div class="kontener">
                                    <h4>Powtórz Hasło:</h4>
                                    <input type="password" class="form-control" placeholder="Password">
                                  </div>
                                  
                              </form>   
                            </div>
                          </div>
                        </div>
                  
             </div>
             <div class="col-sm-4"></div>
         </div>
     </div> 
    
</body>
</html>