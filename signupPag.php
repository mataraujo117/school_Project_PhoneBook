<!DOCTYPE html>
<html lang="PT-PT">
    <head>
        <meta charset="UTF-8">
        <title>PhoneBook</title>
        <link rel="stylesheet" href="signupstyle.css">
    </head>
    
    <body>
        <div class="container">
            <form action="phpFile_signup.php" method="post">
                
                <p>Sign Up</p>
                
                <fieldset>
                    <label><input type="text" name="Fnome" id="Fnome" placeholder="Nome" required></label>
                    <label><input type="text" name="Snome" if="Snome" placeholder="Apelido" required></label>
                    <label><input type="email" name="email" id="email" placeholder="Email" required></label>
                    <label><input type="password" name="senha" id="senha" placeholder="Senha" required></label>
                </fieldset>
                
                <fieldset>
                    <label class="lblGray">Data de Nascimento <input name="DtUser" id="DtUser" type="date" required></label>
                </fieldset>
                
                <fieldset>
                    <label class="lblGray">Género</label>
                    <label class="lblRadio">Masculino<input type="radio" name="gen"></label>
                    <label class="lblRadio">Feminino<input type="radio" name="gen"></label>
                    <label class="lblRadio">Neutro<input type="radio" name="gen"></label>
                    <label class="lblRadio">Outro<input type="radio" name="gen" checked></label>
                </fieldset>
                
                <fieldset>
                    <label class="lblcheck"><input type="checkbox">Ao clicar em Regista-te, estás a aceitar 
                        os nossos Termos. Consulta a nossa Política de Privacidade 
                        para saber como recolhemos, usamos e partilhamos os teus 
                        dados e a Política de Cookies para saber como usamos os 
                        cookies e tecnologias semelhantes.</label>
                    <label><input type="submit" value="Registar"></label>
                    <label>Voltar para o <a href="index.php">Log in</a></label>
                </fieldset>
            </form>
        </div>
    </body>
</html>