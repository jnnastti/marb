        <div class="grid-6">
        <form method="post" name="alterPoints" action='../../../../server/src/Points/alterPoints.php'>
            <fieldset>
                <legend class="center"><h2>Ponto <? echo $pCount; ?> </h2></legend>

                <div onClick="editClick(<? echo $pCount; ?>)" class="buttonEdit" id="buttonEdit<? echo $pCount; ?>">
                    <input type="text" hidden value="<? echo $row['id']; ?>" name="id" />
                    <div class="edit">
                        <a 
                            data-toggle="collapse" 
                            href="#collapse<? echo $pCount; ?>" 
                            aria-expanded="true" 
                            aria-controls="collapseOne"
                        >
                        <strong>Editar</strong>
                        </a> 
                    </div>
                </div>

                <div 
                    id="collapse<? echo $pCount; ?>" 
                    class="collapse" 
                    data-parent="#accordion" 
                    role="tabpanel"
                >
                    

                    <div class="grid-6">
                        <label > Latitude </label> 
                        <input name="lat" type="text" value="<? echo $row['latitude']; ?>" disabled /> 
                    </div> 
                              
                    <div class="grid-6">
                        <label> Longitude </label> 
                        <input name="lon" type="text" value="<? echo $row['longitude']; ?>" disabled />
                    </div>  

                    <div class="field">
                        <label> Tipo de desastre </label>  
                        <select name="type">
                            <option value="alag" <? echo $typeAlag; ?> > Alagamento </option>
                            <option value="desl" <? echo $typeDesl; ?> > Deslizamento </option>
                            <option value="quei" <? echo $typeQuei; ?> > Queimada </option>
                        </select> 
                    </div>

                    <div >
                        <label> Nivel de risco</label>
                        <div class="center">
                            <input type="radio" value="1" name="risco" <? echo $checkBaixo; ?>> Baixo </input>
                            <input type="radio" value="2" name="risco" class="radio" <? echo $checkMedio; ?>> Médio </input>
                            <input type="radio" value="3" name="risco" class="radio" <? echo $checkAlto; ?>> Alto </input>
                        </div>
                    </div>  
                        
                    <button type="submit">Salvar</button>
                </div>
            </fieldset>
        </form>
        <form method="post" name="deletePoint" action='../../../../server/src/Points/deletePoint.php' class="deleteForm">
            <input type="text" hidden value="<? echo $row['id']; ?>" name="id" />
            <button type="submit"> Deletar ponto <? echo $pCount; ?> </button>
        </form>    

        </div> 


  