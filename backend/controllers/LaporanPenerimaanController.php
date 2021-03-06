<?php 
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use app\models\LaporanPenerimaanSearch;
use yii\helpers\Json;

class LaporanPenerimaanController extends Controller{
	public function actionIndex(){
		$modelSearch = new LaporanPenerimaanSearch();
		$dataProvider = $modelSearch->search(Yii::$app->request->queryParams);
		
		// return Json::encode($dataProvider['dataProvider']->getModels());
		return $this->render('index', [
			'searchModel'=>$modelSearch,
			'dataProvider' =>$dataProvider,
		]);
	}
	
}
