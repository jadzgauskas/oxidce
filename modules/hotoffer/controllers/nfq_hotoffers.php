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
class nfq_hotoffers extends oxUBase
{
    protected $_sThisTemplate = 'nfq_hotoffers.tpl';

    /**
     * Template variable getter. Returns category title.
     *
     * @return string
     */
    public function getTitle()
    {
        if ( $this->_sCatTitle === null ) {
            $this->_sCatTitle = false;
            if ( ( $oCategory = $this->getActCategory() ) ) {
                $this->_sCatTitle = $oCategory->oxcategories__oxtitle->value;
            }
        }
        return $this->_sCatTitle;
    }

    /**
     * Template variable getter. Returns array of attribute values
     * we do have here in this category
     *
     * @return array
     */
    public function getAttributes()
    {
        $this->_aAttributes = false;
        if ( ( $oCategory = $this->getActCategory() ) ) {
            $aAttributes = $oCategory->getAttributes();
            if ( count( $aAttributes ) ) {
                $this->_aAttributes = $aAttributes;
            }
        }

        return $this->_aAttributes;
    }

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