        <div class="grid-6">
        <form method="post" name="alterShelter" action='../../../../server/src/Points/alterShelters.php'>
            <fieldset>
                <legend class="center"><h2>Ponto <? echo $sCount; ?> </h2></legend>

                <div onClick="editClick(<? echo $sCount; ?>)" class="buttonEdit" id="buttonEdit<? echo $sCount; ?>">
                    <input type="text" hidden value="<? echo $row['id']; ?>" name="id" />
                    <div class="edit">
                        <a 
                            data-toggle="collapse" 
                            href="#collapse<? echo $sCount; ?>" 
                            aria-expanded="true" 
                            aria-controls="collapseOne"
                        >
                        <strong>Editar</strong>
                        </a> 
                    </div>
                </div>

                <div 
                    id="collapse<? echo $sCount; ?>" 
                    class="collapse" 
                    data-parent="#accordion" 
                    role="tabpanel"
                >
                    

                    
                    <div class="grid-6">
                        <label > Latitude </label> <input name="lat" value="<? echo $row['latitude']; ?>" type="text" disabled /> 
                    </div> 
                          
                    <div class="grid-6">
                        <label> Longitude </label> <input name="lon" value="<? echo $row['longitude']; ?>" type="text" disabled />
                    </div> 
                      
                    <div class="field">
                        <label> Nome </label> <input name="nome" value="<? echo $row['nome']; ?>" type="text" />
                    </div>

                    <div class="field">
                        <label> Endereço </label> <input name="adress" value="<? echo $row['adress']; ?>" type="text" />
                    </div>

                    <div class="field">
                        <label> Ponto de referência </label> <input name="reference"value="<? echo $row['reference']; ?>" type="text" />
                    </div>

                    <div class="field">
                        <label> Telefone </label> <input name="tell" value="<? echo $row['tell']; ?>" type="text" />
                    </div>
  
                        
                    <button type="submit">Salvar</button>
                </div>
            </fieldset>
        </form>

        <form method="post" name="deleteShelter" action='../../../../server/src/Points/deleteShelter.php' class="deleteForm">
            <input type="text" hidden value="<? echo $row['id']; ?>" name="id" />
            <button type="submit"> Deletar abrigo <? echo $sCount; ?> </button>
        </form>
        </div> 


  