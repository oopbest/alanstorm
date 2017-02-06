<?php
class Alanstormdotcom_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {        
    // public function indexAction() {
    //     echo 'Hello Index!';
    // }
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function goodbyeAction() {
        echo 'Goodbye World!';
    } 
    public function paramsAction() {
        echo '<dl>';            
        foreach($this->getRequest()->getParams() as $key=>$value) {
            echo '<dt><strong>Param: </strong>'.$key.'</dt>';
            echo '<dl><strong>Value: </strong>'.$value.'</dl>';
        }
        echo '</dl>';
    }

    public function bestAction(){
        header('Content-Type: text/plain');            
        echo $config = Mage::getConfig()
        ->loadModulesConfiguration('system.xml')        
        ->getNode()
        ->asXML();            
        exit;        
    }

    public function testAction()
    {
        
        $thing_1 = new Varien_Object();
        $thing_1->setName('Richard');
        $thing_1->setAge(24);

        $thing_2 = new Varien_Object();
        $thing_2->setName('Jane');
        $thing_2->setAge(12);

        $thing_3 = new Varien_Object();
        $thing_3->setName('Spot');
        $thing_3->setLastName('The Dog');
        $thing_3->setAge(7);
        // var_dump($thing_1->getName());
        // var_dump($thing_3->getData());
        $thing_1->setLastName('Smith');
        // var_dump($thing_3["last_name"]);
        
        // echo "<hr>";

        $collection_of_things = new Varien_Data_Collection();            
        $collection_of_things
        ->addItem($thing_1)
        ->addItem($thing_2)
        ->addItem($thing_3);
        foreach($collection_of_things as $thing)
        {
            // var_dump($thing->getData());
            // print_r($thing->getData());

        }
        echo "<hr>";
        // var_dump($collection_of_things->getFirstItem());
        // var_dump($collection_of_things->getLastItem()->getData());

        // var_dump( $collection_of_things->toXml() ); 
        // var_dump($collection_of_things->getColumnValues('name'));
        // var_dump($collection_of_things->getItemsByColumnValue('name','Spot'));



        // $collection_of_products = Mage::getModel('catalog/product')->getCollection();
        // var_dump($collection_of_products->getFirstItem()->getData());

        // $collection_of_products = Mage::getModel('catalog/product')->getCollection();
        // var_dump($collection_of_products->getSelect());
        

    }


}