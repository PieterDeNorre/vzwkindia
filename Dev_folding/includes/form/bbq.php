<div id="contactform">
        
        <h1>Inschrijving barbeque</h1>
        <h2>Datum: 31/08/2014</h2>
        <p><i>*</i> verplichte velden</p>
        <br><br>
                    <form id="formbbq" method="post" action="php/mailbbq.php">
				        <label for="naam">Naam<i>*</i></label>
                        <input type="text" name="naam" placeholder="Naam" id="naam" required="Naam"/><br>
					
                        <label for="adres">Adres<i>*</i></label>
                        <input type="text" name="adres" id="adres" placeholder="Adres" required="Adres"/><br>
             		
                        <label for="email">E-mail<i>*</i></label>
                        <input type="email" placeholder="E-mail" pattern="[^ @]*@[^ @]*" name="email" id="email" required="E-mail"/><br>
                        
                        <label for="volwassenen">Aantal volwassenen<i>*</i></label>
                        <input type="number" min="1" max="99" pattern="[0-9]|[1-9][0-9]" placeholder="Aantal" name="volwassenen" id="volwassenen" required="volwassenen"/><br>
                        
                        <label for="kids">Aantal kinderen<i>*</i></label>
                        <input type="number" pattern="[0-9]|[1-9][0-9]" placeholder="Aantal" min="0" max="99" name="kids" id="kids" required="kids"/><br>
					
                        <label id="bericht" for="message">Bericht</label><br />
                        <textarea name="message" id="message" rows="10" cols="60" required="Bericht"></textarea><br>
             		
             		
				        <input type="submit" name="send" value="Zenden" class="submit-button" onmouseover="this.className='btn btnsubmit'" onmouseout="this.className='submit-button'" />
                        <input type="reset" name="clear" value="Wissen" class="clear-button">
			         </form>
                </div>