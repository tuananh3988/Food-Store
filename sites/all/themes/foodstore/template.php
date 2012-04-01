<?php
/**
 * Implement hook_form_alter()
 */
 function foodstore_form_alter(&$form, &$form_state, $form_id) {
  if ('user_login_block' == $form_id) {      
    $form['actions']['submit']['#value'] = 'enter';
    $form['name']['#attributes'] = array('placeholder' => $form['name']['#title']);
    $form['pass']['#attributes'] = array('placeholder' => $form['pass']['#title']);
  }
	
	//function foodstore_preprocess_page(&$variables) {
	//	var_dump($variables['node']);
	//}
}