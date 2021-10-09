<?php

use Kirby\Cms\Page;

class DefaultPage extends Page {
	public function hasChildren(): bool {
		$children = $this->children()->filterBy('intendedTemplate', '!=', 'modules');
		$children = $children->merge($this->grandChildren());
		$children = $children->merge($this->children()->drafts());
		return $children->count() > 0;
	}
}