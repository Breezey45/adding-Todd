<?php

require_once('includes/header.php');
?>

<div class="container">
        <form action="card.php" method="post" class="pure-form pure-form-stacked">
            <fieldset>
 				
 				<label for="message">Specify your message</label>
                <textarea name="message" id="message"></textarea>
                
                <label for="cardColour">Choose background colour</label>
                <select name="cardColour" id="cardColour">
                    <option value="red">red</option>
                    <option value="blue">blue</option>
                    <option value="green">green</option>
                    <option value="tomato">tomato</option>
                </select>

				<label for="photoColour">Choose photo colour</label>
                <select name="photoColour" id="photoColour">
                    <option value="red">red</option>
                    <option value="blue">blue</option>
                    <option value="green">green</option>
                    <option value="tomato">tomato</option>
                </select>

                <label for="treeHeight">Choose tree height</label>
                <input name="treeHeight" id="treeHeight" value="5">
                

                <input type="submit" name="submit" class="pure-button pure-button-primary" value="Make card">
            </fieldset>
        </form>

    </div>


<?php
require_once('includes/footer.php');
?>