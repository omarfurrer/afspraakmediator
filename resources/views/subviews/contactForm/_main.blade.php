<!--Form-->
<form action="#" id="myForm">
	<div class="container formContainer">
		<div class="row">
			<div class="col-md-12">

				<div class="form-group">
					<label for="exampleFormControlSelect1">Soort Mediation</label>
					<select name="type" class="form-control" id="exampleFormControlSelect1">
						<option>Opt1</option>
						<option>Opt2</option>
						<option>Opt3</option>
						<option>Opt4</option>
						<option>Opt5</option>
					</select>
				</div>

				<label>Staan alle partijen achter mediation?</label>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="all_parties_behind_mediation" id="exampleRadios2" value="1">
					<label class="form-check-label" for="exampleRadios2">
						ja
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="all_parties_behind_mediation" id="exampleRadios2" value="0">
					<label class="form-check-label" for="exampleRadios2">
						Nee
					</label>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Omschrijving</label>
					<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>

				<div class="form-group">
					<label for="formGroupExampleInput">Naam</label>
					<input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter your name...">
				</div>

				<div class="form-group">
					<label for="exampleFormControlTextarea1">Plaatsnaam </label>
					<textarea name="city" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">E-mailadres</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email...">
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">Telefoonnr</label>
					<input type="text" name="phone" class="form-control" id="formGroupExampleInput" placeholder="Enter phone number...">
				</div>

				<button type="submit" class="btn btn-primary">Prijzen aanvragen</button>
			</div>
		</div>
	</div>
</form>