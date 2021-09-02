<?php
Route::get("package", function () {
    ?>
    <html>
        <div class="form-group">
            <form>
            <p><b>Text :</b></p>
                <input type="text" name="name" placeholder="Text"><br>
                <p><b>Checkbox :</b></p>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> I have a bike</label><br>
<p><b>Radio :</b></p>
<input type="radio" id="html" name="fav_language" value="HTML">
<label for="html">HTML</label><br>
<p><b>Dropdown :</b></p>
<label for="cars">Choose a car:</label>

<select name="cars" id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
                
</form>
</div>
</html>
<?php
                
    echo "yes";
});
?> 