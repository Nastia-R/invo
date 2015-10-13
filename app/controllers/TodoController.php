<?php

class TodoController extends ControllerBase
{
	public function initialize()
	{
		$this->tag->setTitle('Todo list');
        parent::initialize();
	}

	public function indexAction()
	{
		$userId = $this->getUserId();
		$user = Users::findFirstById($userId);
        $this->view->tasks = $user->todo;
	}

	public function getUserId()
	{
		$sessionAuth = $this->session->get('auth');
		$userId = $sessionAuth['id'];
		return $userId;
	}

	public function addAction()
	{
		$task = new Todo();
		$task->title = $this->request->getPost('title');
		$task->description = $this->request->getPost('description');
		$task->user_id = getUserId();
		$task->save();
		$this->dispatcher->forward(['action' => 'index']);
	}

	public function doneAction($id)
	{
		$task = Todo::findFirst("id = '".$id."'");
		$task->conditions = 1;
		$task->save();
		$this->dispatcher->forward(['action' => 'index']);
	}

	public function restoreAction($id)
	{
		$task = Todo::findFirst("id = '".$id."'");
		$task->conditions = 0;
		$task->save();
		$this->dispatcher->forward(['action' => 'index']);
	}

	public function removeAction($id)
	{
		$task = Todo::findFirst("id = '".$id."'");
		if (!$task->delete()) {
            foreach ($task->getMessages() as $message) {
                $this->flash->error($message);
            }
            return $this->forward("todo/index");
        }

        $this->flash->success("Task was deleted");
		$this->dispatcher->forward(['action' => 'index']);
	}
}