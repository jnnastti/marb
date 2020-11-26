<!-- form de login -->
<div id="loginForm" class="grid-6">
    <form method="post" name="loginAgent" action='../../../../server/src/Agent/login.php'>
        <fieldset>
            <legend class="center"><h1> Acesse sua conta </h1></legend>

            <div class="field">
                <label> Seu código </label>  
                <input type="text" name="cod" require autofocus />  
            </div> 
            <div class="field">
                <label> Sua senha </label>  
                <input type="password" name="password" require/>  
            </div> 

       </fieldset>
        <button type="submit" class="grid-12 cursor"> Entrar </button>
    </form>
</div>