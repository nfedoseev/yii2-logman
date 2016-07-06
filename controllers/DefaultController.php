<?php

namespace nfedoseev\yii2\logman\controllers;

use nfedoseev\yii2\logman\models\LogmanExceptions;
use nfedoseev\yii2\logman\models\LogmanRequests;
use nfedoseev\yii2\logman\models\LogmanTraces;
use yii\helpers\BaseVarDumper;
use yii\web\Controller;
use Yii;

/**
 * Default controller for the `logman` module
 */
class DefaultController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLog($id = null)
    {
        $request = new LogmanRequests();

        foreach (Yii::$app->request->post() as $id => $data) {
            if ($id != 'data' && $id != 'source') {
                $request->$id = $data;
            }
        }
        $request->save();

        $tag = Yii::$app->request->post('tag');

        switch (Yii::$app->request->post('source')) {
            case 0:
                $this->logTrace($tag);
                break;
            case 1:
                $this->logException($tag);
                break;
        }
    }

    private function logTrace($tag){
        foreach (Yii::$app->request->post('data') as $message) {
            $_msg = new LogmanTraces();
            $_msg->request_tag = $tag;
            foreach ($message as $partId => $part) {
                $_msg->$partId = $part;
            }
            $_msg->save();
        }
    }

    private function logException($tag)
    {
        $data = Yii::$app->request->post('data');

        $ex = new LogmanExceptions();
        $ex->tag = $tag;
        $ex->class = $data['class'];
        $ex->error_group = $data['error_group'];
        $ex->line_number = $data['line_number'];
        $ex->file_name = $data['file_name'];
        $ex->message = $data['message'];
        $ex->stack_trace = $data['stack_trace'];
        $ex->save();
    }
}
