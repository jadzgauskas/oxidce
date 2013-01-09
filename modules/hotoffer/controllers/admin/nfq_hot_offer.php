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
class nfq_hot_offer extends oxAdminDetails
{

    /**
     * Template name
     *
     * @var unknown_type
     */
    protected $_sThisTemplate = 'nfq_hot_offer.tpl';


    /**
     * Loads article parameters and passes them to Smarty engine, returns
     * name of template file "nfq_hot_offer.tpl".
     *
     * @return string
     */
    public function render()
    {

        parent::render();

        $this->_aViewData["edit"] = $oArticle = oxNew( "oxarticle");

        $soxId = $this->getEditObjectId();
        if ( $soxId != "-1" && isset( $soxId ) ) {
            // load object
            $oArticle->loadInLang( $this->_iEditLang, $soxId );

            // load object in other languages
            $oOtherLang = $oArticle->getAvailableInLangs();
            if (!isset($oOtherLang[$this->_iEditLang])) {
                // echo "language entry doesn't exist! using: ".key($oOtherLang);
                $oArticle->loadInLang( key($oOtherLang), $soxId );
            }

            //set access field properties to prevent derived articles for editing
            if ( $oArticle->isDerived() ) {
                $this->_aViewData["readonly"] = true;
            }

            // variant handling
            if ( $oArticle->oxarticles__oxparentid->value) {
                $oParentArticle = oxNew( "oxarticle");
                $oParentArticle->load( $oArticle->oxarticles__oxparentid->value);
                $this->_aViewData["parentarticle"] =  $oParentArticle;
                $this->_aViewData["oxparentid"] =  $oArticle->oxarticles__oxparentid->value;
            }

            $aLang = array_diff (oxLang::getInstance()->getLanguageNames(), $oOtherLang);
            if ( count( $aLang))
                $this->_aViewData["posslang"] = $aLang;

            foreach ( $oOtherLang as $id => $language) {
                $oLang= new oxStdClass();
                $oLang->sLangDesc = $language;
                $oLang->selected = ($id == $this->_iEditLang);
                $this->_aViewData["otherlang"][$id] =  clone $oLang;
            }
        }

        return $this->_sThisTemplate;
    }

    /**
     * Saves changes of article parameters.
     *
     * @return null
     */
    public function save()
    {

        parent::save();
        
        $soxId    = $this->getEditObjectId();
        $aParams  = oxConfig::getParameter( "editval" );

        $oArticle = oxNew( "oxarticle");
        $oArticle->load($soxId);

        $oArticle->setLanguage(0);

        $oArticle->assign( $aParams );
        $oArticle->setLanguage($this->_iEditLang);

        $oArticle->save();

        $this->setEditObjectId( $oArticle->getId() );

    }


}
