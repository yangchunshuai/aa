<?php
namespace frontend\controllers;

use app\models\Practice;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class DemoController extends Controller
{
    public $layout = "inde";
    //关闭CSRF攻击
    public $enableCsrfValidation = false;

    public function actionAdd(){
        return $this->render("add");
    }
//    public function actionShow(){
//        return $this->render('show');
//    }
    public function actionAdd_do(){
        $model = new Practice();
        $data = Yii::$app->request->post();
        $data['range'] = implode('-',$data['range']);
        $model->uname = $data['uname'];
        $model->default = $data['default'];
        $model->type = $data['type'];
        $model->option = $data['option'];
        $model->fill = $data['fill'];
        $model->rule = $data['rule'];
        $model->range = $data['range'];
        $data = $model->save();
        if ($data){
            $this->redirect(['demo/show']);
        }else{
            echo "添加失败";
        }

    }
    public function actionShow(){
        $model = new Practice();
        $data = $model->find()->asArray()->all();
        return $this->render('show',['data'=>$data]);
    }
    public function actionDel(){
        $id = Yii::$app->request->get('id');
        $model = new Practice();
        $data = $model->find()->where(['id'=>$id])->one()->delete();
        if($data){
            $this->redirect(['demo/show']);
        }else{
            echo "删除失败";
        }

    }
    public function actionUpdata(){
        $id = Yii::$app->request->get('id');
        $model = new Practice();
        $data = $model->findOne($id);
        return $this->render('save',['data'=>$data]);
    }
    public function actionSave(){
        $data = Yii::$app->request->post();
        $model = new Practice();
        $res = $model->findOne($data['id']);
        $data['range'] = implode('-',$data['range']);
        $model->uname = $data['uname'];
        $model->default = $data['default'];
        $model->type = $data['type'];
        $model->option = $data['option'];
        $model->fill = $data['fill'];
        $model->rule = $data['rule'];
        $model->range = $data['range'];
        if ($res->save()){
            $this->redirect(['demo/show']);
        }else{
            echo "修改失败";

        }
    }

}