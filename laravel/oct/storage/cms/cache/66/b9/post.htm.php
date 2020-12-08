<?php 
class Cms5fcf25b7c1956581052644_cd692e28363266b90234dd52684660f8Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
