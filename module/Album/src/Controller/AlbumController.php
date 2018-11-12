<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedri
 * Date: 12/11/2018
 * Time: 13:02
 */

namespace Album\Controller;
use Zend\Mvc\Controller\ActionController, Zend\View\Model\ViewModel;

class AlbumController extends ActionController
{
    protected $albumTable;
    public function indexAction()
    {
        return new ViewModel(array(
            'albums' => $this->getAlbumTable()->fetchAll(),
    ));
    }

    public function addAction()
    {

    }

    public function edirAction()
    {

    }

    public function deleteAction()
    {

    }
    public function getAlbumTable()
    {
        if (!$this->albumTable) {
            $sm = $this->getServiceLocator();
            $this->albumTable = $sm->get('album-table');
        }
        return $this->albumTable;
    }

}