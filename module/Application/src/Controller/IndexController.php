<?php

namespace Application\Controller;

use Application\Model\UserModel;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /** @var UserModel */
    private $userModel;

    public function __construct(UserModel $userModel) {
        $this->userModel = $userModel;
    }

    /**
     * @return UserModel
     */
    protected function getUserModel(): UserModel
    {
        return $this->userModel;
    }

    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        // Выведем всех пользователей из БД
        $userModel = $this->getUserModel();

        $allUsers = $userModel->getAllUsers();

        return new ViewModel([
            'users' => $allUsers,
        ]);
    }
}
