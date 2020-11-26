<!-- // form de alterar dados -->
<div id="alterForm" class="grid-6">
    <form method="post" name="alterAgent" action='../../../../server/src/Agent/alter.php'>
        <fieldset>
            <legend class="center"><h1> Atualize seus dados </h1></legend>

            <input type="text" hidden value="<? echo $_SESSION['alterId']; ?>" name="id" />

            <div class="field">
                <label> Nome do orgão responsável pelo cadastro de informação </label>
                <input type="text" name="name" value="<?php echo $_SESSION['altNome']; ?>" />
            </div>
            <div class="field">
                <label> Número para contato </label>
                <input type="text" name="number" value="<?php echo $_SESSION['altNumber']; ?>" />
            </div>
            <div class="field">
                <label> E-mail </label>
                <input type="text" name="email" value="<?php echo $_SESSION['altEmail']; ?>"/>
                <legend class="legend"> Informe um e-mail válido para enviarmos seus dados atualizados.</legend>
            </div>
            <div class="field">
                <label> Senha </label>
                <input type="password" name="password" value="<?php echo $_SESSION['altPass']; ?>"/>
            </div>
        </fieldset>
        <button type="submit">Salvar dados</button>
 
    </form>
    <form class="formDelete" method="post" name="delete" action='../../../../server/src/Agent/delete.php'>
        <div class="btnAcess cursor">
            <button type="submit">
                <strong>Excluir conta</strong>
            </button>
        </div>
    </form>
       
        
</div>