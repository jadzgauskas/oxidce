<?php
/**
 * @copyright C UAB “Net Frequency” 2012
 *
 * This Software is the property of “Net Frequency”
 * and is protected by copyright law – it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license key
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * Contact UAB “Net Frequency”:
 * E-mail: info@nfq.lt
 * http://www.nfq.lt
 *
 */
class nfq_oxArticle extends nfq_oxArticle_parent
{

    /**
     * Returns true/false if article is marked as hot offer.
     *
     * @return boolean;
     */
    public function isHotOffer(){

        if($this->oxarticles__nfqhotoffer->value == 1){
            return true;
        }

        return false;

    }

}