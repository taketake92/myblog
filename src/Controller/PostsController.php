<?php

namespace App\Controller;

class PostsController extends AppController
{
  public function index()
  {
    // $posts = $this->Posts->find('all');
    $posts = $this->Posts->find('all')
              ->order(['title' => 'DESC']);
              // ->limit(2)
              // ->where(['title like' => '%3']);
    $this->set(compact('posts'));
  }

  public function view($id = null)
  {
    // $posts = $this->Posts->find('all');
    $post = $this->Posts->get($id);
    $this->set(compact('post'))  ;
  }

  public function add()
  {
    // $posts = $this->Posts->find('all');
    $post = $this->Posts->newEntity();
    $this->set(compact('post'))  ;
  }
}
