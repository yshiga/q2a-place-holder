<?php

class qa_html_theme_layer extends qa_html_theme_base
{
	public function main()
	{
		if ($this->template == 'register') {
			$fields = $this->content['form']['fields'];
			$this->set_placeholder($fields, 'handle');
			$this->set_placeholder($fields, 'password');
			$this->set_placeholder($fields, 'email');
			$this->content['form']['fields'] = $fields;
		} elseif ($this->template == 'ask') {
			$fields = $this->content['form']['fields'];
			$this->set_placeholder($fields, 'title');
			$this->content['form']['fields'] = $fields;
		}
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
