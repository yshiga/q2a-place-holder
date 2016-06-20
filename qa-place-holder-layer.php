<?php

class qa_html_theme_layer extends qa_html_theme_base
{
	public function main()
	{
		if ($this->template == 'register') {
			$fields = $this->content['form']['fields'];
			$placeholder = ' placeholder="' . qa_lang_html('qa_place_holder_lang/handle') . '"';
			$fields['handle']['tags'] .= $placeholder;
			$placeholder = ' placeholder="' . qa_lang_html('qa_place_holder_lang/password') . '"';
			$fields['password']['tags'] .= $placeholder;
			$placeholder = ' placeholder="' . qa_lang_html('qa_place_holder_lang/email') . '"';
			$fields['email']['tags'] .= $placeholder;
			$this->content['form']['fields'] = $fields;
		} elseif (qa_is_logged_in() && $this->template == 'ask') {
			$fields = $this->content['form']['fields'];
			$placeholder = ' placeholder="' . qa_lang_html('qa_place_holder_lang/title') . '"';
			$fields['title']['tags'] .= $placeholder;
			$placeholder = ' placeholder="' . qa_lang_html('qa_place_holder_lang/content') . '"';
			$fields['content']['tags'] .= $placeholder;
			$this->content['form']['fields'] = $fields;
			// print_r($fields);
		}
		qa_html_theme_base::main();
	}

}
