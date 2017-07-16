<div id="recipe_col" class="col-md-8">
	<?php if($recipes): ?>
	<?php foreach ($recipes as $recipe) { ?>
	<div class="row">
		<div class="col-md-3">
			<img class="recipe_image" src="<?php echo base_url().'assets/uploads/recipe_001/image.jpg'; ?>">
		</div>
		<div class="col-md-9">
			<label><?php echo $recipe->recipe_name; ?></label>
			<br>
			<label><?php echo $recipe->category_name; ?></label>
			<div class="row">
				<div class="col-md-12">
					<p><?php echo $recipe->description; ?></p>
				</div>
			</div>
		</div>
	</div>
		<?php } ?>
	<?php endif; ?>
</div>
<div class="col-md-4">
	<div class="row">
		<div class="col-md-12">
			<button id="addRecipe" class="btn btn-primary">Submit A Recipe</button>
		</div>
		<br>
		<div class="col-md-12">
			<label>Featured Recipe</label> <br>
			<img class="recipe_image" src="<?php echo base_url().'assets/uploads/recipe_001/image.jpg'; ?>">
		</div>
	</div>
</div>

