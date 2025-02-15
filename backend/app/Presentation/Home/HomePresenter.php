<?php
namespace App\Presentation\Home;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    public function __construct(private Nette\Database\Explorer $database)  {
    }
    public function renderDefault() : void {
        $this -> template -> message = 'HEY-HEY-HEE!!';
        $this->template->posts = $this -> database
        ->table('articles')
        ->limit(5);


    }
}
