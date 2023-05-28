<!DOCTYPE html>
<html lang="PT-PT">
    <head>
        <meta charset="UTF-8">
        <title>PhoneBook</title>
        <link rel="stylesheet" href="css/signupstyle.css">
    </head>
    
    <body>
        <div class="container">
            <form action="phpFile_signup.php" method="post">
                
                <span id="sgUp">Sign Up</span>
                
                <!-- Nome, Apelido, email e senha -->
                <fieldset>
                    <label for="Fnome"><input type="text" name="Fnome" id="Fnome" placeholder="Nome" required></label>
                    <label for="Snome"><input type="text" name="Snome" id="Snome" placeholder="Apelido" required></label>
                    <label for="email"><input type="email" name="email" id="email" placeholder="Email" required></label>
                    <!-- Senha -->
                    <label for="psw"><input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Senha" required></label>
                    <!-- validação de senha -->
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                </fieldset>
                
                <fieldset>
                    <label for="DtUser" class="lblGray">Data de Nascimento <input name="DtUser" id="DtUser" type="date" required></label>
                </fieldset>
                
                <fieldset>
                    <label class="lblGray">Género</label>
                    <label class="lblRadio">Masculino<input type="radio" name="gen" value="masculino"></label>
                    <label class="lblRadio">Feminino<input type="radio" name="gen" value="feminino"></label>
                    <label class="lblRadio">Neutro<input type="radio" name="gen" value="neutro"></label>
                    <label class="lblRadio">Outro<input type="radio" name="gen" value="outro" checked></label>
                </fieldset>
                
                <fieldset>
                    <label class="lblcheck"><input type="checkbox">Ao clicar em Regista-te, estás a aceitar 
                        os nossos Termos.</label>
                    <label><input type="submit" value="Registar"></label>
                    <label>Voltar para o <a href="index.php">Log in</a></label>
                </fieldset>
            </form>
        </div>
        <script>
            var myInput = document.getElementById("psw");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");

            // When the user clicks on the password field, show the message box
            myInput.onfocus = function() {
              document.getElementById("message").style.display = "block";
            }

            // When the user clicks outside of the password field, hide the message box
            myInput.onblur = function() {
              document.getElementById("message").style.display = "none";
            }

            // When the user starts to type something inside the password field
            myInput.onkeyup = function() {
              // Validate lowercase letters
              var lowerCaseLetters = /[a-z]/g;
              if(myInput.value.match(lowerCaseLetters)) {  
                letter.classList.remove("invalid");
                letter.classList.add("valid");
              } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
              }

              // Validate capital letters
              var upperCaseLetters = /[A-Z]/g;
              if(myInput.value.match(upperCaseLetters)) {  
                capital.classList.remove("invalid");
                capital.classList.add("valid");
              } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
              }

              // Validate numbers
              var numbers = /[0-9]/g;
              if(myInput.value.match(numbers)) {  
                number.classList.remove("invalid");
                number.classList.add("valid");
              } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
              }

              // Validate length
              if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
              } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
              }
            }
        </script>
    </body>
</html>