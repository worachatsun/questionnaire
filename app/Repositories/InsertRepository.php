<?php
namespace App\Repositories;

use App\Models\Questionnaire_answer;

class InsertRepository implements InsertRepositoryInterface
{
    protected $Questionair;

    public function __construct(){
		    $this->Questionair = new Questionnaire_answer();
	  }

    public function insertForm($data){
      //dd($data);
      $questionair = new Questionnaire_answer();
      $questionair->company = array_get($data,'company');
      $questionair->number = array_get($data,'number');
      $questionair->village = array_get($data,'village');
      $questionair->building = array_get($data,'building'); 
      $questionair->floor = array_get($data,'floor');
      $questionair->road = array_get($data,'road');
      $questionair->subarea = array_get($data,'subarea');
      $questionair->area = array_get($data,'area');
      $questionair->province = array_get($data,'province');
      $questionair->zip = array_get($data,'zip');
      $questionair->tel = array_get($data,'tel');
      $questionair->email = array_get($data,'email');
      $questionair->title = array_get($data,'title');
      $questionair->name = array_get($data,'name');
      $questionair->surname = array_get($data,'surname');
      $questionair->section = array_get($data,'section');
      $questionair->position = array_get($data,'position');
      $questionair->bscit = array_get($data,'bscit');
      $questionair->bsccs = array_get($data,'bsccs');
      $questionair->mscit = array_get($data,'mscit');
      $questionair->msccs = array_get($data,'msccs');
      $questionair->mscse = array_get($data,'mscse');
      $questionair->mscbis = array_get($data,'mscbis');
      $questionair->reason1 = ((array_get($data,'reason1')==="on")?1:0);
      $questionair->reason2 = ((array_get($data,'reason2')==="on")?1:0);
      $questionair->reason3 = ((array_get($data,'reason3')==="on")?1:0);
      $questionair->reason4 = ((array_get($data,'reason4')==="on")?1:0);
      $questionair->reason5 = ((array_get($data,'reason5')==="on")?1:0);
      $questionair->reason6 = ((array_get($data,'reason6')==="on")?1:0);
      $questionair->reason71 = ((array_get($data,'reason71')==="on")?1:0);
      $questionair->reason72 = ((array_get($data,'reason72')==="on")?1:0);
      $questionair->reason73 = ((array_get($data,'reason73')==="on")?1:0);
      $questionair->reason74 = ((array_get($data,'reason74')==="on")?1:0);
      $questionair->reason75 = ((array_get($data,'reason75')==="on")?1:0);
      $questionair->reason76 = ((array_get($data,'reason76')==="on")?1:0);
      $questionair->reason76add = array_get($data,'reason76add');
      $questionair->reason8 = array_get($data,'reason8');
      $questionair->want1 = array_get($data,'want1');
      $questionair->want1add = array_get($data,'want1add');
      $questionair->want2 = array_get($data,'want2');
      $questionair->want3 = array_get($data,'want3');
      $questionair->want3add = array_get($data,'want3add');
      $questionair->want4 = array_get($data,'want4');
      $questionair->want5 = array_get($data,'want5');
      $questionair->want6 = array_get($data,'want6');
      $questionair->want7 = array_get($data,'want7');
      $questionair->want8 = array_get($data,'want8');
      $questionair->want9 = array_get($data,'want9');
      $questionair->want10 = array_get($data,'want10');
      $questionair->want11 = array_get($data,'want11');
      $questionair->want12 = array_get($data,'want12');
      $questionair->want12add = array_get($data,'want12add');
      $questionair->it1 = array_get($data,'1it');
      $questionair->it2 = array_get($data,'2it');
      $questionair->it3 = array_get($data,'3it');
      $questionair->it4 = array_get($data,'4it');
      $questionair->it5 = array_get($data,'5it');
      $questionair->it6 = array_get($data,'6it');
      $questionair->it7 = array_get($data,'7it');
      $questionair->it8 = array_get($data,'8it');
      $questionair->it9 = array_get($data,'9it');
      $questionair->cs1 = array_get($data,'1cs');
      $questionair->cs2 = array_get($data,'2cs');
      $questionair->cs3 = array_get($data,'3cs');
      $questionair->cs4 = array_get($data,'4cs');
      $questionair->cs5 = array_get($data,'5cs');
      $questionair->cs6 = array_get($data,'6cs');
      $questionair->cs7 = array_get($data,'7cs');
      $questionair->cs8 = array_get($data,'8cs');
      $questionair->cs9 = array_get($data,'9cs');
      $questionair->s1it = array_get($data,'s1it');
      $questionair->s1cs = array_get($data,'s1cs');
      $questionair->s2it = array_get($data,'s2it');
      $questionair->s2cs = array_get($data,'s2cs');
      $questionair->s3it = array_get($data,'s3it');
      $questionair->s3cs = array_get($data,'s3cs');
      $questionair->w1it = array_get($data,'w1it');
      $questionair->w1cs = array_get($data,'w1cs');
      $questionair->w2it = array_get($data,'w2it');
      $questionair->w2cs = array_get($data,'w2cs');
      $questionair->w3it = array_get($data,'w3it');
      $questionair->w3cs = array_get($data,'w3cs');
      $questionair->im1it = array_get($data,'im1it');
      $questionair->im2it = array_get($data,'im2it');
      $questionair->im3it = array_get($data,'im3it');
      $questionair->im1cs = array_get($data,'im1cs');
      $questionair->im2cs = array_get($data,'im2cs');
      $questionair->im3cs = array_get($data,'im3cs');
      $questionair->su1it = array_get($data,'su1it');
      $questionair->su2it = array_get($data,'su2it');
      $questionair->su3it = array_get($data,'su3it');
      $questionair->su1cs = array_get($data,'su1cs');
      $questionair->su2cs = array_get($data,'su2cs');
      $questionair->su3cs = array_get($data,'su3cs');
      $questionair->save();
    }

}
