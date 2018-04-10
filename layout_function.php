<?php
function pageTitle($icon, $title) {
	?>
<div class='row'>
	<div class='col-sm-12'>
		<div class='page-header'>
			<h1 class='pull-left'>
				<i class='<?php echo $icon ?>'></i> <span><?php echo $title ?></span>
			</h1>
		</div>
	</div>
</div>
<?php
}
function boxHeader ($icon, $title) {
	?>
	<div class='col-sm-12'>
		<div class='box'>
			<div class='box-header blue-background'>
				<div class='title'>
					<div class='<?php echo $icon ?>'></div>
					<?php echo $title ?>
				</div>
			</div>
			<div class='box-content'>
	<?php }
	
	function boxFooter() { ?>
			</div>
		</div>
	</div>
	<?php 
	}
	
	/**
	 * Restitusce l'html di una label
	 * @param string $testo testo della label
	 * @param string $tipo tipo: default, success, important, warning, info, inverse
	 */
	function label ($testo, $tipo = 'default') {
		return '<span class="label label-'.$tipo.'">'.$testo.'</span>';
	}

	function formSubmit() { ?>
		<div class="form-actions form-actions-padding-sm">
			<div class="row">
				<div class="col-md-10 col-md-offset-2">
					<button class="btn btn-primary" type="submit">
						<i class="icon-save"></i> Salva
					</button>
					<a class="btn" href="javascript:window.history.back()">Cancella</a>
				</div>
			</div>
		</div> <?php
	}

	function input($label, $name, $required=false, $type='text', $value='') { ?>
		<?php 
		$requiredData='';
		$requiredFont='';
		if ($required) {
			$requiredFont = '<font color="red">*</font>';
			$requiredData = 'data-rule-required="true" required';
		}
		?>
		<div class="form-group">
			<label class="col-md-2 control-label"> <?php echo $requiredFont; echo ' '.$label; ?> </label>
			<div class="col-md-5 controls">
				<input class="form-control" id="<?php echo $name; ?>" name="<?php echo $name; ?>" <?php echo $requiredData; ?> value="<?php echo $value; ?>" type="<?php echo $type; ?>" >
			</div>
		</div>
	<?php
	}