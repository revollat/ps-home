	<input type="checkbox" value="1" name="flattr_btn_disabled" id="flattr_btn_disabled" <?php if ((bool)$btnDisabled) { echo 'checked="checked"'; } ?>/>
	<label for="flattr_btn_disabled">Disable the Flattr button on this post?</label>
	<br />

	<label for="flattr_post_language"><?php echo __('Language:') ?></label>
	<select name="flattr_post_language" id="flattr_post_language">
	<?php
		if (!$selectedLanguage) {
			echo '<option value="0" selected>Default</option>';
		}
		foreach (Flattr::getLanguages() as $languageCode => $language)
		{
			printf('<option value="%s" %s>%s</option>',
				$languageCode,
				($languageCode == $selectedLanguage ? 'selected' : ''),
				$language
			);
		}
	?>
	</select>
	
	<br />
	
	<label for="flattr_post_category"><?php echo __('Category:') ?></label>
	<select name="flattr_post_category" id="flattr_post_category">
	<?php
		if (!$selectedLanguage) {
			echo '<option value="0" selected>Default</option>';
		}
		foreach (Flattr::getCategories() as $category)
		{
			printf('<option value="%s" %s>%s</option>',
				$category,
				($category == $selectedCategory ? 'selected' : ''),
				ucfirst($category)
			);
		}
	?>
	</select>
	
	<br />
	
	<input type="hidden" value="0" name="flattr_post_hidden" />
	<input type="checkbox" value="1" name="flattr_post_hidden" id="flattr_post_hidden" <?php if ((bool)$hidden) { echo 'checked="checked"'; } ?>/>
	<label for="flattr_post_hidden">Hide post from listings on flattr.com</label>
	<br />

	<label for="flattr_post_customurl">Custom URL to be flattred</label>
	<input type="text" name="flattr_post_customurl" id="flattr_post_customurl" value="<?php echo $customUrl; ?>" />
