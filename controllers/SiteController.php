<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Message;
use Yii;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new Message();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->session->setFlash("success", "Сообщение успешно отправлено");
                $model->save();
                var_dump((new TelegramController())->sendMessage($model->text));
                return $this->redirect(["index"]);
            } else Yii::$app->session->setFlash("error", "Не удалось отправить сообщение");
        }

        return $this->render("index", compact("model"));
    }

    public function actionMessages()
    {
        $data = Message::find()->orderBy("id", "DESC")->all();

        return $this->render("messages", compact("data"));
    }
}
