<?php

class ArticlePresenter extends Nette\Application\UI\Presenter
{
    public function renderShow($id) : void {
        $this -> template -> article = ['id' => $id, 'title' => 'My forst Article'];

    }
}