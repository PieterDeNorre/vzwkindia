<div id="contactform">
        
        <h1>Meer informatie nodig?</h1>
        
        <p><i>*</i> verplichte velden</p>
        <br><br>
                    <form id="contactc" method="post" action="php/mailcontact.php">
				        <label for="naamc">Naam<i>*</i></label>
                        <input type="text" name="naamc" placeholder="Naam" id="naam" required="Naam"/><br>
					
                        <label for="adresc">Adres<i>*</i></label>
                        <input type="text" name="adresc" id="adres" placeholder="Adres" required="Adres"/><br>
             		
                        <label for="emailc">E-mail<i>*</i></label>
                        <input type="email" placeholder="E-mail" pattern="[^ @]*@[^ @]*" name="emailc" id="email" required="E-mail"/><br>
                        
                        <label id="berichtc" for="message">Bericht</label><br />
                        <textarea name="message" id="messagec" rows="10" cols="60" required="Bericht"></textarea><br>
             		
             		
				        <input type="submit" name="send" value="Zenden" class="submit-button" onmouseover="this.className='btn btnsubmit'" onmouseout="this.className='submit-button'" />
                        <input type="reset" name="clear" value="Wissen" class="clear-button">
			         </form>
                </div>