<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'hotoffer',
    'title'        => 'Hot offers modules',
    'description'  => 'Hot offers modules',
    'thumbnail'    => '',
    'version'      => '1.0.0',
    'author'       => 'NFQ',
    'url'          => 'http://www.nfq.lt',
    'email'        => 'info@nfq.lt',
    'extend'       => array(
        'oxarticle'              => 'hotoffer/models/nfq_oxarticle'
    ),
    
    'files' => array(
        'nfq_hot_offer'          => 'hotoffer/controllers/admin/nfq_hot_offer.php'

    ),
    
    'templates' => array(
        'nfq_hot_offer.tpl'      => 'hotoffer/views/admin/tpl/nfq_hot_offer.tpl'
    )
    
);
