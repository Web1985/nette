<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presentation/Home/default.latte */
final class Template_b819f133b4 extends Latte\Runtime\Template
{
	public const Source = '/var/www/html/app/Presentation/Home/default.latte';

	public const Blocks = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['post' => '10'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 5 */;
		echo '</div>

<div id="content">

';
		foreach ($posts as $post) /* line 10 */ {
			echo '	<h2>';
			echo LR\Filters::escapeHtmlText($post->title) /* line 11 */;
			echo '</h2>

';

		}

		echo '</div>
';
	}


	/** n:block="title" on line 5 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '	<h1>';
		echo LR\Filters::escapeHtmlText($message) /* line 5 */;
		echo '</h1>
';
	}
}
