<?php 
class Cms5fcf258fde4fb581196468_de526f0d0a51a58c4f7fe84255818a9aClass extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
