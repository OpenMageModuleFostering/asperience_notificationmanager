<?php
/**
 * @category   ASPerience
 * @package    Asperience_Notificationmanager
 * @author     ASPerience - www.asperience.fr
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Asperience_Notificationmanager_Model_FeedReader extends Mage_AdminNotification_Model_Feed {

	public function getFeedUrl() {
		return "http://www.asperience.fr/magento_news.rss";
	}
	
    public function getLastUpdate()
    {
        return Mage::app()->loadCache('asperience_notificationmanager_lastupdate');
    }

    public function setLastUpdate($time=False)
    {
    	if (!$time) $time=time();
    	Mage::app()->saveCache($time, 'asperience_notificationmanager_lastupdate');
    	return $this;
    }   
}
