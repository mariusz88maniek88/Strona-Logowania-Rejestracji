<?php 
session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    
    header("Location:portal.php");
    exit();
    
}

$col_div_register  = '<div class="col-md-offest-1 col-md-10 col-md-offset-1"><p class="red" style="margin-top:0.4em;margin-bottom:-0.5em;">';
$end_div = '</p></div>';

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body class="modal-open" style="padding-right: 17px">
    <!-- Register Form -->
                     
                        <!-- Modal -->
                        <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display:block;">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content clearfix">
                               
                               <!-- Button Close -->
                               <div class="close-btn">
                                    <a href="index.php" class="close">&times;</a>
                                </div>
                                
                                <!-- Header Register Logo -->
                                <div class="kontener-img form-img">
                                    <img src="img/logo_footer.png" class="atelier-logo" alt="atelier">
                                </div>
                              
                              <!-- Form -->
                              <form action="register.php" method="post">
                                 
                                 <!-- Name -->
                                 <?php 
                                  
                                  if ( isset($_SESSION['error_reg_name']) ) {
                                      
                                      $e_register_name = $_SESSION['error_reg_name'];
                                      echo $col_div_register . $e_register_name . $end_div;
                                      unset($_SESSION['error_reg_name']);
                                    
                                  }
                                  
                                  ?>
                                  <div class="kontener">
                                    <div class="col-md-offest-1 col-md-10 col-md-offset-1">
                                        <h4>Imię:</h4>
                                        <input type="text" class="form-control" id="exampleInputName2" name="name_register" value="<?php if (isset($_SESSION['reg_nem'])) { echo $_SESSION['reg_nem']; unset($_SESSION['reg_nem']); }   ?>"/>
                                   </div>
                                  </div>
                                  
                                  <!-- Surname -->
                                  <?php 
                                  
                                  if ( isset($_SESSION['error_reg_surname']) ) {
                                      
                                      $e_register_surname = $_SESSION['error_reg_surname'];
                                      echo $col_div_register . $e_register_surname . $end_div;
                                      unset($_SESSION['error_reg_surname']);
                                    
                                  }
                                  
                                  ?>
                                   <div class="kontener">
                                    <div class="col-md-offest-1 col-md-10 col-md-offset-1">
                                        <h4>Nazwisko</h4>
                                        <input type="text" class="form-control" id="exampleInputName2" name="register_surname" value="<?php if (isset($_SESSION['reg_surna'])) { echo $_SESSION['reg_surna']; unset($_SESSION['reg_surna']); }   ?>"/>
                                    </div>
                                  </div>
                                  
                                  <!-- Email -->
                                  <?php 
                                  
                                  if ( isset($_SESSION['error_reg_emailduplicate']) ) {
                                      
                                      $e_register_email = $_SESSION['error_reg_emailduplicate'];
                                      echo $col_div_register . $e_register_email . $end_div;
                                      unset($_SESSION['error_reg_emailduplicate']);
                                    
                                  }
                                  
                                  if ( isset($_SESSION['register_email_error']) ) {
                                      
                                      $e_register_email = $_SESSION['register_email_error'];
                                      echo $col_div_register . $e_register_email . $end_div;
                                      unset($_SESSION['register_email_error']);
                                    
                                  }
                                  
                                  
                                  ?>
                                   <div class="kontener">
                                    <div class="col-md-offest-1 col-md-10 col-md-offset-1">
                                        <h4>Email:</h4>
                                        <input type="email" class="form-control" placeholder="Email" name="register_email" value="<?php if (isset($_SESSION['reg_ema'])) { echo $_SESSION['reg_ema']; unset($_SESSION['reg_ema']); }   ?>"/>
                                    </div>
                                  </div>
                                  
                                  <!-- Select Date Age -->
                                  <?php 
                                  
                                  if ( isset($_SESSION['error_select']) ) {
                                      
                                      echo $col_div_register . $_SESSION['error_select'] . $end_div;
                                      unset($_SESSION['error_select']);
                                    
                                  }
                                  
                                  ?>
                                  <div class="kontener">
                                    <div class="col-md-offest-1 col-md-10 col-md-offset-1">
                                       <h4>Wiek:</h4>
                                       
                                       <!-- Select Year -->
                                        <div class="col-md-4">
                                            <select name="year" id="year" class="form-control">
                                                <option value="0">Rok</option>
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

                                        <!-- Select Month -->
                                        <div class="col-md-4">
                                            <select name="month" id="month" class="form-control">
                                                <option value="0">Miesiąc</option>
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
                                        </div>

                                        <!-- Select Day -->
                                       <div class="col-md-4">
                                            <select name="day" id="day" class="form-control">
                                                <option value="0">Dzień</option>
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
                                      </div>
                                  </div>
                                  
                                  <!-- Płeć -->
                                  <?php 
                                  
                                  if ( isset($_SESSION['error_register_sex']) ) {
                                      
                                      echo $col_div_register . $_SESSION['error_register_sex'] . $end_div;
                                      unset($_SESSION['error_register_sex']);
                                    
                                  }
                                  
                                  ?>
                                  <div class="kontener">
                                       <div class="col-md-offest-1 col-md-10 col-md-offset-1">
                                            <h4>Płeć:</h4>
                                            <table>
                                            <tr>
                                               <td>
                                                   <input type="radio" name="sex" class="form-control" value="Mężczyzna">
                                               </td>
                                               <td class="align-table">Mężczyzna</td>
                                            </tr>
                                               <tr>
                                               <label>
                                               <td>
                                                   <input type="radio" name="sex" class="form-control" value="Kobieta">
                                               </td>
                                               <td class="align-table">Kobieta</td>
                                           </tr>  
                                           </table>
                                      </div>
                                  </div>
                                  
                                  <!-- Password -->
                                  <?php 
                                  
                                  if ( isset($_SESSION['error_reg_pass']) ) {
                                      
                                      echo $col_div_register . $_SESSION['error_reg_pass'] . $end_div;
                                      unset($_SESSION['error_reg_pass']);
                                    
                                  }
                                  
                                  
                                  if ( isset($_SESSION['error_reg_passwords']) ) {
                                      
                                      echo $col_div_register . $_SESSION['error_reg_passwords'] . $end_div;
                                      unset($_SESSION['error_reg_passwords']);
                                    
                                  }
                                  
                                  
                                  ?>
                                  <div class="kontener">
                                       <div class="col-md-offest-1 col-md-10 col-md-offset-1">
                                            <h4>Hasło:</h4>
                                            <input type="password" name="pass" class="form-control" placeholder="Hasło">
                                      </div>
                                  </div>
                                  
                                  <!-- Password 2 -->
                                  <?php 
                                  
                                  if ( isset($_SESSION['error_reg_pass1']) ) {
                                      
                                      echo $col_div_register . $_SESSION['error_reg_pass1'] . $end_div;
                                      unset($_SESSION['error_reg_pass1']);
                                    
                                  }
                                  
                                  ?>
                                   <div class="kontener">
                                       <div class="col-md-offest-1 col-md-10 col-md-offset-1">
                                            <h4>Powtórz Hasło:</h4>
                                            <input type="password" name="pass1" class="form-control" placeholder="Powtórz Hasło">
                                      </div>
                                  </div>
                                  
                                  <!-- Submit -->
                                 <div class="form-group-register kontener">
                                    <div class="col-md-offest-3 col-md-6 col-md-offset-3">
                                         <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                                         <input type="hidden" name="action" value="register_user">
                                         <input type="submit" name="register" class="btn btn-primary form-control" value="Zarejestruj się">
                                    </div>
                                  </div>
                              </form>   
                            </div>
                          </div>
                        </div>
</body>
</html>