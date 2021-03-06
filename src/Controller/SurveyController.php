<?php
namespace CakephpSurvey\Controller;

use Cake\Chronos\Chronos;
use CakephpSurvey\Controller\AppController;

/**
 * Manage Controller
 *
 * @property \CakephpSurvey\Model\Table\SurveyTable $Manage
 */
class SurveyController extends AppController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $user = $this->Auth->user();
        if ($user['user_type'] == 'sys'){
            $this->Auth->allow();
//            $this->loadModel('Survey');
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $survey = $this->paginate($this->Survey);
        $this->viewBuilder()->layout('default');
        $this->set(compact('survey'));
        $this->set('_serialize', ['survey']);
    }

    /**
     * View method
     *
     * @param string|null $id Manage id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $survey = $this->Survey->get($id, [
            'contain' => ['SurveyAndQuestions','SurveyAndQuestions.SurveyQuestions']
        ]);
//        echo '<pre>';print_r($survey);die;
        $this->set('survey', $survey);
        $this->set('_serialize', ['manage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $survey = $this->Survey->newEntity();
        $this->loadModel('SurveyQuestions');
        $questions = $this->SurveyQuestions->find('list');
        $this->viewBuilder()->layout('default');
        if ($this->request->is('post')) {
            $input = $this->request->data;
            $input['start']=new Chronos($input['start']);
            $input['end']=new Chronos($input['end']);
            $input['created_by'] = $this->Auth->user('id');
            $this->loadModel('Survey');
            $surveyQuestion = $this->Survey->patchEntity($survey, $input,['associated'=>['SurveyAndQuestions']]);
            $saveRes = $this->Survey->save($surveyQuestion,['associated'=>['SurveyAndQuestions']]);
            if($saveRes){
                $this->Flash->success('The Survey has been saved.');
                return $this->redirect(['action' => 'index']);
            }
            else
                $this->Flash->error('The Survey could not be saved.');
        }
        $this->set(compact('survey','questions'));
        $this->set('_serialize', ['survey','questions']);
    }
}
