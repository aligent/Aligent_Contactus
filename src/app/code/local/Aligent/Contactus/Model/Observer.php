<?php
/**
 * @description    Observer for events on the Contacts page.
 *
 * @category    Aligent
 * @package     Aligent_Contactus
 * @copyright   Copyright (c) 2011 Aligent Consulting. (http://www.aligent.com.au)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 * @author         Luke Mills <luke@aligent.com.au>
 */
class Aligent_Contactus_Model_Observer
{

    /**
     * The indexPostPredispatch observer intercepts the post request object
     * before the post action is called. It then munges the additional reason
     * field into the comment field.
     *
     * @param type $observer
     */
    public function indexPostPredispatch($observer)
    {

        $request = Mage::app()->getRequest();

        $reason = $request->getPost('reason');

        $comment = $request->getPost('comment');

        $comment = sprintf("Reason: %s\n\n%s", $reason, $comment);

        $request->setPost('comment', $comment);

    }

}