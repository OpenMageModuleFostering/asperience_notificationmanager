<?php
/**
 * @category   ASPerience
 * @package    Asperience_Notificationmanager
 * @author     ASPerience - www.asperience.fr
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Asperience_Notificationmanager_Model_Observer {

    public function checkNotifications($user) {
        $model = new Asperience_Notificationmanager_Model_FeedReader();
        $model->checkUpdate();
    }

}
