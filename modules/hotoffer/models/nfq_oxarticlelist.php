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
class nfq_oxArticleList extends nfq_oxArticleList_parent
{
    /**
     * Loads hot offer articles
     *
     * @param int    $iLimit    Select limit
     *
     * @return null
     */
    public function loadHotOfferArticles($iLimit = null){

        $myConfig = $this->getConfig();

        $this->_aArray = array();
        $sArticleTable = getViewName('oxarticles');

        if ( $myConfig->getConfigParam( 'blNewArtByInsert' ) ) {
            $sType = 'oxinsert';
        } else {
            $sType = 'oxtimestamp';
        }

        $sSelect  = "select * from $sArticleTable ";
        $sSelect .= "where nfqhotoffer = 1 and oxactive = 1 and oxissearch = 1 order by $sType desc ";
        if (!($iLimit = (int) $iLimit)) {
            $iLimit = $myConfig->getConfigParam( 'iNrofNewcomerArticles' );
        }
        $sSelect .= "limit " . $iLimit;

        $this->selectString($sSelect);
    }

}