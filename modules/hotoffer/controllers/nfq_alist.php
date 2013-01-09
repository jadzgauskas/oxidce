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
class nfq_alist extends nfq_aList_parent{

    /**
     * Template variable getter. Returns hot offer list
     *
     * @return array
     */
    public function getHotOfferList()
    {
        if ( $this->_aHotOfferList === null ) {
            $oArtList = oxNew( 'oxarticlelist' );
            $oArtList->loadHotOfferArticles();

            if ( count( $oArtList ) ) {
                $this->_aHotOfferList = $oArtList;
            }

        }

        return $this->_aHotOfferList;
    }

}

?>