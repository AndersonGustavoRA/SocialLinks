<?php

class AndersonAlves_SocialLinks_Helper_Data extends Mage_Core_Helper_Abstract{

    private function getConfig($path){
        return Mage::getStoreConfig('andersonalves_options/'.$path.'/andersonalves_select', Mage::app()->getStore());
    }

    public function isFacebookEnabled(){
        return $this->getConfig('andersonalves_facebook');
    }

    public function isTwitterEnabled(){
        return $this->getConfig('andersonalves_twitter');
    }

    public function isGoogleEnabled(){
        return $this->getConfig('andersonalves_google');
    }

}