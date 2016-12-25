<?php

namespace App\Http\Controllers;

use Input;
use App\Repositories\InsertRepositoryInterface;

class FormController extends Controller
{
  public function __construct(InsertRepositoryInterface $InsertRepository)
  {
      $this->InsertRepository = $InsertRepository;
  }

  public function postForm(){
    $data = Input::all();
    $this->InsertRepository->insertForm($data);
    return view('index');
  }
}
