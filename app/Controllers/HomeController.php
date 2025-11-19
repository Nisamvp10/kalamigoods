<?php

namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\SliderModel;
use App\Models\ExpertiseModel;
use App\Models\IndustriesModel;
use App\Models\FeedbackModel;
use App\Models\NewsModel;
use App\Models\ServiceModel;

class HomeController extends BaseController {
    protected $sliderModel;
    protected $expertiseModel;
    protected $industyModel;
    protected $feedbackModel;
    protected $newsModel;
    protected $serviModel;

    function __construct(){
        $this->sliderModel = new SliderModel();
        $this->expertiseModel = new ExpertiseModel();
        $this->industyModel = new IndustriesModel();
        $this->feedbackModel = new FeedbackModel();
        $this->newsModel = new NewsModel();
        $this->serviModel =  new ServiceModel();
    }
    public function index() {
        helper('text');
        $page = 'Home';
        $banner = $this->sliderModel->where(['status' => 1 ])->orderBy('id','DESC')->get()->getResult();
        $expertise = $this->expertiseModel->where(['status' => 1])->orderBy('title','ASC')->get()->getResult();
        $feedback = $this->feedbackModel->where(['status' => 1])->orderBy('id','DESC')->get()->getResult();
        $news  = $this->newsModel->where(['status' => 1])->orderBy('id','DESC')->limit(3)->get()->getResult();
        $services  = $this->serviModel->where(['status' => 1])->orderBy('id','DESC')->limit(10)->get()->getResult();
        $industries  = $this->industyModel->where(['status' => 1])->orderBy('id','ASC')->limit(3)->get()->getResult();    
        return view('frontend/index',compact('page','banner','expertise','industries','feedback','news','services'));

    }
}