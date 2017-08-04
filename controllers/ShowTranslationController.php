<?php

namespace app\controllers;

use Yii;
use app\models\ShowTranslation;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ShowTranslationController implements the CRUD actions for ShowTranslation model.
 */
class ShowTranslationController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ShowTranslation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ShowTranslation::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShowTranslation model.
     * @param string $show_id
     * @param string $language_id
     * @return mixed
     */
    public function actionView($show_id, $language_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($show_id, $language_id),
        ]);
    }

    /**
     * Creates a new ShowTranslation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShowTranslation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'show_id' => $model->show_id, 'language_id' => $model->language_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ShowTranslation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $show_id
     * @param string $language_id
     * @return mixed
     */
    public function actionUpdate($show_id, $language_id)
    {
        $model = $this->findModel($show_id, $language_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'show_id' => $model->show_id, 'language_id' => $model->language_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ShowTranslation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $show_id
     * @param string $language_id
     * @return mixed
     */
    public function actionDelete($show_id, $language_id)
    {
        $this->findModel($show_id, $language_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShowTranslation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $show_id
     * @param string $language_id
     * @return ShowTranslation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($show_id, $language_id)
    {
        if (($model = ShowTranslation::findOne(['show_id' => $show_id, 'language_id' => $language_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
