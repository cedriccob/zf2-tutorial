<?php
/**
 * Created by IntelliJ IDEA.
 * User: cedri
 * Date: 12/11/2018
 * Time: 13:02
 */

namespace Album\Controller;
use Zend\Mvc\Controller\AbstractActionController, Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
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
            $this->albumTable = $sm->get('Album\Model\AlbumTable');
        }
        return $this->albumTable;
    }

}