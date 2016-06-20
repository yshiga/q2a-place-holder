<?php

class qa_html_theme_layer extends qa_html_theme_base
{
	public function main()
	{
		$fields = $this->content['form']['fields'];
		if ($this->template == 'register') {
			$fields = $this->set_placeholder($fields, 'handle');
			$fields = $this->set_placeholder($fields, 'password');
			$fields = $this->set_placeholder($fields, 'email');
		} elseif (qa_is_logged_in() && $this->template == 'ask') {
			$fields = $this->set_placeholder($fields, 'title');
			// $this->set_placeholder($fields, 'content');
		}
		$this->content['form']['fields'] = $fields;
		qa_html_theme_base::main();
	}

	private function set_placeholder($fields = null, $name = '')
	{
		if (isset($fields[$name])) {
			$placeholder = ' placeholder="' . qa_lang_html('qa_place_holder_lang/' . $name) . '"';
			$fields[$name]['tags'] .= $placeholder;
		}
		return $fields;
	}

}
