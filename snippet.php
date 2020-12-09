function pmpro_add_fields_to_register(){
	
	global $current_user, $pmpro_pages;
	
	//don't break if Register Helper is not loaded
	if(!function_exists( 'pmprorh_add_registration_field' )) {
		return false;
	}

	
		
	$fields = array();
		
	$fields[] = new PMProRH_Field(
		'company',					// input name, will also be used as meta key
		'text',						// type of field
		array(
			'label'		=> 'Company',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> true,		// make this field required
		)
	);
			

	$fields[] = new PMProRH_Field(
		'logo',					// input name, will also be used as meta key
		'file',						// type of field
		array(
			'label'		=> 'Company Logo',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
	);
			
	$fields[] = new PMProRH_Field(
		'photo',					// input name, will also be used as meta key
		'file',						// type of field
		array(
			'label'		=> 'Company Photo',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
	);
		
	
	$fields[] = new PMProRH_Field(
		'description',					// input name, will also be used as meta key
		'textarea',						// type of field
		array(
			'label'		=> 'Short description of business',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> true,		// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'address1',					// input name, will also be used as meta key
		'text',						// type of field
		array(
			'label'		=> 'Address',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> true,		// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'city',					// input name, will also be used as meta key
		'text',						// type of field
		array(
			'label'		=> 'City',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> true,		// make this field required
		)
	);
	
	$fields[] = new PMProRH_Field(
		'county',					// input name, will also be used as meta key
		'text',						// type of field
		array(
			'label'		=> 'County',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> true,		// make this field required
		)
	);
	
	$fields[] = new PMProRH_Field(
		'postcode',					// input name, will also be used as meta key
		'text',						// type of field
		array(
			'label'		=> 'postcode',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> true,		// make this field required
		)
	);
	
	$fields[] = new PMProRH_Field(
		'telephone',					// input name, will also be used as meta key
		'text',						// type of field
		array(
			'label'		=> 'Telephone',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
	);

	$fields[] = new PMProRH_Field(
		'website',					// input name, will also be used as meta key
		'text',						// type of field
		array(
			'label'		=> 'website',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
	);
	
	$fields[] = new PMProRH_Field(
		'heading',					// input name, will also be used as meta key
		'html',						// type of field
		array(
			'label'		=> '<p>Please tick all the areas you cover:</p>',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
	);
			
	$fields[] = new PMProRH_Field(
		'heading',					// input name, will also be used as meta key
		'html',						// type of field
		array(
			'label'		=> '<p>Body</p>',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
	);
			
		
	$categories = get_categories( array(
		'orderby' => 'name',
		'hide_empty' => 0,
		'child_of'	=> 12,
		'order'   => 'ASC'
	));
		
    if(!empty($categories))
	{
	foreach($categories as $category)
	{
		$fields[] = new PMProRH_Field(
		$category->name,					// input name, will also be used as meta key
		'checkbox',						// type of field
		array(
			'label'		=> $category->name,		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
		);
	}
	}
			
	$fields[] = new PMProRH_Field(
		'heading',					// input name, will also be used as meta key
		'html',						// type of field
		array(
			'label'		=> '<p>Mind</p>',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
	);
			
	$categories = get_categories( array(
		'orderby' => 'name',
		'hide_empty' => 0,
		'child_of'	=> 14,
		'order'   => 'ASC'
	));
		
    if(!empty($categories))
	{
	foreach($categories as $category)
	{
		$fields[] = new PMProRH_Field(
		$category->name,					// input name, will also be used as meta key
		'checkbox',						// type of field
		array(
			'label'		=> $category->name,		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
		);
	}
	}
			
	$fields[] = new PMProRH_Field(
		'heading',					// input name, will also be used as meta key
		'html',						// type of field
		array(
			'label'		=> '<p>Connect</p>',		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
	);
			
			
	
	
	$categories = get_categories( array(
		'orderby' => 'name',
		'hide_empty' => 0,
		'child_of'	=> 22,
		'order'   => 'ASC'
	));
	
	if(!empty($categories))
	{
	foreach($categories as $category)
	{
		$fields[] = new PMProRH_Field(
		$category->name,					// input name, will also be used as meta key
		'checkbox',						// type of field
		array(
			'label'		=> $category->name,		// custom field label
			'profile'	=> true,		// show in user profile
			'required'	=> false,		// make this field required
		)
		);
	}	
	}
	
	
	if(!empty($fields))
	{
	//add the fields to default forms
	foreach($fields as $field){
		pmprorh_add_registration_field (
			$field	// PMProRH_Field object
		);
	}
	}
		
}

add_action( 'init', 'pmpro_add_registration_field' );
