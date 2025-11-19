<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ServiceModel;
use App\Models\CategoryModel;
class ServiceController extends Controller {
    protected $categoryModel;
    protected $serviceModel;

    function __construct(){
        $this->serviceModel = new ServiceModel();
        $this->categoryModel =  new CategoryModel();
    }

    public function index() {
        $page = "Services";
        $categories = $this->categoryModel->where('is_active' ,1)->get()->getResultArray();
        $services = $this->serviceModel->where('status' ,1)->get()->getResult();;
        return view('frontend/service',compact('services','page','categories'));
    }

    public function details($slug=false) {
        $page = "Services";
            $serviceItems = [
            'title'        => '',
            'short_note'   => '',
            'description'  => '',
            'image'        => '',
            'pointtitle'   => '',
            'varianttitle' => '',
            'icon'         => '',
            'points'       => [],
            'cards'        => [],
            'gallery'      => [],
        ];
        $serv = $this->serviceModel->select('id')->where(['slug' => $slug])->get()->getRow();
        if(!empty($serv->id)) {
        $service = $this->serviceModel->singleNews($serv->id, '', '', '', );



        if (!empty($service)) {
            foreach ($service as $items) {
                $serviceId = $items->id;
                if ($items->id != $serviceId) {
                    continue;
                }

                $serviceItems['title']        = $items->title;
                $serviceItems['short_note']   = $items->short_note;
                $serviceItems['description']  = $items->description;
                $serviceItems['image']        = $items->image;
                $serviceItems['pointtitle']   = $items->point_title;
                $serviceItems['varianttitle'] = $items->variant_title;
                $serviceItems['icon']         = $items->icon;

                if (!empty($items->points)) {
                    $existingIds = array_column($serviceItems['points'], 'pointId');
                    $pointIdEnc  = encryptor($items->pointId);
                    if (!in_array($pointIdEnc, $existingIds)) {
                        $serviceItems['points'][] = [
                            'highlight' => $items->points,
                            'pointId'   => $pointIdEnc,
                            'remark'   => $items->remarks,
                        ];
                    }
                }

                if (!empty($items->varinttitle) && $items->variantServiceId == $serviceId) {
                    $existingCards = array_column($serviceItems['cards'], 'varintId');
                    if (!in_array($items->varintId, $existingCards)) {
                        $serviceItems['cards'][] = [
                            'title'       => $items->varinttitle,
                            'varintId'    => $items->varintId,
                            'description' => $items->variantdesc,
                            'image'       => $items->varintImg,
                            'srvId'       => $items->variantServiceId,
                        ];
                    }
                }

                if (!empty($items->imgId)) {
                    $existingGallery = array_column($serviceItems['gallery'], 'imgId');
                    $imgIdEnc = encryptor($items->imgId);
                    if (!in_array($imgIdEnc, $existingGallery)) {
                        $serviceItems['gallery'][] = [
                            'imgId' => $imgIdEnc,
                            'image' => $items->image_url,
                        ];
                    }
                }
            }
        }
    }

        return view('frontend/service-inner',compact('serviceItems','page',));

    }
}