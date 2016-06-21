<?php

class qa_html_theme_layer extends qa_html_theme_base
{
	public function main()
	{
		$fields = $this->content['form']['fields'];
		if ($this->template == 'register') {
			$this->set_placeholder($fields, 'handle');
			$this->set_placeholder($fields, 'password');
			$this->set_placeholder($fields, 'email');
		} elseif ($this->template == 'ask') {
			$this->set_placeholder($fields, 'title');
		}
		$this->content['form']['fields'] = $fields;
		qa_html_theme_base::main();
	}

	private function set_placeholder(&$fields = null, $name = '')
	{
		if (isset($fields[$name])) {
			$placeholder = ' placeholder="' . qa_lang_html('qa_place_holder_lang/' . $name) . '"';
			$fields[$name]['tags'] .= $placeholder;
		}
	}

}
