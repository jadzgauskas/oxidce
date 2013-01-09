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
        'oxarticle'              => 'hotoffer/models/nfq_oxarticle',
        'oxarticlelist'          => 'hotoffer/models/nfq_oxarticlelist',
        'alist'                  => 'hotoffer/controllers/nfq_alist',
        'start'                  => 'hotoffer/controllers/nfq_start'
    ),
    
    'files' => array(
        'nfq_hot_offer'          => 'hotoffer/controllers/admin/nfq_hot_offer.php',
        'nfq_hotoffers'          => 'hotoffer/controllers/nfq_hotoffers.php'
    ),
    
    'templates' => array(
        'nfq_hot_offer.tpl'      => 'hotoffer/views/admin/tpl/nfq_hot_offer.tpl',
        'nfq_hotoffers.tpl'      => 'hotoffer/views/azure/tpl/custom/nfq_hotoffers.tpl'
    )
    
);
