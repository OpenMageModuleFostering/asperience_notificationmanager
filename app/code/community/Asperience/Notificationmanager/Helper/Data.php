<?php
/**
 * @category   ASPerience
 * @package    Asperience_Notificationmanager
 * @author     ASPerience - www.asperience.fr
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Asperience_Notificationmanager_Helper_Data extends Mage_Core_Helper_Data
{

	public function createAdminNotification($title, $desc, $url, $severity=Mage_AdminNotification_Model_Inbox::SEVERITY_NOTICE)
	{
		$message = Mage::getModel ( 'adminnotification/inbox' )
						->setDateAdded(Mage::getModel('core/date')->gmtDate())
						->setTitle($title)
						->setDescription($desc)
						->setUrl($url)
						->setSeverity($severity);
		$message->save();
		return $this;
	}
	
}
